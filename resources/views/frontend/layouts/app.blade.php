<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themexriver.com/digital-agency/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Dec 2017 09:20:51 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bigo</title>
        <!-- fav icon -->
        <link href="img/frontend/favicon.png" rel="shortcut icon" type="image/png">

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- animated-css -->
        <link href="css/animate.min.css" rel="stylesheet" type="text/css">
        <!-- font-awesome-css -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- swiper-css -->
        <link href="swiper/swiper-min.css" rel="stylesheet" type="text/css">
        <!-- owl-carrosel-css -->
        <link href="owl-carrosel/owl.carousel.min.css" rel="stylesheet" type="text/css">
        <link href="owl-carrosel/owl.theme.default.min.css" rel="stylesheet" type="text/css">
        <!-- offcanvas-menu-css -->
        <link href="css/offcanvas-menu.css" rel="stylesheet" type="text/css">
        <!-- style-css -->
        <link href="css/style.css" rel="stylesheet" type="text/css">

    </head>
    <body class="homePageOne" data-spy="scroll" data-target=".drop-down">
        <!-- start preloader -->
        <div id="preloader">
            <div class="pre-wrapper">
                <div class="color-bg"></div>
            </div>
        </div>
        <!-- end preloader -->


        @include('frontend.includes.header')
        <div class="container-fluid" style="padding:0">
            @yield('content')
        </div>

        @include('frontend.includes.footer')
        



        <!-- Off-Canvas View Only -->
        <div id="offcanvas-menu" class="visible-xs visible-sm">

            <span class="close-menu"><i class="fa fa-times" aria-hidden="true"></i></span>

            <ul class="menu-wrapper">
                <li>
                    <a class="active dropmenu" href="#">Home <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="dropDown sub-menu">
                            <li><a class="active" href="index.html">Home One</a></li>
                            <li><a href="index-two.html">Home Two</a></li>
                            <li><a href="index-three.html">Home Three</a></li>
                        </ul><!-- end of dropdown -->
                </li><!-- end of li -->

                <li><a href="about.html">Abouts</a></li><!-- end of li -->


                <li>
                    <a class="dropmenu" href="#">Service <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="dropDown sub-menu">
                        <li><a href="service-one.html">App Design</a></li>
                        <li><a href="service-two.html">Web Design</a></li>
                        <li><a href="service-three.html">Product Design</a></li>
                        <li><a href="service-four.html">Project Mockup</a></li>
                        <li><a href="service-five.html">Graphics Design</a></li>
                        <li><a href="service-six.html">Video Presentation</a></li>
                        <li><a href="service-seven.html">Ecommerce</a></li>
                        <li><a href="service-eight.html">Mobile App</a></li>
                        <li><a href="service-nine.html">Content Management</a></li>
                        <li><a href="service-ten.html">Email Marketing</a></li>
                        <li><a href="service-eleven.html">Social Media Marketing</a></li>
                        <li><a href="service-twelve.html">Display Marketing</a></li>
                  </ul><!-- end of dropdown -->
                </li><!-- end of li -->

                <li>
                    <a class="dropmenu" href="#">Project <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="dropDown sub-menu">
                        <li><a href="project-one.html">Project-One</a></li>
                        <li><a href="project-two.html">Project-Two</a></li>
                        <li><a href="project-three.html">Project-Three</a></li>
                    </ul><!-- end of dropdown -->
                </li><!-- end of li -->

                <li>
                    <a class="dropmenu" href="#">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="dropDown sub-menu">
                        <li><a href="case.html">Case</a></li>
                        <li><a href="single-case.html">Single Case</a></li>
                        <li><a href="career.html">Career</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="awards.html">Awards</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="single-blog.html">Single Blog</a></li>
                        <li><a href="construction.html">Construction</a></li>
                        <li><a href="error.html">Error</a></li>
                    </ul><!-- end of dropdown -->
                </li><!-- end of li -->

                <li><a href="contact.html">Contact</a></li><!-- end of li -->
            </ul> <!-- menu-wrapper -->
        </div>
        <!-- Off-Canvas View Only -->

        <div id="toTop" class="hidden-xs">
            <i class="fa fa-chevron-up"></i>
        </div> <!-- totop -->


        <script src="js/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.inview.min.js"></script>
        <script src="js/portfolio.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/lightbox.js"></script>
        <script src="swiper/swiper-min.js"></script>
        <script src="owl-carrosel/owl.carousel.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
        <script src="js/slider.js"></script>
        <script src="js/script.js"></script>
    </body>

<!-- Mirrored from themexriver.com/digital-agency/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Dec 2017 09:21:54 GMT -->
</html>