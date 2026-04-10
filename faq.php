<?php
include 'db.php';

function e($value) {
    return htmlspecialchars((string)($value ?? ''), ENT_QUOTES, 'UTF-8');
}

$faqs = [
    [
        'question' => 'What courses does Ayan\'s Academy offer?',
        'answer' => 'Ayan\'s Academy offers PTE Courses (On Campus), PTE Courses (Online), IELTS Courses, TOEFL Courses, Spoken English, Basic English, A to Z Grammar, Phonetics, and other language preparation programs.'
    ],
    [
        'question' => 'Do you provide both online and offline classes?',
        'answer' => 'Yes. We provide both on-campus and online learning options depending on the course and student preference.'
    ],
    [
        'question' => 'How can I enroll in a course?',
        'answer' => 'You can enroll by contacting us directly, visiting our office, or submitting an inquiry through the website. Our team will guide you through the admission process.'
    ],
    [
        'question' => 'Do you provide mock tests?',
        'answer' => 'Yes. We provide mock tests and practice support for exam preparation courses such as PTE and IELTS.'
    ],
    [
        'question' => 'Do you help with study abroad applications?',
        'answer' => 'Yes. We provide guidance for study abroad, including application support, country selection, and related consultation.'
    ],
    [
        'question' => 'Where is Ayan\'s Academy located?',
        'answer' => 'Our office is located at House no-440 (2nd Floor Left Side), Road no-6, Avenue-6, Mirpur-DOHS, Dhaka-1216.'
    ],
    [
        'question' => 'What are your business hours?',
        'answer' => 'Our business hours are Monday to Saturday, 10:00 AM to 6:00 PM. Sunday is closed.'
    ],
    [
        'question' => 'How can I contact Ayan\'s Academy?',
        'answer' => 'You can contact us by phone at +880 1319904015 or by email at info@ayansacademy.com.'
    ],
];

include('header.php');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<style>
    .aa-faq-page {
        padding: 50px 0 80px;
        background: #f7f9fd;
    }

    .aa-faq-hero {
        margin-bottom: 28px;
        text-align: center;
    }

    .aa-faq-badge {
        display: inline-block;
        padding: 8px 14px;
        border-radius: 999px;
        background: rgba(44, 117, 228, 0.08);
        color: #2c75e4;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        margin-bottom: 14px;
    }

    .aa-faq-title {
        margin: 0 0 12px;
        font-size: 42px;
        line-height: 1.15;
        font-weight: 800;
        color: #1f2d4d;
    }

    .aa-faq-subtitle {
        max-width: 760px;
        margin: 0 auto;
        color: #5e677a;
        font-size: 16px;
        line-height: 1.8;
    }

    .aa-faq-wrap {
        max-width: 980px;
        margin: 0 auto;
    }

    .aa-faq-card {
        background: #fff;
        border: 1px solid #e8eef8;
        border-radius: 18px;
        box-shadow: 0 12px 28px rgba(20, 34, 66, 0.06);
        overflow: hidden;
    }

    .aa-faq-item + .aa-faq-item {
        border-top: 1px solid #edf1f7;
    }

    .aa-faq-question {
        width: 100%;
        border: none;
        background: #fff;
        padding: 22px 24px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        text-align: left;
        cursor: pointer;
        font-size: 20px;
        line-height: 1.45;
        font-weight: 700;
        color: #1f2d4d;
        transition: background-color .2s ease, color .2s ease;
    }

    .aa-faq-question:hover,
    .aa-faq-question:focus {
        background: #f8fbff;
        color: #2c75e4;
        outline: none;
    }

    .aa-faq-icon {
        flex: 0 0 38px;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background: #f1f6ff;
        color: #2c75e4;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        font-weight: 700;
        transition: transform .2s ease, background-color .2s ease, color .2s ease;
    }

    .aa-faq-item.active .aa-faq-icon {
        transform: rotate(45deg);
        background: #2c75e4;
        color: #fff;
    }

    .aa-faq-answer {
        display: none;
        padding: 0 24px 24px;
        color: #4b5568;
        font-size: 16px;
        line-height: 1.85;
        background: #fff;
    }

    .aa-faq-item.active .aa-faq-answer {
        display: block;
    }

    .aa-faq-contact {
        margin-top: 30px;
        background: linear-gradient(135deg, #2c75e4 0%, #4f46e5 100%);
        color: #fff;
        border-radius: 20px;
        padding: 28px;
        box-shadow: 0 16px 34px rgba(44, 117, 228, 0.18);
    }

    .aa-faq-contact h3 {
        margin: 0 0 10px;
        font-size: 28px;
        line-height: 1.2;
        color: #fff;
    }

    .aa-faq-contact p {
        margin: 0 0 18px;
        color: rgba(255,255,255,0.92);
        line-height: 1.8;
    }

    .aa-faq-contact-links {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
    }

    .aa-faq-contact-links a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 12px 18px;
        border-radius: 999px;
        background: rgba(255,255,255,0.16);
        color: #fff;
        text-decoration: none;
        font-weight: 700;
        border: 1px solid rgba(255,255,255,0.22);
    }

    .aa-faq-contact-links a:hover,
    .aa-faq-contact-links a:focus {
        background: #fff;
        color: #2c75e4;
        text-decoration: none;
    }

    @media (max-width: 767px) {
        .aa-faq-page {
            padding: 36px 0 60px;
        }

        .aa-faq-title {
            font-size: 32px;
        }

        .aa-faq-subtitle {
            font-size: 15px;
        }

        .aa-faq-question {
            padding: 18px 16px;
            font-size: 17px;
        }

        .aa-faq-answer {
            padding: 0 16px 18px;
            font-size: 15px;
        }

        .aa-faq-contact {
            padding: 22px 18px;
            border-radius: 16px;
        }

        .aa-faq-contact h3 {
            font-size: 24px;
        }
    }
