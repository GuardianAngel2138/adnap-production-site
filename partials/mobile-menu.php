<?php
if (!isset($_cp)) {
    $_cp        = basename($_SERVER['PHP_SELF']);
    $_isAbout   = ($_cp === 'about.php');
    $_isService = ($_cp === 'services.php' || strpos($_cp, 'service-') === 0);
    $_isPortfolio = ($_cp === 'portfolio.php');
    $_isBlog    = (strpos($_cp, 'blog-') === 0);
    $_isContact = ($_cp === 'contact.php');
}
?>
    <!-- Mobile Menu -->
    <div class="offcanvas offcanvas-bottom offcanvas-menu" id="mobileMenu">
        <div class="offcanvas-content">
            <div class="container h-100">
                <div class="offcanvas-content_wrapin">
                    <div class="canvas_head">
                        <a href="index.php" class="logo-site">
                            <img src="assets/images/logo/adnap-logo.png" alt="ADNAP" height="36" width="36" style="object-fit:contain;">
                        </a>
                        <a href="#" data-bs-dismiss="offcanvas" class="btn-mobile-menu text-caption link">
                            <i class="icon icon-close"></i>
                            CLOSE
                        </a>
                    </div>
                    <div class="canvas_center">
                        <ul class="nav-ul-mb">
                            <li>
                                <div class="item">
                                    <a href="about.php" class="mb-menu-link text-display-1<?php echo $_isAbout ? ' active' : ''; ?>">
                                        <span class="text">About</span>
                                        <div class="infiniteSlide_text_main">
                                            <div class="infiniteSlide infiniteSlide_text" data-clone="5">
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> Who We Are
                                                </p>
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> Who We Are
                                                </p>
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> Who We Are
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <a href="services.php" class="mb-menu-link text-display-1<?php echo $_isService ? ' active' : ''; ?>">
                                        <span class="text">Services</span>
                                        <div class="infiniteSlide_text_main">
                                            <div class="infiniteSlide infiniteSlide_text" data-clone="5">
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> What We Do
                                                </p>
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> What We Do
                                                </p>
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> What We Do
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <a href="portfolio.php" class="mb-menu-link text-display-1<?php echo $_isPortfolio ? ' active' : ''; ?>">
                                        <span class="text">Portfolio</span>
                                        <div class="infiniteSlide_text_main">
                                            <div class="infiniteSlide infiniteSlide_text" data-clone="5">
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> Our Work
                                                </p>
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> Our Work
                                                </p>
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> Our Work
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <a href="blog-two-columns.php" class="mb-menu-link text-display-1<?php echo $_isBlog ? ' active' : ''; ?>">
                                        <span class="text">Blog</span>
                                        <div class="infiniteSlide_text_main">
                                            <div class="infiniteSlide infiniteSlide_text" data-clone="5">
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> Insights
                                                </p>
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> Insights
                                                </p>
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> Insights
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <a href="contact.php" class="mb-menu-link text-display-1<?php echo $_isContact ? ' active' : ''; ?>">
                                        <span class="text">Contact</span>
                                        <div class="infiniteSlide_text_main">
                                            <div class="infiniteSlide infiniteSlide_text" data-clone="5">
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> Get In Touch
                                                </p>
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> Get In Touch
                                                </p>
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> Get In Touch
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="canvas_foot">
                        <div class="left">
                            <a href="mailto:hello@adnap.com" class="link text-caption">HELLO@ADNAP.COM</a>
                            <p class="text-caption">
                                KUL <span class="clock"></span>
                            </p>
                        </div>
                        <div class="right">
                            <a href="#" class="tf-link-icon text-caption link">
                                <i class="icon icon-arrow-top-right"></i>
                                INSTAGRAM
                            </a>
                            <a href="#" class="tf-link-icon text-caption link">
                                <i class="icon icon-arrow-top-right"></i>
                                LINKEDIN
                            </a>
                            <a href="#" class="tf-link-icon text-caption link">
                                <i class="icon icon-arrow-top-right"></i>
                                TWITTER (X)
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Mobile Menu -->
