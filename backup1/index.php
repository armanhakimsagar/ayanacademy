<?php
include 'db.php';

function e($value) {
    return htmlspecialchars((string)($value ?? ''), ENT_QUOTES, 'UTF-8');
}

function local_image($path, $fallback = '') {
    $path = trim((string)$path);

    if ($path === '') {
        return $fallback;
    }

    if (preg_match('/^https?:\/\//i', $path)) {
        return $path;
    }

    return ltrim(str_replace('\\', '/', $path), '/');
}

function excerpt_text($html, $limit = 220) {
    $text = trim(strip_tags((string)$html));
    if (mb_strlen($text) <= $limit) {
        return $text;
    }
    return mb_substr($text, 0, $limit) . '...';
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



$homepageFormSuccess = '';
$homepageFormError = '';
$homepageForm = [
    'first_name' => '',
    'last_name' => '',
    'email' => '',
    'phone' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['homepage_contact_submit'])) {
    $homepageForm['first_name'] = trim($_POST['field1'][0] ?? '');
    $homepageForm['last_name'] = trim($_POST['field2'][0] ?? '');
    $homepageForm['email'] = trim($_POST['field4'] ?? '');
    $homepageForm['phone'] = trim($_POST['field5'][0] ?? '');

    $mailConfigPath = __DIR__ . '/mail_config.php';

    if (!file_exists($mailConfigPath)) {
        $homepageFormError = 'Mail config file not found. Please add mail_config.php first.';
    } else {
        $mailConfig = require $mailConfigPath;

        if (empty($mailConfig['password']) || $mailConfig['password'] === 'YOUR_EMAIL_PASSWORD') {
            $homepageFormError = 'Please set the real email password in mail_config.php.';
        } else {
                $subject = 'Homepage Contact Lead';
                $safeFirstName = e($homepageForm['first_name']);
                $safeLastName = e($homepageForm['last_name']);
                $safeEmail = e($homepageForm['email']);
                $safePhone = e($homepageForm['phone']);

                $htmlBody = '
                    <div style="font-family: Arial, sans-serif; line-height: 1.7; color: #222;">
                        <h2 style="margin-bottom: 16px;">New Homepage Lead</h2>
                        <p><strong>First Name:</strong> ' . $safeFirstName . '</p>
                        <p><strong>Last Name:</strong> ' . $safeLastName . '</p>
                        <p><strong>Email:</strong> ' . $safeEmail . '</p>
                        <p><strong>Phone:</strong> ' . $safePhone . '</p>
                    </div>';

                $plainBody = "New Homepage Lead\n\n"
                    . "First Name: {$homepageForm['first_name']}\n"
                    . "Last Name: {$homepageForm['last_name']}\n"
                    . "Email: {$homepageForm['email']}\n"
                    . "Phone: {$homepageForm['phone']}\n";

                try {
                    smtp_send_mail(
                        $mailConfig,
                        $mailConfig['username'],
                        "Ayan's Academy Website",
                        'info@ayansacademy.com',
                        $subject,
                        $htmlBody,
                        $plainBody
                    );

                    $homepageFormSuccess = 'Your message has been sent successfully.';
                    $homepageForm = [
                        'first_name' => '',
                        'last_name' => '',
                        'email' => '',
                        'phone' => ''
                    ];
                } catch (Exception $ex) {
                    $homepageFormError = 'Mail send failed: ' . $ex->getMessage();
                }
        }
    }
}


function fetch_rows($result) {
    $rows = [];
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
    }
    return $rows;
}

function course_image_src($path, $fallback = 'banner1.jpg') {
    $path = trim((string)($path ?? ''));
    if ($path === '') {
        return $fallback;
    }
    if (preg_match('/^https?:\/\//i', $path)) {
        return $path;
    }

    $normalizedPath = ltrim(str_replace('\\', '/', $path), '/');

    if (
        strpos($normalizedPath, 'admin/dist/') !== 0
        && (
            strpos($normalizedPath, 'uploads/ielts-courses/') === 0
            || strpos($normalizedPath, 'uploads/tofel-courses/') === 0
        )
    ) {
        $normalizedPath = 'admin/dist/' . $normalizedPath;
    }

    return $normalizedPath;
}

function course_preview_url($type, $id) {
    return 'course-preview.php?type=' . urlencode((string)$type) . '&id=' . urlencode((string)$id);
}

$logoRes = mysqli_query($conn, "SELECT * FROM logos ORDER BY id DESC LIMIT 1");
$logo = $logoRes ? mysqli_fetch_assoc($logoRes) : null;

$bannerRes = mysqli_query($conn, "SELECT * FROM banners ORDER BY id DESC LIMIT 1");
$banner = $bannerRes ? mysqli_fetch_assoc($bannerRes) : null;

$campusCoursesRes = mysqli_query($conn, "SELECT * FROM pte_courses_campus ORDER BY id DESC");
$onlineCoursesRes = mysqli_query($conn, "SELECT * FROM pte_courses_online ORDER BY id DESC");
$ieltsCoursesRes = mysqli_query($conn, "SELECT * FROM ielts_courses ORDER BY id DESC");
$tofelCoursesRes = mysqli_query($conn, "SELECT * FROM tofel_courses ORDER BY id DESC");
$campusCourses = fetch_rows($campusCoursesRes);
$onlineCourses = fetch_rows($onlineCoursesRes);
$ieltsCourses = fetch_rows($ieltsCoursesRes);
$tofelCourses = fetch_rows($tofelCoursesRes);

$achievementRes = mysqli_query($conn, "SELECT * FROM our_achivements ORDER BY id DESC LIMIT 1");
$achievement = $achievementRes ? mysqli_fetch_assoc($achievementRes) : null;

$blogsRes = mysqli_query($conn, "SELECT * FROM blogs ORDER BY blog_date DESC, id DESC LIMIT 3");
$testimonialsRes = mysqli_query($conn, "SELECT * FROM testimonials ORDER BY id DESC LIMIT 10");

$logoTransparent = local_image($logo['logo_image'] ?? 'thumbnail.png', 'thumbnail.png');
$logoColored = local_image($logo['logo_image'] ?? 'logo.png', 'logo.png');
$bannerImage = local_image($banner['banner_image'] ?? 'banner1.jpg', 'banner1.jpg');
$bannerTitle = $banner['title'] ?? 'Take the first step';
include('header.php');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<style>
.pecpte-hero-area {
    position: relative;
    display: flex;
    align-items: center;
    background-size: cover !important;
    background-position: center center !important;
}
.aa-hero-heading {
    color: #fff;
    line-height: 1.3;
    margin-top: 120px;
    margin-bottom: 0;
    max-width: 720px;
}
.aa-hero-heading-badge {
    display: inline-block;
    font-size: 42px;
    line-height: 1.25;
    background-color: rgba(0,0,0,.45);
    padding: 14px 20px;
    border-radius: 6px;
}
@media (max-width: 991px) {
    .aa-hero-heading {
        margin-top: 80px;
        max-width: 100%;
    }
    .aa-hero-heading-badge {
        font-size: 30px;
        padding: 12px 16px;
    }
}
@media (max-width: 575px) {
    .aa-hero-heading {
        margin-top: 40px;
    }
    .aa-hero-heading-badge {
        font-size: 22px;
        padding: 10px 12px;
    }
}
</style>

