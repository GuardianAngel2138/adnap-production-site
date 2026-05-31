<?php
$page_title       = 'ADNAP Services — 2D & 3D Animation, Branding, AI Video & Web Design';
$page_description = 'Explore ADNAP\'s services: 2D animation, 3D animation, branding, AI video generation, and web design & development — built to deliver impact.';
?>
<!DOCTYPE html>

<!--[if IE 8]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
<?php include __DIR__ . '/partials/head.php'; ?>
<style>
/* ── Service link rows ── */
.svc-list { list-style: none; margin: 0; padding: 0; }

.svc-row {
    display: block;
    text-decoration: none;
    color: inherit;
}
.svc-row-inner {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 28px 0;
    gap: 16px;
    transition: padding 0.3s ease;
}
.svc-row-left {
    display: flex;
    align-items: baseline;
    gap: 20px;
    min-width: 0;
}
.svc-num {
    font-size: clamp(1.4rem, 3vw, 2.2rem);
    font-weight: 500;
    letter-spacing: -0.03em;
    color: var(--primary);
    min-width: 48px;
    transition: color 0.32s ease;
    flex-shrink: 0;
}
.svc-name {
    font-size: clamp(2rem, 5.5vw, 4.4rem);
    font-weight: 600;
    letter-spacing: -0.03em;
    line-height: 1;
    color: rgba(255,255,255,0.28);
    margin: 0;
    transition: color 0.32s ease;
    white-space: nowrap;
}
.svc-row-right {
    display: flex;
    align-items: center;
    gap: 20px;
    flex-shrink: 0;
}
.svc-tag {
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.3);
    transition: color 0.32s ease;
    display: none;
}
@media (min-width: 768px) { .svc-tag { display: block; } }
.svc-arrow {
    width: 44px;
    height: 44px;
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.32s ease, border-color 0.32s ease, transform 0.32s ease;
    flex-shrink: 0;
}
.svc-arrow .icon {
    font-size: 14px;
    color: rgba(255,255,255,0.4);
    transition: color 0.32s ease;
    transform: rotate(-45deg);
    display: block;
    line-height: 1;
}

