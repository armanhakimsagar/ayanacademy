<?php
include 'db.php';

function e($value) {
    return htmlspecialchars((string)($value ?? ''), ENT_QUOTES, 'UTF-8');
}

function local_image($path, $fallback = '', $type = '') {
    $path = trim((string)$path);

    if ($path === '') {
        return $fallback;
    }

    if (preg_match('/^https?:\/\//i', $path)) {
        return $path;
    }

    $base = '/ayanacademy/';
    $path = str_replace('\\', '/', $path);
    $path = ltrim($path, '/');
    $type = strtolower(trim((string)$type));

    $usesAdminDist = in_array($type, ['ielts', 'tofel'], true);
    $usesDirectUploads = in_array($type, ['campus', 'online'], true);

    if (strpos($path, 'admin/dist/uploads/') === 0) {
        if ($usesDirectUploads) {
            return $base . substr($path, strlen('admin/dist/'));
        }
        return $base . $path;
    }

    if (strpos($path, 'uploads/') === 0) {
        if ($usesAdminDist) {
            return $base . 'admin/dist/' . $path;
        }
        return $base . $path;
    }

    return $base . $path;
}

$type = strtolower(trim($_GET['type'] ?? 'campus'));
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$courseTypeMap = [
    'campus' => [
        'table' => 'pte_courses_campus',
        'label' => 'PTE Courses (On Campus)',
        'fallback' => './PEC- Education - PTE Academic In Dhaka, Bangladesh_files/1765-1-scaled-272x161.jpg'
    ],
    'online' => [
        'table' => 'pte_courses_online',
        'label' => 'PTE Courses (Online)',
        'fallback' => './PEC- Education - PTE Academic In Dhaka, Bangladesh_files/989-scaled-272x161.jpg'
    ],
    'ielts' => [
        'table' => 'ielts_courses',
        'label' => 'IELTS Courses',
        'fallback' => './PEC- Education - PTE Academic In Dhaka, Bangladesh_files/ielts-1.png'
    ],
    'tofel' => [
        'table' => 'tofel_courses',
        'label' => 'TOFEL Courses',
        'fallback' => 'banner1.jpg'
    ]
];

if (!isset($courseTypeMap[$type])) {
    $type = 'campus';
}

$table = $courseTypeMap[$type]['table'];
$pageTypeLabel = $courseTypeMap[$type]['label'];
$fallbackImage = $courseTypeMap[$type]['fallback'];

$logoRes = mysqli_query($conn, "SELECT * FROM logos ORDER BY id DESC LIMIT 1");
$logo = $logoRes ? mysqli_fetch_assoc($logoRes) : null;

$bannerRes = mysqli_query($conn, "SELECT * FROM banners ORDER BY id DESC LIMIT 1");
$banner = $bannerRes ? mysqli_fetch_assoc($bannerRes) : null;

$logoTransparent = local_image($logo['logo_image'] ?? 'thumbnail.png', 'thumbnail.png');
$logoColored = local_image($logo['logo_image'] ?? 'logo.png', 'logo.png');
$bannerImage = local_image($banner['banner_image'] ?? 'banner1.jpg', 'banner1.jpg');
$bannerTitle = $banner['title'] ?? 'Take the first step';

$course = null;
if ($id > 0) {
    $query = mysqli_query($conn, "SELECT * FROM {$table} WHERE id = {$id} LIMIT 1");
    $course = $query ? mysqli_fetch_assoc($query) : null;
}

include('header.php');
?>

