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

$visionRes = mysqli_query($conn, "SELECT * FROM mission_vision WHERE type = 'vision' ORDER BY id DESC LIMIT 1");
$vision = $visionRes ? mysqli_fetch_assoc($visionRes) : null;

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

        .vision-content {
            font-size: 16px;
            line-height: 1.8;
            color: #333;
            margin-top: 20px;
        }

        .vision-content p {
            margin-bottom: 15px;
        }

        .vision-content h1,
        .vision-content h2,
        .vision-content h3,
        .vision-content h4,
        .vision-content h5,
        .vision-content h6 {
            margin-top: 25px;
            margin-bottom: 12px;
            color: #222;
        }

        .vision-content ul,
        .vision-content ol {
            margin-left: 20px;
            margin-bottom: 15px;
        }

        .vision-content li {
            margin-bottom: 8px;
        }

        .vision-content strong {
            font-weight: 700;
        }

        .vision-content img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 15px 0;
        }

        .vision-content a {
            color: #2c75e4;
            text-decoration: none;
        }

        .vision-content a:hover {
            text-decoration: underline;
        }
    </style>

    <div class="stm_lms_breadcrumbs stm_lms_breadcrumbs__header_default"></div>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php if (!empty($vision['description'])): ?>
                <div class="vision-content">
                    <?php echo $vision['description']; ?>
                </div>
            <?php else: ?>
                <p>No vision content found.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<footer data-wpr-lazyrender="1" id="footer" class="parallax-off">
            <div class="footer_wrapper">



        <div id="footer_bottom">
            <div class="footer_widgets_wrapper kek text-upper">
<?php include('footer.php'); ?>