<style id="aa-quick-boxes-final-fix">
/* only quick boxes redesign + layout fix */
.aa-quick-links-wrap{
    display:flex !important;
    flex-wrap:nowrap !important;
    gap:22px !important;
    overflow-x:auto !important;
    overflow-y:hidden !important;
    padding:10px 6px 20px !important;
    margin:0 !important;
    -webkit-overflow-scrolling:touch;
    scrollbar-width:thin;
}
.aa-quick-links-wrap::-webkit-scrollbar{
    height:8px;
}
.aa-quick-links-wrap::-webkit-scrollbar-thumb{
    background:rgba(44,117,228,.25);
    border-radius:999px;
}

.aa-quick-link{
    display:block !important;
    flex:0 0 255px !important;
    width:255px !important;
    text-decoration:none !important;
}

.aa-quick-card{
    position:relative;
    min-height:250px;
    height:100%;
    border-radius:22px;
    padding:22px 20px;
    overflow:hidden;
    background:#ffffff;
    border:1px solid #e8eefc;
    box-shadow:0 14px 34px rgba(18,38,89,.10);
    transition:transform .25s ease, box-shadow .25s ease, border-color .25s ease;
    display:flex;
    flex-direction:column;
    justify-content:space-between;
}
.aa-quick-card:before{
    content:"";
    position:absolute;
    right:-38px;
    bottom:-38px;
    width:120px;
    height:120px;
    border-radius:50%;
    background:rgba(44,117,228,.06);
}
.aa-quick-link:hover .aa-quick-card{
    transform:translateY(-8px);
    box-shadow:0 20px 42px rgba(18,38,89,.16);
    border-color:#d7e4ff;
}

.aa-quick-card-icon{
    width:72px;
    height:72px;
    border-radius:18px;
    display:flex;
    align-items:center;
    justify-content:center;
    background:#000;
    box-shadow:0 10px 24px rgba(0,0,0,.08);
    position:relative;
    z-index:1;
}
.aa-quick-card-icon img{
    max-width:44px;
    max-height:44px;
    object-fit:contain;
}
.aa-quick-card-icon.logo img{
    max-width:120px;
    max-height:42px;
    width:100%;
}

.aa-quick-card-text{
    position:relative;
    z-index:1;
    margin-top:18px;
}
.aa-quick-card-kicker{
    display:inline-block;
    font-size:11px;
    line-height:1;
    font-weight:700;
    text-transform:uppercase;
    letter-spacing:.12em;
    padding:8px 10px;
    border-radius:999px;
    margin-bottom:12px;
}
.aa-quick-card-title{
    margin:0 0 10px;
    font-size:19px;
    line-height:1.28;
    font-weight:700;
    color:#1f2d4d;
}
.aa-quick-card-desc{
    margin:0;
    font-size:14px;
    line-height:1.65;
    color:#5f6c85;
}
.aa-quick-card-arrow{
    width:42px;
    height:42px;
    border-radius:50%;
    background:#13203e;
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:15px;
    margin-top:18px;
    position:relative;
    z-index:1;
}