<div id="main">
    <style>
        #wrapper #main {
            min-height: 0px !important;
        }
        .course-preview-wrap {
            padding: 40px 0 60px;
        }
        .course-preview-card {
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 12px 30px rgba(0,0,0,0.08);
            overflow: hidden;
            margin-bottom: 30px;
        }
        .course-preview-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            min-height: 320px;
        }
        .course-preview-content {
            padding: 28px;
        }
        .course-preview-type {
            display: inline-block;
            padding: 7px 12px;
            border-radius: 999px;
            background: #edf4ff;
            color: #2c75e4;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 14px;
        }
        .course-preview-content h1 {
            margin-top: 0;
            margin-bottom: 14px;
        }
        .course-preview-short {
            color: #5d5d5d;
            line-height: 1.8;
            margin-bottom: 20px;
        }
        .course-preview-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 24px;
        }
        .course-preview-meta div {
            background: #f7f9fc;
            border: 1px solid #e9eef5;
            border-radius: 10px;
            padding: 12px 14px;
            min-width: 150px;
        }
        .course-preview-meta strong {
            display: block;
            font-size: 13px;
            color: #7b7b7b;
            margin-bottom: 4px;
        }
        .course-preview-section {
            margin-top: 26px;
        }
        .course-preview-section h3 {
            margin-bottom: 12px;
        }
        .course-preview-section .content-box {
            line-height: 1.8;
            color: #333;
        }
        .course-preview-section .content-box img {
            max-width: 100%;
            height: auto;
        }
        .course-preview-back {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 18px;
            text-decoration: none;
            color: #2c75e4;
            font-weight: 600;
        }
        .course-not-found {
            background: #fff;
            padding: 40px 24px;
            border-radius: 12px;
            box-shadow: 0 12px 30px rgba(0,0,0,0.08);
            text-align: center;
        }
        @media (max-width: 767px) {
            .course-preview-image img {
                min-height: 220px;
            }
            .course-preview-content {
                padding: 20px;
            }
        }
    </style>

    <div class="stm_lms_breadcrumbs stm_lms_breadcrumbs__header_default"></div>
</div>
</div>

<div class="container course-preview-wrap">
    <a href="index.php" class="course-preview-back"><i class="fa fa-arrow-left"></i> Back to Home</a>

    <?php if ($course): ?>
        <?php $courseImage = local_image($course['course_image'] ?? '', $fallbackImage, $type); ?>
        <div class="course-preview-card">
            <div class="row" style="margin:0;">
                <div class="col-md-5" style="padding:0;">
                    <div class="course-preview-image">
                        <img src="<?php echo e($courseImage); ?>" alt="<?php echo e($course['course_title'] ?? 'Course'); ?>">
                    </div>
                </div>
                <div class="col-md-7" style="padding:0;">
                    <div class="course-preview-content">
                        <span class="course-preview-type"><?php echo e($pageTypeLabel); ?></span>
                        <h1><?php echo e($course['course_title'] ?? ''); ?></h1>
                        <div class="course-preview-short"><?php echo e($course['course_short_description'] ?? ''); ?></div>

                        <div class="course-preview-meta">
                            <div>
                                <strong>Price</strong>
                                <span>TK<?php echo number_format((float)($course['course_amount'] ?? 0), 0); ?></span>
                            </div>
                            <?php if (!empty($course['course_level'])): ?>
                            <div>
                                <strong>Level</strong>
                                <span><?php echo e($course['course_level']); ?></span>
                            </div>
                            <?php endif; ?>
                            <?php if (!empty($course['lecture_hour_details'])): ?>
                            <div>
                                <strong>Duration</strong>
                                <span><?php echo e($course['lecture_hour_details']); ?> Hours</span>
                            </div>
                            <?php endif; ?>
                            <?php if (($course['total_lecture'] ?? '') !== ''): ?>
                            <div>
                                <strong>Total Lectures</strong>
                                <span><?php echo e($course['total_lecture']); ?></span>
                            </div>
                            <?php endif; ?>
                            <?php if (!empty($course['how_many_hour_lecture'])): ?>
                            <div>
                                <strong>Lecture Time</strong>
                                <span><?php echo e($course['how_many_hour_lecture']); ?> Hours</span>
                            </div>
                            <?php endif; ?>
                        </div>

                        <?php if (!empty($course['course_long_description'])): ?>
                            <div class="course-preview-section">
                                <h3>Course Details</h3>
                                <div class="content-box"><?php echo $course['course_long_description']; ?></div>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($course['course_curriculum'])): ?>
                            <div class="course-preview-section">
                                <h3>Course Curriculum</h3>
                                <div class="content-box"><?php echo $course['course_curriculum']; ?></div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="course-not-found">
            <h2>Course not found</h2>
            <p>This course may have been removed or the preview link is invalid.</p>
        </div>
    <?php endif; ?>
</div>

<footer data-wpr-lazyrender="1" id="footer" class="parallax-off">
    <div class="footer_wrapper">
        <div id="footer_bottom" style="background-color: black;">
            <div class="footer_widgets_wrapper kek text-upper">
                <?php include('footer.php'); ?>
