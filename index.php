<?php
$page_title       = 'ADNAP — Think Backward. Build Forward.';
$page_description = 'ADNAP Digital Agency — Brand strategy, web design, and digital growth for modern businesses. Think Backward. Build Forward.';
$header_overlap   = true;
?>
<!DOCTYPE html>

<!--[if IE 8]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
<?php include __DIR__ . '/partials/head.php'; ?>
</head>

<body class="counter-scroll">
    <canvas class="cursor-trail d-none d-xl-block" id="trail"></canvas>


    <!-- Scroll Top -->
    <button id="goTop">
        <span class="border-progress"></span>
        <span class="ic-wrap">
            <span class="icon icon-arrow-caret-right"></span>
        </span>
    </button>
    <!-- /Scroll Top -->

    <!-- Preload -->
    <div class="preloader overflow-hidden">
        <div class="site-name"><span>ADNAP</span></div>
        <div class="preloader-gutters">
            <div class="bar">
                <div class="inner-bar"></div>
            </div>
            <div class="bar">
                <div class="inner-bar"></div>
            </div>
            <div class="bar">
                <div class="inner-bar"></div>
            </div>
            <div class="bar">
                <div class="inner-bar"></div>
            </div>
            <div class="bar">
                <div class="inner-bar"></div>
            </div>
            <div class="bar">
                <div class="inner-bar"></div>
            </div>
            <div class="bar">
                <div class="inner-bar"></div>
            </div>
            <div class="bar">
                <div class="inner-bar"></div>
            </div>
        </div>
    </div>
    <!-- /Preload -->

    <main id="wrapper">
