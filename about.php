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

$aboutRes = mysqli_query($conn, "SELECT * FROM about_us ORDER BY id DESC LIMIT 1");
$about = $aboutRes ? mysqli_fetch_assoc($aboutRes) : null;

$logoTransparent = local_image($logo['logo_image'] ?? 'thumbnail.png', 'thumbnail.png');
$logoColored = local_image($logo['logo_image'] ?? 'logo.png', 'logo.png');
$bannerImage = local_image($banner['banner_image'] ?? 'banner1.jpg', 'banner1.jpg');
$bannerTitle = $banner['title'] ?? 'Take the first step';

include('header.php');
?>

<div id="main">
    <style>
        #wrapper #main {
            min-height: 0px !important;
        }

        .about-content {
            font-size: 16px;
            line-height: 1.8;
            color: #333;
            margin-top: 20px;
        }

        .about-content p {
            margin-bottom: 15px;
        }

        .about-content h1,
        .about-content h2,
        .about-content h3,
        .about-content h4,
        .about-content h5,
        .about-content h6 {
            margin-top: 25px;
            margin-bottom: 12px;
            color: #222;
        }

        .about-content ul,
        .about-content ol {
            margin-left: 20px;
            margin-bottom: 15px;
        }

        .about-content li {
            margin-bottom: 8px;
        }

        .about-content strong {
            font-weight: 700;
        }

        .about-content img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 15px 0;
        }

        .about-content a {
            color: #2c75e4;
            text-decoration: none;
        }

        .about-content a:hover {
            text-decoration: underline;
        }
    </style>

    <div class="stm_lms_breadcrumbs stm_lms_breadcrumbs__header_default"></div>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php if (!empty($about['description'])): ?>
                <div class="about-content">
                    <?php echo $about['description']; ?>
                </div>
            <?php else: ?>
                <p>No about content found.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<footer data-wpr-lazyrender="1" id="footer" class="parallax-off">
            <div class="footer_wrapper" style="background-color: black;">



        <div id="footer_bottom" style="background-color: black;">
            <div class="footer_widgets_wrapper kek text-upper">
<?php include('footer.php'); ?>