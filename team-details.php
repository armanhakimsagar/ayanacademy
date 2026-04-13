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

$logoRes = mysqli_query($conn, "SELECT * FROM logos ORDER BY id DESC LIMIT 1");
$logo = $logoRes ? mysqli_fetch_assoc($logoRes) : null;

$bannerRes = mysqli_query($conn, "SELECT * FROM banners ORDER BY id DESC LIMIT 1");
$banner = $bannerRes ? mysqli_fetch_assoc($bannerRes) : null;

$logoTransparent = local_image($logo['logo_image'] ?? 'thumbnail.png', 'thumbnail.png');
$logoColored = local_image($logo['logo_image'] ?? 'logo.png', 'logo.png');
$bannerImage = local_image($banner['banner_image'] ?? 'banner1.jpg', 'banner1.jpg');

$teamId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$team = null;

if ($teamId > 0) {
    $stmt = mysqli_prepare($conn, "SELECT * FROM team WHERE id = ? LIMIT 1");
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $teamId);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $team = $result ? mysqli_fetch_assoc($result) : null;
        mysqli_stmt_close($stmt);
    }
}

$pageTitle = $team['name'] ?? 'Team Details';

include('header.php');
?>

<style>
    #wrapper #main {
        min-height: 0 !important;
    }

    .member-hero {
        position: relative;
        padding: 64px 0 72px;
        background:
            linear-gradient(135deg, rgba(16, 24, 40, 0.90), rgba(93, 63, 211, 0.88)),
            url('<?php echo e('admin/dist/' . ltrim($bannerImage, '/')); ?>') center/cover no-repeat;
        color: #fff;
        overflow: hidden;
    }

    .member-hero-content {
        max-width: 760px;
        margin: 0 auto;
        text-align: center;
        position: relative;
        z-index: 2;
    }

    .member-hero-tag {
        display: inline-block;
        padding: 8px 15px;
        border-radius: 999px;
        background: rgba(255,255,255,0.14);
        border: 1px solid rgba(255,255,255,0.2);
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .4px;
        margin-bottom: 18px;
    }

    .member-hero h1 {
        color: #fff !important;
        margin: 0 0 12px;
        font-size: 44px;
        line-height: 1.18;
        font-weight: 800;
    }

    .member-hero p {
        margin: 0 auto;
        color: rgba(255,255,255,0.9);
        max-width: 620px;
        font-size: 16px;
        line-height: 1.8;
    }

    .member-wrap {
        background: linear-gradient(180deg, #f8f8ff 0%, #ffffff 100%);
        padding: 50px 0 70px;
    }

    .member-card {
        background: #fff;
        border-radius: 26px;
        overflow: hidden;
        box-shadow: 0 18px 48px rgba(16, 24, 40, 0.08);
        border: 1px solid rgba(124, 58, 237, 0.08);
    }

    .member-grid {
        display: grid;
        grid-template-columns: 370px minmax(0, 1fr);
        gap: 0;
    }

    .member-sidebar {
        background: linear-gradient(180deg, #faf5ff 0%, #f4f3ff 100%);
        padding: 24px;
        border-right: 1px solid rgba(124, 58, 237, 0.08);
    }

    .member-image-box {
        border-radius: 22px;
        overflow: hidden;
        box-shadow: 0 14px 30px rgba(16, 24, 40, 0.12);
        margin-bottom: 22px;
    }

    .member-image-box img {
        width: 100%;
        height: 420px;
        object-fit: cover;
        display: block;
    }

    .member-chip {
        display: inline-block;
        padding: 8px 14px;
        border-radius: 999px;
        background: rgba(124, 58, 237, 0.1);
        color: #7c3aed;
        font-size: 12px;
        font-weight: 700;
        margin-bottom: 16px;
    }

    .member-quick {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .member-quick li {
        padding: 12px 0;
        border-bottom: 1px solid rgba(124, 58, 237, 0.08);
        color: #475467;
        line-height: 1.7;
        font-size: 14px;
    }

    .member-quick li:last-child {
        border-bottom: none;
    }

    .member-quick strong {
        display: block;
        color: #182230;
        margin-bottom: 4px;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: .3px;
    }

    .member-content {
        padding: 34px 34px 38px;
    }

    .member-content-top {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 18px;
        margin-bottom: 22px;
        flex-wrap: wrap;
    }

    .member-content h2 {
        margin: 0 0 8px;
        font-size: 36px;
        line-height: 1.2;
        font-weight: 800;
        color: #182230;
    }

    .member-subtitle {
        font-size: 16px;
        color: #7c3aed;
        font-weight: 700;
        margin: 0;
    }

    .member-back-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 46px;
        padding: 0 18px;
        border-radius: 14px;
        background: #182230;
        color: #fff !important;
        text-decoration: none !important;
        font-size: 14px;
        font-weight: 700;
        transition: all .25s ease;
    }

    .member-back-btn:hover {
        color: #fff !important;
        transform: translateY(-2px);
        background: #0f1728;
    }

    .member-details {
        color: #475467;
        font-size: 15px;
        line-height: 1.95;
    }

    .member-details p:last-child {
        margin-bottom: 0;
    }

    .member-empty {
        max-width: 760px;
        margin: 0 auto;
        background: #fff;
        border-radius: 24px;
        box-shadow: 0 16px 42px rgba(16, 24, 40, 0.08);
        text-align: center;
        padding: 42px 28px;
    }

    .member-empty h2 {
        margin-top: 0;
        margin-bottom: 12px;
        color: #182230;
        font-size: 30px;
        font-weight: 800;
    }

    .member-empty p {
        color: #667085;
        line-height: 1.8;
        margin-bottom: 20px;
    }

    @media (max-width: 991px) {
        .member-hero h1 {
            font-size: 34px;
        }

        .member-grid {
            grid-template-columns: 1fr;
        }

        .member-sidebar {
            border-right: none;
            border-bottom: 1px solid rgba(124, 58, 237, 0.08);
        }
    }

    @media (max-width: 767px) {
        .member-hero {
            padding: 52px 0 58px;
        }

        .member-hero h1 {
            font-size: 28px;
        }

        .member-hero p {
            font-size: 15px;
        }

        .member-wrap {
            padding: 36px 0 50px;
        }

        .member-sidebar,
        .member-content {
            padding: 18px;
        }

        .member-content h2 {
            font-size: 28px;
        }

        .member-image-box img {
            height: 340px;
        }
    }
</style>

<div id="main">
    <section class="member-hero">
        <div class="container">
            <div class="member-hero-content">
                <div class="member-hero-tag">Team Details</div>
                <h1><?php echo e($pageTitle); ?></h1>
                <p>Learn more about the people who support students at Ayan's Academy with expertise, dedication, and personal guidance.</p>
            </div>
        </div>
    </section>

    <section class="member-wrap">
        <div class="container">
            <?php if ($team): ?>
                <?php
                $name = $team['name'] ?? '';
                $role = $team['role'] ?? '';
                $qualifications = $team['qualifications'] ?? '';
                $university = $team['university'] ?? '';
                $details = trim((string)($team['details'] ?? ''));

                $image = trim($team['image'] ?? '');
                $teamImage = $image !== '' ? 'admin/dist/' . ltrim($image, '/') : 'thumbnail.png';

                if ($details === '') {
                    $details = '<p>Detailed profile information has not been added yet for this team member.</p>';
                } else {
                    $details = nl2br($details);
                }
                ?>
                <div class="member-card">
                    <div class="member-grid">
                        <aside class="member-sidebar">
                            <div class="member-image-box">
                                <img src="<?php echo e($teamImage); ?>" alt="<?php echo e($name); ?>">
                            </div>

                            <?php if (!empty($role)): ?>
                                <span class="member-chip"><?php echo e($role); ?></span>
                            <?php endif; ?>

                            <ul class="member-quick">
                                <li>
                                    <strong>Name</strong>
                                    <span><?php echo e($name); ?></span>
                                </li>

                                <?php if (!empty($qualifications)): ?>
                                    <li>
                                        <strong>Qualification</strong>
                                        <span><?php echo e($qualifications); ?></span>
                                    </li>
                                <?php endif; ?>

                                <?php if (!empty($university)): ?>
                                    <li>
                                        <strong>University</strong>
                                        <span><?php echo e($university); ?></span>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </aside>

                        <div class="member-content">
                            <div class="member-content-top">
                                <div>
                                    <h2><?php echo e($name); ?></h2>
                                    <?php if (!empty($role)): ?>
                                        <p class="member-subtitle"><?php echo e($role); ?></p>
                                    <?php endif; ?>
                                </div>

                                <a class="member-back-btn" href="team.php">Back to Team</a>
                            </div>

                            <div class="member-details">
                                <?php echo $details; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="member-empty">
                    <h2>Team member not found</h2>
                    <p>The requested team profile could not be found. Please go back to the team page and select a valid member.</p>
                    <a class="member-back-btn" href="team.php">Back to Team</a>
                </div>
            <?php endif; ?>
        </div>
    </section>
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
