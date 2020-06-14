<!DOCTYPE html>
<html lang="en">
 
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

    <!-- Coming Soon -->
    <section class="coming-soon">
        <div class="anim-icons full-width">
            <span class="icon icon-circle-blue wow fadeIn"></span>
            <span class="icon icon-dots wow fadeInleft"></span>
            <span class="icon icon-line-1 wow zoomIn"></span>
            <span class="icon icon-circle-1 wow zoomIn"></span>
        </div>

        <div class="auto-container">
            <div class="content">
                <!--                <div class="logo"><a href="https://thessic.com/"><img style="width:50%;" src="https://thessic.com/images/logo_image.png" alt=""></a></div>-->
                <h1>Coming Soon</h1>
                <div class="text">Stay tuned for more information.<br> Subscribe to our newsletter to stay updated</div>
                <div class="timer">
                    <div class="cs-countdown clearfix" data-countdown="12/1/2019 05:06:59"></div>
                </div>
                <!--Emailed Form-->
                <div class="emailed-form">
                    <form method="post" action="contact.html">
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Enter your email" required="">
                            <button type="submit" class="theme-btn"><i class="flaticon-arrow-pointing-to-right"></i></button>
                        </div>
                    </form>
                </div>
                <div class="social-links">
                    <ul class="social-icon-two social-icon-colored">
                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                        <!--                        <li><a href="#"><span class="fab fa-behance"></span></a></li>-->
                        <!--                        <li><a href="#"><span class="fab fa-dribbble"></span></a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Coming Soon -->

    
    <?php include 'footer.php';?>



        <!--End pagewrapper-->


        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
        <script src="https://thessic.com/js/jquery.js"></script>
        <script src="https://thessic.com/js/popper.min.js"></script>
        <script src="https://thessic.com/js/bootstrap.min.js"></script>
        <script src="https://thessic.com/js/jquery-ui.js"></script>
        <script src="https://thessic.com/js/jquery.countdown.js"></script>
        <script src="https://thessic.com/js/jquery.fancybox.js"></script>
        <script src="https://thessic.com/js/appear.js"></script>
        <script src="https://thessic.com/js/wow.js"></script>
        <script src="https://thessic.com/js/script.js"></script>
        <!-- Color Setting -->
        <script src="https://thessic.com/js/color-settings.js"></script>
        <!--End Google Map APi-->>
        <!-- End Footer -->

</body>
 
</html>