.aa-quick-card--pte{
    background:linear-gradient(180deg,#ffffff 0%,#eef4ff 100%);
}
.aa-quick-card--ielts{
    background:linear-gradient(180deg,#ffffff 0%,#eefaf3 100%);
}
.aa-quick-card--spoken{
    background:linear-gradient(180deg,#ffffff 0%,#fff4ec 100%);
}
.aa-quick-card--online{
    background:linear-gradient(180deg,#ffffff 0%,#f5efff 100%);
}
.aa-quick-card--abroad{
    background:linear-gradient(180deg,#ffffff 0%,#eef8ff 100%);
}

.aa-quick-card--pte .aa-quick-card-kicker{background:#eaf1ff;color:#2957d3;}
.aa-quick-card--ielts .aa-quick-card-kicker{background:#e9fbf0;color:#13804f;}
.aa-quick-card--spoken .aa-quick-card-kicker{background:#fff0e8;color:#d56425;}
.aa-quick-card--online .aa-quick-card-kicker{background:#f1e9ff;color:#6c3ad1;}
.aa-quick-card--abroad .aa-quick-card-kicker{background:#e7f5ff;color:#126896;}

@media (max-width: 767px){
    .aa-quick-links-wrap{
        gap:16px !important;
        padding-bottom:14px !important;
    }
    .aa-quick-link{
        flex:0 0 220px !important;
        width:220px !important;
    }
    .aa-quick-card{
        min-height:230px;
        padding:18px 16px;
    }
    .aa-quick-card-title{
        font-size:18px;
    }
    .aa-quick-card-desc{
        font-size:13px;
    }
}
</style>


    <div id="main">


<!-- Breads -->
<div class="stm_lms_breadcrumbs stm_lms_breadcrumbs__header_default">


    </div>

    <div class="container">

                    <div class="post_type_exist clearfix">
                                    <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid pecpte-hero-area vc_custom_1645950070151 vc_row-has-fill vc_row-o-full-height vc_row-o-columns-middle vc_row-o-content-middle vc_row-flex" style="background-position: center top !important; position: relative; left: -160.4px; box-sizing: border-box; width: 1521px; padding-left: 160.4px; padding-right: 160.6px; min-height: 100vh;">
        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-xs-12"><div class="vc_column-inner"><div class="wpb_wrapper">
    <div class="wpb_raw_code wpb_content_element wpb_raw_html">
        <div class="wpb_wrapper">
            <h1 class="pecpte-heading aa-hero-heading" style="margin-top:-200px; font-size: 30px"><strong><span class="pecpte-heading-span1 aa-hero-heading-badge" style="font-size:30px !important"><?php echo e($bannerTitle); ?></span></strong></h1>
        </div>
    </div>
<style type="text/css">.vc_btn3-style-gradient.vc_btn-gradient-btn-69b5960c63730:hover{color: #fff;background-color: #f4524d;border: none;background-position: 100% 0;}</style><style type="text/css">.vc_btn3-style-gradient.vc_btn-gradient-btn-69b5960c63730{color: #fff;border: none;background-color: #fe6c61;background-image: -webkit-linear-gradient(left, #fe6c61 0%, #f4524d 50%,#fe6c61 100%);background-image: linear-gradient(to right, #fe6c61 0%, #f4524d 50%,#fe6c61 100%);-webkit-transition: all .2s ease-in-out;transition: all .2s ease-in-out;background-size: 200% 100%;}</style>
</div></div></div></div>
<div class="vc_row-full-width vc_clearfix"></div>
<div class="vc_row wpb_row vc_row-fluid vc_custom_1645695539961">
        <div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1579437107739"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
    <div class="wpb_raw_code wpb_content_element wpb_raw_html vc_custom_1645986912369">
        <div class="wpb_wrapper">
            
<div class="aa-quick-links-wrap">

    <a href="course.php?course=pte%20academy" class="aa-quick-link">
        <div class="aa-quick-card aa-quick-card--pte">
            <div class="aa-quick-card-icon logo">
                <img decoding="async" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/pte-logo-1.png" alt="PTE Academy">
            </div>
            <div class="aa-quick-card-text">
                <div class="aa-quick-card-kicker">Featured Program</div>
                <h3 class="aa-quick-card-title">PTE Academy</h3>
                <p class="aa-quick-card-desc">Structured preparation with expert guidance, mock practice, and score-focused coaching.</p>
            </div>
            <div class="aa-quick-card-arrow"><i class="fa fa-arrow-right"></i></div>
        </div>
    </a>

    <a href="course.php?course=ielts" class="aa-quick-link">
        <div class="aa-quick-card aa-quick-card--ielts">
            <div class="aa-quick-card-icon">
                <img decoding="async" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/ielts-1.png" alt="IELTS">
            </div>
            <div class="aa-quick-card-text">
                <div class="aa-quick-card-kicker">Exam Track</div>
                <h3 class="aa-quick-card-title">IELTS</h3>
                <p class="aa-quick-card-desc">Academic and practical preparation to build confidence for every module of the test.</p>
            </div>
            <div class="aa-quick-card-arrow"><i class="fa fa-arrow-right"></i></div>
        </div>
    </a>

    <a href="course.php?course=spoken-english" class="aa-quick-link">
        <div class="aa-quick-card aa-quick-card--spoken">
            <div class="aa-quick-card-icon">
                <img decoding="async" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/speaking_sized.png" alt="Spoken English">
            </div>
            <div class="aa-quick-card-text">
                <div class="aa-quick-card-kicker">Communication</div>
                <h3 class="aa-quick-card-title">Spoken English</h3>
                <p class="aa-quick-card-desc">Improve fluency, confidence, and everyday speaking with practical sessions and feedback.</p>
            </div>
            <div class="aa-quick-card-arrow"><i class="fa fa-arrow-right"></i></div>
        </div>
    </a>

    <a href="study.php?service=pte-mock-tests" target="_blank" class="aa-quick-link">
        <div class="aa-quick-card aa-quick-card--online">
            <div class="aa-quick-card-icon">
                <img decoding="async" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/online-course_sized.png" alt="Online Courses &amp; PTE Mock Test">
            </div>
            <div class="aa-quick-card-text">
                <div class="aa-quick-card-kicker">Digital Learning</div>
                <h3 class="aa-quick-card-title">Online Courses</h3>
                <p class="aa-quick-card-desc">Flexible online prep and mock tests designed for learners who want convenience and performance.</p>
            </div>
            <div class="aa-quick-card-arrow"><i class="fa fa-arrow-right"></i></div>
        </div>
    </a>

    <a href="study.php?service=study aboard" class="aa-quick-link">
        <div class="aa-quick-card aa-quick-card--abroad">
            <div class="aa-quick-card-icon">
                <img decoding="async" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/oversease_sized.png" alt="Study Abroad">
            </div>
            <div class="aa-quick-card-text">
                <div class="aa-quick-card-kicker">Global Pathway</div>
                <h3 class="aa-quick-card-title">Study Abroad</h3>
                <p class="aa-quick-card-desc">Get guidance for applications, country selection, and your next academic destination abroad.</p>
            </div>
            <div class="aa-quick-card-arrow"><i class="fa fa-arrow-right"></i></div>
        </div>
    </a>

</div>
        </div>
    </div>
</div></div></div></div></div></div></div></div>

<div class="vc_row wpb_row vc_row-fluid overflowed_content">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="wpb_text_column wpb_content_element">
                    <div class="wpb_wrapper">

                        

<style>
    .aa-course-section {
        margin-bottom: 46px;
        padding: 30px 28px;
        border-radius: 30px;
        background:
            linear-gradient(135deg, rgba(255,255,255,0.82) 0%, rgba(255,255,255,0.68) 100%);
        border: 1px solid rgba(255,255,255,0.55);
        box-shadow: 0 24px 60px rgba(30, 42, 68, 0.14);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        overflow: hidden;
        position: relative;
    }
    .aa-course-section:before {
        content: "";
        position: absolute;
        inset: 0;
        background:
            radial-gradient(circle at top left, rgba(255,255,255,0.40), transparent 34%),
            radial-gradient(circle at bottom right, rgba(124,58,237,0.10), transparent 28%);
        pointer-events: none;
    }
    .aa-course-section-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        margin-bottom: 24px;
        position: relative;
        z-index: 1;
    }
    .aa-course-section-header h2 {
        margin: 0;
        font-size: 28px;
        line-height: 1.2;
        color: #24324a;
        font-weight: 800;
        letter-spacing: -0.02em;
    }
    .aa-course-slider-shell {
        position: relative;
        padding: 0 48px;
        z-index: 1;
    }
    .aa-course-slider-window {
        overflow: hidden;
    }
    .aa-course-slider-track {
        display: flex;
        gap: 24px;
        transition: transform 0.35s ease;
        will-change: transform;
    }
    .aa-course-card {
        flex: 0 0 calc((100% - 72px) / 4);
        background: linear-gradient(180deg, rgba(255,255,255,0.94) 0%, rgba(247,248,252,0.92) 100%);
        border: 1px solid rgba(255,255,255,0.75);
        border-radius: 22px;
        overflow: hidden;
        box-shadow: 0 14px 34px rgba(25, 35, 58, 0.12);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        transition: transform .22s ease, box-shadow .22s ease;
        position: relative;
    }
    .aa-course-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 18px 40px rgba(25, 35, 58, 0.18);
    }
    .aa-course-featured-tag {
        position: absolute;
        top: 14px;
        left: -8px;
        z-index: 4;
        display: inline-flex;
        align-items: center;
        padding: 7px 14px 7px 16px;
        background: linear-gradient(90deg, #ff8a00 0%, #ff6a00 100%);
        color: #fff;
        font-size: 11px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        border-radius: 0 999px 999px 0;
        box-shadow: 0 10px 20px rgba(255, 106, 0, 0.28);
    }
    .aa-course-featured-tag:before {
        content: "";
        width: 0;
        height: 0;
        border-top: 12px solid transparent;
        border-bottom: 12px solid transparent;
        border-left: 12px solid #ff8a00;
        position: absolute;
        right: -12px;
        top: 50%;
        transform: translateY(-50%);
    }
    .aa-course-pricing {
        display: flex;
        align-items: baseline;
        flex-wrap: wrap;
        gap: 8px 10px;
    }
    .aa-course-price-old {
        font-size: 15px;
        font-weight: 700;
        color: #8a93a6;
        text-decoration: line-through;
    }

    .aa-course-card-image {
        display: block;
        aspect-ratio: 16 / 10;
        background: #eef2f8;
        overflow: hidden;
        padding: 10px;
    }
    .aa-course-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        border-radius: 16px;
    }
    .aa-course-card-body {
        padding: 18px 18px 16px;
    }
    .aa-course-card-title {
        margin: 0 0 12px;
        font-size: 20px;
        line-height: 1.35;
        min-height: 56px;
        font-weight: 800;
        letter-spacing: -0.01em;
    }
    .aa-course-card-title a {
        color: #161f33;
        text-decoration: none;
    }
    .aa-course-card-title a:hover {
        color: #2c75e4;
    }
    .aa-course-card-desc {
        color: #2e3546;
        line-height: 1.55;
        min-height: 92px;
        margin-bottom: 16px;
        font-size: 14px;
    }
    .aa-course-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 10px 10px;
        margin-bottom: 14px;
        color: #444;
        font-size: 14px;
    }
    .aa-course-meta span {
        background: rgba(255,255,255,0.76);
        color: #384256;
        padding: 8px 12px;
        border-radius: 999px;
        box-shadow: inset 0 0 0 1px rgba(118,132,163,0.14);
    }
    .aa-course-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
    }
    .aa-course-price {
        font-size: 21px;
        font-weight: 800;
        color: #2c75e4;
    }
    .aa-course-preview-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 12px 16px;
        border-radius: 0 0 18px 18px;
        background: transparent;
        color: #2b3244;
        text-decoration: none;
        font-weight: 700;
        width: calc(100% + 36px);
        margin-left: -18px;
        margin-right: -18px;
        margin-bottom: -16px;
        border-top: 1px solid rgba(111, 125, 154, 0.18);
    }
    .aa-course-preview-btn:hover,
    .aa-course-preview-btn:focus {
        color: #111827;
        background: rgba(255,255,255,0.45);
        text-decoration: none;
    }
    .aa-course-nav {
        position: absolute;
        top: 40%;
        transform: translateY(-50%);
        width: 44px;
        height: 44px;
        border: none;
        border-radius: 50%;
        background: rgba(255,255,255,0.30);
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 8px 20px rgba(0,0,0,0.16);
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(6px);
        z-index: 3;
    }
    .aa-course-nav:hover {
        background: rgba(44,117,228,0.88);
    }
    .aa-course-nav-left { left: -6px; }
    .aa-course-nav-right { right: -6px; }
    .aa-course-nav[hidden] { display: none !important; }
    .aa-empty-course {
        padding: 20px 0;
        color: #666;
    }
    @media (max-width: 1199px) {
        .aa-course-card { flex-basis: calc((100% - 48px) / 3); }
    }
    @media (max-width: 991px) {
        .aa-course-section {
            padding: 22px 18px;
            border-radius: 24px;
        }
        .aa-course-section-header h2 {
            font-size: 24px;
        }
        .aa-course-slider-shell { padding: 0 38px; }
        .aa-course-slider-track { gap: 18px; }
        .aa-course-card { flex-basis: calc((100% - 18px) / 2); }
        .aa-course-card-title { min-height: auto; }
        .aa-course-card-desc { min-height: auto; }
    }
    @media (max-width: 575px) {
        .aa-course-section {
            padding: 16px 14px;
            border-radius: 20px;
        }
        .aa-course-section-header h2 {
            font-size: 20px;
        }
        .aa-course-slider-shell { padding: 0 28px; }
        .aa-course-card { flex-basis: 100%; }
        .aa-course-footer { flex-direction: column; align-items: flex-start; }
        .aa-course-preview-btn {
            width: calc(100% + 36px);
            justify-content: center;
        }
    }

    .testimonial_inner_wrapper,
    .testimonial_inner_wrapper .testimonials-inner-title,
    .testimonial_inner_wrapper .testimonial_sphere,
    .testimonial_inner_wrapper .testimonial_inner_content,
    .testimonial_inner_wrapper .testimonial_inner_content p {
        color: #000 !important;
    }
</style>



                        <?php
                        $courseSections = [
                            [
                                'title' => 'PTE Courses(On Campus)',
                                'type' => 'campus',
                                'courses' => $campusCourses,
                                'fallback_image' => './PEC- Education - PTE Academic In Dhaka, Bangladesh_files/1765-1-scaled-272x161.jpg'
                            ],
                            [
                                'title' => 'PTE COURSES(Online)',
                                'type' => 'online',
                                'courses' => $onlineCourses,
                                'fallback_image' => './PEC- Education - PTE Academic In Dhaka, Bangladesh_files/989-scaled-272x161.jpg'
                            ],
                            [
                                'title' => 'IELTS Courses',
                                'type' => 'ielts',
                                'courses' => $ieltsCourses,
                                'fallback_image' => './PEC- Education - PTE Academic In Dhaka, Bangladesh_files/ielts-1.png'
                            ],
                            [
                                'title' => 'TOEFL Courses',
                                'type' => 'tofel',
                                'courses' => $tofelCourses,
                                'fallback_image' => 'banner1.jpg'
                            ]
                        ];
                        ?>

                        <?php foreach ($courseSections as $sectionIndex => $section): ?>
                            <div class="aa-course-section wow fadeInUp" data-wow-offset="80">
                                <div class="aa-course-section-header">
                                    <h2><?php echo e($section['title']); ?></h2>
                                </div>

                                <?php if (!empty($section['courses'])): ?>
                                    <div class="aa-course-slider-shell" data-course-slider>
                                        <button type="button" class="aa-course-nav aa-course-nav-left" data-course-prev hidden aria-label="Previous courses">
                                            <i class="fa fa-angle-left"></i>
                                        </button>

                                        <div class="aa-course-slider-window">
                                            <div class="aa-course-slider-track">
                                                <?php foreach ($section['courses'] as $course): ?>
                                                    <?php
                                                        $previewUrl = course_preview_url($section['type'], (int)($course['id'] ?? 0));
                                                        $imageSrc = course_image_src($course['course_image'] ?? '', $section['fallback_image']);
                                                    ?>
                                                    <div class="aa-course-card wow fadeInUp" data-wow-offset="60">
                                                        <div class="aa-course-featured-tag">Featured</div>
                                                        <a href="<?php echo e($previewUrl); ?>" class="aa-course-card-image">
                                                            <img
                                                                src="<?php echo e($imageSrc); ?>"
                                                                alt="<?php echo e($course['course_title'] ?? 'Course'); ?>"
                                                                title="<?php echo e($course['course_title'] ?? 'Course'); ?>"
                                                            >
                                                        </a>

                                                        <div class="aa-course-card-body">
                                                            <h3 class="aa-course-card-title">
                                                                <a href="<?php echo e($previewUrl); ?>"><?php echo e($course['course_title'] ?? ''); ?></a>
                                                            </h3>

                                                            <div class="aa-course-card-desc">
                                                                <?php echo e(excerpt_text($course['course_short_description'] ?? '', 110)); ?>
                                                            </div>

                                                            <div class="aa-course-meta">
                                                                <?php if (!empty($course['lecture_hour_details'])): ?>
                                                                    <span><?php echo e($course['lecture_hour_details']); ?> Hours</span>
                                                                <?php endif; ?>
                                                                <?php if (!empty($course['course_level'])): ?>
                                                                    <span>Level: <?php echo e($course['course_level']); ?></span>
                                                                <?php endif; ?>
                                                                <?php if (($course['total_lecture'] ?? '') !== ''): ?>
                                                                    <span><?php echo e($course['total_lecture']); ?> Lectures</span>
                                                                <?php endif; ?>
                                                            </div>

                                                            <div class="aa-course-footer">
                                                                <?php
                                                                    $actualPrice = (float)($course['course_amount'] ?? 0);
                                                                    $oldPrice = $actualPrice > 0 ? round($actualPrice * 1.10) : 0;
                                                                ?>
                                                                <div class="aa-course-pricing">
                                                                    <?php if ($oldPrice > 0): ?>
                                                                        <div class="aa-course-price-old">TK<?php echo number_format($oldPrice, 0); ?></div>
                                                                    <?php endif; ?>
                                                                    <div class="aa-course-price">TK<?php echo number_format($actualPrice, 0); ?></div>
                                                                </div>
                                                            </div>
                                                            <a href="<?php echo e($previewUrl); ?>" class="aa-course-preview-btn" style="margin-top: 10px;">
                                                                Preview this course
                                                            </a>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>

                                        <button type="button" class="aa-course-nav aa-course-nav-right" data-course-next hidden aria-label="Next courses">
                                            <i class="fa fa-angle-right"></i>
                                        </button>
                                    </div>
                                <?php else: ?>
                                    <div class="aa-empty-course">No course found.</div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>

                        <script>
                            (function () {
                                function getVisibleCount() {
                                    if (window.innerWidth <= 575) return 1;
                                    if (window.innerWidth <= 991) return 2;
                                    if (window.innerWidth <= 1199) return 3;
                                    return 4;
                                }

                                document.querySelectorAll('[data-course-slider]').forEach(function (slider) {
                                    var track = slider.querySelector('.aa-course-slider-track');
                                    var cards = slider.querySelectorAll('.aa-course-card');
                                    var prevBtn = slider.querySelector('[data-course-prev]');
                                    var nextBtn = slider.querySelector('[data-course-next]');
                                    var index = 0;

                                    function maxIndex() {
                                        return Math.max(0, cards.length - getVisibleCount());
                                    }

                                    function update() {
                                        var visible = getVisibleCount();
                                        var firstCard = cards[0];
                                        if (!firstCard) return;
                                        var gap = 20;
                                        var cardWidth = firstCard.getBoundingClientRect().width;
                                        if (index > maxIndex()) index = maxIndex();
                                        var move = (cardWidth + gap) * index;
                                        track.style.transform = 'translateX(-' + move + 'px)';
                                        prevBtn.hidden = !(cards.length > visible && index > 0);
                                        nextBtn.hidden = !(cards.length > visible && index < maxIndex());
                                    }

                                    prevBtn.addEventListener('click', function () {
                                        if (index > 0) {
                                            index -= 1;
                                            update();
                                        }
                                    });

                                    nextBtn.addEventListener('click', function () {
                                        if (index < maxIndex()) {
                                            index += 1;
                                            update();
                                        }
                                    });

                                    window.addEventListener('resize', update);
                                    update();
                                });
                            })();
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>

<div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-parallax="1.6" data-vc-parallax-image="achivement.jpeg?fit=1920%2C1000&amp;ssl=1" class="vc_row wpb_row vc_row-fluid stm_fixed_background vc_custom_1536836667813 vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving" style="position: relative; left: -160.4px; box-sizing: border-box; width: 1521px; padding-left: 160.4px; padding-right: 160.6px;">
        <div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper" style="margin-left: 100px;">
<div class="aa5b84e1f5e48d81091fc279a089999c3 vc_empty_space" style="height: 42px">
    <span class="vc_empty_space_inner"></span>
</div>
<div class="vc_custom_heading vc_custom_1579595041823 text_align_center wow fadeInUp" data-wow-offset="80"><h2 style="color: #ffffff;text-align: center" class="masterstudy-custom-title">OUR ACHIEVEMENTS</h2></div><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
    <div class="wpb_text_column wpb_content_element  vc_custom_1579595072581">
        <div class="wpb_wrapper">

        </div>
    </div>
</div></div></div></div><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1436163882282">
                        <div class="wpb_column vc_column_container vc_col-sm-3 wow fadeInUp" data-wow-offset="60">
                            <div class="vc_column-inner"><div class="wpb_wrapper">
                                <div class="stats_counter text-center" style="color:#ffffff">
                                    <div class="h1" style="color:#FFA700"><?php echo e($achievement['oversease'] ?? '278'); ?></div>
                                    <div class="stats_counter_title h5" style="color:#ffffff">Oversease</div>
                                </div>
                            </div></div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-3 wow fadeInUp" data-wow-offset="60">
                            <div class="vc_column-inner"><div class="wpb_wrapper">
                                <div class="stats_counter text-center" style="color:#fff">
                                    <div class="h1" style="color:#FFA700"><?php echo e($achievement['classes_complete'] ?? '470'); ?></div>
                                    <div class="stats_counter_title h5" style="color:#fff">Classes complete</div>
                                </div>
                            </div></div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-3 wow fadeInUp" data-wow-offset="60">
                            <div class="vc_column-inner"><div class="wpb_wrapper">
                                <div class="stats_counter text-center" style="color:#fff">
                                    <div class="h1" style="color:#FFA700"><?php echo e($achievement['students_enrolled'] ?? '830'); ?></div>
                                    <div class="stats_counter_title h5" style="color:#fff">Students enrolled</div>
                                </div>
                            </div></div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-3 wow fadeInUp" data-wow-offset="60">
                            <div class="vc_column-inner"><div class="wpb_wrapper">
                                <div class="stats_counter text-center" style="color:#fff">
                                    <div class="h1" style="color:#FFA700"><?php echo e($achievement['certified_teachers'] ?? '6'); ?></div>
                                    <div class="stats_counter_title h5" style="color:#fff">Certified teachers</div>
                                </div>
                            </div></div>
                        </div>
                    </div>

                    <div class="a224a9d1d2a5510525f714cdbecd1fd40 vc_empty_space" style="height: 48px">
    <span class="vc_empty_space_inner"></span>
</div>
</div></div></div><div class="vc_parallax-inner skrollable skrollable-before" data-bottom-top="top: -60%;" data-top-bottom="top: 0%;" style="height: 160%; background-image: url(&quot;https://i0.wp.com/pecpte.com/wp-content/uploads/2018/09/achivements.jpg?fit=1920%2C1000&amp;ssl=1&quot;); top: -60%;"></div></div>
<div class="vc_row-full-width vc_clearfix"></div>
<div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid sbc vc_custom_1645989356413 vc_row-has-fill" style="position: relative; left: -160.4px; box-sizing: border-box; width: 1521px; padding-left: 160.4px; padding-right: 160.6px;">
        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-7 vc_col-md-7"><div class="vc_column-inner"><div class="wpb_wrapper">
    <div class="wpb_single_image wpb_content_element vc_align_left">

        <figure class="wpb_wrapper vc_figure">
            <div class="vc_single_image-wrapper   vc_box_border_grey">
                <img decoding="async" width="450" height="450" src="PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png" class="vc_single_image-img attachment-full entered lazyloaded" alt="" title="student-image"  /></noscript></div>
        </figure>
    </div>
    <div class="text-center  vc_custom_1646028687037">
    </div>

    <script src="data:text/javascript;base64,d2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ0RPTUNvbnRlbnRMb2FkZWQnLCBmdW5jdGlvbigpIHsKICAgICAgICBqUXVlcnkoZnVuY3Rpb24gKCQpIHsKICAgICAgICAgICAgdmFyIGZsYXNoID0gZmFsc2U7CiAgICAgICAgICAgIHZhciB0cyA9IDE2NDg3MzE2MDAwMDA7CiAgICAgICAgICAgIHZhciB0aW1lVXAgPSAnVGltZSBpcyB1cCwgc29ycnkhJzsKICAgICAgICAgICAgaWYgKChuZXcgRGF0ZSgpKSA8IHRzKSB7CiAgICAgICAgICAgICAgICAkKCcjY291bnRkb3duXzM2NDM2OCcpLmNvdW50ZG93bih7CiAgICAgICAgICAgICAgICAgICAgdGltZXN0YW1wOiB0cywKICAgICAgICAgICAgICAgICAgICBjYWxsYmFjazogZnVuY3Rpb24gKGRheXMsIGhvdXJzLCBtaW51dGVzLCBzZWNvbmRzKSB7CiAgICAgICAgICAgICAgICAgICAgICAgIHZhciBzdW1tYXJ5VGltZSA9IGRheXMgKyBob3VycyArIG1pbnV0ZXMgKyBzZWNvbmRzOwogICAgICAgICAgICAgICAgICAgICAgICBpZiAoc3VtbWFyeVRpbWUgPT0gMCkgewogICAgICAgICAgICAgICAgICAgICAgICAgICAgJCgnI2NvdW50ZG93bl8zNjQzNjgnKS5odG1sKCc8ZGl2IGNsYXNzPSJjb3VudGRvd25fZW5kZWQgaDIiPicgKyB0aW1lVXAgKyAnPC9kaXY+Jyk7CiAgICAgICAgICAgICAgICAgICAgICAgIH0KICAgICAgICAgICAgICAgICAgICB9CiAgICAgICAgICAgICAgICB9KTsKICAgICAgICAgICAgfSBlbHNlIHsKICAgICAgICAgICAgICAgICQoJyNjb3VudGRvd25fMzY0MzY4JykuaHRtbCgnPGRpdiBjbGFzcz0iY291bnRkb3duX2VuZGVkIGgyIj4nICsgdGltZVVwICsgJzwvZGl2PicpOwogICAgICAgICAgICB9CiAgICAgICAgfSk7CiAgICB9KTs=" data-rocket-status="executed">window.addEventListener('DOMContentLoaded', function() {
        jQuery(function ($) {
            var flash = false;
            var ts = 1648731600000;
            var timeUp = 'Time is up, sorry!';
            if ((new Date()) < ts) {
                $('#countdown_364368').countdown({
                    timestamp: ts,
                    callback: function (days, hours, minutes, seconds) {
                        var summaryTime = days + hours + minutes + seconds;
                        if (summaryTime == 0) {
                            $('#countdown_364368').html('<div class="countdown_ended h2">' + timeUp + '</div>');
                        }
                    }
                });
            } else {
                $('#countdown_364368').html('<div class="countdown_ended h2">' + timeUp + '</div>');
            }
        });
    });</script>

    <style>
        .stm_countdown .countdown_label {
            color: #eeee22 !important;
        }
    </style>
<div class="vc_custom_heading text_align_left"></div>
<div class="vc_custom_heading fwl text_align_left">
    </div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-5 vc_col-md-5"><div class="vc_column-inner"><div class="wpb_wrapper">
    <div class="wpb_raw_code wpb_content_element wpb_raw_html">
        <div class="wpb_wrapper">
            <div data-uniq="69b5960d6c0d2" class="uniq-69b5960d6c0d2 formcraft-css form-live align-left"><input type="hidden" id="formcraft3_wpnonce" name="formcraft3_wpnonce" value="9f0933d2ae"><input type="hidden" name="_wp_http_referer" value="/"><div class="fc-pagination-cover fc-pagination-1">
                <div class="fc-pagination" style="width: 100%">
                    <div class="pagination-trigger active" data-index="0">
                        <span class="page-number"><span>1</span></span>
                        <span class="page-name ">Step 1</span>

                    </div>
                </div>
            </div>

            <style scoped="scoped">
            @media (max-width : 480px) {
                .fc_modal-dialog-2 .fc-pagination-cover .fc-pagination
                {
                    background-color: white !important;
                }
            }
                        .formcraft-css .fc-form.fc-form-2 .form-element .submit-cover .submit-button,
            .formcraft-css .fc-form.fc-form-2 .form-element .fileupload-cover .button-file,
            .formcraft-css .fc-form.fc-form-2 .form-element .field-cover .button,
            .formcraft-datepicker .ui-datepicker-header,
            .formcraft-datepicker .ui-datepicker-title
            {
                background: #4488ee;
                color: #fff;
            }
            .formcraft-datepicker td .ui-state-active,
            .formcraft-datepicker td .ui-state-hover,
            .formcraft-css .fc-form.fc-form-2 .form-element .slider-cover .ui-slider-range
            {
                background: #4488ee;
            }
            #ui-datepicker-div.formcraft-datepicker .ui-datepicker-header,
            .formcraft-css .fc-form .field-cover>div.full hr
            {
                border-color: #3b77d1;
            }
            #ui-datepicker-div.formcraft-datepicker .ui-datepicker-prev:hover,
            #ui-datepicker-div.formcraft-datepicker .ui-datepicker-next:hover,
            #ui-datepicker-div.formcraft-datepicker select.ui-datepicker-month:hover,
            #ui-datepicker-div.formcraft-datepicker select.ui-datepicker-year:hover
            {
                background-color: #3b77d1;
            }
            .formcraft-css .fc-pagination>div.active .page-number,
            .formcraft-css .form-cover-builder .fc-pagination>div:first-child .page-number
            {
                background-color: #4488ee;
                color: #fff;
            }
            #ui-datepicker-div.formcraft-datepicker table.ui-datepicker-calendar th,
            #ui-datepicker-div.formcraft-datepicker table.ui-datepicker-calendar td.ui-datepicker-today a,
            .formcraft-css .fc-form.fc-form-2 .form-element .star-cover label,
            html .formcraft-css .fc-form.label-floating .form-element .field-cover.has-focus>span,
            .formcraft-css .fc-form.fc-form-2 .form-element .customText-cover a,
            .formcraft-css .prev-next>div span:hover
            {
                color: #4488ee;
            }
            .formcraft-css .fc-form.fc-form-2 .form-element .customText-cover a:hover
            {
                color: #3b77d1;
            }
            html .formcraft-css .fc-form.fc-form-2.label-floating .form-element .field-cover > span
            {
                color: #666666;
            }
            html .formcraft-css .fc-form .final-success .final-success-check {
                border: 2px solid #666666;
            }
            .formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="text"],
            .formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="email"],
            .formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="password"],
            .formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="tel"],
            .formcraft-css .fc-form.fc-form-2 .form-element .field-cover textarea,
            .formcraft-css .fc-form.fc-form-2 .form-element .field-cover select,
            .formcraft-css .fc-form.fc-form-2 .form-element .field-cover .time-fields-cover,
            .formcraft-css .fc-form.fc-form-2 .form-element .field-cover .awesomplete ul
            {
                color: #777;
            }
            .formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="text"],
            .formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="password"],
            .formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="email"],
            .formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="radio"],
            .formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="checkbox"],
            .formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="tel"],
            .formcraft-css .fc-form.fc-form-2 .form-element .field-cover select,
            .formcraft-css .fc-form.fc-form-2 .form-element .field-cover textarea
            {
                background-color: #fafafa;
            }
            .formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="radio"]:checked,
            .formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="checkbox"]:checked {
                border-color: #3b77d1;
                background: #4488ee;
            }
            .formcraft-css .fc-form.fc-form-2 .form-element .star-cover label .star
            {
                text-shadow: 0px 1px 0px #3b77d1;
            }
            .formcraft-css .fc-form.fc-form-2 .form-element .slider-cover .ui-slider-range
            {
                box-shadow: 0px 1px 1px #3b77d1 inset;
            }
            .formcraft-css .fc-form.fc-form-2 .form-element .fileupload-cover .button-file
            {
                border-color: #3b77d1;
            }
            .formcraft-css .fc-form.fc-form-2 .form-element .form-element-html input[type="password"]:focus,
            .formcraft-css .fc-form.fc-form-2 .form-element .form-element-html input[type="email"]:focus,
            .formcraft-css .fc-form.fc-form-2 .form-element .form-element-html input[type="tel"]:focus,
            .formcraft-css .fc-form.fc-form-2 .form-element .form-element-html input[type="text"]:focus,
            .formcraft-css .fc-form.fc-form-2 .form-element .form-element-html textarea:focus,
            .formcraft-css .fc-form.fc-form-2 .form-element .form-element-html select:focus
            {
                border-color: #4488ee;
            }
            .formcraft-css .fc-form.fc-form-2 .form-element .form-element-html .field-cover .is-read-only:focus {
                border-color: #ccc;
            }
            .formcraft-css .fc-form.fc-form-2            {
                font-family: inherit;
            }
            @media (max-width : 480px) {
                html .dedicated-page,
                html .dedicated-page .formcraft-css .fc-pagination > div.active
                {
                    background: white;
                }
            }
        </style>
        <div class="form-cover">
    <form method="post" action="" novalidate style="width: 580px; color: #666666; font-size: 100%; background: white; padding: 22px; border-radius: 10px; box-sizing: border-box;">
        <div class="form-page form-page-0 active" data-index="0">
            <div class="form-page-content">
                <?php if ($homepageFormSuccess !== ''): ?>
                    <div style="margin-bottom:15px;padding:12px 14px;border-radius:8px;background:#eaf8ef;color:#176b32;border:1px solid #bfe3c9;"><?php echo e($homepageFormSuccess); ?></div>
                <?php endif; ?>
                <?php if ($homepageFormError !== ''): ?>
                    <div style="margin-bottom:15px;padding:12px 14px;border-radius:8px;background:#fff1f1;color:#a33a3a;border:1px solid #f0c7c7;"><?php echo e($homepageFormError); ?></div>
                <?php endif; ?>

                <div style="display:flex;flex-wrap:wrap;margin:0 -10px;">
                    <div style="width:50%;padding:0 10px;box-sizing:border-box;margin-bottom:16px;">
                        <label style="display:block;font-weight:600;margin-bottom:8px;">First Name</label>
                        <input type="text" name="field1[]" value="<?php echo e($homepageForm['first_name']); ?>" style="width:100%;padding:12px 14px;border:1px solid #d8d8d8;border-radius:6px;background:#fafafa;box-sizing:border-box;">
                    </div>
                    <div style="width:50%;padding:0 10px;box-sizing:border-box;margin-bottom:16px;">
                        <label style="display:block;font-weight:600;margin-bottom:8px;">Last Name</label>
                        <input type="text" name="field2[]" value="<?php echo e($homepageForm['last_name']); ?>" style="width:100%;padding:12px 14px;border:1px solid #d8d8d8;border-radius:6px;background:#fafafa;box-sizing:border-box;">
                    </div>
                </div>

                <div style="margin-bottom:16px;">
                    <label style="display:block;font-weight:600;margin-bottom:8px;">Email</label>
                    <input type="text" name="field4" value="<?php echo e($homepageForm['email']); ?>" style="width:100%;padding:12px 14px;border:1px solid #d8d8d8;border-radius:6px;background:#fafafa;box-sizing:border-box;">
                </div>

                <div style="margin-bottom:18px;">
                    <label style="display:block;font-weight:600;margin-bottom:8px;">Number</label>
                    <input type="text" name="field5[]" value="<?php echo e($homepageForm['phone']); ?>" placeholder="+880" style="width:100%;padding:12px 14px;border:1px solid #d8d8d8;border-radius:6px;background:#fafafa;box-sizing:border-box;">
                </div>

                <input type="hidden" name="homepage_contact_submit" value="1">
                <button type="submit" style="margin-bottom:20px;background-color:#4488ee;color:#fff;border:none;padding:10px 20px;border-radius:5px;cursor:pointer;">Submit</button>
            </div>
        </div>
    </form>