/* Hover */
.svc-row:hover .svc-name  { color: #fff; }
.svc-row:hover .svc-num   { color: var(--primary); }
.svc-row:hover .svc-tag   { color: rgba(255,255,255,0.64); }
.svc-row:hover .svc-arrow {
    background: var(--primary);
    border-color: var(--primary);
    transform: rotate(0deg);
}
.svc-row:hover .svc-arrow .icon {
    color: #fff;
    transform: rotate(0deg);
}
</style>
</head>

<body class="counter-scroll">
    <canvas class="cursor-trail d-none d-xl-block" id="trail"></canvas>

    <button id="goTop">
        <span class="border-progress"></span>
        <span class="ic-wrap">
            <span class="icon icon-arrow-caret-right"></span>
        </span>
    </button>

    <main id="wrapper">
<?php include __DIR__ . '/partials/nav-header.php'; ?>

        <div class="section-page-title">
            <div class="container text-center">
                <h1 class="page-title fw-semibold effectFade fadeZoom">Services</h1>
                <div class="breadcrumbs effectFade fadeUp">
                    <a href="index.php" class="link">Home</a>
                    <div>/</div>
                    <div>Services</div>
                </div>
            </div>
        </div>

        <!-- Intro -->
        <section class="flat-spacing">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <p class="mini-title text-caption text-white-64 effectFade fadeUp">WHAT WE DO</p>
                        <h2 class="text-display-2 letter-space--3 fw-semibold effectFade fadeUp">
                            Built to create.<br>Designed to convert.
                        </h2>
                    </div>
                    <div class="col-lg-5 ms-auto">
                        <p class="text-body-1 text-white-64 effectFade fadeUp">
                            Every service we offer is built around one goal — making your brand impossible to ignore. Click any service to explore what we deliver.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service List -->
        <section class="flat-spacing" style="padding-top:0;">
            <div class="container">
                <div class="br-line d-flex"></div>
                <ul class="svc-list">

                    <li>
                        <a href="service-2d-animation.php" class="svc-row effectFade fadeUp no-div">
                            <div class="svc-row-inner">
                                <div class="svc-row-left">
                                    <span class="svc-num">01</span>
                                    <h3 class="svc-name">2D Animation</h3>
                                </div>
                                <div class="svc-row-right">
                                    <span class="svc-tag">Animation</span>
                                    <div class="svc-arrow">
                                        <i class="icon icon-arrow-long-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="br-line d-flex"></div>
                        </a>
                    </li>

                    <li>
                        <a href="service-3d-animation.php" class="svc-row effectFade fadeUp no-div">
                            <div class="svc-row-inner">
                                <div class="svc-row-left">
                                    <span class="svc-num">02</span>
                                    <h3 class="svc-name">3D Animation</h3>
                                </div>
                                <div class="svc-row-right">
                                    <span class="svc-tag">Animation</span>
                                    <div class="svc-arrow">
                                        <i class="icon icon-arrow-long-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="br-line d-flex"></div>
                        </a>
                    </li>

                    <li>
                        <a href="service-branding.php" class="svc-row effectFade fadeUp no-div">
                            <div class="svc-row-inner">
                                <div class="svc-row-left">
                                    <span class="svc-num">03</span>
                                    <h3 class="svc-name">Branding</h3>
                                </div>
                                <div class="svc-row-right">
                                    <span class="svc-tag">Identity</span>
                                    <div class="svc-arrow">
                                        <i class="icon icon-arrow-long-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="br-line d-flex"></div>
                        </a>
                    </li>

                    <li>
                        <a href="service-ai-video.php" class="svc-row effectFade fadeUp no-div">
                            <div class="svc-row-inner">
                                <div class="svc-row-left">
                                    <span class="svc-num">04</span>
                                    <h3 class="svc-name">AI Video Generation</h3>
                                </div>
                                <div class="svc-row-right">
                                    <span class="svc-tag">AI Video</span>
                                    <div class="svc-arrow">
                                        <i class="icon icon-arrow-long-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="br-line d-flex"></div>
                        </a>
                    </li>

                    <li>
                        <a href="service-web-design.php" class="svc-row effectFade fadeUp no-div">
                            <div class="svc-row-inner">
                                <div class="svc-row-left">
                                    <span class="svc-num">05</span>
                                    <h3 class="svc-name">Web Design & Dev</h3>
                                </div>
                                <div class="svc-row-right">
                                    <span class="svc-tag">Web</span>
                                    <div class="svc-arrow">
                                        <i class="icon icon-arrow-long-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="br-line d-flex"></div>
                        </a>
                    </li>

                </ul>

                <div class="d-flex justify-content-center mt-5">
                    <a href="contact.php" class="tf-btn style-2">+ START YOUR PROJECT</a>
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section class="section-faq type-2 flat-spacing bg-surface">
            <div class="container">
                <div class="s-header d-block">
                    <h2 class="title text-display-2 letter-space--3 text-center text-black effectFade fadeUp">
                        <span class="text">
                            Frequently
                            <span class="icon"><img loading="lazy" width="80" height="80" src="assets/images/item/global-2.svg" alt=""></span>
                        </span><br>
                        asked questions
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="accordion-faq_list" id="accordion-faq_list">
                            <div class="accordion-faq_item cl-line-2" role="presentation">
                                <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed"
                                    data-bs-target="#faq-1" role="button" data-bs-toggle="collapse"
                                    aria-controls="faq-1" aria-expanded="false">
                                    <span class="accordion-order text-black-64">01</span>
                                    <p class="accordion-text text-black">How long does a typical project take?</p>
                                    <div class="ic-wrap d-flex"><i class="icon icon-arrow-caret-down fs-10 text-black"></i></div>
                                </div>
                                <div id="faq-1" class="collapse" data-bs-parent="#accordion-faq_list">
                                    <p class="accordion-content text-black-64">
                                        Most brand and animation projects are completed within 4–8 weeks depending on scope and revisions. AI video and web projects can move faster. We always agree on a clear timeline before work begins.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion-faq_item cl-line-2" role="presentation">
                                <div class="accordion-action text-body-1 letter-space--1 fw-medium"
                                    data-bs-target="#faq-2" role="button" data-bs-toggle="collapse"
                                    aria-controls="faq-2" aria-expanded="true">
                                    <span class="accordion-order text-black-64">02</span>
                                    <p class="accordion-text text-black">Do you work with international clients?</p>
                                    <div class="ic-wrap d-flex"><i class="icon icon-arrow-caret-down fs-10 text-black"></i></div>
                                </div>
                                <div id="faq-2" class="collapse show" data-bs-parent="#accordion-faq_list">
                                    <p class="accordion-content text-black-64">
                                        Absolutely. ADNAP works with clients across Southeast Asia, the Middle East, Europe, and beyond. We use async collaboration tools and video calls to keep every project running smoothly regardless of timezone.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion-faq_item cl-line-2" role="presentation">
                                <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed"
                                    data-bs-target="#faq-3" role="button" data-bs-toggle="collapse"
                                    aria-controls="faq-3" aria-expanded="false">
                                    <span class="accordion-order text-black-64">03</span>
                                    <p class="accordion-text text-black">Can I combine multiple services?</p>
                                    <div class="ic-wrap d-flex"><i class="icon icon-arrow-caret-down fs-10 text-black"></i></div>
                                </div>
                                <div id="faq-3" class="collapse" data-bs-parent="#accordion-faq_list">
                                    <p class="accordion-content text-black-64">
                                        Yes — most of our clients do. Branding + web design, 2D animation + AI video, or a full-stack creative package are all common. We scope them together so everything stays consistent and cost-efficient.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion-faq_item cl-line-2" role="presentation">
                                <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed"
                                    data-bs-target="#faq-4" role="button" data-bs-toggle="collapse"
                                    aria-controls="faq-4" aria-expanded="false">
                                    <span class="accordion-order text-black-64">04</span>
                                    <p class="accordion-text text-black">What does the engagement process look like?</p>
                                    <div class="ic-wrap d-flex"><i class="icon icon-arrow-caret-down fs-10 text-black"></i></div>
                                </div>
                                <div id="faq-4" class="collapse" data-bs-parent="#accordion-faq_list">
                                    <p class="accordion-content text-black-64">
                                        We start with a discovery call to understand your goals, then propose a clear scope and timeline. A 50% deposit secures your spot. We deliver in structured milestones with regular check-ins, and the final balance is due on approval.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion-faq_item cl-line-2" role="presentation">
                                <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed"
                                    data-bs-target="#faq-5" role="button" data-bs-toggle="collapse"
                                    aria-controls="faq-5" aria-expanded="false">
                                    <span class="accordion-order text-black-64">05</span>
                                    <p class="accordion-text text-black">Do you provide ongoing support after delivery?</p>
                                    <div class="ic-wrap d-flex"><i class="icon icon-arrow-caret-down fs-10 text-black"></i></div>
                                </div>
                                <div id="faq-5" class="collapse" data-bs-parent="#accordion-faq_list">
                                    <p class="accordion-content text-black-64">
                                        Yes. We offer retainer packages covering website maintenance, content updates, additional animation rounds, and ongoing creative support. Think of us as your long-term creative partner.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php include __DIR__ . '/partials/footer.php'; ?>
    </main>
<?php include __DIR__ . '/partials/mobile-menu.php'; ?>
<?php include __DIR__ . '/partials/scripts.php'; ?>
</body>

</html>
