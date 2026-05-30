<?php
$page_title       = 'ADNAP — Contact Us';
$page_description = 'Get in touch with ADNAP Digital Agency. Tell us about your project and let\'s build something great together. Based in Kuala Lumpur, working globally.';
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

    <main id="wrapper">
<?php include __DIR__ . '/partials/nav-header.php'; ?>
        <div class="section-page-title">
            <div class="container text-center">
                <h1 class="page-title fw-semibold effectFade fadeZoom">Contact</h1>
                <div class="breadcrumbs effectFade fadeUp">
                    <a href="index.php" class="link">Home</a>
                    <div>/</div>
                    <div>Contact</div>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <section class="section-cta flat-spacing">
            <div class="s-header d-block">
                <div class="container">
                    <div class="row">
                        <div class="col-2 offset-lg-2 col-lg-2">
                            <div class="col-left">
                                <a href="index.php" class="logo-custom">
                                    <div class="logo-site-sv">
                                        <img src="assets/images/logo/adnap-logo.png" alt="ADNAP" width="115" height="115"
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
                                Let's build <br>something great
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-between">
                    <!-- Contact Info -->
                    <div class="col-lg-3 mb-5 mb-lg-0">
                        <div class="effectFade fadeUp">
                            <p class="mini-title text-caption text-white-64 mb-4">GET IN TOUCH</p>

                            <div class="mb-4">
                                <p class="text-caption fw-medium letter-space--1 text-white-64 mb-2">EMAIL</p>
                                <a href="mailto:hello@adnap.com" class="link text-body-1 text-primary">hello@adnap.com</a>
                            </div>

                            <div class="mb-4">
                                <p class="text-caption fw-medium letter-space--1 text-white-64 mb-2">PHONE</p>
                                <a href="tel:+60123456789" class="link text-body-1">+60 12 345 6789</a>
                            </div>

                            <div class="mb-5">
                                <p class="text-caption fw-medium letter-space--1 text-white-64 mb-2">LOCATION</p>
                                <p class="text-body-1">
                                    Kuala Lumpur,<br>Malaysia
                                </p>
                                <p class="text-body-3 text-white-64 mt-1">Working globally</p>
                            </div>

                            <div class="br-line mb-4"></div>

                            <p class="text-caption fw-medium letter-space--1 text-white-64 mb-3">SOCIALS</p>
                            <ul class="tf-list vertical gap-12">
                                <li>
                                    <a href="#" class="tf-link-icon link text-body-1">
                                        <i class="icon icon-arrow-top-right"></i>
                                        Instagram
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tf-link-icon link text-body-1">
                                        <i class="icon icon-arrow-top-right"></i>
                                        LinkedIn
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tf-link-icon link text-body-1">
                                        <i class="icon icon-arrow-top-right"></i>
                                        Twitter (X)
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="col-lg-8">
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
                                        <p class="select-label fs-14 text-white-64 d-sm-none">Select an option <span class="text-primary">*</span></p>
                                        <div class="nice-select">
                                            <span class="current letter-space--1">I'm interested in</span>
                                            <ul class="list">
                                                <li class="option disabled">-- Select a service --</li>
                                                <li class="option">Brand Strategy</li>
                                                <li class="option">Web Design &amp; Development</li>
                                                <li class="option">Digital Growth</li>
                                                <li class="option">Full-Service Partnership</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="nc-wrap">
                                        <p class="select-label fs-14 text-white-64 d-sm-none">Select your budget <span class="text-primary">*</span></p>
                                        <div class="nice-select">
                                            <span class="current letter-space--1">Budget in USD</span>
                                            <ul class="list">
                                                <li class="option disabled">-- Select your budget --</li>
                                                <li class="option">Under $5,000</li>
                                                <li class="option">$5,000 – $15,000</li>
                                                <li class="option">$15,000 – $50,000</li>
                                                <li class="option">$50,000+</li>
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

        <!-- Clients -->
        <div class="section-brand flat-spacing bg-surface">
            <div class="container">
                <h6 class="mini-title text-caption text-black-64">TRUSTED CLIENTS &amp; PARTNERS</h6>
                <div class="brand-list type-line-2">
                    <a href="#" class="img-brand"><img loading="lazy" width="76" height="48" src="assets/images/brand/brandv2-1.svg" alt="Brand"></a>
                    <a href="#" class="img-brand"><img loading="lazy" width="125" height="24" src="assets/images/brand/brandv2-2.svg" alt="Brand"></a>
                    <a href="#" class="img-brand"><img loading="lazy" width="57" height="48" src="assets/images/brand/brandv2-3.svg" alt="Brand"></a>
                    <a href="#" class="img-brand"><img loading="lazy" width="142" height="36" src="assets/images/brand/brandv2-4.svg" alt="Brand"></a>
                    <a href="#" class="img-brand"><img loading="lazy" width="84" height="48" src="assets/images/brand/brandv2-5.svg" alt="Brand"></a>
                    <a href="#" class="img-brand"><img loading="lazy" width="140" height="36" src="assets/images/brand/brandv2-6.svg" alt="Brand"></a>
                    <a href="#" class="img-brand"><img loading="lazy" width="48" height="48" src="assets/images/brand/brandv2-7.svg" alt="Brand"></a>
                    <a href="#" class="img-brand"><img loading="lazy" width="138" height="24" src="assets/images/brand/brandv2-8.svg" alt="Brand"></a>
                    <a href="#" class="img-brand"><img loading="lazy" width="63" height="48" src="assets/images/brand/brandv2-9.svg" alt="Brand"></a>
                    <a href="#" class="img-brand"><img loading="lazy" width="133" height="24" src="assets/images/brand/brandv2-10.svg" alt="Brand"></a>
                </div>
            </div>
        </div>

<?php include __DIR__ . '/partials/footer.php'; ?>
    </main>
<?php include __DIR__ . '/partials/mobile-menu.php'; ?>
<?php include __DIR__ . '/partials/scripts.php'; ?>
</body>

</html>

