<?php
$page_title       = 'ADNAP Portfolio â€” Our Work';
$page_description = 'Explore ADNAP\'s portfolio of 2D & 3D animation, branding, AI video, and web design projects that deliver impact and measurable results.';
?>
<!DOCTYPE html>

<!--[if IE 8]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
<?php include __DIR__ . '/partials/head.php'; ?>
<style>
/* â”€â”€ Hover-reveal overlay on wg-work cards â”€â”€ */
.wg-work {
    overflow: hidden;
    cursor: pointer;
}
.wg-work .work-content {
    opacity: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.90) 0%, rgba(0,0,0,0.50) 45%, rgba(0,0,0,0.08) 100%);
    transition: opacity 0.38s cubic-bezier(0.4, 0, 0.2, 1);
}
.wg-work:hover .work-content {
    opacity: 1;
}
.wg-work .work_top {
    transform: translateY(-10px);
    transition: transform 0.38s cubic-bezier(0.4, 0, 0.2, 1) 0.04s;
}
.wg-work:hover .work_top {
    transform: translateY(0);
}
.wg-work .work_bottom {
    transform: translateY(14px);
    transition: transform 0.38s cubic-bezier(0.4, 0, 0.2, 1) 0.04s;
}
.wg-work:hover .work_bottom {
    transform: translateY(0);
}
.wg-work .work-image img,
.wg-work .work-image video {
    transition: transform 0.65s cubic-bezier(0.4, 0, 0.2, 1);
}
.wg-work:hover .work-image img,
.wg-work:hover .work-image video {
    transform: scale(1.05);
}

