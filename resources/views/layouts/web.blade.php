
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Metanic - Web Hosting HTML5 Template</title>
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png" />
    <!--bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!--owl carousel css-->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <!--icomoon css-->
    <link rel="stylesheet" type="text/css" href="assets/css/icomoon.css">
    <!--icofont css-->
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.min.css">
    <!--meanmenu css-->
    <link rel="stylesheet" type="text/css" href="assets/css/meanmenu.css">
    <!--main css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

</head>

<body>
    <!--start preloader-->
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell align-middle">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div>
    <!--end preloader-->
    <!--start header-->
    <header class="header">
        <!--start header top-->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="header-left">
                            <ul>
                                <li><i class="icofont-email"></i> info@example.com</li>
                                <li><i class="icofont-phone"></i> +99 01234 56789</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="header-right text-right">
                            <ul>
                                <li><a href="#"><i class="icofont-comment"></i> Live Chat</a></li>
                                <li><a href="login.html"><i class="icofont-lock"></i> Login</a></li>
                                <li><a href="register.html"><i class="icofont-user-alt-2"></i> Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end header top-->
        <!--start header bottom-->
        <div class="header-btm">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="logo">
                            <a class="logo" href="index.html"><img src="assets/images/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <nav class="mainmenu">
                            <ul>
                                <li><a class="active" href="index.html">Home <i class="icofont-simple-down"></i></a>
                                    <ul class="drop-down-menu">
                                        <li><a href="index.html">Home One</a></li>
                                        <li><a href="index-1.html">Home Two</a></li>
                                        <li><a href="index-2.html">Home Three</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="shared-hosting.html">Hosting <i class="icofont-simple-down"></i></a>
                                    <ul class="drop-down-menu">
                                        <li><a href="shared-hosting.html">Shared Hosting</a></li>
                                        <li><a href="reseller-hosting.html">Reseller Hosting</a></li>
                                        <li><a href="dedicated-hosting.html">Dedicated Hosting</a></li>
                                        <li><a href="cloud-hosting.html">Cloud Hosting</a></li>
                                        <li><a href="vps-hosting.html">VPS Hosting</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Pages <i class="icofont-simple-down"></i></a>
                                    <ul class="drop-down-menu">
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="affiliate.html">Affiliate</a></li>
                                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                        <li><a href="pricing.html">Pricing</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="reset-password.html">Reset Password</a></li>
                                        <li><a href="domian.html">Domain Names</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog-grid.html">Blog <i class="icofont-simple-down"></i></a>
                                    <ul class="drop-down-menu">
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-list.html">Blog List</a></li>
                                        <li><a href="blog-single.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--end header bottom-->
    </header>
    <!--end header-->
    @yield('content')
    <!--start footer-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!--start footer widget-->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <img src="assets/images/logo.png" class="img-fluid" alt="">
                        <p class="text-light ml-2 mt-3">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim.</p>
                    </div>
                </div>
                <!--end footer widget-->
                <!--start footer widget-->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h4>Hosting Plans</h4>
                        <ul>
                            <li><a href="#">Shared Hosting</a></li>
                            <li><a href="#">Reseller Hosting</a></li>
                            <li><a href="#">Cloud Hosting</a></li>
                            <li><a href="#">Dedicated Hosting</a></li>
                        </ul>
                    </div>
                </div>
                <!--end footer widget-->
                <!--start footer widget-->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h4>Company</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Our Team</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <!--end footer widget-->
                <!--start footer widget-->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h4>Important Links</h4>
                        <ul>
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Affiliate</a></li>
                            <li><a href="#">User Sign Up</a></li>
                            <li><a href="#">Our Pricing Plans</a></li>
                        </ul>
                    </div>
                </div>
                <!--end footer widget-->
            </div>
            <div class="copyright-text text-center">
                <p>Copy &copy; 2019 All Rights Reserved By <a href="https://themeforest.net/user/rootpointer">RootPointer</a></p>
            </div>
        </div>
    </footer>
    <!--end footer-->
    <!--jQuery js-->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!--proper js-->
    <script src="assets/js/popper.min.js"></script>
    <!--bootstrap js-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--counter js-->
    <script src="assets/js/waypoints.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <!--owl carousel js-->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!--meanmenu js-->
    <script src="assets/js/meanmenu.min.js"></script>
    <!--main js-->
    <script src="assets/js/custom.js"></script>
</body>

</html>
