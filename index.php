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
    <title>Yoshlar forumi | Bosh sahifa</title>
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


        <!-- Main Header-->
        <header class="main-header">
            <div class="main-box">
                <div class="auto-container clearfix">
                    <!-- <div class="logo-box">
                	<div class="logo"><a href="/"><img src="images/logo.png" alt="" title=""></a></div>
                </div> -->

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Togg le Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-button"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="active"><a href="/">Bosh sahifa</a>
                                    </li>
                                    <li class="dropdown"><a href="about-us.html">Biz haqidimizda</a>
                                    </li>
                                    <li class="dropdown"><a href="speaker.html">Ma'ruzachilar</a>
                                    </li>
                                    <li class="dropdown"><a href="speakers.html">Tashkilotchilar</a>
                                    </li>
                                    <!-- <li class="dropdown"><a href="schedule.html">Schedule</a>
                                </li> -->
                                    <li class="dropdown"><a href="blog-sidebar.html">Yo'nalishlar</a></li>
                                    <!-- <li><a href="contact.php">Bog'lanish</a></li> -->
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
                                <a href="contact.php" class="theme-btn btn-style-one"><span
                                        class="btn-title">Ro'yxatdan o'tish</span></a>
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
                    <div class="nav-logo"><a href="/"><img src="images/logo-2.png" alt="" title=""></a></div>

                    <ul class="navigation clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </ul>
                </nav>
            </div><!-- End Mobile Menu -->

        </header>
        <!--End Main Header -->

        <!-- Banner Section -->
        <section class="banner-section">
            <div class="banner-carousel owl-carousel owl-theme">
                <!-- Slide Item -->
                <div class="slide-item" style="background-image: url(images/main-slider/1.jpg);">
                    <div class="auto-container">
                        <div class="content-box">
                            <span class="title">Noyabr 16, 2020</span>
                            <h2>Raqamli transprot va logistika <br> talabalar onlayn forumi</h2>
                            <ul class="info-list">
                                <li><span class="icon fa fa-chair"></span> 250 ta qatnashchilar</li>
                                <li><span class="icon fa fa-user-alt"></span> 12 Ma'ruzachilar</li>
                                <li><span class="icon fa fa-map-marker-alt"></span> TDIU, TDTU</li>
                            </ul>
                            <div class="btn-box"><a href="contact.php" class="theme-btn btn-style-two"><span
                                        class="btn-title">Ro'yxatdan o'tish</span></a></div>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div class="slide-item" style="background-image: url(images/main-slider/2.jpg);">
                    <div class="auto-container">
                        <div class="content-box">
                            <span class="title">Noyabr 16, 2020</span>
                            <h2>Raqamli transprot va logistika <br>talabalar onlayn forumi</h2>
                            <ul class="info-list">
                                <li><span class="icon fa fa-chair"></span> 250 ta qatnashchilar</li>
                                <li><span class="icon fa fa-user-alt"></span> 12 ta Ma'ruzachilar</li>
                                <li><span class="icon fa fa-map-marker-alt"></span> TDIU, TDTU</li>
                            </ul>
                            <div class="btn-box"><a href="contact.php" class="theme-btn btn-style-two"><span
                                        class="btn-title">Ro'yxatdan o'tish</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <!-- Coming Soon -->
        <section class="coming-soon-section">
            <div class="auto-container">
                <div class="outer-box">
                    <div class="time-counter">
                        <div class="time-countdown clearfix" data-countdown="11/16/2020"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Coming Soon -->

        <!-- About Section -->
        <section class="about-section">
            <div class="anim-icons full-width">
                <span class="icon icon-circle-blue wow fadeIn"></span>
                <span class="icon icon-dots wow fadeInleft"></span>
                <span class="icon icon-circle-1 wow zoomIn"></span>
            </div>
            <div class="auto-container">
                <div class="row">
                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <span class="title">Forum haqida</span>
                                <h2>Raqamli transprot va logistika onlayn forumi</h2>
                                <div class="text">Xorij mamlakatlaridagi yirik xususiy transport kompaniyalar ishlash
                                    mexanizmini tahlil qilish orqali, ish faoliyati jarayonida yuzaga kelgan muammolarga
                                    qo`llangan yechim hamda mavjud kamchiliklarini bartaraf etishga qaratilgan tajriba,
                                    erishilgan yutuqlarni o’rganib, O’zbekiston Transport sohasini raqobatbardosh
                                    qilish, xorij tajribalarini o’rgangan holda transport sohasini integratsiyalash va
                                    kompaniya strageyilarini belgilashda nazariy va amaliy yordam berish.</div>
                            </div>
                            <ul class="list-style-one">
                                <li>Temir yo’l kompaniyalar iqtisodiyoti</li>
                                <li>Havo transport kompaniyalar iqtisodiyoti</li>
                                <li>Logistika kompaniyalar iqtisodiyoti</li>
                                <li>Avtomobil kompaniyalar iqtisodiyoti</li>
                                <li>Globallashuv sharoitida Markaziy Osiyo mintaqasida transport - tranzit yoʻlaklari
                                    integratsiyalashuvi va uning iqtisodiy samaradorligi</li>
                            </ul>
                            <div class="btn-box"><a href="images/info.pdf" class="theme-btn btn-style-three"><span
                                        class="btn-title">Nizomni yuklab olish</span></a></div>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="image-box">
                            <figure class="image wow fadeIn"><img src="images/resource/about-img-1.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End About Section -->

        <!-- Features Section Two -->
        <section class="features-section-two">
            <div class="auto-container">
                <div class="anim-icons">
                    <span class="icon twist-line-1 wow zoomIn"></span>
                    <span class="icon twist-line-2 wow zoomIn" data-wow-delay="1s"></span>
                    <span class="icon twist-line-3 wow zoomIn" data-wow-delay="2s"></span>
                </div>

                <div class="row">
                    <!-- Title Block -->
                    <div class="title-block col-lg-4 col-md-12 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="sec-title">
                                <span class="title">Xususiyatlarimiz</span>
                                <h2>Bizning xususiyatlarimiz</h2>
                            </div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="icon-box"><span class="icon flaticon-lecture"></span></div>
                            <h4><a href="about.html">Tajribali Ma'ruzachilar</a></h4>
                            <div class="text">Mutaxassislarimiz bilimidan o'rganishingiz mumkin</div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="icon-box"><span class="icon flaticon-search"></span></div>
                            <h4><a href="about.html">Ko'nikma</a></h4>
                            <div class="text">O'z tajribangizni biz bilan oshiring</div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="inner-box">
                            <div class="icon-box"><span class="icon flaticon-diamond-1"></span></div>
                            <h4><a href="about.html">Taqdirlash</a></h4>
                            <div class="text">Eng yaxshi ishtirokchilar taqdirlanadi</div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                        <div class="inner-box">
                            <div class="icon-box"><span class="icon flaticon-success"></span></div>
                            <h4><a href="about.html">Talabalar bayrami</a></h4>
                            <div class="text">Ajoyib talabalar uchun maxsus bayram namoyishi</div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                        <div class="inner-box">
                            <div class="icon-box"><span class="icon flaticon-employee"></span></div>
                            <h4><a href="about.html">Yangi do'stlar</a></h4>
                            <div class="text">Yangi do'stlar bilan tanishib bilim almashish</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Features Section -->

        <!-- Speakers Section -->
        <section class="speakers-section" id="speakers-section" style="background-image: url(images/background/6.jpg);">
            <div class="auto-container">
                <div class="sec-title light text-center">
                    <span class="title">Ma'ruzachilarimiz</span>
                    <h2>Bugungi ijrochilar</h2>
                </div>

                <div class="row">
                    <!-- Speaker Block -->
                    <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="speakers-detail.html"><img
                                            src="images/resource/speaker-1.jpg" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <div class="inner">
                                    <h4 class="name"><a href="speakers-detail.html">Shakirova Farog’at</a></h4>
                                    <span class="designation">Havo yo’l transporti ekspert</span>
                                    <ul class="social-links social-icon-colored">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Speaker Block -->
                    <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="speakers-detail.html"><img
                                            src="images/resource/speaker-2.jpg" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <div class="inner">
                                    <h4 class="name"><a href="speakers-detail.html">Xolbutayeva Shaxnoza</a></h4>
                                    <span class="designation">Havo yo’l transporti ekspert</span>
                                    <ul class="social-links social-icon-colored">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Speaker Block -->
                    <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="speakers-detail.html"><img
                                            src="images/resource/speaker-3.jpg" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <div class="inner">
                                    <h4 class="name"><a href="speakers-detail.html">Umarova Dilfuza</a></h4>
                                    <span class="designation">Havo yo’l transporti eksperti</span>
                                    <ul class="social-links social-icon-colored">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Speaker Block -->
                    <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="speakers-detail.html"><img
                                            src="images/resource/speaker-4.jpg" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <div class="inner">
                                    <h4 class="name"><a href="speakers-detail.html">Gulnora Mardiyeva</a></h4>
                                    <span class="designation">Avtomobil transporti eksperti</span>
                                    <ul class="social-links social-icon-colored">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Speaker Block -->
                    <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="speakers-detail.html"><img
                                            src="images/resource/speaker-5.jpg" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <div class="inner">
                                    <h4 class="name"><a href="speakers-detail.html">Qosimov Saidakmal</a></h4>
                                    <span class="designation">Avtomobil transporti eksperti</span>
                                    <ul class="social-links social-icon-colored">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Speaker Block -->
                    <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="speakers-detail.html"><img
                                            src="images/resource/speaker-8.jpg" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <div class="inner">
                                    <h4 class="name"><a href="speakers-detail.html">Haydarov Ismatilla</a></h4>
                                    <span class="designation">Temir yo'l kompaniyalar iqtisodiyoti ekspert</span>
                                    <ul class="social-links social-icon-colored">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Speaker Block -->
                    <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="speakers-detail.html"><img
                                            src="images/resource/speaker-7.jpg" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <div class="inner">
                                    <h4 class="name"><a href="speakers-detail.html">Jalilov Arslon </a></h4>
                                    <span class="designation">Temir yo'l transporti ekspert</span>
                                    <ul class="social-links social-icon-colored">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Speaker Block -->
                    <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="speakers-detail.html"><img
                                            src="images/resource/speaker-6.jpg" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <div class="inner">
                                    <h4 class="name"><a href="speakers-detail.html">Odiov Ahmadjon</a></h4>
                                    <span class="designation">Temir yo'l transporti ekspert</span>
                                    <ul class="social-links social-icon-colored">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Speakers Section -->

        <!-- Fun Fact Section -->
        <section class="fun-fact-section">
            <div class="auto-container">
                <div class="fact-counter">
                    <div class="row clearfix">

                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="count-box">
                                <span class="icon icon_headphones"></span>
                                <span class="count-text" data-speed="3000" data-stop="250">0</span>
                                <h4 class="counter-title">Qatnashchilar</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                            <div class="count-box">
                                <span class="icon icon_ribbon_alt"></span>
                                <span class="count-text" data-speed="3000" data-stop="25">0</span>
                                <h4 class="counter-title">G'oliblar</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                            <div class="count-box">
                                <span class="icon icon_like"></span>
                                <span class="count-text" data-speed="3000" data-stop="250">0</span>
                                <h4 class="counter-title">Sertifikatlar</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                            <div class="count-box">
                                <span class="icon icon_book_alt"></span>
                                <span class="count-text" data-speed="3000" data-stop="5">0</span>
                                <h4 class="counter-title">Yo'nalishlar</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Fun Fact Section -->

        <!-- schedule Section -->
        <section class="schedule-section">
            <div class="anim-icons">
                <span class="icon icon-circle-4 wow zoomIn"></span>
                <span class="icon icon-circle-3 wow zoomIn"></span>
            </div>

            <div class="auto-container">
                <div class="sec-title text-center">
                    <span class="title">Konferensiya o'tkazilish tartibi</span>
                    <h2>Konferensiya rejasi</h2>
                </div>

                <div class="schedule-tabs tabs-box">
                    <div class="btns-box">
                        <!--Tabs Box-->
                        <ul class="tab-buttons clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-1">
                                <span class="day">Kun 01</span>
                                <span class="date">16</span>
                                <span class="month">Noy</span> 2020
                            </li>

                            <li class="tab-btn" data-tab="#tab-2">
                                <span class="day">Kun 02</span>
                                <span class="date">17</span>
                                <span class="month">Noy</span> 2020
                            </li>

                            <!-- <li class="tab-btn" data-tab="#tab-3">
                            <span class="day">Day 03</span>
                            <span class="date">03</span>
                            <span class="month">Jan</span> 2020
                        </li>

                        <li class="tab-btn" data-tab="#tab-4">
                            <span class="day">Day 04</span>
                            <span class="date">04</span>
                            <span class="month">Jan</span> 2020
                        </li> -->
                        </ul>
                    </div>

                    <div class="tabs-content">

                        <!--Tab-->
                        <div class="tab active-tab" id="tab-1">
                            <div class="schedule-timeline">
                                <!-- schedule Block -->
                                <div class="schedule-block">
                                    <div class="inner-box">
                                        <div class="inner">
                                            <div class="date">9.30 AM <br> 10.00 AM</div>
                                            <h4><a href="event-detail.html">Forumning ochilish marosimi</a></h4>
                                            <div class="text">Forum tashkilotchilar tomonidan ochib beriladi</div>
                                            <div class="btn-box">
                                                <a href="event-detail.html" class="theme-btn"> Ko'proq ma'lumot</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- schedule Block -->
                                <div class="schedule-block even">
                                    <div class="inner-box">
                                        <div class="inner">
                                            <div class="date">10.00 AM <br> 11.00 AM</div>
                                            <!-- <div class="speaker-info">
                                            <figure class="thumb"><img src="images/resource/thumb-2.jpg" alt=""></figure>
                                            <h5 class="name">Jamoalar taqdioti</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div> -->
                                            <h4><a href="event-detail.html">Jamoalar taqdimoti</a></h4>
                                            <div class="text">Ro'yhatdan o'tkan talabalar jamaolarga bo'linib o'z
                                                mavzularini himoya qilishadi</div>
                                            <div class="btn-box">
                                                <a href="event-detail.html" class="theme-btn">Ko'proq ma'lumot</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- schedule Block -->
                                <div class="schedule-block">
                                    <div class="inner-box">
                                        <div class="inner">
                                            <div class="date">15.10 AM <br> 16.00 AM</div>
                                            <!-- <div class="speaker-info">
                                            <figure class="thumb"><img src="images/resource/thumb-1.jpg" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div> -->
                                            <h4><a href="event-detail.html">Covid-19 ta'siri</a></h4>
                                            <div class="text">Pandemiya davrida kompaniyalarning inqirozdan chiqish
                                                yo’llari (takliflar)</div>
                                            <div class="btn-box">
                                                <a href="event-detail.html" class="theme-btn">Ko'proq ma'lumot</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- schedule Block -->
                                <div class="schedule-block even">
                                    <div class="inner-box">
                                        <div class="inner">
                                            <div class="date">16.00 AM <br> 16.50 PM</div>
                                            <!-- <div class="speaker-info">
                                            <figure class="thumb"><img src="images/resource/thumb-2.jpg" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div> -->
                                            <h4><a href="event-detail.html">Jahon tajribasi</a></h4>
                                            <div class="text">Xorij xususiy transport kompaniyalar tajribalarining
                                                O’zbekiston transport kompaniyalarining xususiylashtirish va
                                                raqobatbardosh qilish uchun ijobiy va salbiy taraflari</div>
                                            <div class="btn-box">
                                                <a href="event-detail.html" class="theme-btn">Ko'proq ma'lumot</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab" id="tab-2">
                            <div class="schedule-timeline">
                                <!-- schedule Block -->
                                <div class="schedule-block">
                                    <div class="inner-box">
                                        <div class="inner">
                                            <div class="date">10.00 AM <br> 11.00 AM</div>
                                            <!-- <div class="speaker-info">
                                            <figure class="thumb"><img src="images/resource/thumb-1.jpg" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div> -->
                                            <h4><a href="event-detail.html">Yoshlar forumi ochilish marosimi</a></h4>
                                            <div class="text">Talabalar kuni munosabati bilan qisqa tabriklar va bayram
                                                ochilish ma'rosimi</div>
                                            <div class="btn-box">
                                                <a href="event-detail.html" class="theme-btn">Ko'proq ma'lumot</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- schedule Block -->
                                <div class="schedule-block even">
                                    <div class="inner-box">
                                        <div class="inner">
                                            <div class="date">11.00 AM <br> 11.30 AM</div>
                                            <!-- <div class="speaker-info">
                                            <figure class="thumb"><img src="images/resource/thumb-2.jpg" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div> -->
                                            <h4><a href="event-detail.html">Taqdirlash marosimi</a></h4>
                                            <div class="text">Faol talaballarni taqdirlash va sertifikarlar topshirish
                                            </div>
                                            <div class="btn-box">
                                                <a href="event-detail.html" class="theme-btn">Ko'proq ma'lumot</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- schedule Block -->
                                <div class="schedule-block">
                                    <div class="inner-box">
                                        <div class="inner">
                                            <div class="date">11.30 AM <br> 13.00 AM</div>
                                            <!-- <div class="speaker-info">
                                            <figure class="thumb"><img src="images/resource/thumb-1.jpg" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div> -->
                                            <h4><a href="event-detail.html">Talabalar uchun mahsus ko'ngil ochar
                                                    namoyishlar</a></h4>
                                            <div class="text">Talabalar bayrami mahsus nishonlanadi</div>
                                            <div class="btn-box">
                                                <a href="event-detail.html" class="theme-btn">Ko'proq ma'lumot</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- schedule Block -->
                                <div class="schedule-block even">
                                    <div class="inner-box">
                                        <div class="inner">
                                            <div class="date">13.00 AM <br> 14.00 PM</div>
                                            <!-- <div class="speaker-info">
                                            <figure class="thumb"><img src="images/resource/thumb-2.jpg" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div> -->
                                            <h4><a href="event-detail.html">Forum tashkilotchilar tomonidan yopib
                                                    beriladi.
                                        </div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Ko'roq ma'lumot</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </div>
    </section>
    <!--End schedule Section -->


    <!-- Video Section -->
    <section class="video-section" style="background-image: url(images/background/1.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="text">Biz bilan birga bo'ling</div>
                <h2>Talabalar <br>uchun online konferensiya</h2>
                <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-now" data-fancybox="gallery"
                    data-caption=""><i class="icon flaticon-play-button-3" aria-hidden="true"></i><span
                        class="ripple"></span></a>
            </div>
        </div>
    </section>
    <!--End Video Section -->

    <!-- Why Choose Us -->
    <section class="why-choose-us">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">Forumga qo'shiling</span>
                            <h2>Forum o’tkazilish tartibi </h2>
                            <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et dolore magna aliqu enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip</div> -->
                        </div>
                        <ul class="list-style-one">
                            <li>Ishtirokchilar tanlagan yo’nalishlari bo’yicha 5 nafardan jamoalarga bo’linadi;</li>
                            <li>Jamoalarga dunyodagi yetakchi xususiy transport kompaniyalari bo’lib beriladi;</li>
                            <li>Ushbu kompaniyalarni jamoalar turli bosqichlarda tahlil qilishadi.</li>
                            <li>Jamoalar taqdimotini tanishtirib bo’lgandan so’ng spikerlar va boshqa jamoalar savol
                                berishlari mumkin. Savol chegarasi: 3 daqiqa</li>
                            <li>Barcha jamoalar taqdimoti tugagandan so’ng Xorij transport kompaniyalarini O’zbekiston
                                transport kompaniyalar bilan taqqoslashtirishadi.</li>
                        </ul>
                        <div class="btn-box">
                            <a href="#regis" class="theme-btn btn-style-two"><span class="btn-title">Ro'yxatdan
                                    o'tish</span></a>
                        </div>
                    </div>
                </div>
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img src="images/background/3.jpg" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Choose Us -->

    <!-- Register Section -->
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
                                <h2>Ro'yhatdan o'tish</h2>
                                <div class="text">Ro'yxatdan o'tishning oxirgi muddati 5-noyabr sanasigacha</div>
                            </div>
                        </div>
                    </div>
                    <!--Register Form-->
                    <div class="register-form col-lg-8 col-md-6 col-sm-12">
                        <div class="form-inner">
                            <form method="post" action="index.php">
                                <div class="form-group">
                                    <span class="icon fa fa-user"></span>
                                    <input type="text" name="name" placeholder="F.I.SH" required>
                                </div>

                                <div class="form-group">
                                    <span class="icon fa fa-envelope"></span>
                                    <input type="email" name="email" placeholder="Email address" email required>
                                </div>

                                <div class="form-group">
                                    <span class="icon fa fa-phone"></span>
                                    <input type="text" name="phone" placeholder="Telefon raqami" required>
                                </div>

                                <div class="form-group">
                                    <!-- <label for="yunalish"></label> -->
                                    <select name="category" id="yunalish" required>
                                        <option selected value="">Yo'nalishni tanlang</option>
                                        <option value="temiryol">Temir Yo‘l Transporti kompaniyalari iqtisodiyoti</option>
                                        <option value="havo">Havo Transporti kompaniyalari iqtisodiyoti</option>
                                        <option value="logistika">Logistika kompaniyalari iqtisodiyoti</option>
                                        <option value="avtomobil">Avtomobil Transporti kompaniyalari iqtisodiyoti
                                        </option>
                                        <option value="global">Globallashuv sharoitida Markaziy Osiyo mintaqasida
                                            transport - tranzit yoʻlaklari integratsiyalashuvi va uning iqtisodiy
                                            samaradorligi</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <!-- <label for="til"></label> -->
                                    <select name="lang" id="til" required>
                                        <option selected value="">Tilni tanlang</option>
                                        <option value="uzbek">O'zbek</option>
                                        <option value="english">Russian</option>
                                        <option value="russian">English</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <span class="icon fa fa-edit"></span>
                                    <textarea name="purpose" placeholder="Forumda qatnashishdan maqsad"></textarea>
                                </div>

                                <div class="form-group">
                                    <span class="icon fa fa-edit"></span>
                                    <textarea name="visited" placeholder="Avval qatnashgan forum va konferensiyalaringiz?"></textarea>
                                </div>

                                <div class="form-group text-right">
                                    <button type="submit" class="theme-btn btn-style-four"><span class="btn-title">Yuborish</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Register Section -->

    <!-- News Section -->

    <!--End News Section -->

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
                                        <a href="/"><img src="images/logo.png" alt="" /></a>
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
                                    <h2 class="widget-title">Kerakli havolalar</h2>
                                    <ul class="user-links">
                                        <li><a href="/">Bosh sahifa</a></li>
                                        <li><a href="about-us.html">Biz haqimizda</a></li>
                                        <li><a href="blog.html">Yo'nalishlar</a></li>
                                        <li><a href="contact.php">Biz bilan bog'laning</a></li>
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
                                                <div class="text"><a
                                                        href="mailto:https://t.me/digital_transport2020">https://t.me/digital_transport2020
                                                </div>
                                            </li>
                                            <li>
                                                <span class="icon flaticon-paper-plane"></span>
                                                <div class="text"><a
                                                        href="mailto:mirjalolrajabov579@gmail.com">mirjalolrajabov579@gmail.com</a>
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
                                    <h2 class="widget-title">Instagram Rasmlar</h2>
                                    <div class="widget-content">
                                        <div class="outer clearfix">
                                            <figure class="image">
                                                <a href="images/gallery/1.jpg" class="lightbox-image"
                                                    title="Image Title Here"><img src="images/resource/gw-1.jpg"
                                                        alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="images/gallery/2.jpg" class="lightbox-image"
                                                    title="Image Title Here"><img src="images/resource/gw-2.jpg"
                                                        alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="images/gallery/3.jpg" class="lightbox-image"
                                                    title="Image Title Here"><img src="images/resource/gw-3.jpg"
                                                        alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="images/gallery/4.jpg" class="lightbox-image"
                                                    title="Image Title Here"><img src="images/resource/gw-4.jpg"
                                                        alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="images/gallery/5.jpg" class="lightbox-image"
                                                    title="Image Title Here"><img src="images/resource/gw-5.jpg"
                                                        alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="images/gallery/1.jpg" class="lightbox-image"
                                                    title="Image Title Here"><img src="images/resource/gw-6.jpg"
                                                        alt=""></a>
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
                        <p>Websayt TDIU talabasi Madina Kaxxarova tomonidan yaratildi
                            <!--  <a href="/">Expert-Themes</a></p> -->
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
            <span>You will find much more options for colors and styling in admin panel. This color picker is used only
                for demonstation purposes.</span>
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
                            <input type="search" class="form-control" name="search-input" value=""
                                placeholder="Search Here" required>
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
    <script src="js/jquery.countdown.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/script.js"></script>
    <!-- Color Setting -->
    <script src="js/color-settings.js"></script>
</body>

</html>