/* â”€â”€ Uniform aspect-ratio in grids â”€â”€ */
.portfolio-grid .wg-work .work-image,
.service-grid .wg-work .work-image {
    aspect-ratio: 16/9;
    overflow: hidden;
    display: block;
}
.portfolio-grid .wg-work .work-image img,
.portfolio-grid .wg-work .work-image video,
.service-grid .wg-work .work-image img,
.service-grid .wg-work .work-image video {
    min-height: unset !important;
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

/* â”€â”€ Service-card label styles â”€â”€ */
.svc-label {
    font-size: 11px;
    letter-spacing: 0.12em;
    font-weight: 600;
    text-transform: uppercase;
}
.svc-desc {
    font-size: 14px;
    line-height: 1.55;
    color: rgba(255,255,255,0.64);
    margin: 6px 0 0;
    max-width: 300px;
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

        <!-- Page Title -->
        <div class="section-page-title">
            <div class="container text-center">
                <h1 class="page-title fw-semibold effectFade fadeZoom">Portfolio</h1>
                <div class="breadcrumbs effectFade fadeUp">
                    <a href="index.php" class="link">Home</a>
                    <div>/</div>
                    <div>Portfolio</div>
                </div>
            </div>
        </div>

        <!-- â”€â”€ Selected Client Work â”€â”€ -->
        <section class="flat-spacing">
            <div class="container">
                <div class="row align-items-end mb-5">
                    <div class="col-lg-6">
                        <p class="mini-title text-caption text-white-64 effectFade fadeUp">SELECTED WORK</p>
                        <h2 class="text-display-2 letter-space--3 fw-semibold effectFade fadeUp">
                            Projects that <br>speak for themselves
                        </h2>
                    </div>
                    <div class="col-lg-5 ms-auto">
                        <p class="text-body-1 text-white-64 effectFade fadeUp">
                            From brand identity to full-scale digital ecosystems â€” each project is built with purpose, precision, and a clear outcome in mind.
                        </p>
                    </div>
                </div>

                <div class="tf-grid-layout md-col-2 portfolio-grid">

                    <!-- Nexora â€” video card -->
                    <a href="#" class="wg-work effectFade fadeUp no-div">
                        <div class="work-image">
                            <video muted="" autoplay="" loop="" playsinline="">
                                <source src="assets/images/video/nexbot.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="work-content">
                            <div class="work_top">
                                <h5 class="letter-space--2">Nexora_</h5>
                                <ul class="tf-list vertical text-end">
                                    <li class="text-white-64">Industry</li>
                                    <li>Technology</li>
                                    <li>SaaS</li>
                                </ul>
                            </div>
                            <div class="work_bottom">
                                <ul class="tf-list vertical">
                                    <li class="text-white-64">Services</li>
                                    <li>Brand Identity</li>
                                    <li>Web Design</li>
                                </ul>
                                <h5 class="letter-space--2">2025</h5>
                            </div>
                        </div>
                    </a>

                    <!-- Vantara -->
                    <a href="#" class="wg-work effectFade fadeUp no-div">
                        <div class="work-image">
                            <img loading="lazy" src="assets/images/section/work-5.jpg" alt="Vantara project">
                        </div>
                        <div class="work-content">
                            <div class="work_top">
                                <h5 class="letter-space--2">Vantara_</h5>
                                <ul class="tf-list vertical text-end">
                                    <li class="text-white-64">Industry</li>
                                    <li>E-Commerce</li>
                                    <li>Retail</li>
                                </ul>
                            </div>
                            <div class="work_bottom">
                                <ul class="tf-list vertical">
                                    <li class="text-white-64">Services</li>
                                    <li>Brand Strategy</li>
                                    <li>UI/UX Design</li>
                                    <li>Web Development</li>
                                </ul>
                                <h5 class="letter-space--2">2025</h5>
                            </div>
                        </div>
                    </a>

                    <!-- Kelsara -->
                    <a href="#" class="wg-work effectFade fadeUp no-div">
                        <div class="work-image">
                            <img loading="lazy" src="assets/images/section/work-6.jpg" alt="Kelsara project">
                        </div>
                        <div class="work-content">
                            <div class="work_top">
                                <h5 class="letter-space--2">Kelsara_</h5>
                                <ul class="tf-list vertical text-end">
                                    <li class="text-white-64">Industry</li>
                                    <li>Finance</li>
                                    <li>Fintech</li>
                                </ul>
                            </div>
                            <div class="work_bottom">
                                <ul class="tf-list vertical">
                                    <li class="text-white-64">Services</li>
                                    <li>Digital Strategy</li>
                                    <li>Brand Identity</li>
                                    <li>Web Design</li>
                                </ul>
                                <h5 class="letter-space--2">2025</h5>
                            </div>
                        </div>
                    </a>

                    <!-- Lumara -->
                    <a href="#" class="wg-work effectFade fadeUp no-div">
                        <div class="work-image">
                            <img loading="lazy" src="assets/images/section/work-1.jpg" alt="Lumara project">
                        </div>
                        <div class="work-content">
                            <div class="work_top">
                                <h5 class="letter-space--2">Lumara_</h5>
                                <ul class="tf-list vertical text-end">
                                    <li class="text-white-64">Industry</li>
                                    <li>Healthcare</li>
                                    <li>Wellness</li>
                                </ul>
                            </div>
                            <div class="work_bottom">
                                <ul class="tf-list vertical">
                                    <li class="text-white-64">Services</li>
                                    <li>Brand Identity</li>
                                    <li>Web Design</li>
                                </ul>
                                <h5 class="letter-space--2">2024</h5>
                            </div>
                        </div>
                    </a>

                    <!-- Orbis -->
                    <a href="#" class="wg-work effectFade fadeUp no-div">
                        <div class="work-image">
                            <img loading="lazy" src="assets/images/section/work-2.jpg" alt="Orbis project">
                        </div>
                        <div class="work-content">
                            <div class="work_top">
                                <h5 class="letter-space--2">Orbis_</h5>
                                <ul class="tf-list vertical text-end">
                                    <li class="text-white-64">Industry</li>
                                    <li>Technology</li>
                                    <li>AI</li>
                                </ul>
                            </div>
                            <div class="work_bottom">
                                <ul class="tf-list vertical">
                                    <li class="text-white-64">Services</li>
                                    <li>UI/UX Design</li>
                                    <li>Web Development</li>
                                </ul>
                                <h5 class="letter-space--2">2024</h5>
                            </div>
                        </div>
                    </a>

                    <!-- Stratum -->
                    <a href="#" class="wg-work effectFade fadeUp no-div">
                        <div class="work-image">
                            <img loading="lazy" src="assets/images/section/work-3.jpg" alt="Stratum project">
                        </div>
                        <div class="work-content">
                            <div class="work_top">
                                <h5 class="letter-space--2">Stratum_</h5>
                                <ul class="tf-list vertical text-end">
                                    <li class="text-white-64">Industry</li>
                                    <li>Real Estate</li>
                                    <li>Property</li>
                                </ul>
                            </div>
                            <div class="work_bottom">
                                <ul class="tf-list vertical">
                                    <li class="text-white-64">Services</li>
                                    <li>Brand Strategy</li>
                                    <li>Digital Growth</li>
                                </ul>
                                <h5 class="letter-space--2">2024</h5>
                            </div>
                        </div>
                    </a>

                    <!-- Meridian -->
                    <a href="#" class="wg-work effectFade fadeUp no-div">
                        <div class="work-image">
                            <img loading="lazy" src="assets/images/section/work-4.jpg" alt="Meridian project">
                        </div>
                        <div class="work-content">
                            <div class="work_top">
                                <h5 class="letter-space--2">Meridian_</h5>
                                <ul class="tf-list vertical text-end">
                                    <li class="text-white-64">Industry</li>
                                    <li>Professional</li>
                                    <li>Services</li>
                                </ul>
                            </div>
                            <div class="work_bottom">
                                <ul class="tf-list vertical">
                                    <li class="text-white-64">Services</li>
                                    <li>Brand Identity</li>
                                    <li>Web Design</li>
                                </ul>
                                <h5 class="letter-space--2">2023</h5>
                            </div>
                        </div>
                    </a>

                    <!-- Helix -->
                    <a href="#" class="wg-work effectFade fadeUp no-div">
                        <div class="work-image">
                            <img loading="lazy" src="assets/images/section/award-1.jpg" alt="Helix project">
                        </div>
                        <div class="work-content">
                            <div class="work_top">
                                <h5 class="letter-space--2">Helix_</h5>
                                <ul class="tf-list vertical text-end">
                                    <li class="text-white-64">Industry</li>
                                    <li>Biotech</li>
                                    <li>Research</li>
                                </ul>
                            </div>
                            <div class="work_bottom">
                                <ul class="tf-list vertical">
                                    <li class="text-white-64">Services</li>
                                    <li>Brand Identity</li>
                                    <li>Web Design</li>
                                </ul>
                                <h5 class="letter-space--2">2023</h5>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </section>

        <!-- â”€â”€ Our Capabilities â”€â”€ -->
        <section class="flat-spacing">
            <div class="container">
                <div class="br-line d-flex mb-5"></div>
                <div class="row align-items-end mb-5">
                    <div class="col-lg-6">
                        <p class="mini-title text-caption text-white-64 effectFade fadeUp">OUR CAPABILITIES</p>
                        <h2 class="text-display-2 letter-space--3 fw-semibold effectFade fadeUp">
                            What we <br>create
                        </h2>
                    </div>
                    <div class="col-lg-5 ms-auto">
                        <p class="text-body-1 text-white-64 effectFade fadeUp">
                            From immersive animation to strategic branding â€” explore the full range of what ADNAP delivers.
                        </p>
                    </div>
                </div>

                <div class="tf-grid-layout md-col-2 lg-col-3 service-grid">

                    <!-- 2D Animation -->
                    <a href="service-2d-animation.php" class="wg-work effectFade fadeUp no-div">
                        <div class="work-image">
                            <img loading="lazy" src="assets/images/section/work-1.jpg" alt="2D Animation">
                        </div>
                        <div class="work-content">
                            <div class="work_top">
                                <span class="svc-label text-white-64">01</span>
                                <span class="svc-label text-primary">ANIMATION</span>
                            </div>
                            <div class="work_bottom" style="flex-direction:column;align-items:flex-start;gap:8px;">
                                <h5 class="letter-space--2 mb-0">2D Animation_</h5>
                                <p class="svc-desc">Clear, engaging animations that simplify complex ideas and deliver impact.</p>
                            </div>
                        </div>
                    </a>

                    <!-- 3D Animation -->
                    <a href="service-3d-animation.php" class="wg-work effectFade fadeUp no-div">
                        <div class="work-image">
                            <img loading="lazy" src="assets/images/section/work-5.jpg" alt="3D Animation">
                        </div>
                        <div class="work-content">
                            <div class="work_top">
                                <span class="svc-label text-white-64">02</span>
                                <span class="svc-label text-primary">ANIMATION</span>
                            </div>
                            <div class="work_bottom" style="flex-direction:column;align-items:flex-start;gap:8px;">
                                <h5 class="letter-space--2 mb-0">3D Animation_</h5>
                                <p class="svc-desc">Depth, realism, and purpose â€” built for brands that demand presence.</p>
                            </div>
                        </div>
                    </a>

                    <!-- Branding -->
                    <a href="service-branding.php" class="wg-work effectFade fadeUp no-div">
                        <div class="work-image">
                            <img loading="lazy" src="assets/images/section/work-2.jpg" alt="Branding">
                        </div>
                        <div class="work-content">
                            <div class="work_top">
                                <span class="svc-label text-white-64">03</span>
                                <span class="svc-label text-primary">IDENTITY</span>
                            </div>
                            <div class="work_bottom" style="flex-direction:column;align-items:flex-start;gap:8px;">
                                <h5 class="letter-space--2 mb-0">Branding_</h5>
                                <p class="svc-desc">Cohesive identities from logos to full design systems â€” digital and print.</p>
                            </div>
                        </div>
                    </a>

                    <!-- AI Video Generation -->
                    <a href="service-ai-video.php" class="wg-work effectFade fadeUp no-div">
                        <div class="work-image">
                            <img loading="lazy" src="assets/images/section/work-3.jpg" alt="AI Video Generation">
                        </div>
                        <div class="work-content">
                            <div class="work_top">
                                <span class="svc-label text-white-64">04</span>
                                <span class="svc-label text-primary">AI VIDEO</span>
                            </div>
                            <div class="work_bottom" style="flex-direction:column;align-items:flex-start;gap:8px;">
                                <h5 class="letter-space--2 mb-0">AI Video <br>Generation_</h5>
                                <p class="svc-desc">AI-assisted production that scales creative output without compromising quality.</p>
                            </div>
                        </div>
                    </a>

                    <!-- Web Design & Dev -->
                    <a href="service-web-design.php" class="wg-work effectFade fadeUp no-div">
                        <div class="work-image">
                            <img loading="lazy" src="assets/images/section/work-6.jpg" alt="Web Design">
                        </div>
                        <div class="work-content">
                            <div class="work_top">
                                <span class="svc-label text-white-64">05</span>
                                <span class="svc-label text-primary">WEB</span>
                            </div>
                            <div class="work_bottom" style="flex-direction:column;align-items:flex-start;gap:8px;">
                                <h5 class="letter-space--2 mb-0">Web Design <br>& Dev_</h5>
                                <p class="svc-desc">Modern, high-performing websites built to convert and built to last.</p>
                            </div>
                        </div>
                    </a>

                    <!-- CTA card -->
                    <a href="contact.php" class="wg-work effectFade fadeUp no-div" style="background:#0158ff;">
                        <div class="work-image" style="background:#0158ff;aspect-ratio:16/9;"></div>
                        <div class="work-content" style="opacity:1;background:none;">
                            <div class="work_top" style="transform:none;">
                                <span class="svc-label" style="color:rgba(255,255,255,0.6);">ADNAP</span>
                            </div>
                            <div class="work_bottom" style="flex-direction:column;align-items:flex-start;gap:8px;transform:none;">
                                <h5 class="letter-space--2 mb-0">Start a <br>project_</h5>
                                <p class="svc-desc" style="color:rgba(255,255,255,0.75);">Ready to bring your idea to life? Let's talk.</p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </section>

        <!-- Stats -->
        <div class="section-brand flat-spacing bg-surface">
            <div class="container">
                <div class="row text-center text-black">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <p class="text-display-1 fw-semibold letter-space--3 text-black">
                            <span class="odometer" data-number="120">10</span><span class="text-primary">+</span>
                        </p>
                        <p class="text-caption fw-medium letter-space--1 text-black-64">PROJECTS DELIVERED</p>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <p class="text-display-1 fw-semibold letter-space--3 text-black">
                            <span class="odometer" data-number="98">10</span><span class="text-primary">%</span>
                        </p>
                        <p class="text-caption fw-medium letter-space--1 text-black-64">CLIENT SATISFACTION</p>
                    </div>
                    <div class="col-md-4">
                        <p class="text-display-1 fw-semibold letter-space--3 text-black">
                            <span class="odometer" data-number="5">1</span><span class="text-primary">+</span>
                        </p>
                        <p class="text-caption fw-medium letter-space--1 text-black-64">YEARS IN BUSINESS</p>
                    </div>
                </div>
            </div>
        </div>

<?php include __DIR__ . '/partials/footer.php'; ?>
    </main>
<?php include __DIR__ . '/partials/mobile-menu.php'; ?>
<?php include __DIR__ . '/partials/scripts.php'; ?>
</body>

</html>