</style>

<div id="main">
    <div class="aa-faq-page">
        <div class="container">
            <div class="aa-faq-hero wow fadeInUp" data-wow-offset="80">
                <div class="aa-faq-badge">Frequently Asked Questions</div>
                <h1 class="aa-faq-title">FAQ</h1>
                <p class="aa-faq-subtitle">
                    Find quick answers about our courses, admission process, study abroad support, contact details, and class formats.
                </p>
            </div>

            <div class="aa-faq-wrap">
                <div class="aa-faq-card wow fadeInUp" data-wow-offset="60">
                    <?php foreach ($faqs as $index => $faq): ?>
                        <div class="aa-faq-item<?php echo $index === 0 ? ' active' : ''; ?>">
                            <button type="button" class="aa-faq-question">
                                <span><?php echo e($faq['question']); ?></span>
                                <span class="aa-faq-icon">+</span>
                            </button>
                            <div class="aa-faq-answer">
                                <p><?php echo e($faq['answer']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="aa-faq-contact wow fadeInUp" data-wow-offset="60">
                    <h3>Still need help?</h3>
                    <p>
                        Reach out to Ayan's Academy for course guidance, admission support, or study abroad consultation.
                    </p>
                    <div class="aa-faq-contact-links">
                        <a href="tel:+8801319904015">Call Now</a>
                        <a href="mailto:info@ayansacademy.com">Email Us</a>
                        <a href="contact.php">Contact Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
if (typeof WOW !== "undefined") {
    new WOW({ mobile: true }).init();
}

document.querySelectorAll('.aa-faq-question').forEach(function(button) {
    button.addEventListener('click', function () {
        var item = button.closest('.aa-faq-item');
        var card = button.closest('.aa-faq-card');

        if (!item || !card) return;

        card.querySelectorAll('.aa-faq-item').forEach(function(other) {
            if (other !== item) {
                other.classList.remove('active');
            }
        });

        item.classList.toggle('active');
    });
});
</script>

<footer data-wpr-lazyrender="1" id="footer" class="parallax-off">
    <div class="footer_wrapper">
        <div id="footer_bottom" style="background-color: black;">
            <div class="footer_widgets_wrapper kek text-upper">
                <?php include('footer.php') ?>
            </div>
        </div>
    </div>
</footer>
