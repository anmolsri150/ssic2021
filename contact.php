﻿<!DOCTYPE html>
<html lang="en">
<!-- Copied from https://expert-themes.com/html/eventrox/contact.html by Cyotek WebCopy 1.7.0.600, Thursday, September 19, 2019, 12:52:40 AM -->
<head>
    <meta charset="utf-8">
    <title>SSIC 2021 | Manipal University Jaipur</title>
    <!-- Stylesheets -->
    <link href="https://thessic.com/css/bootstrap.css" rel="stylesheet">
    <link href="https://thessic.com/css/style.css" rel="stylesheet">
    <link href="https://thessic.com/css/responsive.css" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="https://thessic.com/css/color-switcher-design.css" rel="stylesheet">

    <link rel="shortcut icon" href="https://thessic.com/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="https://thessic.com/images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="https://thessic.com/js/respond.js"></script><![endif]-->

    <style>
        /*###Desktops, big landscape tablets and laptops(Large, Extra large)####*/
        @media screen and (min-width: 1024px){
            #logo
            {
                max-width: 30%;
                height: auto !important;
            }
        }

        /*###Tablet(medium)###*/
        @media screen and (min-width : 768px) and (max-width : 1023px){
            #logo
            {
                max-width: 40%;
                height: auto !important;
            }
        }

        /*### Smartphones (portrait and landscape)(small)### */
        @media screen and (min-width : 0px) and (max-width : 767px){
            #logo{
                max-width: 50%;
                height: auto !important;
            }
        }
    </style>

</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader">
        <div class="bookshelf_wrapper">
            <ul class="books_list">
                <li class="book_item first"></li>
                <li class="book_item second"></li>
                <li class="book_item third"></li>
                <li class="book_item fourth"></li>
                <li class="book_item fifth"></li>
                <li class="book_item sixth"></li>
            </ul>
            <div class="shelf"></div>
            <div class="shelf-logo"><img src="https://thessic.com/images/logo_image-min.png"/></div>
        </div>
    </div>
    <!-- Header span -->

    <!-- Header Span -->
    <span class="header-span"></span>

    <!-- Main Header-->
    <?php include 'header.php';?>
    <!--End Main Header -->
    <!--Page Title-->
    <section class="page-title" style="background-image:url(https://thessic.com/images/background/5.jpg);">
        <div class="auto-container">
            <h1>Contact Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="contact-column col-lg-4 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Contact Info</h2>
                        </div>
                        <ul class="contact-info">
                            <li>
                                <span class="icon fa fa-map-marker-alt"></span>
                                <p><strong>32, Breaking Street,</strong></p>
                                <p>2nd cros, Newyork ,USA 10002</p>
                            </li>

                            <li>
                                <span class="icon fa fa-phone-volume"></span>
                                <p><strong>Call Us</strong></p>
                                <p>+321 4567 89 012 & 79 023</p>
                            </li>

                            <li>
                                <span class="icon fa fa-envelope"></span>
                                <p><strong>Mail Us</strong></p>
                                <p><a href="mailto:support@example.com">Support@example.com</a></p>
                            </li>

                            <li>
                                <span class="icon fa fa-clock"></span>
                                <p><strong>Opening Time</strong></p>
                                <p>Mon - Sat: 09.00am to 18.00pm</p>
                            </li>
                        </ul>

                        <ul class="social-icon-two social-icon-colored">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="contact-form">
                            <div class="sec-title">
                                <h2>Get in Touch</h2>
                            </div>
                            <form method="post" action="sendemail.php" id="contact-form">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Name" required="">
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone" required="">
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="subject" placeholder="Subject" required="">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Submit Now</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Page Section -->

    <!-- Map Section -->
    <section class="map-section">
        <div class="auto-container">
            <div class="map-outer">
                <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap" data-hue="#ffc400" data-title="Envato" data-icon-path="https://thessic.com/images/icons/map-marker.png" data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                </div>
            </div>
        </div>
    </section>
    <!-- End Map Section -->
    <!-- Main Footer -->
    <?php include 'footer.php';?>



        <!--End pagewrapper-->


        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
        <script src="https://thessic.com/js/jquery.js"></script>
        <script src="https://thessic.com/js/popper.min.js"></script>
        <script src="https://thessic.com/js/bootstrap.min.js"></script>
        <script src="https://thessic.com/js/jquery-ui.js"></script>
        <script src="https://thessic.com/js/jquery.fancybox.js"></script>
        <script src="https://thessic.com/js/appear.js"></script>
        <script src="https://thessic.com/js/owl.js"></script>
        <script src="https://thessic.com/js/wow.js"></script>
        <script src="https://thessic.com/js/script.js"></script>
        <!-- Color Setting -->
        <script src="https://thessic.com/js/color-settings.js"></script>
        <!--Google Map APi Key-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPH8h1UpcK01BdcvoZeOzq-_wJqRxN1Pc"></script>
        <script src="https://thessic.com/js/map-script.js"></script>
        <!--End Google Map APi-->>
        <!-- End Footer -->

</body>
<!-- Copied from https://expert-themes.com/html/eventrox/contact.html by Cyotek WebCopy 1.7.0.600, Thursday, September 19, 2019, 12:52:40 AM -->
</html>
