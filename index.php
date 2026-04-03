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
    return ltrim(str_replace('\\', '/', $path), '/');
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
            <h1 class="pecpte-heading" style="color:#fff; line-height:100px; margin-top:50px;"><strong><span class="pecpte-heading-span1" style="font-size:25px; background-color:rgba(0,0,0, .6); padding:10px"><?php echo e($bannerTitle); ?></span></strong></h1>
        </div>
    </div>
<style type="text/css">.vc_btn3-style-gradient.vc_btn-gradient-btn-69b5960c63730:hover{color: #fff;background-color: #f4524d;border: none;background-position: 100% 0;}</style><style type="text/css">.vc_btn3-style-gradient.vc_btn-gradient-btn-69b5960c63730{color: #fff;border: none;background-color: #fe6c61;background-image: -webkit-linear-gradient(left, #fe6c61 0%, #f4524d 50%,#fe6c61 100%);background-image: linear-gradient(to right, #fe6c61 0%, #f4524d 50%,#fe6c61 100%);-webkit-transition: all .2s ease-in-out;transition: all .2s ease-in-out;background-size: 200% 100%;}</style>
</div></div></div></div>
<div class="vc_row-full-width vc_clearfix"></div>
<div class="vc_row wpb_row vc_row-fluid vc_custom_1645695539961">
        <div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1579437107739"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
    <div class="wpb_raw_code wpb_content_element wpb_raw_html vc_custom_1645986912369">
        <div class="wpb_wrapper">
            <div class="block-scroll">

    <a href="course.php?course=pte%20academy"><!--Main Block-->
        <div class="block-main b3">
            <div class="pte-block-img"><!--icon-->
                <img decoding="async" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/pte-logo-1.png" class="block-image entered lazyloaded" alt="Person PTE Academy" width="190" height="63" data-lazy-src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/pte-logo-1.png?resize=190%2C63&amp;ssl=1" data-ll-status="loaded"><noscript><img decoding="async" src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/pte-logo-1.png?resize=190%2C63&#038;ssl=1" class="block-image" alt="Person PTE Academy" width="190" height="63"  data-recalc-dims="1"></noscript>
            </div>
        </div>
    </a><!--Main Block End-->

    <a href="course.php?course=ielts"><!--Main Block-->
        <div class="block-main b2">
            <div class="ielts-block-img">
                <img decoding="async" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/ielts-1.png" class="block-image" alt="IELTS" width="190" height="190">
            </div>
        </div>
    </a><!--Main Block End-->
    <a href="course.php?course=spoken-english">
        <div class="block-main b4">
            <div class="block-img">
                <img decoding="async" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/speaking_sized.png" class="block-image" alt="Spoken English" width="90" height="90">
            </div>
            <div class="block-head">Spoken English</div>
        </div>
    </a><!--Main Block End-->

    <a href="study.php?service=pte-mock-tests" target="_blank">
        <div class="block-main b5">
            <div class="block-img">
                <img decoding="async" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/online-course_sized.png" class="block-image" alt="Online Courses &amp; PTE Mock Test" width="90" height="90">
            </div>
            <div class="block-head">Online Courses &amp; PTE Mock Test</div>
        </div>
    </a><!--Main Block End-->
    
    <a href="study.php?service=study aboard">
        <div class="block-main b1">
            <div class="block-img">
                <img decoding="async" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/oversease_sized.png" class="block-image" alt="Study Abroad" width="90" height="90">
            </div>
            <div class="block-head">Study Abroad</div>
        </div>
    </a><!--Main Block End-->
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
                                margin-bottom: 45px;
                            }
                            .aa-course-section-header {
                                display: flex;
                                align-items: center;
                                justify-content: space-between;
                                gap: 16px;
                                margin-bottom: 20px;
                            }
                            .aa-course-section-header h2 {
                                margin: 0;
                            }
                            .aa-course-slider-shell {
                                position: relative;
                                padding: 0 46px;
                            }
                            .aa-course-slider-window {
                                overflow: hidden;
                            }
                            .aa-course-slider-track {
                                display: flex;
                                gap: 20px;
                                transition: transform 0.35s ease;
                                will-change: transform;
                            }
                            .aa-course-card {
                                flex: 0 0 calc((100% - 60px) / 4);
                                background: #fff;
                                border: 1px solid #e9e9e9;
                                border-radius: 12px;
                                overflow: hidden;
                                box-shadow: 0 8px 22px rgba(0,0,0,0.06);
                            }
                            .aa-course-card-image {
                                display: block;
                                aspect-ratio: 16 / 9;
                                background: #f7f7f7;
                                overflow: hidden;
                            }
                            .aa-course-card-image img {
                                width: 100%;
                                height: 100%;
                                object-fit: cover;
                                display: block;
                            }
                            .aa-course-card-body {
                                padding: 18px;
                            }
                            .aa-course-card-title {
                                margin: 0 0 10px;
                                font-size: 20px;
                                line-height: 1.35;
                                min-height: 54px;
                            }
                            .aa-course-card-title a {
                                color: #2b2b2b;
                                text-decoration: none;
                            }
                            .aa-course-card-title a:hover {
                                color: #2c75e4;
                            }
                            .aa-course-card-desc {
                                color: #666;
                                line-height: 1.7;
                                min-height: 74px;
                                margin-bottom: 14px;
                            }
                            .aa-course-meta {
                                display: flex;
                                flex-wrap: wrap;
                                gap: 8px 12px;
                                margin-bottom: 14px;
                                color: #444;
                                font-size: 14px;
                            }
                            .aa-course-meta span {
                                background: #f3f6fb;
                                padding: 6px 10px;
                                border-radius: 999px;
                            }
                            .aa-course-footer {
                                display: flex;
                                align-items: center;
                                justify-content: space-between;
                                gap: 12px;
                            }
                            .aa-course-price {
                                font-size: 20px;
                                font-weight: 700;
                                color: #2c75e4;
                            }
                            .aa-course-preview-btn {
                                display: inline-flex;
                                align-items: center;
                                gap: 8px;
                                padding: 10px 16px;
                                border-radius: 8px;
                                background: #2c75e4;
                                color: #fff;
                                text-decoration: none;
                                font-weight: 600;
                            }
                            .aa-course-preview-btn:hover,
                            .aa-course-preview-btn:focus {
                                color: #fff;
                                background: #1f5db8;
                                text-decoration: none;
                            }
                            .aa-course-nav {
                                position: absolute;
                                top: 42%;
                                transform: translateY(-50%);
                                width: 36px;
                                height: 36px;
                                border: none;
                                border-radius: 50%;
                                background: rgba(44,117,228,0.92);
                                color: #fff;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                cursor: pointer;
                                box-shadow: 0 4px 12px rgba(0,0,0,0.18);
                                z-index: 2;
                            }
                            .aa-course-nav:hover {
                                background: #1f5db8;
                            }
                            .aa-course-nav-left { left: 0; }
                            .aa-course-nav-right { right: 0; }
                            .aa-course-nav[hidden] { display: none !important; }
                            .aa-empty-course {
                                padding: 20px 0;
                                color: #666;
                            }
                            @media (max-width: 1199px) {
                                .aa-course-card { flex-basis: calc((100% - 40px) / 3); }
                            }
                            @media (max-width: 991px) {
                                .aa-course-slider-shell { padding: 0 38px; }
                                .aa-course-card { flex-basis: calc((100% - 20px) / 2); }
                                .aa-course-card-title { min-height: auto; }
                                .aa-course-card-desc { min-height: auto; }
                            }
                            @media (max-width: 575px) {
                                .aa-course-slider-shell { padding: 0 30px; }
                                .aa-course-card { flex-basis: 100%; }
                                .aa-course-footer { flex-direction: column; align-items: flex-start; }
                                .aa-course-preview-btn { width: 100%; justify-content: center; }
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
                                'title' => 'TOFEL Courses',
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
                                                                <div class="aa-course-price">TK<?php echo number_format((float)($course['course_amount'] ?? 0), 0); ?></div>
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

<div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-parallax="1.6" data-vc-parallax-image="https://i0.wp.com/pecpte.com/wp-content/uploads/2018/09/achivements.jpg?fit=1920%2C1000&amp;ssl=1" class="vc_row wpb_row vc_row-fluid stm_fixed_background vc_custom_1536836667813 vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving" style="position: relative; left: -160.4px; box-sizing: border-box; width: 1521px; padding-left: 160.4px; padding-right: 160.6px;">
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
            <form data-auto-scroll="" data-no-message-redirect="" data-thousand="" data-decimal="." data-delay="" data-id="2" class="fc-form fc-form-2 align- spin- save-form- dont-submit-hidden- remove-asterisk- icons-hide- disable-enter- label-block field-border-visible frame-visible field-alignment-left options-fade align-left" style="width: 580px; color: #666666; font-size: 100%; background: white">
                <div class="form-page form-page-0 active" data-index="0">

                    <div class="form-page-content     ">
                        <div data-identifier="field1" data-index="0" style="width: 50%" class=" form-element form-element-field1 options-false index-false form-element-0 default-false form-element-type-oneLineText is-required-true odd -handle">
                            <div class="form-element-html"><div><label class="oneLineText-cover field-cover"><span class="sub-label-true"><span class="main-label"><span>First Name</span></span><span class="sub-label"><span>Enter your First Name</span></span></span><div><span class="error"></span><input type="text" placeholder="" make-read-only="false" data-field-id="field1" name="field1[]" data-min-char="" data-max-char="" data-val-type="" data-regexp="" data-is-required="true" data-allow-spaces="" class="validation-lenient" data-placement="right" data-toggle="tooltip" tooltip="" data-trigger="focus" data-html="true" data-input-mask="" data-mask-placeholder="" data-original-title=""></div></label></div></div>

                        </div><div data-identifier="field2" data-index="1" style="width: 50%" class=" even form-element form-element-field2 options-false index-false form-element-1 default-false form-element-type-oneLineText is-required-true -handle">
                            <div class="form-element-html"><div><label class="oneLineText-cover field-cover"><span class="sub-label-true"><span class="main-label"><span>Last Name</span></span><span class="sub-label"><span>Enter Your Last Name</span></span></span><div><span class="error"></span><input type="text" placeholder="" make-read-only="false" data-field-id="field2" name="field2[]" data-min-char="" data-max-char="" data-val-type="" data-regexp="" data-is-required="true" data-allow-spaces="" class="validation-lenient" data-placement="right" data-toggle="tooltip" tooltip="" data-trigger="focus" data-html="true" data-input-mask="" data-mask-placeholder="" data-original-title=""></div></label></div></div>

                        </div><div data-identifier="field4" data-index="2" style="width: 100%" class=" form-element form-element-field4 options-false index-false form-element-2 default-false form-element-type-email is-required-false odd -handle">
                            <div class="form-element-html"><div><label class="email-cover field-cover"><span class="sub-label-true"><span class="main-label"><span>Email</span></span><span class="sub-label"><span>Enter valid email</span></span></span><div><span class="error"></span><input placeholder="" data-field-id="field4" type="text" data-val-type="email" make-read-only="" data-is-required="false" name="field4" class="validation-lenient" data-placement="right" data-toggle="tooltip" tooltip="" data-trigger="focus" data-html="true" data-original-title=""></div></label></div></div>

                        </div><div data-identifier="field5" data-index="3" style="width: 100%" class=" even form-element form-element-field5 options-false index-false form-element-3 default-false form-element-type-oneLineText is-required-true -handle">
                            <div class="form-element-html"><div><label class="oneLineText-cover field-cover has-input"><span class="sub-label-true"><span class="main-label"><span>Number</span></span><span class="sub-label"><span>Enter phone number</span></span></span><div><span class="error"></span><input type="text" placeholder="+880" make-read-only="false" data-field-id="field5" name="field5[]" data-min-char="" data-max-char="" data-val-type="" data-regexp="" data-is-required="true" data-allow-spaces="" class="validation-lenient" data-placement="right" data-toggle="tooltip" tooltip="" data-trigger="focus" data-html="true" data-input-mask="" data-mask-placeholder="+880" data-original-title=""></div></label></div></div>

                        </div>
                        <input type="submit" value="Submit" class="btn btn-primary" style="margin-bottom:20px;background-color: #4488ee; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
                    </div>
                </div>
            </form>
            <div class="prev-next prev-next-1" style="width: 580px; color: #666666; font-size: 100%; background: white">
                <div><input type="text" class="  "><span class="inactive page-prev "><i class="formcraft-icon">keyboard_arrow_left</i>Previous</span></div>
                <div><input type="text" class="  "><span class="page-next ">Next<i class="formcraft-icon">keyboard_arrow_right</i></span></div>
            </div>
        </div></div>
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
                                                                            <a href="">Ayan Academy</a><span class="post_list_divider">,</span>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
if (typeof WOW !== "undefined") { new WOW({ mobile: true }).init(); }
</script>
<footer data-wpr-lazyrender="1" id="footer" class="parallax-off">
            <div class="footer_wrapper">



        <div id="footer_bottom" style="background-color: black;">
            <div class="footer_widgets_wrapper kek text-upper">
<?php include('footer.php') ?>