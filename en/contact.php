<?php
require './phpmailer.php';

$mail = new Mail;

if (isset($_POST) && $mail->validate($_POST)) {
    $mail->send();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Youth forum | Registration</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="css/color-switcher-design.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
        <!-- Header span -->

        <!-- Header Span -->
        <span class="header-span"></span>

        <!-- Main Header-->
        <header class="main-header header-style-two">
            <div class="main-box">
                <div class="auto-container clearfix">
                    <!-- <div class="logo-box">
                    <div class="logo"><a href="index.php"><img src="images/logo.png" alt="" title=""></a></div>
                </div> -->

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Togg le Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-button"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="dropdown"><a href="index.php">Home</a>
                                    </li>
                                    <li class="dropdown"><a href="about-us.html">About us</a>
                                    </li>
                                    <li class="dropdown"><a href="speaker.html">Speakers</a>
                                    </li>
                                    <li class="dropdown"><a href="speakers.html">Organizers</a>
                                    </li>
                                    <!-- <li class="dropdown"><a href="schedule.html">Schedule</a>
                                </li> -->
                                    <li class="dropdown"><a href="blog-sidebar.html">Directions</a></li>
                                    <!-- <li><a href="contact.php">Bog'lanish</a></li> -->
                                    <li class="dropdown dropmenu"><a href="index.php"><img src="images/resource/us_flag.jpg" alt="" class="m-2 float-right" height="10" width="18" />English</a>
                                        <ul>
                                            <a class="dropdown-item" href="../index.php"><span> Uzbek </span><img src="images/resource/uz_flag.png" alt="" class="m-1 float-right" height="8" width="18" /></a>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <!-- Outer box -->
                        <div class="outer-box">
                            <!--Search Box-->
                            <div class="search-box-outer">
                                <div class="search-box-btn"><span class="flaticon-search"></span></div>
                            </div>

                            <!-- Button Box -->
                            <div class="btn-box">
                                <a href=contact.php class="theme-btn btn-style-one"><span class="btn-title">Registration</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>

                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                <nav class="menu-box">
                    <!-- <div class="nav-logo"><a href="index.php"><img src="images/logo-2.png" alt="" title=""></a></div> -->

                    <ul class="navigation clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </ul>
                </nav>
            </div><!-- End Mobile Menu -->

        </header>
        <!--End Main Header -->

        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/5.jpg);">
            <div class="auto-container">
                <h1>Contact us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>Registration</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->


        <section class="register-section" id="regis">
            <div class="auto-container">
                <div class="anim-icons full-width">
                    <span class="icon icon-circle-3 wow zoomIn"></span>
                </div>
                <div class="outer-box">
                    <div class="row no-gutters">
                        <div class="title-column col-lg-4 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="sec-title light">
                                    <div class="icon-box"><span class="icon flaticon-rocket-ship"></span></div>
                                    <h2>Register now</h2>
                                    <div class="text">The deadline for registration is November 5</div>
                                </div>
                            </div>
                        </div>
                        <!--Register Form-->
                        <div class="register-form col-lg-8 col-md-6 col-sm-12">
                            <div class="form-inner">
                                <form method="post" action="index.php">
                                    <div class="form-group">
                                        <span class="icon fa fa-user"></span>
                                        <input type="text" name="name" placeholder="Full name" required>
                                    </div>

                                    <div class="form-group">
                                        <span class="icon fa fa-envelope"></span>
                                        <input type="email" name="email" placeholder="Email address" email required>
                                    </div>

                                    <div class="form-group">
                                        <span class="icon fa fa-phone"></span>
                                        <input type="text" name="phone" placeholder="Phone number" required>
                                    </div>

                                    <div class="form-group">
                                        <!-- <label for="yunalish"></label> -->
                                        <select name="category" id="yunalish" required>
                                            <option selected value="">Select a route</option>
                                            <option value="temiryol">Economics of Railway Transport Companies</option>
                                            <option value="havo">Economics of Air Transport Companies</option>
                                            <option value="logistika">Economics of logistics companies</option>
                                            <option value="avtomobil">Economics of road transport companies
                                            </option>
                                            <option value="global">In the context of globalization in the Central Asian region
                                                integration of transport and transit corridors and its economic
                                                efficiency</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <!-- <label for="til"></label> -->
                                        <select name="lang" id="til" required>
                                            <option selected value="">Choose language</option>
                                            <option value="uzbek">Uzbek</option>
                                            <option value="english">Russian</option>
                                            <option value="russian">English</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <span class="icon fa fa-edit"></span>
                                        <textarea name="purpose" placeholder="The purpose of participating in the forum"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <span class="icon fa fa-edit"></span>
                                        <textarea name="visited" placeholder="The forums and conferences you have attended before?"></textarea>
                                    </div>

                                    <div class="form-group text-right">
                                        <button type="submit" class="theme-btn btn-style-four"><span class="btn-title">Submit</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Footer -->
        <footer class="main-footer">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="auto-container">
                    <div class="row">
                        <!--Big Column-->
                        <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <!--Footer Column-->
                                <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget about-widget">
                                        <div class="logo">
                                            <a href="index.php"><img src="images/logo.png" alt="" /></a>
                                        </div>
                                        <!--  <div class="text">
                                        <p> O’zbekiston Transport sohasini raqobatbardosh qilish, xorij tajribalarini o’rgangan holda transport sohasini integratsiyalash va kompaniya strageyilarini belgilashda nazariy va amaliy ko'rib chiqish.</p>
                                    </div> -->
                                        <!-- <ul class="social-icon-one social-icon-colored">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul> -->
                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget useful-links">
                                        <h2 class="widget-title">Required links</h2>
                                        <ul class="user-links">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="about-us.html">About us</a></li>
                                            <li><a href="blog.html">Directions</a></li>
                                            <li><a href="contact.php">Contact us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Big Column-->
                        <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <!--Footer Column-->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <!--Footer Column-->
                                    <div class="footer-widget contact-widget">
                                        <h2 class="widget-title">Contact Us</h2>
                                        <!--Footer Column-->
                                        <div class="widget-content">
                                            <ul class="contact-list">

                                                <!--  <li>
                                                <span class="icon flaticon-paper-plane"></span>
                                                <div class="text"><a href="mailto:digital_transport_logistics">digital_transport_logistics</div>
                                            </li> -->
                                                <li>
                                                    <span class="icon flaticon-phone"></span>
                                                    <div class="text"><a href="tel:+1-345-5678-77">+998 97 7781566</a></div>
                                                </li>
                                                <li>
                                                    <span class="icon flaticon-paper-plane"></span>
                                                    <div class="text"><a href="mailto:https://t.me/digital_transport2020">https://t.me/digital_transport2020
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon flaticon-paper-plane"></span>
                                                    <div class="text"><a href="mailto:mirjalolrajabov579@gmail.com">mirjalolrajabov579@gmail.com</a>
                                                    </div>
                                                </li>

                                                <li>
                                                    <span class="icon flaticon-worldwide"></span>
                                                    <div class="text">TDIU, TDTU </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <!--Footer Column-->
                                    <div class="footer-widget instagram-widget">
                                        <h2 class="widget-title">Instagram Gallery</h2>
                                        <div class="widget-content">
                                            <div class="outer clearfix">
                                                <figure class="image">
                                                    <a href="images/gallery/1.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/gw-1.jpg" alt=""></a>
                                                </figure>

                                                <figure class="image">
                                                    <a href="images/gallery/2.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/gw-2.jpg" alt=""></a>
                                                </figure>

                                                <figure class="image">
                                                    <a href="images/gallery/3.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/gw-3.jpg" alt=""></a>
                                                </figure>

                                                <figure class="image">
                                                    <a href="images/gallery/4.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/gw-4.jpg" alt=""></a>
                                                </figure>

                                                <figure class="image">
                                                    <a href="images/gallery/5.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/gw-5.jpg" alt=""></a>
                                                </figure>

                                                <figure class="image">
                                                    <a href="images/gallery/1.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/gw-6.jpg" alt=""></a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Footer Bottom-->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <div class="copyright-text">
                            <p>The website was created by TSUE student Madina Kakhkharova
                                <!--  <a href="index.php">Expert-Themes</a></p> -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

    </div>
    <!--End pagewrapper-->

    <!-- Color Palate / Color Switcher -->
    <div class="color-palate">
        <div class="color-trigger">
            <i class="fa fa-cog"></i>
        </div>
        <div class="color-palate-head">
            <h6>Choose Your Demo</h6>
        </div>
        <ul class="box-version option-box">
            <li>Full width</li>
            <li class="box">Boxed</li>
        </ul>
        <ul class="rtl-version option-box">
            <li>LTR Version</li>
            <li class="rtl">RTL Version</li>
        </ul>
        <div class="palate-foo">
            <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
        </div>
        <a href="#" class="purchase-btn">Purchase now</a>
    </div><!-- End Color Switcher -->

    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="/">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required>
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>

                <br>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="#">Seo</a></li>
                    <li><a href="#">Bussiness</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Digital</a></li>
                    <li><a href="#">Conferance</a></li>
                </ul>

            </div>

        </div>
    </div>

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/script.js"></script>
    <!-- Color Setting -->
    <script src="js/color-settings.js"></script>
    <!--Google Map APi Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPH8h1UpcK01BdcvoZeOzq-_wJqRxN1Pc"></script>
    <script src="js/map-script.js"></script>
    <!--End Google Map APi-->
</body>

</html>