<?php include __DIR__ . '/partials/nav-header.php'; ?>
        <!-- Hero Banner -->
        <div class="section-hero-v2 flat-spacing">
            <div class="overlay"></div>
            <div class="bg-video">
                <video class="" muted="" autoplay="" loop="" playsinline="">
                    <source src="assets/images/video/wave-bg.mp4" type="video/mp4">
                </video>
            </div>
            <div class="container">
                <div class="image-wrap">
                    <!-- <div class="img-item image-1" style="background:transparent;overflow:visible;">
                        <img class="effectFade fadeDown" loading="lazy" width="220" height="220"
                            src="assets/images/logo/adnap-logo.png" alt="ADNAP"
                            style="object-fit:contain;border-radius:0;filter:drop-shadow(0 0 40px rgba(1,88,255,0.5));">
                    </div> -->
                    <div class="img-item-2" style="opacity:0.08;">
                        <p aria-hidden="true" class="effectFade fadeZoom" style="font-size:clamp(80px,16vw,279px);font-weight:900;color:#fff;white-space:nowrap;line-height:1;margin:0;letter-spacing:-0.04em;">ADNAP</p>
                    </div>
                </div>
                <div class="hero-tagline text-center effectFade fadeUp" style="padding:40px 0 20px;">
                    <h1 class="text-display-1 fw-semibold letter-space--3" style="line-height:1.05;">
                        Think Backward.<br>
                        <span class="text-primary">Build Forward.</span>
                    </h1>
                </div>
                <div class="bottom">
                    <ul class="tf-list text-caption letter-space--1 fw-medium scroll-fadeUp2">
                        <li><a href="#serviceScroll" class="link effectFade view-visible">BRAND STRATEGY</a></li>
                        <li class="effectFade view-visible" data-delay="0.1">/</li>
                        <li><a href="#serviceScroll" class="link effectFade view-visible" data-delay="0.2">WEB DESIGN</a></li>
                        <li class="effectFade view-visible" data-delay="0.3">/</li>
                        <li><a href="#serviceScroll" class="link effectFade view-visible" data-delay="0.4">DIGITAL DEVELOPMENT</a></li>
                    </ul>
                    <div class="effectFade fadeUp no-div view-visible" data-delay="0.1">
                        <a href="#contactScroll" class="tf-btn style-2 style-fill-white animate-btn animate-dark">
                            <span class="text-caption letter-space--1 fw-medium">START A PROJECT</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Hero Banner -->
        <!-- Portfolio -->
        <section class="section-selected-work-v2 flat-spacing stack-element" id="workScroll">
            <div class="s-header d-block overflow-hidden">
                <div class="infiniteSlide infiniteSlide_select_work" data-clone="5">
                    <!-- clone 1 -->
                    <p class="text-display-1 letter-space--3 fw-semibold">
                        Our Portfolio
                    </p>
                    <div class="icon-app">
                        <img loading="lazy" width="120" height="120" src="assets/images/item/global.svg" alt="Image">
                    </div>
                    <!-- clone 2 -->
                    <p class="text-display-1 letter-space--3 fw-semibold">
                        Our Portfolio
                    </p>
                    <div class="icon-app">
                        <img loading="lazy" width="120" height="120" src="assets/images/item/global.svg" alt="Image">
                    </div>
                    <!-- clone 3 -->
                    <p class="text-display-1 letter-space--3 fw-semibold">
                        Our Portfolio
                    </p>
                    <div class="icon-app">
                        <img loading="lazy" width="120" height="120" src="assets/images/item/global.svg" alt="Image">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="work-list stack-element-main position-relative">
                    <div class="element">
                        <a href="#" class="wg-work effectFade fadeUp no-div">
                            <div class="work-image">
                                <video class="" muted="" autoplay="" loop="" playsinline="">
                                    <source src="assets/images/video/nexbot.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="work-content">
                                <div class="work_top">
                                    <h5 class="letter-space--2">Nexora_</h5>
                                    <ul class="tf-list vertical text-end">
                                        <li class="text-white-64">Industry</li>
                                        <li class="effectFade fadeUp">Technology</li>
                                        <li class="effectFade fadeUp">SaaS</li>
                                    </ul>
                                </div>
                                <div class="work_bottom">
                                    <ul class="tf-list vertical">
                                        <li class="text-white-64">Services</li>
                                        <li class="effectFade fadeUp">Brand Identity</li>
                                        <li class="effectFade fadeUp">Web Design</li>
                                    </ul>
                                    <h5 class="letter-space--2">
                                        2025
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="element">
                        <a href="#" class="wg-work">
                            <div class="work-image">
                                <img loading="lazy" width="1296" height="648" src="assets/images/section/work-5.jpg"
                                    alt="Vantara project">
                            </div>
                            <div class="work-content">
                                <div class="work_top">
                                    <h5 class="letter-space--2">Vantara_</h5>
                                    <ul class="tf-list vertical text-end">
                                        <li class="text-white-64">Industry</li>
                                        <li class="effectFade fadeUp">E-Commerce</li>
                                        <li class="effectFade fadeUp">Retail</li>
                                    </ul>
                                </div>
                                <div class="work_bottom">
                                    <ul class="tf-list vertical">
                                        <li class="text-white-64">Services</li>
                                        <li class="effectFade fadeUp">Brand Strategy</li>
                                        <li class="effectFade fadeUp">UI/UX Design</li>
                                        <li class="effectFade fadeUp">Web Development</li>
                                    </ul>
                                    <h5 class="letter-space--2">
                                        2025
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="element">
                        <a href="#" class="wg-work">
                            <div class="work-image">
                                <img loading="lazy" width="1296" height="648" src="assets/images/section/work-6.jpg"
                                    alt="Kelsara project">
                            </div>
                            <div class="work-content">
                                <div class="work_top">
                                    <h5 class="letter-space--2">Kelsara_</h5>
                                    <ul class="tf-list vertical text-end">
                                        <li class="text-white-64">Industry</li>
                                        <li class="effectFade fadeUp">Finance</li>
                                        <li class="effectFade fadeUp">Fintech</li>
                                    </ul>
                                </div>
                                <div class="work_bottom">
                                    <ul class="tf-list vertical">
                                        <li class="text-white-64">Services</li>
                                        <li class="effectFade fadeUp">Digital Strategy</li>
                                        <li class="effectFade fadeUp">Brand Identity</li>
                                        <li class="effectFade fadeUp">Web Design</li>
                                    </ul>
                                    <h5 class="letter-space--2">
                                        2025
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#contactScroll" class="tf-btn style-2">
                        + START YOUR PROJECT
                    </a>
                </div>
            </div>
        </section>
        <!-- /Select Work -->
        <!-- About -->
        <section class="section-about-me-v2 flat-spacing" id="aboutScroll">
            <div class="container">
                <div class="about-main flat-spacing-bottom">
                    <div class="davies-video">
                        <video class="video" muted="" autoplay="" loop="" playsinline="">
                            <source src="assets/images/video/davies-video.mp4" type="video/mp4">
                        </video>
                        <div class="overlay mark"></div>
                        <div class="overlay bg-effect">
                            <img loading="lazy" width="1296" height="729" src="assets/images/item/dither-effect.svg"
                                alt="">
                        </div>
                    </div>
                    <div class="content">
                        <div class="top text-display-1 fw-semibold letter-space--3">
                            <p class="effectFade fadeUp">About</p>
                            <p class="effectFade fadeUp" data-delay="0.1">ADNAP<span class="text-primary">_</span></p>
                        </div>
                        <h5 class="text-color-change letter-space--2 fw-normal">
                            We are a forward-thinking digital agency creating bold, functional, and results-driven
                            experiences that help ambitious brands connect, grow, and lead in their markets.
                        </h5>
                    </div>
                </div>
                <div class="br-line d-flex flat-spacing-bottom"></div>
                <div class="award-main">
                    <div class="left">
                        <div class="badget animate-box">
                            <img loading="lazy" width="156" height="156" src="assets/images/item/badge-design.png"
                                alt="ADNAP Agency Badge">
                        </div>
                    </div>
                    <ul class="experience-list overflow-hidden">
                        <li>Our Journey</li>
                        <li class="effectFade fadeRight">
                            <p class="exp_name">Full-service Digital Agency — ADNAP</p>
                            <p class="exp_year">2025</p>
                        </li>
                        <li class="effectFade fadeRight">
                            <p class="exp_name">Expanded into Web Development & Digital Marketing</p>
                            <p class="exp_year">2024 - 2025</p>
                        </li>
                        <li class="effectFade fadeRight">
                            <p class="exp_name">Launched Brand Strategy Division</p>
                            <p class="exp_year">2023 - 2024</p>
                        </li>
                        <li class="effectFade fadeRight">
                            <p class="exp_name">First International Client Portfolio</p>
                            <p class="exp_year">2022 - 2023</p>
                        </li>
                        <li class="effectFade fadeRight">
                            <p class="exp_name">Founded — ADNAP Agency Established</p>
                            <p class="exp_year">2020</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- /About -->
        <!-- Our Tools -->
        <section class="section-tech-stack-v2 flat-spacing">
            <div class="container">
                <div class="s-header d-block">
                    <h2 class="text-display-2 letter-space--3 text-center effectFade fadeUp">Our Tools</h2>
                </div>
                <div class="tf-grid-layout lg-col-3">
                    <div class="wg-tech-v2">
                        <div class="tech-content">
                            <h5 class="tech-name letter-space--2">Figma</h5>
                            <p class="tech-desc letter-space--1">
                                Collaborative design platform for <br>
                                crafting, prototyping, and refining <br>
                                world-class interfaces.
                            </p>
                            <div class="ic-img">
                                <img loading="lazy" width="33" height="48" src="assets/images/item/figma.svg"
                                    alt="Figma">
                            </div>
                        </div>
                    </div>
                    <div class="wg-tech-v2">
                        <div class="tech-content">
                            <h5 class="tech-name letter-space--2">Framer</h5>
                            <p class="tech-desc letter-space--1">
                                Rapid interactive website builder <br>
                                for delivering high-fidelity digital <br>
                                experiences at speed.
                            </p>
                            <div class="ic-img">
                                <img loading="lazy" width="32" height="48" src="assets/images/item/framer.svg"
                                    alt="Framer">
                            </div>
                        </div>
                    </div>
                    <div class="wg-tech-v2">
                        <div class="tech-content">
                            <h5 class="tech-name letter-space--2">Webflow</h5>
                            <p class="tech-desc letter-space--1">
                                Visual-first development tool for <br>
                                designing, building, and deploying <br>
                                responsive sites with precision.
                            </p>
                            <div class="ic-img">
                                <img loading="lazy" width="77" height="48" src="assets/images/item/webflow.svg"
                                    alt="Webflow">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Our Tools -->
        <!-- Services -->
        <section class="section-service-v2 flat-spacing" id="serviceScroll">
            <div class="container">
                <div class="br-line d-flex"></div>
                <div class="service-accordion-main" id="service-accordion-main">
                    <div class="service-accordion_item effectFade fadeUp no-div" role="presentation">
                        <div class="accordion-action" data-bs-target="#service-1" role="button"
                            data-bs-toggle="collapse" aria-controls="service-1" aria-expanded="true">
                            <h5 class="text-display-1 letter-space--3">Brand Strategy</h5>
                        </div>
                        <div id="service-1" class="collapse show" data-bs-parent="#service-accordion-main">
                            <div class="accordion-content">
                                <div class="image-left">
                                    <img width="860" height="373" src="assets/images/section/service-4.jpg" alt="Brand Strategy">
                                </div>
                                <div class="content-right">
                                    <p class="number-order text-display-1 fw-medium letter-space--3 text-white-32">
                                        01
                                    </p>
                                    <ul class="tf-list vertical gap-12 text-body-1">
                                        <li><span class="text-primary">//</span> Market Positioning</li>
                                        <li><span class="text-primary">//</span> Visual Identity Design</li>
                                        <li><span class="text-primary">//</span> Logo & Typography</li>
                                        <li><span class="text-primary">//</span> Colour Palette Creation</li>
                                        <li><span class="text-primary">//</span> Brand Guidelines</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-accordion_item effectFade fadeUp no-div" role="presentation">
                        <div class="accordion-action collapsed" data-bs-target="#service-2" role="button"
                            data-bs-toggle="collapse" aria-controls="service-2" aria-expanded="true">
                            <h5 class="text-display-1 letter-space--3">Web Design & Dev</h5>
                        </div>
                        <div id="service-2" class="collapse" data-bs-parent="#service-accordion-main">
                            <div class="accordion-content">
                                <div class="image-left">
                                    <img width="860" height="373" src="assets/images/section/service-5.jpg" alt="Web Design">
                                </div>
                                <div class="content-right">
                                    <p class="number-order text-display-1 fw-medium letter-space--3 text-white-32">
                                        02
                                    </p>
                                    <ul class="tf-list vertical gap-12 text-body-1">
                                        <li><span class="text-primary">//</span> UI/UX Design</li>
                                        <li><span class="text-primary">//</span> Responsive Web Development</li>
                                        <li><span class="text-primary">//</span> CMS & Webflow Builds</li>
                                        <li><span class="text-primary">//</span> Landing Page Design</li>
                                        <li><span class="text-primary">//</span> Performance Optimisation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-accordion_item effectFade fadeUp no-div" role="presentation">
                        <div class="accordion-action collapsed" data-bs-target="#service-3" role="button"
                            data-bs-toggle="collapse" aria-controls="service-3" aria-expanded="true">
                            <h5 class="text-display-1 letter-space--3">Digital Growth</h5>
                        </div>
                        <div id="service-3" class="collapse" data-bs-parent="#service-accordion-main">
                            <div class="accordion-content">
                                <div class="image-left">
                                    <img width="860" height="373" src="assets/images/section/service-6.jpg" alt="Digital Growth">
                                </div>
                                <div class="content-right">
                                    <p class="number-order text-display-1 fw-medium letter-space--3 text-white-32">
                                        03
                                    </p>
                                    <ul class="tf-list vertical gap-12 text-body-1">
                                        <li><span class="text-primary">//</span> SEO & Content Strategy</li>
                                        <li><span class="text-primary">//</span> Social Media Management</li>
                                        <li><span class="text-primary">//</span> Paid Media Campaigns</li>
                                        <li><span class="text-primary">//</span> Analytics & Reporting</li>
                                        <li><span class="text-primary">//</span> Conversion Optimisation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Services -->
        <!-- Clients & Partners -->
        <div class="section-brand flat-spacing bg-surface">
            <div class="container">
                <h6 class="mini-title text-caption text-black-64">
                    TRUSTED CLIENTS &amp; PARTNERS
                </h6>
                <div class="brand-list type-line-2">
                    <a href="#" class="img-brand">
                        <img loading="lazy" width="76" height="48" src="assets/images/brand/brandv2-1.svg" alt="Brand">
                    </a>
                    <a href="#" class="img-brand">
                        <img loading="lazy" width="125" height="24" src="assets/images/brand/brandv2-2.svg" alt="Brand">
                    </a>
                    <a href="#" class="img-brand">
                        <img loading="lazy" width="57" height="48" src="assets/images/brand/brandv2-3.svg" alt="Brand">
                    </a>
                    <a href="#" class="img-brand">
                        <img loading="lazy" width="142" height="36" src="assets/images/brand/brandv2-4.svg" alt="Brand">
                    </a>
                    <a href="#" class="img-brand">
                        <img loading="lazy" width="84" height="48" src="assets/images/brand/brandv2-5.svg" alt="Brand">
                    </a>
                    <a href="#" class="img-brand">
                        <img loading="lazy" width="140" height="36" src="assets/images/brand/brandv2-6.svg" alt="Brand">
                    </a>
                    <a href="#" class="img-brand">
                        <img loading="lazy" width="48" height="48" src="assets/images/brand/brandv2-7.svg" alt="Brand">
                    </a>
                    <a href="#" class="img-brand">
                        <img loading="lazy" width="138" height="24" src="assets/images/brand/brandv2-8.svg" alt="Brand">
                    </a>
                    <a href="#" class="img-brand">
                        <img loading="lazy" width="63" height="48" src="assets/images/brand/brandv2-9.svg" alt="Brand">
                    </a>
                    <a href="#" class="img-brand">
                        <img loading="lazy" width="133" height="24" src="assets/images/brand/brandv2-10.svg"
                            alt="Brand">
                    </a>
                </div>
            </div>
        </div>
        <!-- /Brand -->
        <!-- Recognition -->
        <section class="section-award flat-spacing bg-surface">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 ms-auto">
                        <div class="col-right">
                            <h6 class="mini-title text-caption text-black-64">
                                RECOGNITION
                            </h6>
                            <h5 class="fw-normal letter-space--2 text-black">
                                Since 2020, ADNAP's work has been recognised by clients and partners across industries.
                                Every project represents a commitment to creativity, precision, and measurable impact.
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="col-left">
                            <p class="desc text-black-64 mini-title">
                                120+ projects delivered. <br>
                                Bold thinking. Tangible results.
                            </p>
                            <div dir="ltr" class="swiper tf-swiper swiper-t2" data-preview="3" data-tablet="3"
                                data-mobile="3" data-mobile-sm="3" data-loop="true" data-auto="true" data-delay="1000"
                                data-speed="1000" data-direction="vertical" data-space="4">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="award-item h4 letter-space--2">
                                            Brand Projects
                                            <span class="text-body-1 letter-space--1">x47</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="award-item h4 letter-space--2">
                                            Web Launches
                                            <span class="text-body-1 letter-space--1">x58</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="award-item h4 letter-space--2">
                                            Growth Campaigns
                                            <span class="text-body-1 letter-space--1">x33</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="award-item h4 letter-space--2">
                                            Brand Projects
                                            <span class="text-body-1 letter-space--1">x47</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="award-item h4 letter-space--2">
                                            Web Launches
                                            <span class="text-body-1 letter-space--1">x58</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="award-item h4 letter-space--2">
                                            Growth Campaigns
                                            <span class="text-body-1 letter-space--1">x33</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap-flip-image flat-spacing">
                <div class="container">
                    <div class="flip-image-list gsap-anime-2">
                        <div class="flip-image">
                            <img loading="lazy" width="325" height="325" src="assets/images/section/award-1.jpg"
                                alt="Image">
                        </div>
                        <div class="flip-image">
                            <img loading="lazy" width="325" height="325" src="assets/images/section/award-2.jpg"
                                alt="Image">

                        </div>
                        <div class="flip-image">
                            <img loading="lazy" width="325" height="325" src="assets/images/section/award-3.jpg"
                                alt="Image">
                        </div>
                        <div class="flip-image">
                            <img loading="lazy" width="325" height="325" src="assets/images/section/award-4.jpg"
                                alt="Image">

                        </div>
                        <div class="flip-image">
                            <img loading="lazy" width="325" height="325" src="assets/images/section/award-5.jpg"
                                alt="Image">

                        </div>
                        <div class="flip-image">
                            <img loading="lazy" width="325" height="325" src="assets/images/section/award-6.jpg"
                                alt="Image">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Award -->
        <!-- Pricing -->
        <section class="section-pricing type-2 flat-spacing flat-animate-tab">
            <div class="s-header d-block overflow-hidden">
                <div class="infiniteSlide infiniteSlide_select_work" data-clone="5">
                    <!-- clone 1 -->
                    <p class="text-display-1 letter-space--3 fw-semibold">
                        Our Packages
                    </p>
                    <div class="icon-app">
                        <img loading="lazy" width="120" height="120" src="assets/images/item/global.svg" alt="">
                    </div>
                    <!-- clone 2 -->
                    <p class="text-display-1 letter-space--3 fw-semibold">
                        Our Packages
                    </p>
                    <div class="icon-app">
                        <img loading="lazy" width="120" height="120" src="assets/images/item/global.svg" alt="">
                    </div>
                    <!-- clone 3 -->
                    <p class="text-display-1 letter-space--3 fw-semibold">
                        Our Packages
                    </p>
                    <div class="icon-app">
                        <img loading="lazy" width="120" height="120" src="assets/images/item/global.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="container">
                <ul class="pricing-tab_btn" role="tablist">
                    <li class="nav-tab-item" role="presentation">
                        <a href="#monthly" data-bs-toggle="tab" class="tf-btn-tab active">
                            <span class="dot-active"></span>
                            Monthly
                        </a>
                    </li>
                    <li class="nav-tab-item" role="presentation">
                        <a href="#annual" data-bs-toggle="tab" class="tf-btn-tab">
                            <span class="dot-active"></span>
                            <span>
                                Annually — <span class="text-primary">Save 20%</span>
                            </span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active show" id="monthly" role="tabpanel">
                        <div class="tf-grid-layout md-col-2 lg-col-3">
                            <div class="wg-plan">
                                <div class="br-line"></div>
                                <div class="plan-name letter-space--1 fw-medium">Starter</div>
                                <h4 class="plan-price">
                                    $800 <span class="text-body-2 fw-normal text-white-64">/month</span>
                                </h4>
                                <p class="plan-desc text-white-64 letter-space--1">
                                    For startups and small businesses ready to establish a strong online presence.
                                </p>
                                <a href="#contactScroll" class="btn-action tf-btn style-2 style-troke w-100">
                                    <span class="text-caption fw-medium">GET STARTED</span>
                                </a>
                                <ul class="benefit-list tf-list vertical">
                                    <li class="benefit_title letter-space--1 text-white-64">What’s included:</li>
                                    <li><span>//</span> Brand identity kit</li>
                                    <li><span>//</span> 5-page website design</li>
                                    <li><span>//</span> Mobile-first responsive build</li>
                                    <li><span>//</span> Basic SEO foundation</li>
                                    <li><span>//</span> 30-day post-launch support</li>
                                </ul>
                            </div>
                            <div class="wg-plan style-2 type-2">
                                <div class="bg-img bg-img_2">
                                    <img loading="lazy" width="416" height="625" src="assets/images/item/bg-6.png"
                                        alt="">
                                </div>
                                <div class="br-line bg-primary"></div>
                                <div class="plan-name letter-space--1 fw-medium">Growth</div>
                                <h4 class="plan-price">
                                    <span><span class="text-primary">$</span>1,600</span>
                                    <span class="text-body-2 fw-normal text-white-64">/month</span>
                                </h4>
                                <p class="plan-desc text-white-64 letter-space--1">
                                    For growing brands that need full-service digital strategy and execution.
                                </p>
                                <a href="#contactScroll"
                                    class="btn-action tf-btn style-2 style-fill w-100 animate-btn animate-dark">
                                    <span class="text-caption fw-medium">GET STARTED</span>
                                </a>
                                <ul class="benefit-list tf-list vertical">
                                    <li class="benefit_title letter-space--1 text-white-64">What’s included:</li>
                                    <li><span class="text-primary">//</span> Full brand strategy</li>
                                    <li><span class="text-primary">//</span> Custom web design & dev</li>
                                    <li><span class="text-primary">//</span> SEO & content strategy</li>
                                    <li><span class="text-primary">//</span> Social media management</li>
                                    <li><span class="text-primary">//</span> Monthly performance reports</li>
                                </ul>
                            </div>
                            <div class="wg-plan style-2 type-3">
                                <div class="bg-img bg-img_1"></div>
                                <div class="br-line bg-white"></div>
                                <div class="plan-name letter-space--1 fw-medium">Enterprise</div>
                                <h4 class="plan-price">
                                    $3,200 <span class="text-body-2 fw-normal text-white-64">/month</span>
                                </h4>
                                <p class="plan-desc text-white-64 letter-space--1">
                                    For established organisations seeking a fully bespoke, end-to-end digital solution.
                                </p>
                                <a href="#contactScroll"
                                    class="btn-action tf-btn style-2 style-fill-white w-100 animate-btn animate-dark">
                                    <span class="text-caption fw-medium">LET’S TALK</span>
                                </a>
                                <ul class="benefit-list tf-list vertical">
                                    <li class="benefit_title letter-space--1 text-white-64">What’s included:</li>
                                    <li><span>//</span> Everything in Growth</li>
                                    <li><span>//</span> Paid media campaigns</li>
                                    <li><span>//</span> Dedicated account manager</li>
                                    <li><span>//</span> Advanced analytics dashboard</li>
                                    <li><span>//</span> Priority 24/7 support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="annual" role="tabpanel">
                        <div class="tf-grid-layout md-col-2 lg-col-3">
                            <div class="wg-plan">
                                <div class="br-line"></div>
                                <div class="plan-name letter-space--1 fw-medium">Starter</div>
                                <h4 class="plan-price">
                                    $7,680 <span class="text-body-2 fw-normal text-white-64">/annual</span>
                                </h4>
                                <p class="plan-desc text-white-64 letter-space--1">
                                    For startups and small businesses ready to establish a strong online presence.
                                </p>
                                <a href="#contactScroll" class="btn-action tf-btn style-2 style-troke w-100">
                                    <span class="text-caption fw-medium">GET STARTED</span>
                                </a>
                                <ul class="benefit-list tf-list vertical">
                                    <li class="benefit_title letter-space--1 text-white-64">What’s included:</li>
                                    <li><span>//</span> Brand identity kit</li>
                                    <li><span>//</span> 5-page website design</li>
                                    <li><span>//</span> Mobile-first responsive build</li>
                                    <li><span>//</span> Basic SEO foundation</li>
                                    <li><span>//</span> 30-day post-launch support</li>
                                </ul>
                            </div>
                            <div class="wg-plan style-2 type-2">
                                <div class="bg-img bg-img_2">
                                    <img loading="lazy" width="416" height="625" src="assets/images/item/bg-6.png"
                                        alt="">
                                </div>
                                <div class="br-line bg-primary"></div>
                                <div class="plan-name letter-space--1 fw-medium">Growth</div>
                                <h4 class="plan-price">
                                    <span><span class="text-primary">$</span>15,360</span>
                                    <span class="text-body-2 fw-normal text-white-64">/annual</span>
                                </h4>
                                <p class="plan-desc text-white-64 letter-space--1">
                                    For growing brands that need full-service digital strategy and execution.
                                </p>
                                <a href="#contactScroll"
                                    class="btn-action tf-btn style-2 style-fill w-100 animate-btn animate-dark">
                                    <span class="text-caption fw-medium">GET STARTED</span>
                                </a>
                                <ul class="benefit-list tf-list vertical">
                                    <li class="benefit_title letter-space--1 text-white-64">What’s included:</li>
                                    <li><span class="text-primary">//</span> Full brand strategy</li>
                                    <li><span class="text-primary">//</span> Custom web design & dev</li>
                                    <li><span class="text-primary">//</span> SEO & content strategy</li>
                                    <li><span class="text-primary">//</span> Social media management</li>
                                    <li><span class="text-primary">//</span> Monthly performance reports</li>
                                </ul>
                            </div>
                            <div class="wg-plan style-2 type-3">
                                <div class="bg-img bg-img_1"></div>
                                <div class="br-line bg-white"></div>
                                <div class="plan-name letter-space--1 fw-medium">Enterprise</div>
                                <h4 class="plan-price">
                                    $30,720 <span class="text-body-2 fw-normal text-white-64">/annual</span>
                                </h4>
                                <p class="plan-desc text-white-64 letter-space--1">
                                    For established organisations seeking a fully bespoke, end-to-end digital solution.
                                </p>
                                <a href="#contactScroll"
                                    class="btn-action tf-btn style-2 style-fill-white w-100 animate-btn animate-dark">
                                    <span class="text-caption fw-medium">LET’S TALK</span>
                                </a>
                                <ul class="benefit-list tf-list vertical">
                                    <li class="benefit_title letter-space--1 text-white-64">What’s included:</li>
                                    <li><span>//</span> Everything in Growth</li>
                                    <li><span>//</span> Paid media campaigns</li>
                                    <li><span>//</span> Dedicated account manager</li>
                                    <li><span>//</span> Advanced analytics dashboard</li>
                                    <li><span>//</span> Priority 24/7 support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Pricing -->
        <!-- Faq -->
        <section class="section-faq type-2 flat-spacing bg-surface">
            <div class="container">
                <div class="s-header d-block">
                    <h2 class="title text-display-2 letter-space--3 text-center text-black effectFade fadeUp">
                        <span class="text">
                            Frequently
                            <span class="icon"><img loading="lazy" width="80" height="80"
                                    src="assets/images/item/global-2.svg" alt="Image"></span>
                        </span> <br>
                        asked questions
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="accordion-faq_list" id="accordion-faq_list">
                            <div class="accordion-faq_item cl-line-2" role="presentation">
                                <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed"
                                    data-bs-target="#faq-1" role="button" data-bs-toggle="collapse"
                                    aria-controls="faq-1" aria-expanded="true">
                                    <span class="accordion-order text-black-64">01</span>
                                    <p class="accordion-text text-black">How long does a typical project take?</p>
                                    <div class="ic-wrap d-flex">
                                        <i class="icon icon-arrow-caret-down fs-10 text-black"></i>
                                    </div>
                                </div>
                                <div id="faq-1" class="collapse" data-bs-parent="#accordion-faq_list">
                                    <p class="accordion-content text-black-64">
                                        Most brand and website projects are completed within 4–8 weeks, depending on scope and
                                        revisions. Digital growth retainers begin showing measurable results within 60–90 days.
                                        We always agree on a clear timeline before work begins.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion-faq_item cl-line-2" role="presentation">
                                <div class="accordion-action text-body-1 letter-space--1 fw-medium"
                                    data-bs-target="#faq-2" role="button" data-bs-toggle="collapse"
                                    aria-controls="faq-2" aria-expanded="false">
                                    <span class="accordion-order text-black-64">02</span>
                                    <p class="accordion-text text-black">Do you work with international clients?</p>
                                    <div class="ic-wrap d-flex">
                                        <i class="icon icon-arrow-caret-down fs-10 text-black"></i>
                                    </div>
                                </div>
                                <div id="faq-2" class="collapse show" data-bs-parent="#accordion-faq_list">
                                    <p class="accordion-content text-black-64">
                                        Absolutely. ADNAP works with clients across Southeast Asia, the Middle East, Europe, and
                                        beyond. We use async collaboration tools and video calls to keep every project running
                                        smoothly regardless of timezone.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion-faq_item cl-line-2" role="presentation">
                                <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed"
                                    data-bs-target="#faq-3" role="button" data-bs-toggle="collapse"
                                    aria-controls="faq-3" aria-expanded="false">
                                    <span class="accordion-order text-black-64">03</span>
                                    <p class="accordion-text text-black">What industries do you specialise in?</p>
                                    <div class="ic-wrap d-flex">
                                        <i class="icon icon-arrow-caret-down fs-10 text-black"></i>
                                    </div>
                                </div>
                                <div id="faq-3" class="collapse" data-bs-parent="#accordion-faq_list">
                                    <p class="accordion-content text-black-64">
                                        We work across technology, e-commerce, finance, healthcare, and professional services.
                                        Our strength is adapting our approach to fit the nuances of each industry while
                                        maintaining a consistently high standard of craft.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion-faq_item cl-line-2" role="presentation">
                                <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed"
                                    data-bs-target="#faq-4" role="button" data-bs-toggle="collapse"
                                    aria-controls="faq-4" aria-expanded="false">
                                    <span class="accordion-order text-black-64">04</span>
                                    <p class="accordion-text text-black">What does the engagement process look like?</p>
                                    <div class="ic-wrap d-flex">
                                        <i class="icon icon-arrow-caret-down fs-10 text-black"></i>
                                    </div>
                                </div>
                                <div id="faq-4" class="collapse" data-bs-parent="#accordion-faq_list">
                                    <p class="accordion-content text-black-64">
                                        We start with a discovery call to understand your goals, then propose a clear scope
                                        and timeline. A 50% deposit secures your spot. We deliver in structured milestones with
                                        regular check-ins, and the final balance is due on approval.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion-faq_item cl-line-2" role="presentation">
                                <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed"
                                    data-bs-target="#faq-5" role="button" data-bs-toggle="collapse"
                                    aria-controls="faq-5" aria-expanded="false">
                                    <span class="accordion-order text-black-64">05</span>
                                    <p class="accordion-text text-black">Do you provide ongoing support after launch?</p>
                                    <div class="ic-wrap d-flex">
                                        <i class="icon icon-arrow-caret-down fs-10 text-black"></i>
                                    </div>
                                </div>
                                <div id="faq-5" class="collapse" data-bs-parent="#accordion-faq_list">
                                    <p class="accordion-content text-black-64">
                                        Yes. We offer retainer packages covering website maintenance, performance monitoring,
                                        content updates, and ongoing digital marketing. Think of us as your long-term
                                        digital partner, not just a one-off vendor.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Faq -->
        <!-- CTA -->
        <section class="section-cta flat-spacing" id="contactScroll">
            <div class="s-header d-block">
                <div class="container">
                    <div class="row">
                        <div class="col-2 offset-lg-2 col-lg-2">
                            <div class="col-left">
                                <a href="index.php" class="logo-custom">
                                    <div class="logo-site-sv">
                                        <img src="assets/images/logo/adnap-logo.png" alt="ADNAP" width="34" height="34"
                                            style="object-fit:contain;">
                                    </div>
                                    <span class="line-vertical left"></span>
                                    <span class="line-vertical right"></span>
                                    <span class="line-horizontal top"></span>
                                    <span class="line-horizontal bottom"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-10 col-lg-6">
                            <h2 class="text-display-2 letter-space--3 text-end effectFade fadeUp">
                                Let’s build <br>
                                something great
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <form class="form-cta">
                            <div class="form-content">
                                <div class="tf-grid-layout sm-col-2">
                                    <fieldset class="tf-field">
                                        <input class="tf-input" type="text" placeholder required>
                                        <label class="tf-lable">Name <span class="text-primary">*</span></label>
                                    </fieldset>
                                    <fieldset class="tf-field">
                                        <input class="tf-input" type="email" placeholder required>
                                        <label class="tf-lable">Email <span class="text-primary">*</span></label>
                                    </fieldset>
                                </div>
                                <div class="tf-grid-layout sm-col-2">
                                    <div class="nc-wrap">
                                        <p class="select-label fs-14 text-white-64 d-sm-none">Select an option <span
                                                class="text-primary">*</span></p>
                                        <div class="nice-select">
                                            <span class="current letter-space--1">I'm interested in</span>
                                            <ul class="list">
                                                <li class="option disabled">
                                                    -- Select a service --
                                                </li>
                                                <li class="option">Brand Strategy</li>
                                                <li class="option">Web Design &amp; Development</li>
                                                <li class="option">Digital Growth</li>
                                                <li class="option">Full-Service Partnership</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="nc-wrap">
                                        <p class="select-label fs-14 text-white-64 d-sm-none">Select your budget <span
                                                class="text-primary">*</span>
                                        </p>
                                        <div class="nice-select">
                                            <span class="current letter-space--1">Budget in USD</span>
                                            <ul class="list">
                                                <li class="option disabled">
                                                    -- Select your budget --
                                                </li>
                                                <li class="option">
                                                    Under $5,000
                                                </li>
                                                <li class="option">
                                                    $5,000 – $15,000
                                                </li>
                                                <li class="option">
                                                    $15,000 – $50,000
                                                </li>
                                                <li class="option">
                                                    $50,000+
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <fieldset class="tf-field">
                                    <input class="tf-input" type="text" placeholder required>
                                    <label class="tf-lable">Project details</label>
                                </fieldset>
                            </div>
                            <div class="form-action">
                                <button type="submit" class="tf-btn">
                                    <span class="text-caption">SUBMIT MESSAGE</span>
                                </button>
                                <p class="text-body-1">
                                    say hello — <a href="mailto:hello@adnap.com" class="text-primary">hello@adnap.com</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /CTA -->
        <!-- Footer -->
        <footer class="tf-footer style-2">
            <div class="container">
                <div class="br-line"></div>
            </div>
            <div class="container">
                <div class="footer-inner text-caption letter-space--1 fw-medium">
                    <a href="#aboutScroll" class="link">ABOUT</a>
                    <a href="#serviceScroll" class="link">SERVICES</a>
                    <a href="#workScroll" class="link">PORTFOLIO</a>
                    <a href="blog-standard.php" class="link">BLOG</a>
                    <a href="#" class="action-go-top tf-link-icon link">
                        BACK TO TOP
                        <i class="icon icon-arrow-long-right"></i>
                    </a>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="img-agency scroll-fadeZoom" style="display:flex;align-items:center;justify-content:center;overflow:hidden;">
                        <p class="effectFade fadeZoom text-white fw-semibold letter-space--3"
                            style="font-size:clamp(80px,16vw,220px);line-height:0.9;opacity:0.08;user-select:none;white-space:nowrap;">
                            ADNAP
                        </p>
                    </div>
                    <div class="bottom text-caption letter-space--1 fw-medium">
                        <p class="text-nocopy">
                            © ADNAP DIGITAL AGENCY
                        </p>
                        <p class="">
                            KL → <span class="clock"></span>
                        </p>
                        <div class="right">
                            <a href="#" class="tf-link-icon link">
                                INSTAGRAM
                            </a>
                            <a href="#" class="tf-link-icon link">
                                LINKEDIN
                            </a>
                            <a href="#" class="tf-link-icon link">
                                TWITTER (X)
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /Footer -->
    </main>
<?php include __DIR__ . '/partials/mobile-menu.php'; ?>
    <!-- Javascript -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
        function tesAvatarErr(img) {
            img.style.display = 'none';
            img.nextElementSibling.style.display = 'flex';
        }
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/carousel.js"></script>

    <script src="assets/js/infinityslide.js"></script>
    <script src="assets/js/ScrollSmooth.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/gsapAnimation.js"></script>
    <script src="assets/js/SplitText.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/unicornStudio.umd.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        UnicornStudio.init();
    </script>
</body>

</html>