</div></div>
        </div>
    </div>
</div>
</div></div></div></div>
<div class="vc_row-full-width vc_clearfix"></div>

<div class="vc_row-full-width vc_clearfix"></div>
<div class="vc_row wpb_row vc_row-fluid vc_custom_1436164243861">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper" style="padding:100px">
                    <div class="vc_custom_heading vc_custom_1579416932851 text_align_center wow fadeInUp" data-wow-offset="80"><h2 style="text-align: center" class="masterstudy-custom-title">Our Blogs</h2></div>

                    <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1536751636857">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="stm_colored_separatormasterstudy_color_separator_ module__cafc4ce9f11bc27b53b4b6553925c990">
                                        <div class="triangled_colored_separator"><div class="triangle"></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">

                                    <div class="post_list_main_section_wrapper post_list_1983">
                                        <div class="row">
                                            <?php if ($blogsRes && mysqli_num_rows($blogsRes) > 0): ?>
                                                <?php while ($blog = mysqli_fetch_assoc($blogsRes)): ?>
                                                    <?php
                                                    $day = !empty($blog['blog_date']) ? date('d', strtotime($blog['blog_date'])) : '';
                                                    $month = !empty($blog['blog_date']) ? date('M', strtotime($blog['blog_date'])) : '';
                                                    ?>
                                                    <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-offset="60">
                                                        <div class="post_list_content_unit">
                                                            <div class="post_list_featured_image">
                                                                <a href="blog-details.php?id=<?php echo $blog['id']; ?>" title="View post details">
                                                                    <img width="370" height="193" class="img-responsive wp-post-image" alt="<?php echo e($blog['title'] ?? 'Blog'); ?>" src="<?php echo $blog['image']; ?>">
                                                                </a>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-3 col-sm-4 col-xs-12">
                                                                    <div class="post_list_meta_unit">
                                                                        <div class="date-d"><?php echo e($day); ?></div>
                                                                        <div class="date-m"><?php echo e($month); ?></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-9 col-sm-8 col-xs-12 ">
                                                                    <div class="post_list_inner_content_unit post_list_inner_content_unit_left">
                                                                        <a href="blog-details.php?id=<?php echo $blog['id']; ?>" class="post_list_item_title h3"><?php echo e($blog['title'] ?? 'Untitled Blog'); ?></a>
                                                                        <div class="post_list_item_excerpt">
                                                                            <p><?php echo e(excerpt_text($blog['description'] ?? '', 260)); ?></p>
                                                                        </div>
                                                                        <div class="short_separator"></div>
                                                                        <div class="post_list_cats">
                                                                            <a href="">Ayan's Academy</a><span class="post_list_divider">,</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                        <div class="row"></div>
                                    </div>
                                    <!--
                                    <div class="vc_btn3-container wpb_animate_when_almost_visible wpb_bounceIn bounceIn vc_btn3-inline wpb_start_animation animated">
                                        <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-round vc_btn3-style-modern vc_btn3-icon-left vc_btn3-color-primary" href="" title="" target="_blank"> Read More Blogs</a>
                                    </div>
                                    -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-8">
            <div class="vc_column-inner">
                <div class="wpb_wrapper" style="padding: 0px 0px 0px 100px;">
                    <div class="testimonials_main_wrapper simple_carousel_wrapper">
                        <div class="clearfix testimonials_control_bar_top">
                            <div class="pull-left">
                                <h2 class="testimonials_main_title wow fadeInUp" data-wow-offset="80">Testimonials</h2>
                            </div>
                            <div class="pull-right testimonials_control_bar">
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="testimonials-carousel-unit">
                            <div class="testimonials-carousel-init simple_carousel_init clearfix owl-carousel stm_owl-theme" data-items="2">
                                <?php if ($testimonialsRes && mysqli_num_rows($testimonialsRes) > 0): ?>
                                    <?php while ($testimonial = mysqli_fetch_assoc($testimonialsRes)): ?>
                                        <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-offset="60">
                                            <div class="testimonial_inner_wrapper">
                                                <div class="media">
                                                    
                                                    <div class="media-body">
                                                        <h4 class="testimonials-inner-title"><?php echo e($testimonial['name'] ?? 'Student'); ?></h4>
                                                        <div class="testimonial_sphere"><?php echo e($testimonial['location_details'] ?? ''); ?></div>
                                                        <div class="short_separator"></div>
                                                    </div>
                                                </div>
                                                <div class="testimonial_inner_content" style="color:#aaaaaa">
                                                    <p><?php echo nl2br(e($testimonial['testimonial_details'] ?? '')); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wpb_column vc_column_container vc_col-sm-4">
            <div class="vc_column-inner">
                <div class="wpb_wrapper"></div>
            </div>
        </div>
    </div>

