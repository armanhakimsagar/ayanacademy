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

$courseParam = trim($_GET['course'] ?? '');
$courseData = null;
$pageTitle = 'Course';

if ($courseParam !== '') {
    $courseName = strtolower($courseParam);

    if ($courseName === 'a-z-grammar') {
        $courseName = 'a-z grammar';
    } else {
        $courseName = str_replace('-', ' ', $courseName);
    }

    $stmt = mysqli_prepare($conn, "SELECT * FROM courses WHERE LOWER(course_type) LIKE ? ORDER BY id DESC LIMIT 1");
    $search = '%' . $courseName . '%';
    mysqli_stmt_bind_param($stmt, "s", $search);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $courseData = $result ? mysqli_fetch_assoc($result) : null;

    if ($courseData && !empty($courseData['course_type'])) {
        $pageTitle = $courseData['course_type'];
    } else {
        $pageTitle = ucwords(str_replace('-', ' ', $courseParam));
    }
} else {
    $defaultCourseRes = mysqli_query($conn, "SELECT * FROM courses ORDER BY id DESC LIMIT 1");
    $courseData = $defaultCourseRes ? mysqli_fetch_assoc($defaultCourseRes) : null;

    if ($courseData && !empty($courseData['course_type'])) {
        $pageTitle = $courseData['course_type'];
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

        .course-content {
            font-size: 16px;
            line-height: 1.8;
            color: #333;
            margin-top: 20px;
        }

        .course-content p {
            margin-bottom: 15px;
        }

        .course-content h1,
        .course-content h2,
        .course-content h3,
        .course-content h4,
        .course-content h5,
        .course-content h6 {
            margin-top: 25px;
            margin-bottom: 12px;
            color: #222;
        }

        .course-content ul,
        .course-content ol {
            margin-left: 20px;
            margin-bottom: 15px;
        }

        .course-content li {
            margin-bottom: 8px;
        }

        .course-content strong {
            font-weight: 700;
        }

        .course-content img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 15px 0;
        }

        .course-content a {
            color: #2c75e4;
            text-decoration: none;
        }

        .course-content a:hover {
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
            <h1><?php echo e($pageTitle); ?></h1>

            <?php if (!empty($courseData['description'])): ?>
                <div class="course-content">
                    <?php echo $courseData['description']; ?>
                </div>
            <?php else: ?>
                <p>No course content found.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<footer data-wpr-lazyrender="1" id="footer" class="parallax-off">
            <div class="footer_wrapper">



        <div id="footer_bottom" style="background-color: black;">
            <div class="footer_widgets_wrapper kek text-upper">
<?php include('footer.php'); ?>