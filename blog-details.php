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

/* GET BLOG ID */
$blog_id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

/* FETCH BLOG */
$blogRes = mysqli_query($conn, "SELECT * FROM blogs WHERE id = $blog_id LIMIT 1");
$blog = $blogRes ? mysqli_fetch_assoc($blogRes) : null;

/* HEADER DATA */
$logoRes = mysqli_query($conn, "SELECT * FROM logos ORDER BY id DESC LIMIT 1");
$logo = $logoRes ? mysqli_fetch_assoc($logoRes) : null;

$bannerRes = mysqli_query($conn, "SELECT * FROM banners ORDER BY id DESC LIMIT 1");
$banner = $bannerRes ? mysqli_fetch_assoc($bannerRes) : null;

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

        .blog-content {
            margin-top: 20px;
            line-height: 1.8;
        }

        .blog-content img {
            max-width: 100%;
            height: auto;
            margin: 15px 0;
        }
    </style>

    <div class="stm_lms_breadcrumbs stm_lms_breadcrumbs__header_default"></div>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <?php if ($blog): ?>

                <h1><?php echo e($blog['title']); ?></h1>

                <?php if (!empty($blog['image'])): ?>
                    <img src="<?php echo e($blog['image']); ?>" alt="Blog Image">
                <?php endif; ?>

                <div class="blog-content">
                    <?php echo $blog['description']; ?>
                </div>

            <?php else: ?>

                <h1>Blog Not Found</h1>
                <p>No blog data found.</p>

            <?php endif; ?>

        </div>
    </div>
</div>

<footer data-wpr-lazyrender="1" id="footer" class="parallax-off">
    <div class="footer_wrapper">
        <div id="footer_bottom">
            <div class="footer_widgets_wrapper kek text-upper">
                <?php include('footer.php'); ?>
            </div>
        </div>
    </div>
</footer>