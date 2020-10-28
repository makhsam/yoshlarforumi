<?php
require '../phpmailer.php';

$mail = new Mail;

if (isset($_POST) && $mail->validate($_POST)) {
    $mail->send();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Youth Forum | Home</title>
    <!-- Stylesheets -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="../css/color-switcher-design.css" rel="stylesheet">

    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <link rel="icon" href="../images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="../js/respond.js"></script><![endif]-->

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
                	<div class="logo"><a href="index.php"><img src="../images/logo.png" alt="" title=""></a></div>
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
                                    <li class="active"><a href="index.php">Home</a>
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
                                    <li class="dropdown dropmenu"><a href="index.php"><img src="../images/resource/us_flag.jpg" alt="" class="m-2 float-right" height="10" width="18" />English</a>
                                        <ul>
                                            <a class="dropdown-item" href="../index.php"><span> Uzbek </span><img src="../images/resource/uz_flag.png" alt="" class="m-1 float-right" height="8" width="18" /></a>
                                        </ul>
                                    </li>
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
                                <a href="contact.php" class="theme-btn btn-style-one"><span class="btn-title">Sign up</span></a>
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
                    <!-- <div class="nav-logo"><a href="index.php"><img src="../images/logo-2.png" alt="" title=""></a></div> -->

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
                <div class="slide-item" style="background-image: url(../images/main-slider/1.jpg);">
                    <div class="auto-container">
                        <div class="content-box">
                            <span class="title">November 16, 2020</span>
                            <h2>Digital transport and logistics <br> online student forum</h2>
                            <ul class="info-list">
                                <li><span class="icon fa fa-chair"></span> 250 participants</li>
                                <li><span class="icon fa fa-user-alt"></span> 12 Speakers</li>
                                <li><span class="icon fa fa-map-marker-alt"></span> TSUE, TDTU</li>
                            </ul>
                            <div class="btn-box"><a href="contact.php" class="theme-btn btn-style-two"><span class="btn-title">Sign up</span></a></div>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div class="slide-item" style="background-image: url(../images/main-slider/2.jpg);">
                    <div class="auto-container">
                        <div class="content-box">
                            <span class="title">November 16, 2020</span>
                            <h2> Digital Transportation and Logistics <br> Student Online Forum </h2>
                            <ul class="info-list">
                                <li><span class="icon fa fa-chair"></span> 250 participants</li>
                                <li><span class="icon fa fa-user-alt"></span> 12 ta Speakers</li>
                                <li><span class="icon fa fa-map-marker-alt"></span> TSUE, TDTU</li>
                            </ul>
                            <div class="btn-box"><a href="contact.php" class="theme-btn btn-style-two"><span class="btn-title">Sign up</span></a></div>
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
                                <span class="title">About the forum</span>
                                <h2>Online forum on digital transport and logistics</h2>
                                <div class="text">Operation of large private transport companies in foreign countries
                                    by analyzing the mechanism, to the problems that arise in the course of business activities
                                    the solution used and the experience aimed at overcoming the existing shortcomings,
                                    Uzbekistan's transport sector is competitive by studying its achievements
                                    integration of the transport sector by studying foreign experience and
                                    theoretical and practical assistance in defining company strategies.</div>
                            </div>
                            <ul class="list-style-one">
                                <li> Railway Company Economics </li>
                                <li> Economy of air transport companies </li>
                                <li> Economics of Logistics Companies </li>
                                <li> Economics of Automotive Companies </li>
                                <li> Transport and transit corridors in the Central Asian region in the context of globalization
                                    integration and its economic efficiency </li>
                            </ul>
                            <div class="btn-box"><a href="../images/info.pdf" class="theme-btn btn-style-three"><span class="btn-title">Download the statute</span></a></div>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="image-box">
                            <figure class="image wow fadeIn"><img src="../images/resource/about-img-1.jpg" alt=""></figure>
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
                                <span class="title">Features</span>
                                <h2> Our features</h2>
                            </div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="icon-box"><span class="icon flaticon-lecture"></span></div>
                            <h4><a href="about.html">Great Speakers</a></h4>
                            <div class="text">You can learn from the knowledge of our experts</div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="icon-box"><span class="icon flaticon-search"></span></div>
                            <h4><a href="about.html">Experience</a></h4>
                            <div class="text">Enhance your experience with us</div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="inner-box">
                            <div class="icon-box"><span class="icon flaticon-diamond-1"></span></div>
                            <h4><a href="about.html">Rewarding</a></h4>
                            <div class="text">The best participants will be awarded</div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                        <div class="inner-box">
                            <div class="icon-box"><span class="icon flaticon-success"></span></div>
                            <h4><a href="about.html">Party</a></h4>
                            <div class="text">A special holiday show for great students</div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                        <div class="inner-box">
                            <div class="icon-box"><span class="icon flaticon-employee"></span></div>
                            <h4><a href="about.html">New friends</a></h4>
                            <div class="text">Meet new friends and share knowledge</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Features Section -->

        <!-- Speakers Section -->
        <section class="speakers-section" id="speakers-section" style="background-image: url(../images/background/6.jpg);">
            <div class="auto-container">
                <div class="sec-title light text-center">
                    <span class="title">Speakers</span>
                    <h2>Todays Performers</h2>
                </div>

                <div class="row">
                    <!-- Speaker Block -->
                    <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="speakers-detail.html"><img src="../images/resource/speaker-1.jpg" alt=""></a></figure>
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
                                <figure class="image"><a href="speakers-detail.html"><img src="../images/resource/speaker-2.jpg" alt=""></a></figure>
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
                                <figure class="image"><a href="speakers-detail.html"><img src="../images/resource/speaker-3.jpg" alt=""></a></figure>
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
                                <figure class="image"><a href="speakers-detail.html"><img src="../images/resource/speaker-4.jpg" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <div class="inner">
                                    <h4 class="name"><a href="speakers-detail.html">Kholbozorova Marjona</a></h4>
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
                                <figure class="image"><a href="speakers-detail.html"><img src="../images/resource/speaker-5.jpg" alt=""></a></figure>
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
                                <figure class="image"><a href="speakers-detail.html"><img src="../images/resource/speaker-8.jpg" alt=""></a></figure>
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
                                <figure class="image"><a href="speakers-detail.html"><img src="../images/resource/speaker-7.jpg" alt=""></a></figure>
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
                                <figure class="image"><a href="speakers-detail.html"><img src="../images/resource/speaker-6.jpg" alt=""></a></figure>
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
                                <h4 class="counter-title">Participants</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                            <div class="count-box">
                                <span class="icon icon_ribbon_alt"></span>
                                <span class="count-text" data-speed="3000" data-stop="25">0</span>
                                <h4 class="counter-title">Winners</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                            <div class="count-box">
                                <span class="icon icon_like"></span>
                                <span class="count-text" data-speed="3000" data-stop="250">0</span>
                                <h4 class="counter-title">Certificates</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                            <div class="count-box">
                                <span class="icon icon_book_alt"></span>
                                <span class="count-text" data-speed="3000" data-stop="5">0</span>
                                <h4 class="counter-title">Directions</h4>
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
                    <span class="title">ABOUT CONFERENCE</span>
                    <h2>Schedule Plan</h2>
                </div>

                <div class="schedule-tabs tabs-box">
                    <div class="btns-box">
                        <!--Tabs Box-->
                        <ul class="tab-buttons clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-1">
                                <span class="day">Day 01</span>
                                <span class="date">16</span>
                                <span class="month">Nov</span> 2020
                            </li>

                            <li class="tab-btn" data-tab="#tab-2">
                                <span class="day">Day 02</span>
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
                                            <h4><a href="event-detail.html">The opening ceremony of the forum</a></h4>
                                            <div class="text">The forum will be opened by the organizers</div>
                                            <div class="btn-box">
                                                <a href="event-detail.html" class="theme-btn"> Read more</a>
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
                                            <figure class="thumb"><img src="../images/resource/thumb-2.jpg" alt=""></figure>
                                            <h5 class="name">Jamoalar taqdioti</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div> -->
                                            <h4><a href="event-detail.html">Team presentation</a></h4>
                                            <div class="text">Registered students are divided into teams on their own
                                                defend their themes</div>
                                            <div class="btn-box">
                                                <a href="event-detail.html" class="theme-btn">Read more</a>
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
                                            <figure class="thumb"><img src="../images/resource/thumb-1.jpg" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div> -->
                                            <h4><a href="event-detail.html">Effect of Covid-19</a></h4>
                                            <div class="text">Companies coming out of the crisis during the pandemic Ways (suggestions)</div>
                                            <div class="btn-box">
                                                <a href="event-detail.html" class="theme-btn">Read more</a>
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
                                            <figure class="thumb"><img src="../images/resource/thumb-2.jpg" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div> -->
                                            <h4><a href="event-detail.html">World experience</a></h4>
                                            <div class="text">Experiences of foreign private transport companies Privatization of Uzbek transport companies and pros and cons to be competitive</div>
                                            <div class="btn-box">
                                                <a href="event-detail.html" class="theme-btn">Read more</a>
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
                                            <figure class="thumb"><img src="../images/resource/thumb-1.jpg" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div> -->
                                            <h4><a href="event-detail.html">Youth Forum Opening Ceremony</a></h4>
                                            <div class="text">Short congratulations and celebration on the occasion of Student Day
                                                opening ceremony</div>
                                            <div class="btn-box">
                                                <a href="event-detail.html" class="theme-btn">Read more</a>
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
                                            <figure class="thumb"><img src="../images/resource/thumb-2.jpg" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div> -->
                                            <h4><a href="event-detail.html">Award Ceremony</a></h4>
                                            <div class="text">Rewarding active students and awarding certificates
                                            </div>
                                            <div class="btn-box">
                                                <a href="event-detail.html" class="theme-btn">Read more</a>
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
                                            <figure class="thumb"><img src="../images/resource/thumb-1.jpg" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div> -->
                                            <h4><a href="event-detail.html">Special entertainment for students demonstrations</a></h4>
                                            <div class="text">Students' Day is celebrated in a special way</div>
                                            <div class="btn-box">
                                                <a href="event-detail.html" class="theme-btn">Read more</a>
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
                                            <figure class="thumb"><img src="../images/resource/thumb-2.jpg" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div> -->
                                            <h4><a href="event-detail.html">Closed by Forum Organizers is given.
                                        </div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read more</a>
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
    <section class="video-section" style="background-image: url(../images/background/1.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="text"> Be with us </div>
                <h2> Online conference for students </br2>
                    <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-now" data-fancybox="gallery" data-caption=""><i class="icon flaticon-play-button-3" aria-hidden="true"></i><span class="ripple"></span></a>
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
                            <span class="title"> Join the forum </span>
                            <h2> Forum Procedure </h2>
                            <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et dolore magna aliqu enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip</div> -->
                        </div>
                        <ul class="list-style-one">
                            <li> Participants are divided into teams of 5 according to their chosen area; </li>
                            <li> Communities are recognized as the world's leading private transportation companies; </li>
                            <li> These companies are analyzed by teams at different stages. </li>
                            <li> After the Team presentation, the speakers and other teams ask questions
                                can give. Question limit: 3 minutes </li>
                            <li> After all Team presentations, foreign transport companies will be invited to Uzbekistan
                                compared to transportation companies. </li>
                        </ul>
                        <div class="btn-box">
                            <a href="#regis" class="theme-btn btn-style-two"><span class="btn-title">Register Now</span></a>
                        </div>
                    </div>
                </div>
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img src="../images/background/3.jpg" alt=""></figure>
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
                                        <a href="index.php"><img src="../images/logo.png" alt="" /></a>
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
                                                <a href="../images/gallery/1.jpg" class="lightbox-image" title="Image Title Here"><img src="../images/resource/gw-1.jpg" alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="../images/gallery/2.jpg" class="lightbox-image" title="Image Title Here"><img src="../images/resource/gw-2.jpg" alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="../images/gallery/3.jpg" class="lightbox-image" title="Image Title Here"><img src="../images/resource/gw-3.jpg" alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="../images/gallery/4.jpg" class="lightbox-image" title="Image Title Here"><img src="../images/resource/gw-4.jpg" alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="../images/gallery/5.jpg" class="lightbox-image" title="Image Title Here"><img src="../images/resource/gw-5.jpg" alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="../images/gallery/1.jpg" class="lightbox-image" title="Image Title Here"><img src="../images/resource/gw-6.jpg" alt=""></a>
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
    <script src="../js/jquery.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="../js/jquery.fancybox.js"></script>
    <script src="../js/appear.js"></script>
    <script src="../js/owl.js"></script>
    <script src="../js/jquery.countdown.js"></script>
    <script src="../js/wow.js"></script>
    <script src="../js/script.js"></script>
    <!-- Color Setting -->
    <script src="../js/color-settings.js"></script>
</body>

</html>