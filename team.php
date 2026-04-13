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

function excerpt_text($html, $limit = 140) {
    $text = trim(html_entity_decode(strip_tags((string)$html), ENT_QUOTES, 'UTF-8'));
    if ($text === '') {
        return '';
    }
    if (mb_strlen($text) <= $limit) {
        return $text;
    }
    return mb_substr($text, 0, $limit) . '...';
}

$logoRes = mysqli_query($conn, "SELECT * FROM logos ORDER BY id DESC LIMIT 1");
$logo = $logoRes ? mysqli_fetch_assoc($logoRes) : null;

$bannerRes = mysqli_query($conn, "SELECT * FROM banners ORDER BY id DESC LIMIT 1");
$banner = $bannerRes ? mysqli_fetch_assoc($bannerRes) : null;

$logoTransparent = local_image($logo['logo_image'] ?? 'thumbnail.png', 'thumbnail.png');
$logoColored = local_image($logo['logo_image'] ?? 'logo.png', 'logo.png');
$bannerImage = local_image($banner['banner_image'] ?? 'banner1.jpg', 'banner1.jpg');
$bannerTitle = $banner['title'] ?? 'Meet Our Expert Team';

$teamRes = mysqli_query($conn, "SELECT * FROM team ORDER BY id DESC");

include('header.php');
?>