</div>
</div>
</div>

</div>
<div class="vc_custom_heading text_align_center wow fadeInUp" data-wow-offset="80">
    <h1 style="text-align: center" class="masterstudy-custom-title">
        Representing Overseas Universities
    </h1>
</div>

<div class="multiseparator"></div>

<style>
.overseas-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.overseas-item {
    width: 160px;
    height: 160px;
    border: 1px solid #eee;
    border-radius: 8px;
    padding: 10px;
    background: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.3s;
}

.overseas-item:hover {
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    transform: translateY(-3px);
}

.overseas-item img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}
</style>

<div class="overseas-grid wow fadeInUp" data-wow-offset="60">

    <?php 
    $overseasUniversitiesRes = mysqli_query($conn, "SELECT * FROM overseas_universities ORDER BY id DESC");
    if ($overseasUniversitiesRes && mysqli_num_rows($overseasUniversitiesRes) > 0): ?>
        
        <?php while ($university = mysqli_fetch_assoc($overseasUniversitiesRes)): ?>
            
            <?php $universityLogo = 'admin/dist/' . $university['logo_image']; ?>

            <div class="overseas-item wow zoomIn" data-wow-offset="60">
                <img
                    src="<?php echo e($universityLogo); ?>"
                    alt="Overseas University"
                    title="Overseas University"
                >
            </div>

        <?php endwhile; ?>

    <?php endif; ?>

