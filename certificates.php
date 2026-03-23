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

$logoRes = mysqli_query($conn, "SELECT * FROM logos ORDER BY id DESC LIMIT 1");
$logo = $logoRes ? mysqli_fetch_assoc($logoRes) : null;

$bannerRes = mysqli_query($conn, "SELECT * FROM banners ORDER BY id DESC LIMIT 1");
$banner = $bannerRes ? mysqli_fetch_assoc($bannerRes) : null;

$achievementImagesRes = mysqli_query($conn, "SELECT * FROM achievement ORDER BY id DESC");

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

        .achievement-gallery {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .achievement-box {
            margin-bottom: 30px;
            text-align: center;
        }

        .achievement-box img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
            border-radius: 8px;
        }
    </style>

    <div class="stm_lms_breadcrumbs stm_lms_breadcrumbs__header_default"></div>
</div>
</div>

<div class="container achievement-gallery">
    <div class="row">
        <?php if ($achievementImagesRes && mysqli_num_rows($achievementImagesRes) > 0): ?>
            <?php while ($achievementImage = mysqli_fetch_assoc($achievementImagesRes)): ?>
                <?php
                $imagePath = trim($achievementImage['image'] ?? '');
				$finalImage = 'admin/dist/' . $imagePath;
                
                ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="achievement-box">
                        <img src="<?php echo e($finalImage); ?>" alt="Achievement Image">
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <div class="col-md-12">
                <p>No achievement images found.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<footer data-wpr-lazyrender="1" id="footer" class="parallax-off">
            <div class="footer_wrapper">



        <div id="footer_bottom">
            <div class="footer_widgets_wrapper kek text-upper">
<?php include('footer.php'); ?>