<?php
$_cp        = basename($_SERVER['PHP_SELF']);
$_isAbout   = ($_cp === 'about.php');
$_isService = ($_cp === 'services.php' || strpos($_cp, 'service-') === 0);
$_isPortfolio = ($_cp === 'portfolio.php');
$_isBlog    = (strpos($_cp, 'blog-') === 0);
$_isContact = ($_cp === 'contact.php');
?>
        <!-- Header -->
        <header class="tf-header<?php if (empty($header_overlap)) echo ' m-0'; ?>">
            <div class="header-inner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6 col-md-1">
                            <a href="index.php" class="logo-site">
                                <img src="assets/images/logo/adnap-logo.png" alt="ADNAP" style="object-fit:contain;">
                            </a>
                        </div>
                        <div class="col-7 d-none d-md-block">
                            <div class="box-navigation">
                                <ul class="nav-menu-main">
                                    <li class="menu-item"><a href="about.php" class="item-link link text-caption<?php echo $_isAbout ? ' active' : ''; ?>"><span>01 /</span>ABOUT</a></li>
                                    <li class="menu-item"><a href="services.php" class="item-link link text-caption<?php echo $_isService ? ' active' : ''; ?>"><span>02 /</span>SERVICES</a></li>
                                    <li class="menu-item"><a href="portfolio.php" class="item-link link text-caption<?php echo $_isPortfolio ? ' active' : ''; ?>"><span>03 /</span>PORTFOLIO</a></li>
                                    <li class="menu-item"><a href="blog-two-columns.php" class="item-link link text-caption<?php echo $_isBlog ? ' active' : ''; ?>"><span>04 /</span>BLOG</a></li>
                                    <li class="menu-item"><a href="contact.php" class="item-link link text-caption<?php echo $_isContact ? ' active' : ''; ?>"><span>05 /</span>CONTACT</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3 col-md-2 d-none d-sm-block">
                            <div class="header-contact">
                                <a href="mailto:hello@adnap.com" class="link text-caption">HELLO@ADNAP.COM</a>
                                <p class="text-caption">
                                    KUL <span class="clock"></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 col-md-2 d-flex justify-content-end align-items-center">
                            <a href="#mobileMenu" data-bs-toggle="offcanvas" class="btn-mobile-menu text-caption link d-md-none">
                                <i class="icon icon-menu"></i>
                                MENU
                            </a>
                            <a href="contact.php" class="tf-btn d-none d-md-flex">
                                <span class="text-caption">
                                    CONTACT
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- /Header -->

        <!-- WhatsApp Float -->
        <a href="https://wa.me/60123456789" class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Chat with us on WhatsApp">
            <span class="whatsapp-pulse-ring"></span>
            <span class="whatsapp-pulse-ring"></span>
            <span class="whatsapp-pulse-ring"></span>
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
            </svg>
        </a>
        <!-- /WhatsApp Float -->