</div>

        <div class="clearfix">
                    </div>

    </div>

           </div>
</div>
        
<style id="aa-mobile-fixes">
@media (max-width: 767px){
    .header_top_bar,
    .header_top_bar .container,
    .header_top_bar .clearfix{
        overflow: visible !important;
    }
    .header_top_bar .top_bar_info{
        display:flex !important;
        flex-wrap:wrap !important;
        align-items:center !important;
        gap:6px 10px !important;
    }
    .header_top_bar .top_bar_info li:last-child{
        max-width:none !important;
        white-space:normal !important;
        word-break:break-word !important;
        line-height:1.3 !important;
    }
    .header_top_bar .header_top_bar_socs ul{
        flex-wrap:wrap !important;
        justify-content:flex-start !important;
    }

    .testimonials_main_wrapper{
        padding:0 14px !important;
    }
    .testimonials_main_wrapper .testimonials_main_title{
        font-size:42px !important;
        line-height:1.05 !important;
    }
    .testimonials-carousel-unit,
    .testimonials-carousel-init,
    .testimonials-carousel-init .owl-stage-outer,
    .testimonials-carousel-init .owl-stage,
    .testimonials-carousel-init .owl-item{
        overflow:visible !important;
    }
    .testimonials-carousel-init .col-md-6,
    .testimonials-carousel-init .col-sm-12,
    .testimonials-carousel-init .col-xs-12{
        width:100% !important;
        float:none !important;
        padding-left:0 !important;
        padding-right:0 !important;
    }
    .testimonial_inner_wrapper{
        background:#fff !important;
        border:1px solid #e8edf7 !important;
        border-radius:18px !important;
        box-shadow:0 10px 26px rgba(20,30,60,.08) !important;
        padding:18px 18px 16px !important;
        margin:0 0 18px !important;
    }
    .testimonial_inner_wrapper .media,
    .testimonial_inner_wrapper .media-body{
        display:block !important;
        width:100% !important;
    }
    .testimonial_inner_wrapper .media-left,
    .testimonial_inner_wrapper .media-right{
        display:none !important;
    }
    .testimonial_inner_wrapper .testimonial_inner_content{
        margin-top:10px !important;
    }

    .vc_row .wpb_column .wpb_wrapper[style*="padding: 0px 0px 0px 100px"],
    .vc_row .wpb_column .wpb_wrapper[style*="padding:0px 0px 0px 100px"]{
        padding:0 14px !important;
    }
    .vc_row .wpb_column .wpb_wrapper[style*="margin-left: 100px"],
    .vc_row .wpb_column .wpb_wrapper[style*="margin-left:100px"]{
        margin-left:0 !important;
    }

    a[href*="wa.me"],
    a[href*="whatsapp"],
    .joinchat,
    .joinchat--right,
    .whatsapp_float,
    .whatsapp-icon,
    .floating-whatsapp,
    .wabtn,
    #joinchat,
    #wh-widget-send-button{
        right:14px !important;
        left:auto !important;
        bottom:14px !important;
        transform:none !important;
        max-width:calc(100vw - 28px) !important;
    }
}
</style>


<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
if (typeof WOW !== "undefined") { new WOW({ mobile: true }).init(); }
</script>
<footer data-wpr-lazyrender="1" id="footer" class="parallax-off">
            <div class="footer_wrapper">



        <div id="footer_bottom" style="background-color: black;">
            <div class="footer_widgets_wrapper kek text-upper">
<?php include('footer.php') ?>