<style>
    #wrapper #main {
        min-height: 0 !important;
    }

    .team-hero {
        position: relative;
        padding: 72px 0 80px;
        background:
            linear-gradient(135deg, rgba(93, 63, 211, 0.92), rgba(20, 28, 58, 0.92)),
            url('<?php echo e('admin/dist/' . ltrim($bannerImage, '/')); ?>') center/cover no-repeat;
        color: #fff;
        overflow: hidden;
    }

    .team-hero:before,
    .team-hero:after {
        content: "";
        position: absolute;
        border-radius: 50%;
        background: rgba(255,255,255,0.08);
        filter: blur(2px);
    }

    .team-hero:before {
        width: 260px;
        height: 260px;
        top: -80px;
        right: -60px;
    }

    .team-hero:after {
        width: 180px;
        height: 180px;
        bottom: -50px;
        left: -40px;
    }

    .team-hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
        max-width: 760px;
        margin: 0 auto;
    }

    .team-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 16px;
        background: rgba(255,255,255,0.14);
        border: 1px solid rgba(255,255,255,0.2);
        border-radius: 999px;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.4px;
        text-transform: uppercase;
        margin-bottom: 18px;
    }

    .team-hero h1 {
        color: #fff !important;
        margin: 0 0 14px;
        font-size: 46px;
        line-height: 1.15;
        font-weight: 800;
    }

    .team-hero p {
        margin: 0 auto;
        max-width: 650px;
        font-size: 17px;
        line-height: 1.8;
        color: rgba(255,255,255,0.92);
    }

    .team-section {
        padding: 55px 0 70px;
        background: linear-gradient(180deg, #f8f8ff 0%, #ffffff 100%);
    }

    .team-section-head {
        text-align: center;
        max-width: 720px;
        margin: 0 auto 35px;
    }

    .team-section-head h2 {
        margin-bottom: 10px;
        font-size: 34px;
        font-weight: 800;
        color: #1b2240;
    }

    .team-section-head p {
        color: #667085;
        font-size: 15px;
        line-height: 1.8;
        margin-bottom: 0;
    }

    .team-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 28px;
    }

    .team-card {
        background: #fff;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 14px 38px rgba(16, 24, 40, 0.08);
        border: 1px solid rgba(124, 58, 237, 0.08);
        transition: transform .28s ease, box-shadow .28s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .team-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 22px 48px rgba(16, 24, 40, 0.13);
    }

    .team-card-media {
        position: relative;
        overflow: hidden;
    }

    .team-card-media img {
        width: 100%;
        height: 310px;
        object-fit: cover;
        display: block;
    }

    .team-card-body {
        padding: 22px 22px 24px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .team-role-chip {
        display: inline-block;
        align-self: flex-start;
        padding: 7px 12px;
        border-radius: 999px;
        background: rgba(124, 58, 237, 0.1);
        color: #7c3aed;
        font-size: 12px;
        font-weight: 700;
        margin-bottom: 14px;
    }

    .team-card h3 {
        margin: 0 0 8px;
        font-size: 22px;
        font-weight: 800;
        color: #182230;
        line-height: 1.25;
    }

    .team-card-list {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .team-card-list li {
        display: flex;
        gap: 8px;
        align-items: flex-start;
        margin-bottom: 8px;
        color: #475467;
        font-size: 14px;
        line-height: 1.7;
    }

    .team-card-list li strong {
        color: #182230;
        min-width: 104px;
        font-weight: 700;
    }

    .team-card-excerpt {
        margin: 12px 0 20px;
        color: #667085;
        font-size: 14px;
        line-height: 1.8;
        min-height: 74px;
    }

    .team-actions {
        margin-top: auto;
        display: flex;
        gap: 12px;
        align-items: center;
    }

    .team-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        min-height: 46px;
        padding: 0 18px;
        border-radius: 14px;
        text-decoration: none !important;
        font-size: 14px;
        font-weight: 700;
        transition: all .25s ease;
    }

    .team-btn-primary {
        background: linear-gradient(135deg, #7c3aed, #5b21b6);
        color: #fff !important;
        box-shadow: 0 10px 20px rgba(124, 58, 237, 0.25);
    }

    .team-btn-primary:hover {
        color: #fff !important;
        transform: translateY(-2px);
        box-shadow: 0 14px 24px rgba(124, 58, 237, 0.3);
    }

    .team-empty {
        text-align: center;
        background: #fff;
        border-radius: 20px;
        padding: 36px 24px;
        box-shadow: 0 10px 24px rgba(16, 24, 40, 0.08);
        color: #667085;
    }

    @media (max-width: 1199px) {
        .team-grid {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }
    }

    @media (max-width: 991px) {
        .team-hero {
            padding: 54px 0 58px;
        }

        .team-hero h1 {
            font-size: 36px;
        }

        .team-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 767px) {
        .team-hero h1 {
            font-size: 30px;
        }

        .team-hero p {
            font-size: 15px;
        }

        .team-section {
            padding: 40px 0 50px;
        }

        .team-section-head h2 {
            font-size: 28px;
        }

        .team-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .team-card-media img {
            height: 280px;
        }

        .team-card-body {
            padding: 18px;
        }

        .team-card-list li strong {
            min-width: 92px;
        }
    }
</style>

<div id="main">
    <section class="team-hero">
        <div class="container">
            <div class="team-hero-content">
                <div class="team-badge">Our Team</div>
                <h1>Meet the People Behind Ayan's Academy</h1>
                <p>Our expert mentors and leadership team are here to guide students with knowledge, care, and practical support. Explore each profile to learn more about their background and expertise.</p>
            </div>
        </div>
    </section>

    <section class="team-section">
        <div class="container">
            <div class="team-section-head">
                <h2>Dedicated Experts, Real Guidance</h2>
                <p>Each team member brings experience, subject knowledge, and a student-first mindset. Click read more to view the full profile and details from your team table.</p>
            </div>

            <?php if ($teamRes && mysqli_num_rows($teamRes) > 0): ?>
                <div class="team-grid">
                    <?php while ($team = mysqli_fetch_assoc($teamRes)): ?>
                        <?php
                        $id = (int)($team['id'] ?? 0);
                        $name = $team['name'] ?? '';
                        $role = $team['role'] ?? '';
                        $qualifications = $team['qualifications'] ?? '';
                        $university = $team['university'] ?? '';
                        $details = $team['details'] ?? '';

                        $image = trim($team['image'] ?? '');
                        $teamImage = $image !== '' ? 'admin/dist/' . ltrim($image, '/') : 'thumbnail.png';

                        $excerpt = excerpt_text($details, 135);
                        if ($excerpt === '') {
                            $excerpt = 'Click read more to view this team member’s full profile, experience, and detailed information.';
                        }
                        ?>
                        <article class="team-card">
                            <div class="team-card-media">
                                <img src="<?php echo e($teamImage); ?>" alt="<?php echo e($name); ?>">
                            </div>

                            <div class="team-card-body">
                                <?php if (!empty($role)): ?>
                                    <span class="team-role-chip"><?php echo e($role); ?></span>
                                <?php endif; ?>

                                <h3><?php echo e($name); ?></h3>

                                <ul class="team-card-list">
                                    <?php if (!empty($qualifications)): ?>
                                        <li><strong>Qualification</strong><span><?php echo e($qualifications); ?></span></li>
                                    <?php endif; ?>

                                    <?php if (!empty($university)): ?>
                                        <li><strong>University</strong><span><?php echo e($university); ?></span></li>
                                    <?php endif; ?>
                                </ul>

                                <div class="team-card-excerpt"><?php echo e($excerpt); ?></div>

                                <div class="team-actions">
                                    <a class="team-btn team-btn-primary" href="team-details.php?id=<?php echo $id; ?>">Read More</a>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
            <?php else: ?>
                <div class="team-empty">
                    <h4 style="margin-top:0; margin-bottom:10px; color:#1b2240;">No team members found</h4>
                    <p style="margin-bottom:0;">Please add team members from the admin panel to show them here.</p>
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
