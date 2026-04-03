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
$teamRes = mysqli_query($conn, "SELECT * FROM team ORDER BY id DESC");

include('header.php');
?>

<div id="main">
    <style>
        #wrapper #main {
            min-height: 400px !important;
        }

        .team-section {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .team-box {
            text-align: center;
            margin-bottom: 30px;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
            height: 100%;
        }

        .team-box img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            display: block;
        }

        .team-content {
            padding: 18px 16px 20px;
        }

        .team-box h4 {
            margin: 0 0 8px;
            font-size: 20px;
            font-weight: 700;
            color: #222;
        }

        .team-role {
            margin-bottom: 10px;
            font-size: 15px;
            font-weight: 600;
            color: #7c3aed;
        }

        .team-meta {
            margin: 6px 0;
            font-size: 14px;
            line-height: 1.7;
            color: #555;
        }

        .team-meta strong {
            color: #222;
        }
    </style>

    <div class="stm_lms_breadcrumbs stm_lms_breadcrumbs__header_default"></div>
</div>
</div>

<div class="container team-section">
    <div class="row">

        <?php if ($teamRes && mysqli_num_rows($teamRes) > 0): ?>

            <?php while ($team = mysqli_fetch_assoc($teamRes)): ?>

                <?php
                $name = $team['name'] ?? '';
                $role = $team['role'] ?? '';
                $qualifications = $team['qualifications'] ?? '';
                $university = $team['university'] ?? '';

                $image = trim($team['image'] ?? '');
                $teamImage = $image !== '' ? 'admin/dist/' . ltrim($image, '/') : 'thumbnail.png';
                ?>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-box">
                        <img src="<?php echo e($teamImage); ?>" alt="<?php echo e($name); ?>">

                        <div class="team-content">
                            <h4><?php echo e($name); ?></h4>

                            <?php if (!empty($role)): ?>
                                <div class="team-role"><?php echo e($role); ?></div>
                            <?php endif; ?>

                            <?php if (!empty($qualifications)): ?>
                                <div class="team-meta">
                                    <strong>Qualifications:</strong>
                                    <?php echo e($qualifications); ?>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($university)): ?>
                                <div class="team-meta">
                                    <strong>University:</strong>
                                    <?php echo e($university); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>

        <?php else: ?>
            <div class="col-md-12">
                <p>No team members found.</p>
            </div>
        <?php endif; ?>

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