<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from www.s7template.com/tf/kargill/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Sep 2020 08:54:38 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kargill - Blog, Magazine Html Template</title>
    <!-- favicon -->
    <link rel=icon href="assets/img/favicon.png" sizes="20x20" type="image/png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('fe/assets/css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('fe/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('fe/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('fe/assets/css/responsive.css')}}">

</head>
<body>

<!-- preloader area start -->
<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<!-- search popup area start -->
<div class="search-popup" id="search-popup">
    <form action="http://www.s7template.com/tf/kargill/index.html" class="search-form">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search.....">
        </div>
        <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
    </form>
</div>
<!-- //. search Popup -->
<div class="body-overlay" id="body-overlay"></div>

<!-- topbar end-->
<div class="topbar-area-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 align-self-center">
                <div class="topbar-left text-md-left text-center">
                    <span>TRENDING NEWS</span>Every success is helped by someone behind the people
                </div>
            </div>
            <div class="col-md-3 text-md-right text-center">
                <div class="topbar-right">
                    12 Sunday 2020
                </div>
            </div>
        </div>
    </div>
</div>
<!-- topbar end-->

<!-- navbar start -->
<div class="navbar-area navbar-area-2">
    <nav class="navbar navbar-expand-lg">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo d-lg-none d-block">
                    <a class="main-logo" href="index-2.html">
                        <img src="{{asset('fe/assets/img/logo.png')}}" alt="img"></a>
                </div>
                <button class="menu toggle-btn d-block d-lg-none" data-target="#miralax_main_menu"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-left"></span>
                    <span class="icon-right"></span>
                </button>
            </div>
            <div class="logo d-lg-block d-none">
                <a class="main-logo" href="index-2.html"><img src="{{asset('fe/assets/img/logo.png')}}" alt="img"></a>
            </div>
            <div class="nav-right-part nav-right-part-mobile">
                <a class="search header-search" href="#"><i class="fa fa-search"></i></a>
                <a class="btn btn-main" href="#">Subscrobe Now</a>
            </div>
            <div class="collapse navbar-collapse" id="miralax_main_menu">
                <ul class="navbar-nav menu-open">
                    <li><a href="blog-category.html">Home</a></li>
                    <li class="menu-item-has-children current-menu-item">
                        <a href="#">Category</a>
                        <ul class="sub-menu">
                            <?php
                            use App\Models\Category;
                            $categories = Category::all();
                            ?>
                            @foreach($categories as $category)
                                <li><a href="">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="nav-right-part nav-right-part-desktop">
                <a class="search header-search" href="#"><i class="fa fa-search"></i></a>
                <a class="btn btn-main" href="#">Subscrobe Now</a>
            </div>
        </div>
    </nav>
</div>
<!-- navbar end -->

@section('main-content')

@show


<!-- footer area start -->
<footer class="footer-area">
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-xl-2 col-md-4 col-sm-6">
                    <h5 class="widget-title">Quick Links</h5>
                    <div class="widget widget_link">
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Privacy & Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Affiliate Program</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6">
                    <h5 class="widget-title">Popular Posts</h5>
                    <div class="widget widget_link">
                        <ul>
                            <li><a href="#">Celebrity News</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">TV News</a></li>
                            <li><a href="#">Music News</a></li>
                            <li><a href="#">Style News</a></li>
                            <li><a href="#">Entertainment Video</a></li>
                            <li><a href="#">Design Website</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 offset-xl-1 col-md-4 col-sm-6">
                    <h5 class="widget-title">International</h5>
                    <div class="widget widget_link">
                        <ul>
                            <li><a href="#">Executive</a></li>
                            <li><a href="#">Senate</a></li>
                            <li><a href="#">House</a></li>
                            <li><a href="#">Judiciary</a></li>
                            <li><a href="#">Foreign policy</a></li>
                            <li><a href="#">Polls</a></li>
                            <li><a href="#">Elections</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6">
                    <h5 class="widget-title">Quick Links</h5>
                    <div class="widget widget_link">
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Privacy & Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Affiliate Program</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="widget widget_post_list">
                        <h5 class="widget-title">Latest Posts</h5>
                        <div class="media-post-wrap media">
                            <div class="thumb">
                                <img src="assets/img/footer/1.png" alt="img">
                            </div>
                            <div class="media-body">
                                <h6><a href="#">Nothing impossble to need hard work</a></h6>
                                <div class="meta">
                                    <div class="date">
                                        12 Jun 2020
                                    </div>
                                    <div class="author">
                                        <a href="#">Rt Shuvro</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media-post-wrap media">
                            <div class="thumb">
                                <img src="assets/img/footer/2.png" alt="img">
                            </div>
                            <div class="media-body">
                                <h6><a href="#">Nothing impossble to need hard work</a></h6>
                                <div class="meta">
                                    <div class="date">
                                        12 Jun 2020
                                    </div>
                                    <div class="author">
                                        <a href="#">Rt Shuvro</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media-post-wrap media">
                            <div class="thumb">
                                <img src="assets/img/footer/3.png" alt="img">
                            </div>
                            <div class="media-body">
                                <h6><a href="#">Nothing impossble to need hard work</a></h6>
                                <div class="meta">
                                    <div class="date">
                                        12 Jun 2020
                                    </div>
                                    <div class="author">
                                        <a href="#">Rt Shuvro</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7 align-self-center">
                    <div class="footer-logo">
                        <img src="assets/img/logo-2.png" alt="img">
                    </div>
                    <ul class="footer_menu">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Advertisement</a></li>
                    </ul>
                </div>
                <div class="col-xl-4 col-lg-5 text-lg-right">
                    <div class="footer-subscribe-inner">
                        <input type="text" placeholder="Email address">
                        <button>Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 align-self-center">
                    <ul class="privacy-menu">
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-6 text-lg-center align-self-center">
                    <p>@ 2020, <span>Kargil</span>. All right reserved</p>
                </div>
                <div class="col-xl-4 text-xl-right text-xl-center">
                    <ul class="social-area social-area-2">
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-double-up"></i></span>
</div>
<!-- back to top area end -->


<!-- all plugins here -->
<script src="{{asset('fe/assets/js/vendor.js')}}"></script>
<script src="{{asset('fe/assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- main js  -->
<script src="{{asset('fe/assets/js/main.js')}}"></script>
</body>

<!-- Mirrored from www.s7template.com/tf/kargill/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Sep 2020 08:57:19 GMT -->
</html>
