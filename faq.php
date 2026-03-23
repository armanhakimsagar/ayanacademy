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

$logoRes = mysqli_query($conn, "SELECT * FROM logos ORDER BY id DESC LIMIT 1");
$logo = $logoRes ? mysqli_fetch_assoc($logoRes) : null;

$bannerRes = mysqli_query($conn, "SELECT * FROM banners ORDER BY id DESC LIMIT 1");
$banner = $bannerRes ? mysqli_fetch_assoc($bannerRes) : null;

$faqRes = mysqli_query($conn, "SELECT * FROM faq ORDER BY id DESC");

$pageTitle = 'FAQ';

$logoTransparent = local_image($logo['logo_image'] ?? 'thumbnail.png', 'thumbnail.png');
$logoColored = local_image($logo['logo_image'] ?? 'logo.png', 'logo.png');
$bannerImage = local_image($banner['banner_image'] ?? 'banner1.jpg', 'banner1.jpg');
$bannerTitle = $banner['title'] ?? 'Take the first step';

include('header.php');
?>

<div id="main">

    <style>
        #wrapper #main {
            min-height: 400px !important;
        }

        .faq-content {
            margin-top: 20px;
            margin-bottom: 30px;
        }

        .faq-item {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #eee;
            border-radius: 8px;
            background: #fff;
        }

        .faq-item h3 {
            margin-top: 0;
            margin-bottom: 10px;
            color: #222;
            font-size: 20px;
            line-height: 1.5;
        }

        .faq-item p {
            margin-bottom: 0;
            color: #333;
            font-size: 16px;
            line-height: 1.8;
        }
    </style>

    <!-- Breads -->
    <div class="stm_lms_breadcrumbs stm_lms_breadcrumbs__header_default"></div>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?php echo e($pageTitle); ?></h1>

            <div class="faq-content">
                <?php if ($faqRes && mysqli_num_rows($faqRes) > 0): ?>
                    <?php while ($faq = mysqli_fetch_assoc($faqRes)): ?>
                        <div class="faq-item">
                            <h3><?php echo e($faq['question'] ?? ''); ?></h3>
                            <p><?php echo nl2br(e($faq['answer'] ?? '')); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>No FAQ found.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<footer data-wpr-lazyrender="1" id="footer" class="parallax-off">
            <div class="footer_wrapper">



        <div id="footer_bottom">
            <div class="footer_widgets_wrapper kek text-upper">
<?php include('footer.php'); ?>