<?php
include 'db.php';

function e($value) {
    return htmlspecialchars((string)($value ?? ''), ENT_QUOTES, 'UTF-8');
}

function local_image($path, $fallback = '') {
    $path = trim((string)($path ?? ''));

    if ($path === '') {
        return $fallback;
    }

    if (preg_match('/^https?:\/\//i', $path)) {
        return $path;
    }

    return ltrim(str_replace('\\', '/', $path), '/');
}

function smtp_expect($socket, array $allowedCodes) {
    $response = '';

    while (!feof($socket)) {
        $line = fgets($socket, 515);
        if ($line === false) {
            break;
        }
        $response .= $line;
        if (isset($line[3]) && $line[3] === ' ') {
            break;
        }
    }

    $code = (int) substr($response, 0, 3);
    if (!in_array($code, $allowedCodes, true)) {
        throw new Exception('SMTP Error: ' . trim($response));
    }

    return $response;
}

function smtp_send_mail($config, $fromEmail, $fromName, $toEmail, $subject, $htmlBody, $plainBody) {
    $host = $config['host'];
    $port = (int) $config['port'];
    $username = $config['username'];
    $password = $config['password'];
    $secure = $config['secure'];

    $remote = ($secure === 'ssl' ? 'ssl://' : '') . $host . ':' . $port;
    $socket = @stream_socket_client($remote, $errno, $errstr, 30, STREAM_CLIENT_CONNECT);

    if (!$socket) {
        throw new Exception('Connection failed: ' . $errstr . ' (' . $errno . ')');
    }

    stream_set_timeout($socket, 30);

    smtp_expect($socket, [220]);
    fwrite($socket, "EHLO ayansacademy.com\r\n");
    smtp_expect($socket, [250]);

    fwrite($socket, "AUTH LOGIN\r\n");
    smtp_expect($socket, [334]);
    fwrite($socket, base64_encode($username) . "\r\n");
    smtp_expect($socket, [334]);
    fwrite($socket, base64_encode($password) . "\r\n");
    smtp_expect($socket, [235]);

    fwrite($socket, "MAIL FROM:<{$fromEmail}>\r\n");
    smtp_expect($socket, [250]);

    fwrite($socket, "RCPT TO:<{$toEmail}>\r\n");
    smtp_expect($socket, [250, 251]);

    fwrite($socket, "DATA\r\n");
    smtp_expect($socket, [354]);

    $boundary = 'b1_' . md5((string) microtime(true));
    $encodedSubject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
    $safeFromName = str_replace(['\r', '\n'], '', $fromName);

    $headers = [];
    $headers[] = 'Date: ' . date('r');
    $headers[] = 'From: ' . $safeFromName . ' <' . $fromEmail . '>';
    $headers[] = 'Reply-To: ' . $fromEmail;
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-Type: multipart/alternative; boundary="' . $boundary . '"';
    $headers[] = 'Subject: ' . $encodedSubject;
    $headers[] = 'To: <' . $toEmail . '>';

    $message = implode("\r\n", $headers) . "\r\n\r\n";
    $message .= '--' . $boundary . "\r\n";
    $message .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $message .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
    $message .= $plainBody . "\r\n\r\n";
    $message .= '--' . $boundary . "\r\n";
    $message .= "Content-Type: text/html; charset=UTF-8\r\n";
    $message .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
    $message .= $htmlBody . "\r\n\r\n";
    $message .= '--' . $boundary . "--\r\n";

    $message = preg_replace("/(?m)^\./", '..', $message);

    fwrite($socket, $message . "\r\n.\r\n");
    smtp_expect($socket, [250]);

    fwrite($socket, "QUIT\r\n");
    fclose($socket);

    return true;
}

$logoRes = mysqli_query($conn, "SELECT * FROM logos ORDER BY id DESC LIMIT 1");
$logo = $logoRes ? mysqli_fetch_assoc($logoRes) : null;

