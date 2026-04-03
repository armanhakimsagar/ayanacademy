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

$galleryParam = trim($_GET['gallery'] ?? '');
$pageTitle = 'Gallery';
$galleryImagesRes = null;
$faqRes = null;
$isFaqPage = false;

if ($galleryParam === 'faq') {
    $pageTitle = 'FAQ';
    $isFaqPage = true;
    $faqRes = mysqli_query($conn, "SELECT * FROM faq ORDER BY id DESC");
} else {
    $galleryType = '';

    if ($galleryParam === 'pte-score-card') {
        $galleryType = 'pte score card';
        $pageTitle = 'PTE Score Card';
    } elseif ($galleryParam === 'seminar-pics') {
        $galleryType = 'seminar pics';
        $pageTitle = 'Seminar Pics';
    } else {
        $galleryType = 'seminar pics';
        $pageTitle = 'Seminar Pics';
    }

    $stmt = mysqli_prepare($conn, "SELECT * FROM gallery WHERE LOWER(gallery_type) = ? ORDER BY id DESC");
    $galleryTypeLower = strtolower($galleryType);
    mysqli_stmt_bind_param($stmt, "s", $galleryTypeLower);
    mysqli_stmt_execute($stmt);
    $galleryImagesRes = mysqli_stmt_get_result($stmt);
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
            min-height: 400px !important;
        }

        .gallery-section {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .gallery-box {
            margin-bottom: 30px;
            text-align: center;
        }

        .gallery-box img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
            border-radius: 8px;
        }

        .faq-section {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .faq-item {
            margin-bottom: 25px;
            padding: 20px;
            border: 1px solid #eee;
            border-radius: 8px;
            background: #fff;
        }

        .faq-item h4 {
            margin-top: 0;
            margin-bottom: 10px;
            color: #222;
        }

        .faq-item p {
            margin-bottom: 0;
            color: #444;
            line-height: 1.8;
        }
    </style>

    <div class="stm_lms_breadcrumbs stm_lms_breadcrumbs__header_default"></div>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?php echo e($pageTitle); ?></h1>
        </div>
    </div>
</div>

<?php if ($isFaqPage): ?>
    <div class="container faq-section">
        <div class="row">
            <div class="col-md-12">
                <?php if ($faqRes && mysqli_num_rows($faqRes) > 0): ?>
                    <?php while ($faq = mysqli_fetch_assoc($faqRes)): ?>
                        <div class="faq-item">
                            <h4><?php echo e($faq['question'] ?? ''); ?></h4>
                            <p><?php echo nl2br(e($faq['answer'] ?? '')); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>No FAQ found.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="container gallery-section">
        <div class="row">
            <?php if ($galleryImagesRes && mysqli_num_rows($galleryImagesRes) > 0): ?>
                <?php while ($galleryImage = mysqli_fetch_assoc($galleryImagesRes)): ?>
                    <?php
                    $imagePath = trim($galleryImage['image'] ?? '');
                    $finalImage = 'admin/dist/' . $imagePath;
                    ?>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-box">
                            <img src="<?php echo e($finalImage); ?>" alt="<?php echo e($pageTitle); ?>">
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-md-12">
                    <p>No gallery images found.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

<footer data-wpr-lazyrender="1" id="footer" class="parallax-off">
            <div class="footer_wrapper">



        <div id="footer_bottom" style="background-color: black;">
            <div class="footer_widgets_wrapper kek text-upper">
<?php include('footer.php'); ?>