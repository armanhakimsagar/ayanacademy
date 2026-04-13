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

$serviceParam = trim($_GET['service'] ?? '');
$serviceData = null;
$pageTitle = 'Service';

if ($serviceParam !== '') {
    $serviceName = str_replace('-', ' ', $serviceParam);

    $stmt = mysqli_prepare($conn, "SELECT * FROM services WHERE LOWER(service_type) LIKE ? ORDER BY id DESC LIMIT 1");
    $search = '%' . strtolower($serviceName) . '%';
    mysqli_stmt_bind_param($stmt, "s", $search);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $serviceData = $result ? mysqli_fetch_assoc($result) : null;

    if ($serviceData && !empty($serviceData['service_type'])) {
        $pageTitle = $serviceData['service_type'];
    } else {
        $pageTitle = ucwords(str_replace('-', ' ', $serviceParam));
    }
} else {
    $defaultServiceRes = mysqli_query($conn, "SELECT * FROM services ORDER BY id DESC LIMIT 1");
    $serviceData = $defaultServiceRes ? mysqli_fetch_assoc($defaultServiceRes) : null;

    if ($serviceData && !empty($serviceData['service_type'])) {
        $pageTitle = $serviceData['service_type'];
    }
}

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

        .service-content {
            font-size: 16px;
            line-height: 1.8;
            color: #333;
            margin-top: 20px;
        }

        .service-content p {
            margin-bottom: 15px;
        }

        .service-content h1,
        .service-content h2,
        .service-content h3,
        .service-content h4,
        .service-content h5,
        .service-content h6 {
            margin-top: 25px;
            margin-bottom: 12px;
            color: #222;
        }

        .service-content ul,
        .service-content ol {
            margin-left: 20px;
            margin-bottom: 15px;
        }

        .service-content li {
            margin-bottom: 8px;
        }

        .service-content strong {
            font-weight: 700;
        }

        .service-content img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 15px 0;
        }

        .service-content a {
            color: #2c75e4;
            text-decoration: none;
        }

        .service-content a:hover {
            text-decoration: underline;
        }
    </style>

    <!-- Breads -->
    <div class="stm_lms_breadcrumbs stm_lms_breadcrumbs__header_default"></div>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <?php if (!empty($serviceData['description'])): ?>
                <div class="service-content">
                    <?php echo $serviceData['description']; ?>
                </div>
            <?php else: ?>
                <p>No service content found.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<footer data-wpr-lazyrender="1" id="footer" class="parallax-off">
            <div class="footer_wrapper">



        <div id="footer_bottom" style="background-color: black;">
            <div class="footer_widgets_wrapper kek text-upper">
<?php include('footer.php'); ?>