$bannerRes = mysqli_query($conn, "SELECT * FROM banners ORDER BY id DESC LIMIT 1");
$banner = $bannerRes ? mysqli_fetch_assoc($bannerRes) : null;

$logoTransparent = local_image($logo['logo_image'] ?? 'thumbnail.png', 'thumbnail.png');
$logoColored = local_image($logo['logo_image'] ?? 'logo.png', 'logo.png');
$bannerImage = local_image($banner['banner_image'] ?? 'banner1.jpg', 'banner1.jpg');
$bannerTitle = 'Contact Us';

$success = '';
$error = '';
$form = [
    'subject' => '',
    'name' => '',
    'phone' => '',
    'body' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $form['subject'] = trim($_POST['subject'] ?? '');
    $form['name'] = trim($_POST['name'] ?? '');
    $form['phone'] = trim($_POST['phone'] ?? '');
    $form['body'] = trim($_POST['body'] ?? '');

    if ($form['subject'] === '' || $form['name'] === '' || $form['phone'] === '' || $form['body'] === '') {
        $error = 'All fields are required.';
    } else {
        $mailConfigPath = __DIR__ . '/mail_config.php';

        if (!file_exists($mailConfigPath)) {
            $error = 'Mail config file not found. Please add mail_config.php first.';
        } else {
            $mailConfig = require $mailConfigPath;

            if (empty($mailConfig['password']) || $mailConfig['password'] === 'YOUR_EMAIL_PASSWORD') {
                $error = 'Please set the real email password in mail_config.php.';
            } else {
                $subject = 'Website Contact: ' . $form['subject'];
                $safeName = e($form['name']);
                $safePhone = e($form['phone']);
                $safeMessage = nl2br(e($form['body']));

                $htmlBody = '
                    <div style="font-family: Arial, sans-serif; line-height: 1.7; color: #222;">
                        <h2 style="margin-bottom: 16px;">New Contact Message</h2>
                        <p><strong>Subject:</strong> ' . e($form['subject']) . '</p>
                        <p><strong>Name:</strong> ' . $safeName . '</p>
                        <p><strong>Phone:</strong> ' . $safePhone . '</p>
                        <p><strong>Message:</strong><br>' . $safeMessage . '</p>
                    </div>';

                $plainBody = "New Contact Message\n\n"
                    . "Subject: {$form['subject']}\n"
                    . "Name: {$form['name']}\n"
                    . "Phone: {$form['phone']}\n\n"
                    . "Message:\n{$form['body']}\n";

                try {
                    smtp_send_mail(
                        $mailConfig,
                        $mailConfig['username'],
                        'Ayan Academy Website',
                        'info@ayansacademy.com',
                        $subject,
                        $htmlBody,
                        $plainBody
                    );

                    $success = 'Your message has been sent successfully.';
                    $form = ['subject' => '', 'name' => '', 'phone' => '', 'body' => ''];
                } catch (Exception $ex) {
                    $error = 'Mail send failed: ' . $ex->getMessage();
                }
            }
        }
    }
}

include('header.php');
?>

<div id="main">
    <style>
        #wrapper #main {
            min-height: 0px !important;
        }

        .contact-page-wrap {
            padding: 40px 0 60px;
        }

        .contact-card {
            background: #fff;
            border: 1px solid #e8e8e8;
            border-radius: 14px;
            padding: 28px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
            margin-bottom: 24px;
        }

        .contact-card h1,
        .contact-card h2 {
            margin-top: 0;
            margin-bottom: 16px;
            color: #222;
        }

        .contact-card p {
            color: #555;
            line-height: 1.8;
            margin-bottom: 16px;
        }

        .contact-form-group {
            margin-bottom: 18px;
        }

        .contact-form-group label {
            display: block;
            font-weight: 700;
            margin-bottom: 8px;
            color: #222;
        }

        .contact-form-control {
            width: 100%;
            border: 1px solid #d9d9d9;
            border-radius: 10px;
            padding: 13px 14px;
            font-size: 15px;
            color: #222;
            background: #fff;
            box-sizing: border-box;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .contact-form-control:focus {
            outline: none;
            border-color: #2c75e4;
            box-shadow: 0 0 0 3px rgba(44, 117, 228, 0.12);
        }

        textarea.contact-form-control {
            min-height: 160px;
            resize: vertical;
        }

        .contact-submit-btn {
            border: none;
            background: #2c75e4;
            color: #fff;
            padding: 14px 24px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 15px;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .contact-submit-btn:hover {
            background: #1f5dbe;
        }

        .contact-alert {
            border-radius: 10px;
            padding: 14px 16px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .contact-alert-success {
            background: #eaf8ef;
            color: #176b32;
            border: 1px solid #bfe3c9;
        }

        .contact-alert-error {
            background: #fff1f1;
            color: #a33a3a;
            border: 1px solid #f0c7c7;
        }

        .contact-info-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .contact-info-list li {
            margin-bottom: 12px;
            color: #444;
            line-height: 1.7;
        }

        .contact-info-list strong {
            color: #111;
        }

        @media (max-width: 767px) {
            .contact-page-wrap {
                padding: 24px 0 40px;
            }

            .contact-card {
                padding: 20px;
            }
        }
    </style>

    <div class="stm_lms_breadcrumbs stm_lms_breadcrumbs__header_default"></div>
</div>
</div>

<div class="container contact-page-wrap">
    <div class="row">
        <div class="col-md-7 col-sm-12">
            <div class="contact-card">
                <h1>Contact Us</h1>
                <p>Send us your message and our team will get back to you as soon as possible.</p>

                <?php if ($success !== ''): ?>
                    <div class="contact-alert contact-alert-success"><?php echo e($success); ?></div>
                <?php endif; ?>

                <?php if ($error !== ''): ?>
                    <div class="contact-alert contact-alert-error"><?php echo e($error); ?></div>
                <?php endif; ?>

                <form method="post" action="">
                    <div class="contact-form-group">
                        <label for="subject">Subject</label>
                        <input id="subject" type="text" name="subject" class="contact-form-control" value="<?php echo e($form['subject']); ?>" required>
                    </div>

                    <div class="contact-form-group">
                        <label for="name">Name</label>
                        <input id="name" type="text" name="name" class="contact-form-control" value="<?php echo e($form['name']); ?>" required>
                    </div>

                    <div class="contact-form-group">
                        <label for="phone">Phone</label>
                        <input id="phone" type="text" name="phone" class="contact-form-control" value="<?php echo e($form['phone']); ?>" required>
                    </div>

                    <div class="contact-form-group">
                        <label for="body">Message</label>
                        <textarea id="body" name="body" class="contact-form-control" required><?php echo e($form['body']); ?></textarea>
                    </div>

                    <button type="submit" class="contact-submit-btn">Send Message</button>
                </form>
            </div>
        </div>

        <div class="col-md-5 col-sm-12">
            <div class="contact-card">
                <h2>Contact Information</h2>
                <ul class="contact-info-list">
                    <li><strong>Email:</strong> info@ayansacademy.com</li>
                    <li><strong>Phone:</strong> +880 1319904015</li>
                    <li><strong>Office Hours:</strong> Monday - Saturday, 10:00 AM - 6:00 PM</li>
                    <li><strong>Address:</strong> House no-440 (2nd Floor Left Side), Road no-6, Avenue-6, Mirpur-DOHS, Dhaka-1216</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<footer data-wpr-lazyrender="1" id="footer" class="parallax-off">
    <div class="footer_wrapper">
        <div id="footer_bottom" style="background-color: black;">
            <div class="footer_widgets_wrapper kek text-upper">
                <?php include('footer.php'); ?>
            </div>
        </div>
    </div>
</footer>
