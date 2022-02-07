<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>USNews - Multipurpose News, Magazine and Blog HTML5 Template</title>
    <meta name="author" content="ThemeLooks"/>
    <meta name="description" content="USNews - Multipurpose News and Magazine Template"/>
    <meta name="keywords"
          content="news, newspaper, magazine, blog, post, article, editorial, publishing, modern, responsive, html5, template"/>
    <link rel="icon" href="favicon.png" type="image/png"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700"/>
    <link rel="stylesheet" href="{{asset('fe/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('fe/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('fe/css/fontawesome-stars-o.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('fe/css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('fe/css/responsive-style.css')}}"/>
    <link rel="stylesheet" href="{{asset('fe/css/colors/theme-color-1.css')}}" id="changeColorScheme"/>
    <link rel="stylesheet" href="{{asset('fe/css/custom.css')}}"/>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="preloader">
    <div class="preloader bg--color-1--b" data-preloader="1">
        <div class="preloader--inner"></div>
    </div>
</div>
<div class="wrapper">
    <header class="header--section header--style-1">
        <div class="header--topbar bg--color-2">
            <div class="container">
                <div class="float--left float--xs-none text-xs-center">
                    <ul class="header--topbar-info nav">
                        <li><i class="fa fm fa-map-marker"></i>New York</li>
                        <li><i class="fa fm fa-mixcloud"></i>21<sup>0</sup> C</li>
                        <li><i class="fa fm fa-calendar"></i>Today (Sunday 19 April 2017)</li>
                    </ul>
                </div>
                <div class="float--right float--xs-none text-xs-center">
                    <ul class="header--topbar-action nav">
                        <li>
                            <a href="login.html"><i class="fa fm fa-user-o"></i>Login/Register</a>
                        </li>
                    </ul>
                    <ul class="header--topbar-lang nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fm fa-language"></i>English<i
                                    class="fa flm fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Spanish</a></li>
                                <li><a href="#">French</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="header--topbar-social nav hidden-sm hidden-xxs">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-rss"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header--mainbar">
            <div class="container">
                <div class="header--logo float--left float--sm-none text-sm-center">
                    <h1 class="h1">
                        <a href="home-1.html" class="btn-link"> <img src="{{asset('fe/img/logo.png')}}" alt="USNews Logo"/> <span
                                class="hidden">USNews Logo</span> </a>
                    </h1>
                </div>
                <div class="header--ad float--right float--sm-none hidden-xs">
                    <a href="#"> <img src="{{asset('fe/img/ads-img/ad-728x90-01.jpg')}}" alt="Advertisement"/> </a>
                </div>
            </div>
        </div>
        <div class="header--navbar style--1 navbar bd--color-1 bg--color-1" data-trigger="sticky">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#headerNav" aria-expanded="false" aria-controls="headerNav">
                        <span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="headerNav" class="navbar-collapse collapse float--left">
                    <ul class="header--menu-links nav navbar-nav" data-trigger="hoverIntent">
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home<i
                                    class="fa flm fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="home-1.html">Home Default</a></li>
                                <li><a href="home-1-boxed.html">Home Boxed</a></li>
                                <li><a href="home-1-rtl.html">Home RTL</a></li>
                                <li><a href="home-1-rtl-boxed.html">Home RTL Boxed</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home Versions<i
                                            class="fa flm fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="home-1.html">Home Version 01</a></li>
                                        <li><a href="home-2.html">Home Version 02</a></li>
                                        <li><a href="home-3.html">Home Version 03</a></li>
                                        <li><a href="home-4.html">Home Version 04</a></li>
                                        <li><a href="home-5.html">Home Version 05</a></li>
                                        <li><a href="home-6.html">Home Version 06</a></li>
                                        <li><a href="home-7.html">Home Version 07</a></li>
                                        <li><a href="home-8.html">Home Version 08</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu Versions<i
                                            class="fa flm fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="home-1.html">Home Menu V1</a></li>
                                        <li><a href="home-menu-v2.html">Home Menu V2</a></li>
                                        <li><a href="home-menu-v3.html">Home Menu V3</a></li>
                                        <li><a href="home-menu-v4.html">Home Menu V4</a></li>
                                        <li><a href="home-menu-v5.html">Home Menu V5</a></li>
                                        <li><a href="home-menu-v6.html">Home Menu V6</a></li>
                                        <li><a href="home-menu-v7.html">Home Menu V7</a></li>
                                        <li><a href="home-menu-v8.html">Home Menu V8</a></li>
                                        <li><a href="home-menu-v9.html">Home Menu V9</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown megamenu filter">
                            <a href="world-news.html" class="dropdown-toggle" data-toggle="dropdown">Worlds News<i
                                    class="fa flm fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="megamenu--filter">
                                                <ul class="nav">
                                                    <li class="active">
                                                        <a href="#" data-action="load_cat_posts" data-cat="all">All<i
                                                                class="fa fa-angle-right"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-action="load_cat_posts"
                                                           data-cat="latin-america">Latitn America<i
                                                                class="fa fa-angle-right"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-action="load_cat_posts" data-cat="africa">Africa<i
                                                                class="fa fa-angle-right"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-action="load_cat_posts" data-cat="middle-east">Middle
                                                            East<i class="fa fa-angle-right"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-action="load_cat_posts" data-cat="europe">Europe<i
                                                                class="fa fa-angle-right"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="megamenu--posts" data-ajax-content="outer">
                                                <ul class="row" data-ajax-content="inner">
                                                    <li class="col-md-3">
                                                        <div class="img">
                                                            <a href="news-single-v1.html" class="thumb"> <img
                                                                    src="img/megamenu-img/post-01.jpg" alt=""/> </a> <a
                                                                href="#" class="cat">Beach</a>
                                                            <a href="#" class="icon"><i class="fa fa-eye"></i></a>
                                                        </div>
                                                        <a href="news-single-v1.html" class="title">It is a long
                                                            established fact that a reader will be distracted by</a>
                                                    </li>
                                                    <li class="col-md-3">
                                                        <div class="img">
                                                            <a href="news-single-v1.html" class="thumb"> <img
                                                                    src="img/megamenu-img/post-02.jpg" alt=""/> </a> <a
                                                                href="#" class="cat">News</a>
                                                            <a href="#" class="icon"><i class="fa fa-star-o"></i></a>
                                                        </div>
                                                        <a href="news-single-v1.html" class="title">It is a long
                                                            established fact that a reader will be distracted by</a>
                                                    </li>
                                                    <li class="col-md-3">
                                                        <div class="img">
                                                            <a href="news-single-v1.html" class="thumb"> <img
                                                                    src="img/megamenu-img/post-03.jpg" alt=""/> </a> <a
                                                                href="#" class="cat">Ice Hiking</a>
                                                            <a href="#" class="icon"><i class="fa fa-flash"></i></a>
                                                        </div>
                                                        <a href="news-single-v1.html" class="title">It is a long
                                                            established fact that a reader will be distracted by</a>
                                                    </li>
                                                    <li class="col-md-3">
                                                        <div class="img">
                                                            <a href="news-single-v1.html" class="thumb"> <img
                                                                    src="img/megamenu-img/post-04.jpg" alt=""/> </a> <a
                                                                href="#" class="cat">Mountain</a>
                                                            <a href="#" class="icon"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                        <a href="news-single-v1.html" class="title">It is a long
                                                            established fact that a reader will be distracted by</a>
                                                    </li>
                                                </ul>
                                                <div class="preloader bg--color-0--b" data-preloader="1">
                                                    <div class="preloader--inner"></div>
                                                </div>
                                            </div>
                                            <div class="megamenu--pagination" data-ajax="tab">
                                                <a href="#" class="prev" data-ajax-action="load_prev_posts"> <i
                                                        class="fa fa-long-arrow-left"></i> </a>
                                                <a href="world-news.html" class="all" title="View All"
                                                   data-toggle="tooltip"> <i class="fa fa-th-large"></i> </a>
                                                <a href="#" class="next" data-ajax-action="load_next_posts"> <i
                                                        class="fa fa-long-arrow-right"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="national.html">National</a></li>
                        <li><a href="financial.html">Financial</a></li>
                        <li><a href="entertainment.html">Entertainment</a></li>
                        <li><a href="lifestyle.html">Lifestyle</a></li>
                        <li><a href="technology.html">Technology</a></li>
                        <li class="dropdown megamenu posts">
                            <a href="travel.html" class="dropdown-toggle" data-toggle="dropdown">Travel<i
                                    class="fa flm fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="megamenu--posts" data-ajax-content="outer">
                                        <ul class="row" data-ajax-content="inner">
                                            <li class="col-md-3">
                                                <div class="img">
                                                    <a href="news-single-v1.html" class="thumb"> <img
                                                            src="img/megamenu-img/post-01.jpg" alt=""/> </a> <a href="#"
                                                                                                                class="cat">Beach</a>
                                                    <a href="#" class="icon"><i class="fa fa-eye"></i></a>
                                                </div>
                                                <a href="news-single-v1.html" class="title">It is a long established
                                                    fact that a reader will be distracted by</a>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="img">
                                                    <a href="news-single-v1.html" class="thumb"> <img
                                                            src="img/megamenu-img/post-02.jpg" alt=""/> </a> <a href="#"
                                                                                                                class="cat">News</a>
                                                    <a href="#" class="icon"><i class="fa fa-star-o"></i></a>
                                                </div>
                                                <a href="news-single-v1.html" class="title">It is a long established
                                                    fact that a reader will be distracted by</a>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="img">
                                                    <a href="news-single-v1.html" class="thumb"> <img
                                                            src="img/megamenu-img/post-03.jpg" alt=""/> </a> <a href="#"
                                                                                                                class="cat">Ice
                                                        Hiking</a>
                                                    <a href="#" class="icon"><i class="fa fa-flash"></i></a>
                                                </div>
                                                <a href="news-single-v1.html" class="title">It is a long established
                                                    fact that a reader will be distracted by</a>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="img">
                                                    <a href="news-single-v1.html" class="thumb"> <img
                                                            src="img/megamenu-img/post-04.jpg" alt=""/> </a> <a href="#"
                                                                                                                class="cat">Mountain</a>
                                                    <a href="#" class="icon"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                                <a href="news-single-v1.html" class="title">It is a long established
                                                    fact that a reader will be distracted by</a>
                                            </li>
                                        </ul>
                                        <div class="preloader bg--color-0--b" data-preloader="1">
                                            <div class="preloader--inner"></div>
                                        </div>
                                    </div>
                                    <div class="megamenu--pagination" data-ajax="tab">
                                        <a href="#" class="prev" data-ajax-action="load_prev_posts"> <i
                                                class="fa fa-long-arrow-left"></i> </a>
                                        <a href="travel.html" class="all" title="View All" data-toggle="tooltip"> <i
                                                class="fa fa-th-large"></i> </a>
                                        <a href="#" class="next" data-ajax-action="load_next_posts"> <i
                                                class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="sports.html">Sports</a></li>
                        <li class="dropdown megamenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Catagory<i
                                    class="fa flm fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown">
                                    <a href="#">World’s News</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">US &amp; Canada</a></li>
                                        <li><a href="#">Europe</a></li>
                                        <li><a href="#">Africa</a></li>
                                        <li><a href="#">Asia</a></li>
                                        <li><a href="#">Middle East</a></li>
                                        <li><a href="#">Asia Pacific</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Documantation</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Featured Documantation</a></li>
                                        <li><a href="#">People &amp; Power</a></li>
                                        <li><a href="#">Rebel Education</a></li>
                                        <li><a href="#">Rewind</a></li>
                                        <li><a href="#">Fault Lines</a></li>
                                        <li><a href="#">News 360 Degree World’s</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Sports</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Football</a></li>
                                        <li><a href="#">Cricket</a></li>
                                        <li><a href="#">Hocky</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Business</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">US Business</a></li>
                                        <li><a href="#">Middle East Business</a></li>
                                        <li><a href="#">Europe Business</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Education</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Africa Child Education</a></li>
                                        <li><a href="#">Bangladeshi Education</a></li>
                                        <li><a href="#">Middle East Education</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Humanities</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Help For Syrian Refugees</a></li>
                                        <li><a href="#">Help For Afgan Children</a></li>
                                        <li><a href="#">Help For African Children</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Movies</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Hollywood</a></li>
                                        <li><a href="#">Dollywood</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Weather</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">North Pole</a></li>
                                        <li><a href="#">South Pole</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Health</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Africa Poor Child Healt</a></li>
                                        <li><a href="#">Fitness and Health</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Animals</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">African Animals</a></li>
                                        <li><a href="#">Australian Animals</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<i
                                    class="fa flm fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog<i
                                            class="fa flm fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-v1.html">Blog 1</a></li>
                                        <li><a href="blog-v2.html">Blog 2</a></li>
                                        <li><a href="blog-v3.html">Blog 3</a></li>
                                        <li><a href="archives-v1.html">Archives 1</a></li>
                                        <li><a href="archives-v2.html">Archives 2</a></li>
                                        <li><a href="archives-v3.html">Archives 3</a></li>
                                        <li><a href="tag.html">Tag</a></li>
                                        <li><a href="search.html">Search</a></li>
                                        <li><a href="author.html">Author</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">News Single<i
                                            class="fa flm fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="news-single-v1.html">News Single 1</a></li>
                                        <li><a href="news-single-v2.html">News Single 2</a></li>
                                        <li><a href="news-single-v3.html">News Single 3</a></li>
                                        <li><a href="news-single-v4.html">News Single 4</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Widgets<i
                                            class="fa flm fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="ad-widgets.html">Ad Widgets</a></li>
                                        <li><a href="social-widgets.html">Social Widgets</a></li>
                                        <li><a href="subscribe-widgets.html">Subscirbe Widgets</a></li>
                                        <li><a href="post-widgets.html">Post Widgets</a></li>
                                        <li><a href="poll-widgets.html">Poll Widgets</a></li>
                                        <li><a href="search-widgets.html">Search Widgets</a></li>
                                        <li><a href="links-widgets.html">Links Widgets</a></li>
                                        <li><a href="tag-widgets.html">Tag Widgets</a></li>
                                        <li><a href="profile-widgets.html">Profile Widgets</a></li>
                                        <li><a href="cart-widgets.html">Cart Widgets</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contributors<i
                                            class="fa flm fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="contributors.html">Contributors 1</a></li>
                                        <li><a href="contributors-2.html">Contributors 2</a></li>
                                        <li><a href="contributors-3.html">Contributors 3</a></li>
                                        <li><a href="contributors-4.html">Contributors 4</a></li>
                                    </ul>
                                </li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop<i
                                            class="fa flm fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="shop-1.html">Shop 1</a></li>
                                        <li><a href="shop-2.html">Shop 2</a></li>
                                        <li><a href="shop-details.html">Shop Details</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact<i
                                            class="fa flm fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="contact.html">Contact 1</a></li>
                                        <li><a href="contact-2.html">Contact 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <form action="#" class="header--search-form float--right" data-form="validate">
                    <input type="search" name="search" placeholder="Search..."
                           class="header--search-control form-control" required/>
                    <button type="submit" class="header--search-btn btn"><i
                            class="header--search-icon fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </header>
    <div class="posts--filter-bar style--1 hidden-xs">
        <div class="container">
            <ul class="nav">
                <li>
                    <a href="#"> <i class="fa fa-star-o"></i> <span>Featured News</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-heart-o"></i> <span>Most Popular</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-fire"></i> <span>Hot News</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-flash"></i> <span>Trending News</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-eye"></i> <span>Most Watched</span> </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="news--ticker">
        <div class="container">
            <div class="title">
                <h2>News Updates</h2>
                <span>(Update 12 minutes ago)</span>
            </div>
            <div class="news-updates--list" data-marquee="true">
                <ul class="nav">
                    <li>
                        <h3 class="h3"><a href="#">Contrary to popular belief Lorem Ipsum is not simply random text.</a>
                        </h3>
                    </li>
                    <li>
                        <h3 class="h3"><a href="#">Education to popular belief Lorem Ipsum is not simply</a></h3>
                    </li>
                    <li>
                        <h3 class="h3"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h3>
                    </li>
                    <li>
                        <h3 class="h3"><a href="#">Corporis repellendus perspiciatis reprehenderit.</a></h3>
                    </li>
                    <li>
                        <h3 class="h3"><a href="#">Deleniti consequatur laudantium sit aspernatur?</a></h3>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main-content--section pbottom--30">
        <div class="container">
            <div class="main--content">
                <div class="post--items post--items-1 pd--30-0">
                    <div class="row gutter--15">
                        <div class="col-md-6">
                            <div class="post--item post--layout-1 post--title-larger">
                                <div class="post--img">
                                    <a href="news-single-v1.html" class="thumb"><img src="img/home-img/banner-01.jpg"
                                                                                     alt=""/></a> <a href="#"
                                                                                                     class="cat">Politics</a>
                                    <a href="#" class="icon"><i class="fa fa-flash"></i></a>
                                    <div class="post--map">
                                        <p class="btn-link"><i class="fa fa-map-o"></i>Location in Google Map</p>
                                        <div class="map--wrapper">
                                            <div data-map-latitude="23.790546" data-map-longitude="90.375583"
                                                 data-map-zoom="6" data-map-marker="[[23.790546, 90.375583]]"></div>
                                        </div>
                                    </div>
                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="#">Norma R. Hogan</a></li>
                                            <li><a href="#">20 April 2017</a></li>
                                        </ul>
                                        <div class="title">
                                            <h2 class="h4"><a href="news-single-v1.html" class="btn-link">Siriyan civil
                                                    war getting righteous indignation and dislike men who are so
                                                    beguiled and demoralized by the sure.</a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row gutter--15">
                                <div class="col-xs-6 col-xss-12">
                                    <div class="post--item post--layout-1 post--title-large">
                                        <div class="post--img">
                                            <a href="news-single-v1.html" class="thumb"><img
                                                    src="img/home-img/banner-02.jpg" alt=""/></a> <a href="#"
                                                                                                     class="cat">Travel</a>
                                            <a href="#" class="icon"><i class="fa fa-flash"></i></a>
                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">Corey I. Dean</a></li>
                                                    <li><a href="#">20 April 2017</a></li>
                                                </ul>
                                                <div class="title">
                                                    <h2 class="h4"><a href="news-single-v1.html" class="btn-link">Lorem
                                                            Ipsum is simply dummy text of the printing</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 hidden-xss">
                                    <div class="post--item post--layout-1 post--title-large">
                                        <div class="post--img">
                                            <a href="news-single-v1.html" class="thumb"><img
                                                    src="img/home-img/banner-03.jpg" alt=""/></a> <a href="#"
                                                                                                     class="cat">Education</a>
                                            <a href="#" class="icon"><i class="fa fa-flash"></i></a>
                                            <div class="post--map">
                                                <p class="btn-link"><i class="fa fa-map-o"></i>Location in Google Map
                                                </p>
                                                <div class="map--wrapper">
                                                    <div data-map-latitude="23.790546" data-map-longitude="90.375583"
                                                         data-map-zoom="6"
                                                         data-map-marker="[[23.790546, 90.375583]]"></div>
                                                </div>
                                            </div>
                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">Leraje</a></li>
                                                    <li><a href="#">20 April 2017</a></li>
                                                </ul>
                                                <div class="title">
                                                    <h2 class="h4"><a href="news-single-v1.html" class="btn-link">Lorem
                                                            Ipsum is simply dummy text of the printing</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 hidden-sm hidden-xs">
                                    <div class="post--item post--layout-1 post--title-larger">
                                        <div class="post--img">
                                            <a href="news-single-v1.html" class="thumb"><img
                                                    src="img/home-img/banner-04.jpg" alt=""/></a> <a href="#"
                                                                                                     class="cat">Politics</a>
                                            <a href="#" class="icon"><i class="fa fa-fire"></i></a>
                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">Balam</a></li>
                                                    <li><a href="#">20 April 2017</a></li>
                                                </ul>
                                                <div class="title">
                                                    <h2 class="h4">
                                                        <a href="news-single-v1.html" class="btn-link">On the other
                                                            hand, we denounce with righteous indignation and dislike men
                                                            who are so beguiled and demoralized by the sure.</a>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <div class="row">
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Worlds News</h2>
                                    <div class="nav">
                                        <a href="#" class="prev btn-link" data-ajax-action="load_prev_world_news_posts">
                                            <i class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span>
                                        <a href="#" class="next btn-link" data-ajax-action="load_next_world_news_posts">
                                            <i class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                </div>
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav row gutter--15" data-ajax-content="inner">
                                        <li class="col-xs-12">
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/world-news-01.jpg" alt=""/></a> <a
                                                        href="#" class="cat">War</a>
                                                    <a href="#" class="icon"><i class="fa fa-flash"></i></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Astaroth</a></li>
                                                            <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">Siriya attaced by a long
                                                                    established fact that a reader will be distracted
                                                                    by</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xs-12">
                                            <hr class="divider"/>
                                        </li>
                                        <li class="col-xs-6">
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/world-news-02.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Hantu Raya</a></li>
                                                            <li><a href="#">17 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">It is a long established
                                                                    fact that a reader will done</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xs-6">
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/world-news-03.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Astaroth</a></li>
                                                            <li><a href="#">17 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">It is a long established
                                                                    fact that a reader will done</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xs-12">
                                            <hr class="divider"/>
                                        </li>
                                        <li class="col-xs-6">
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/world-news-04.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Astaroth</a></li>
                                                            <li><a href="#">17 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">It is a long established
                                                                    fact that a reader will done</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xs-6">
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/world-news-05.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Hantu Raya</a></li>
                                                            <li><a href="#">17 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">It is a long established
                                                                    fact that a reader will done</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Technology</h2>
                                    <div class="nav">
                                        <a href="#" class="prev btn-link" data-ajax-action="load_prev_technology_posts">
                                            <i class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span>
                                        <a href="#" class="next btn-link" data-ajax-action="load_next_technology_posts">
                                            <i class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                </div>
                                <div class="post--items post--items-3" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        <li>
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/technology-01.jpg" alt=""/></a> <a
                                                        href="#" class="cat">Computer</a>
                                                    <a href="#" class="icon"><i class="fa fa-heart-o"></i></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Bathin</a></li>
                                                            <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">It is a long established
                                                                    fact that a reader will be distracted by</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/technology-02.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Bune</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">Long established fact
                                                                    that a reader will be distracted by the readable</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/technology-03.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Bune</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">Long established fact
                                                                    that a reader will be distracted by the readable</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/technology-04.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Bune</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">Long established fact
                                                                    that a reader will be distracted by the readable</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/technology-05.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Bune</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">Long established fact
                                                                    that a reader will be distracted by the readable</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 ptop--30 pbottom--30">
                                <div class="ad--space">
                                    <a href="#"> <img src="img/ads-img/ad-728x90-01.jpg" alt="" class="center-block"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12 ptop--30 pbottom--30">
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Finance</h2>
                                    <div class="nav">
                                        <a href="#" class="prev btn-link" data-ajax-action="load_prev_finance_posts"> <i
                                                class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span>
                                        <a href="#" class="next btn-link" data-ajax-action="load_next_finance_posts"> <i
                                                class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                </div>
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav row" data-ajax-content="inner">
                                        <li class="col-md-6">
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/finance-01.jpg" alt=""/></a> <a href="#"
                                                                                                              class="cat">Business</a>
                                                    <a href="#" class="icon"><i class="fa fa-star-o"></i></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Vassago</a></li>
                                                            <li><a href="#">Today 03:30 am</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4">
                                                                <a href="news-single-v1.html" class="btn-link">
                                                                    At vero eos et accusamus et iusto odio dignissimos
                                                                    ducimus qui blanditiis praesentium voluptatum
                                                                    deleniti atque corrupti quos dolores et quas.
                                                                </a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-md-6">
                                            <ul class="nav row">
                                                <li class="col-xs-12 hidden-md hidden-lg">
                                                    <hr class="divider"/>
                                                </li>
                                                <li class="col-xs-6">
                                                    <div class="post--item post--layout-2">
                                                        <div class="post--img">
                                                            <a href="news-single-v1.html" class="thumb"><img
                                                                    src="img/home-img/finance-02.jpg" alt=""/></a>
                                                            <div class="post--info">
                                                                <ul class="nav meta">
                                                                    <li><a href="#">Zepar</a></li>
                                                                    <li><a href="#">Today 03:52 pm</a></li>
                                                                </ul>
                                                                <div class="title">
                                                                    <h3 class="h4"><a href="news-single-v1.html"
                                                                                      class="btn-link">It is a long
                                                                            established fact that a reader will be</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-xs-6">
                                                    <div class="post--item post--layout-2">
                                                        <div class="post--img">
                                                            <a href="news-single-v1.html" class="thumb"><img
                                                                    src="img/home-img/finance-03.jpg" alt=""/></a>
                                                            <div class="post--info">
                                                                <ul class="nav meta">
                                                                    <li><a href="#">Demiurge</a></li>
                                                                    <li><a href="#">Today 03:02 pm</a></li>
                                                                </ul>
                                                                <div class="title">
                                                                    <h3 class="h4"><a href="news-single-v1.html"
                                                                                      class="btn-link">It is a long
                                                                            established fact that a reader will be</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-xs-12">
                                                    <hr class="divider"/>
                                                </li>
                                                <li class="col-xs-6">
                                                    <div class="post--item post--layout-2">
                                                        <div class="post--img">
                                                            <a href="news-single-v1.html" class="thumb"><img
                                                                    src="img/home-img/finance-04.jpg" alt=""/></a>
                                                            <div class="post--info">
                                                                <ul class="nav meta">
                                                                    <li><a href="#">Demiurge</a></li>
                                                                    <li><a href="#">Today 02:05 am</a></li>
                                                                </ul>
                                                                <div class="title">
                                                                    <h3 class="h4"><a href="news-single-v1.html"
                                                                                      class="btn-link">It is a long
                                                                            established fact that a reader will be</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-xs-6">
                                                    <div class="post--item post--layout-2">
                                                        <div class="post--img">
                                                            <a href="news-single-v1.html" class="thumb"><img
                                                                    src="img/home-img/finance-05.jpg" alt=""/></a>
                                                            <div class="post--info">
                                                                <ul class="nav meta">
                                                                    <li><a href="#">Zepar</a></li>
                                                                    <li><a href="#">Today 12:35 am</a></li>
                                                                </ul>
                                                                <div class="title">
                                                                    <h3 class="h4"><a href="news-single-v1.html"
                                                                                      class="btn-link">It is a long
                                                                            established fact that a reader will be</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Politics</h2>
                                    <div class="nav">
                                        <a href="#" class="prev btn-link" data-ajax-action="load_prev_politics_posts">
                                            <i class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span>
                                        <a href="#" class="next btn-link" data-ajax-action="load_next_politics_posts">
                                            <i class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                </div>
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav row gutter--15" data-ajax-content="inner">
                                        <li class="col-xs-12">
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/politics-01.jpg" alt=""/></a> <a href="#"
                                                                                                               class="cat">Election</a>
                                                    <a href="#" class="icon"><i class="fa fa-fire"></i></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Astaroth</a></li>
                                                            <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">It is a long established
                                                                    fact that a reader will be distracted by</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xs-12">
                                            <hr class="divider"/>
                                        </li>
                                        <li class="col-xs-6">
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/politics-02.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Hantu Raya</a></li>
                                                            <li><a href="#">17 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">It is a long established
                                                                    fact that a reader will done</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xs-6">
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/politics-03.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Astaroth</a></li>
                                                            <li><a href="#">17 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">It is a long established
                                                                    fact that a reader will done</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xs-12">
                                            <hr class="divider"/>
                                        </li>
                                        <li class="col-xs-6">
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/politics-04.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Astaroth</a></li>
                                                            <li><a href="#">17 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">It is a long established
                                                                    fact that a reader will done</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xs-6">
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/politics-05.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Hantu Raya</a></li>
                                                            <li><a href="#">17 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">It is a long established
                                                                    fact that a reader will done</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Sports</h2>
                                    <div class="nav">
                                        <a href="#" class="prev btn-link" data-ajax-action="load_prev_sports_posts"> <i
                                                class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span>
                                        <a href="#" class="next btn-link" data-ajax-action="load_next_sports_posts"> <i
                                                class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                </div>
                                <div class="post--items post--items-3" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        <li>
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/sports-01.jpg" alt=""/></a> <a href="#"
                                                                                                             class="cat">Basketball</a>
                                                    <a href="#" class="icon"><i class="fa fa-eye"></i></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Bathin</a></li>
                                                            <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">It is a long established
                                                                    fact that a reader will be distracted by</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/sports-02.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Bune</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">Long established fact
                                                                    that a reader will be distracted by the readable</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/sports-03.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Bune</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">Long established fact
                                                                    that a reader will be distracted by the readable</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/sports-04.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Bune</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">Long established fact
                                                                    that a reader will be distracted by the readable</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/sports-05.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Bune</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">Long established fact
                                                                    that a reader will be distracted by the readable</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <div class="widget">
                            <div class="ad--widget">
                                <a href="#"> <img src="img/ads-img/ad-300x250-1.jpg" alt=""/> </a>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget--title">
                                <h2 class="h4">Stay Connected</h2>
                                <i class="icon fa fa-share-alt"></i>
                            </div>
                            <div class="social--widget style--1">
                                <ul class="nav">
                                    <li class="facebook">
                                        <a href="#">
                                            <span class="icon"><i class="fa fa-facebook-f"></i></span> <span
                                                class="count">521</span> <span class="title">Likes</span>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <span class="icon"><i class="fa fa-twitter"></i></span> <span class="count">3297</span>
                                            <span class="title">Followers</span>
                                        </a>
                                    </li>
                                    <li class="google-plus">
                                        <a href="#">
                                            <span class="icon"><i class="fa fa-google-plus"></i></span> <span
                                                class="count">596282</span> <span class="title">Followers</span>
                                        </a>
                                    </li>
                                    <li class="rss">
                                        <a href="#">
                                            <span class="icon"><i class="fa fa-rss"></i></span> <span
                                                class="count">521</span> <span class="title">Subscriber</span>
                                        </a>
                                    </li>
                                    <li class="vimeo">
                                        <a href="#">
                                            <span class="icon"><i class="fa fa-vimeo"></i></span> <span class="count">3297</span>
                                            <span class="title">Followers</span>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="#">
                                            <span class="icon"><i class="fa fa-youtube-square"></i></span> <span
                                                class="count">596282</span> <span class="title">Subscriber</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget--title">
                                <h2 class="h4">Get Newsletter</h2>
                                <i class="icon fa fa-envelope-open-o"></i>
                            </div>
                            <div class="subscribe--widget">
                                <div class="content"><p>Subscribe to our newsletter to get latest news, popular news and
                                        exclusive updates.</p></div>
                                <form
                                    action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&id=f4e0e93d1d"
                                    method="post"
                                    name="mc-embedded-subscribe-form"
                                    target="_blank"
                                    data-form="mailchimpAjax"
                                >
                                    <div class="input-group">
                                        <input type="email" name="EMAIL" placeholder="E-mail address"
                                               class="form-control" autocomplete="off" required/>
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-lg btn-default active"><i
                                                    class="fa fa-paper-plane-o"></i></button>
                                        </div>
                                    </div>
                                    <div class="status"></div>
                                </form>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget--title">
                                <h2 class="h4">Featured News</h2>
                                <i class="icon fa fa-newspaper-o"></i>
                            </div>
                            <div class="list--widget list--widget-1">
                                <div class="list--widget-nav" data-ajax="tab">
                                    <ul class="nav nav-justified">
                                        <li><a href="#" data-ajax-action="load_widget_hot_news">Hot News</a></li>
                                        <li class="active"><a href="#" data-ajax-action="load_widget_trendy_news">Trendy
                                                News</a></li>
                                        <li><a href="#" data-ajax-action="load_widget_most_watched">Most Watched</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="post--items post--items-3" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        <li>
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/widgets-img/news-widget-01.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Ninurta</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">Long established fact
                                                                    that a reader will be distracted</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/widgets-img/news-widget-02.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Orcus</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">Long established fact
                                                                    that a reader will be distracted</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/widgets-img/news-widget-03.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Rahab</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">Long established fact
                                                                    that a reader will be distracted</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/widgets-img/news-widget-04.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Tannin</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">Long established fact
                                                                    that a reader will be distracted</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget--title">
                                <h2 class="h4">Advertisement</h2>
                                <i class="icon fa fa-bullhorn"></i>
                            </div>
                            <div class="ad--widget">
                                <a href="#"> <img src="img/ads-img/ad-300x250-2.jpg" alt=""/> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main--content pd--30-0">
                <div class="post--items-title" data-ajax="tab">
                    <h2 class="h4">Audio &amp; Videos</h2>
                    <div class="nav">
                        <a href="#" class="prev btn-link" data-ajax-action="load_prev_audio_video_posts"> <i
                                class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span>
                        <a href="#" class="next btn-link" data-ajax-action="load_next_audio_video_posts"> <i
                                class="fa fa-long-arrow-right"></i> </a>
                    </div>
                </div>
                <div class="post--items post--items-4" data-ajax-content="outer">
                    <ul class="nav row" data-ajax-content="inner">
                        <li class="col-md-8">
                            <div class="post--item post--layout-1 post--type-video post--title-large">
                                <div class="post--img">
                                    <a href="news-single-v1.html" class="thumb"><img
                                            src="img/home-img/audio-video-01.jpg" alt=""/></a> <a href="#" class="cat">Wave</a>
                                    <a href="#" class="icon"><i class="fa fa-eye"></i></a>
                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="#">Succubus</a></li>
                                            <li><a href="#">Today 03:52 pm</a></li>
                                        </ul>
                                        <div class="title">
                                            <h2 class="h4">
                                                <a href="news-single-v1.html" class="btn-link">
                                                    Standard chunk of Lorem Ipsum used since the 1500s is reproduced
                                                    below for those interested. Sections 1.10.32 and 1.10.33 from "de
                                                    Finibus Bonorum
                                                </a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="divider hidden-md hidden-lg"/>
                        </li>
                        <li class="col-md-4">
                            <ul class="nav">
                                <li>
                                    <div class="post--item post--type-audio post--layout-3">
                                        <div class="post--img">
                                            <a href="news-single-v1.html" class="thumb"><img
                                                    src="img/home-img/audio-video-02.jpg" alt=""/></a>
                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">Maclaan John</a></li>
                                                    <li><a href="#">16 April 2017</a></li>
                                                </ul>
                                                <div class="title">
                                                    <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long
                                                            established fact that a reader will be distracted by the
                                                            readable</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post--item post--type-video post--layout-3">
                                        <div class="post--img">
                                            <a href="news-single-v1.html" class="thumb"><img
                                                    src="img/home-img/audio-video-03.jpg" alt=""/></a>
                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">Maclaan John</a></li>
                                                    <li><a href="#">16 April 2017</a></li>
                                                </ul>
                                                <div class="title">
                                                    <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long
                                                            established fact that a reader will be distracted by the
                                                            readable</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post--item post--type-video post--layout-3">
                                        <div class="post--img">
                                            <a href="news-single-v1.html" class="thumb"><img
                                                    src="img/home-img/audio-video-04.jpg" alt=""/></a>
                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">Maclaan John</a></li>
                                                    <li><a href="#">16 April 2017</a></li>
                                                </ul>
                                                <div class="title">
                                                    <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long
                                                            established fact that a reader will be distracted by the
                                                            readable</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post--item post--type-audio post--layout-3">
                                        <div class="post--img">
                                            <a href="news-single-v1.html" class="thumb"><img
                                                    src="img/home-img/audio-video-05.jpg" alt=""/></a>
                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">Maclaan John</a></li>
                                                    <li><a href="#">16 April 2017</a></li>
                                                </ul>
                                                <div class="title">
                                                    <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long
                                                            established fact that a reader will be distracted by the
                                                            readable</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="preloader bg--color-0--b" data-preloader="1">
                        <div class="preloader--inner"></div>
                    </div>
                </div>
            </div>
            <div class="ad--space pd--30-0">
                <a href="#"> <img src="img/ads-img/ad-970x90.jpg" alt="" class="center-block"/> </a>
            </div>
            <div class="row">
                <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <div class="row">
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Health &amp; fitness</h2>
                                    <div class="nav">
                                        <a href="#" class="prev btn-link"
                                           data-ajax-action="load_prev_health_fitness_posts"> <i
                                                class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span>
                                        <a href="#" class="next btn-link"
                                           data-ajax-action="load_next_health_fitness_posts"> <i
                                                class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                </div>
                                <div class="post--items post--items-3" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        <li>
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/health-and-fitness-01.jpg" alt=""/></a> <a
                                                        href="#" class="cat">Business</a>
                                                    <a href="#" class="icon"><i class="fa fa-star-o"></i></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Bathin</a></li>
                                                            <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">It is a long established
                                                                    fact that a reader will be distracted by</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/health-and-fitness-02.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Maclaan John</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">Established fact that a
                                                                    reader will be distracted by the readable
                                                                    content</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/health-and-fitness-03.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Ziminiar</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">Long established fact
                                                                    that a reader will be distracted by the readable</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/health-and-fitness-04.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Vanth</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">Long established fact
                                                                    that a reader will be distracted by the readable</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/health-and-fitness-05.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Vanth</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">Long established fact
                                                                    that a reader will be distracted by the readable</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Lifestyle</h2>
                                    <div class="nav">
                                        <a href="#" class="prev btn-link" data-ajax-action="load_prev_lifestyle_posts">
                                            <i class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span>
                                        <a href="#" class="next btn-link" data-ajax-action="load_next_lifestyle_posts">
                                            <i class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                </div>
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav row gutter--15" data-ajax-content="inner">
                                        <li class="col-xs-12">
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/lifestyle-01.jpg" alt=""/></a> <a href="#"
                                                                                                                class="cat">Fashion</a>
                                                    <a href="#" class="icon"><i class="fa fa-heart-o"></i></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Astaroth</a></li>
                                                            <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">Siriya attaced by a long
                                                                    established fact that a reader will be distracted
                                                                    by</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xs-12">
                                            <hr class="divider"/>
                                        </li>
                                        <li class="col-xs-6">
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/lifestyle-02.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Astaroth</a></li>
                                                            <li><a href="#">17 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">It is a long established
                                                                    fact that a reader will done</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xs-6">
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/lifestyle-03.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Astaroth</a></li>
                                                            <li><a href="#">17 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">It is a long established
                                                                    fact that a reader will done</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xs-12">
                                            <hr class="divider"/>
                                        </li>
                                        <li class="col-xs-6">
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/lifestyle-04.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Astaroth</a></li>
                                                            <li><a href="#">17 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">It is a long established
                                                                    fact that a reader will done</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xs-6">
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/lifestyle-05.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Astaroth</a></li>
                                                            <li><a href="#">17 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">It is a long established
                                                                    fact that a reader will done</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 ptop--30 pbottom--30">
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Foods &amp; Recipes</h2>
                                    <div class="nav">
                                        <a href="#" class="prev btn-link"
                                           data-ajax-action="load_prev_food_resturent_posts"> <i
                                                class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span>
                                        <a href="#" class="next btn-link"
                                           data-ajax-action="load_next_food_resturent_posts"> <i
                                                class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                </div>
                                <div class="post--items" data-ajax-content="outer">
                                    <ul class="nav row gutter--15" data-ajax-content="inner">
                                        <li class="col-md-4 col-xs-6 col-xxs-12">
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/food-and-resturent-01.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Astaroth</a></li>
                                                            <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">It is a long established
                                                                    fact that a reader will be distracted by</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xs-12 hidden shown-xxs">
                                            <hr class="divider"/>
                                        </li>
                                        <li class="col-md-4 col-xs-6 col-xxs-12">
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/food-and-resturent-02.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Astaroth</a></li>
                                                            <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">It is a long established
                                                                    fact that a reader will be distracted by</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-md-4 hidden-sm hidden-xs">
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/food-and-resturent-03.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Astaroth</a></li>
                                                            <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">It is a long established
                                                                    fact that a reader will be distracted by</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 ptop--30 pbottom--30">
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Photo Gallery</h2>
                                    <div class="nav">
                                        <a href="#" class="prev btn-link"
                                           data-ajax-action="load_prev_photo_gallery_posts"> <i
                                                class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span>
                                        <a href="#" class="next btn-link"
                                           data-ajax-action="load_next_photo_gallery_posts"> <i
                                                class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                </div>
                                <div class="post--items post--items-1" data-ajax-content="outer">
                                    <ul class="nav row gutter--15" data-ajax-content="inner">
                                        <li class="col-md-12">
                                            <div class="post--item post--layout-1 post--title-large">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/photo-gallery-01.jpg" alt=""/></a> <a
                                                        href="#" class="cat">Serfer</a>
                                                    <a href="#" class="icon"><i class="fa fa-eye"></i></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Astaroth</a></li>
                                                            <li><a href="#">Today 05:52 pm</a></li>
                                                        </ul>
                                                        <div class="title text-xxs-ellipsis">
                                                            <h2 class="h4">
                                                                <a href="news-single-v1.html" class="btn-link">
                                                                    Standard chunk of Lorem Ipsum used since the 1500s
                                                                    is reproduced below for those interested. Sections
                                                                    1.10.32 and 1.10.33 from "de Finibus Bonorum
                                                                </a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-md-4 col-xs-6 col-xxs-12">
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/photo-gallery-02.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Astaroth</a></li>
                                                            <li><a href="#">Today 03:52 pm</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h2 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">It is a long established
                                                                    fact that a reader will be distracted by</a></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-md-4 col-xs-6 col-xxs-12">
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/photo-gallery-03.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Astaroth</a></li>
                                                            <li><a href="#">Today 03:52 pm</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h2 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">It is a long established
                                                                    fact that a reader will be distracted by</a></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-md-4 hidden-sm hidden-xs">
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/home-img/photo-gallery-04.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Astaroth</a></li>
                                                            <li><a href="#">Today 03:52 pm</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h2 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">It is a long established
                                                                    fact that a reader will be distracted by</a></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <div class="widget">
                            <div class="widget--title" data-ajax="tab">
                                <h2 class="h4">Voting Poll (Checkbox)</h2>
                                <div class="nav">
                                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_poll_widget"> <i
                                            class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span>
                                    <a href="#" class="next btn-link" data-ajax-action="load_next_poll_widget"> <i
                                            class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                            <div class="poll--widget" data-ajax-content="outer">
                                <ul class="nav" data-ajax-content="inner">
                                    <li class="title"><h3 class="h4">Which was the best Football World Cup ever in your
                                            opinion?</h3></li>
                                    <li class="options">
                                        <form action="#">
                                            <div class="checkbox">
                                                <label> <input type="checkbox" name="option-1"/>
                                                    <span>Brazil 2014</span> </label>
                                                <p>65%<span style="width: 65%;"></span></p>
                                            </div>
                                            <div class="checkbox">
                                                <label> <input type="checkbox" name="option-2"/>
                                                    <span>South Africa 2010</span> </label>
                                                <p>28%<span style="width: 28%;"></span></p>
                                            </div>
                                            <div class="checkbox">
                                                <label> <input type="checkbox" name="option-2"/>
                                                    <span>Germany 2006</span> </label>
                                                <p>07%<span style="width: 07%;"></span></p>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Vote Now</button>
                                        </form>
                                    </li>
                                </ul>
                                <div class="preloader bg--color-0--b" data-preloader="1">
                                    <div class="preloader--inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget--title" data-ajax="tab">
                                <h2 class="h4">Voting Poll (Radio)</h2>
                                <div class="nav">
                                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_poll_widget"> <i
                                            class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span>
                                    <a href="#" class="next btn-link" data-ajax-action="load_next_poll_widget"> <i
                                            class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                            <div class="poll--widget" data-ajax-content="outer">
                                <ul class="nav" data-ajax-content="inner">
                                    <li class="title"><h3 class="h4">Do you think the cost of sending money to mobile
                                            phone should be reduced?</h3></li>
                                    <li class="options">
                                        <form action="#">
                                            <div class="radio">
                                                <label> <input type="radio" name="option-1"/> <span>Yes</span> </label>
                                                <p>65%<span style="width: 65%;"></span></p>
                                            </div>
                                            <div class="radio">
                                                <label> <input type="radio" name="option-1"/> <span>No</span> </label>
                                                <p>28%<span style="width: 28%;"></span></p>
                                            </div>
                                            <div class="radio">
                                                <label> <input type="radio" name="option-1"/> <span>Average</span>
                                                </label>
                                                <p>07%<span style="width: 07%;"></span></p>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Vote Now</button>
                                        </form>
                                    </li>
                                </ul>
                                <div class="preloader bg--color-0--b" data-preloader="1">
                                    <div class="preloader--inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="ad--widget">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="#"> <img src="img/ads-img/ad-150x150-1.jpg" alt=""/> </a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="#"> <img src="img/ads-img/ad-150x150-2.jpg" alt=""/> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget--title" data-ajax="tab">
                                <h2 class="h4">Readers Opinion</h2>
                                <div class="nav">
                                    <a href="#" class="prev btn-link"
                                       data-ajax-action="load_prev_readers_opinion_widget"> <i
                                            class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span>
                                    <a href="#" class="next btn-link"
                                       data-ajax-action="load_next_readers_opinion_widget"> <i
                                            class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                            <div class="list--widget list--widget-2" data-ajax-content="outer">
                                <div class="post--items post--items-3">
                                    <ul class="nav" data-ajax-content="inner">
                                        <li>
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <span class="thumb"><img
                                                            src="img/widgets-img/readers-opinion-01.png" alt=""/></span>
                                                    <div class="post--info">
                                                        <div class="title"><h3 class="h4">Long established fact that a
                                                                reader will be distracted</h3></div>
                                                        <ul class="nav meta">
                                                            <li><span>by Ninurta</span></li>
                                                            <li><span>16 April 2017</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <span class="thumb"><img
                                                            src="img/widgets-img/readers-opinion-02.png" alt=""/></span>
                                                    <div class="post--info">
                                                        <div class="title"><h3 class="h4">Long established fact that a
                                                                reader will be distracted</h3></div>
                                                        <ul class="nav meta">
                                                            <li><span>by Ninurta</span></li>
                                                            <li><span>16 April 2017</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <span class="thumb"><img
                                                            src="img/widgets-img/readers-opinion-03.png" alt=""/></span>
                                                    <div class="post--info">
                                                        <div class="title"><h3 class="h4">Long established fact that a
                                                                reader will be distracted</h3></div>
                                                        <ul class="nav meta">
                                                            <li><span>by Ninurta</span></li>
                                                            <li><span>16 April 2017</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget--title" data-ajax="tab">
                                <h2 class="h4">Editors Choice</h2>
                                <div class="nav">
                                    <a href="#" class="prev btn-link"
                                       data-ajax-action="load_prev_editors_choice_widget"> <i
                                            class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span>
                                    <a href="#" class="next btn-link"
                                       data-ajax-action="load_next_editors_choice_widget"> <i
                                            class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                            <div class="list--widget list--widget-1" data-ajax-content="outer">
                                <div class="post--items post--items-3">
                                    <ul class="nav" data-ajax-content="inner">
                                        <li>
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/widgets-img/editors-choice-01.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Ninurta</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">Long established fact
                                                                    that a reader will be distracted</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/widgets-img/editors-choice-02.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Orcus</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">Long established fact
                                                                    that a reader will be distracted</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/widgets-img/editors-choice-03.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Rahab</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">Long established fact
                                                                    that a reader will be distracted</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img
                                                            src="img/widgets-img/editors-choice-04.jpg" alt=""/></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Tannin</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html"
                                                                              class="btn-link">Long established fact
                                                                    that a reader will be distracted</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer--section">
        <div class="footer--widgets pd--30-0 bg--color-2">
            <div class="container">
                <div class="row AdjustRow">
                    <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
                        <div class="widget">
                            <div class="widget--title">
                                <h2 class="h4">About Us</h2>
                                <i class="icon fa fa-exclamation"></i>
                            </div>
                            <div class="about--widget">
                                <div class="content"><p>At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                        blanditiis praesentium laborum et dolorum fuga.</p></div>
                                <div class="action">
                                    <a href="#" class="btn-link">Read More<i
                                            class="fa flm fa-angle-double-right"></i></a>
                                </div>
                                <ul class="nav">
                                    <li><i class="fa fa-map"></i> <span>143/C, Fake Street, Melborne, Australia</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i>
                                        <a href="/cdn-cgi/l/email-protection#cda8b5aca0bda1a88da8b5aca0bda1a8e3aea2a0">
                                            <span class="__cf_email__"
                                                  data-cfemail="d5b0adb4b8a5b9b095b0adb4b8a5b9b0fbb6bab8">[email&#160;protected]</span>
                                        </a>
                                    </li>
                                    <li><i class="fa fa-phone"></i> <a href="tel:+123456789">+123 456 (789)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
                        <div class="widget">
                            <div class="widget--title">
                                <h2 class="h4">Usefull Info Links</h2>
                                <i class="icon fa fa-expand"></i>
                            </div>
                            <div class="links--widget">
                                <ul class="nav">
                                    <li><a href="#" class="fa-angle-right">Gadgets</a></li>
                                    <li><a href="#" class="fa-angle-right">Shop</a></li>
                                    <li><a href="#" class="fa-angle-right">Term and Conditions</a></li>
                                    <li><a href="#" class="fa-angle-right">Forums</a></li>
                                    <li><a href="#" class="fa-angle-right">Top News of This Week</a></li>
                                    <li><a href="#" class="fa-angle-right">Special Recipes</a></li>
                                    <li><a href="#" class="fa-angle-right">Sign Up</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
                        <div class="widget">
                            <div class="widget--title">
                                <h2 class="h4">Advertisements</h2>
                                <i class="icon fa fa-bullhorn"></i>
                            </div>
                            <div class="links--widget">
                                <ul class="nav">
                                    <li><a href="#" class="fa-angle-right">Post an Add</a></li>
                                    <li><a href="#" class="fa-angle-right">Adds Renew</a></li>
                                    <li><a href="#" class="fa-angle-right">Price of Advertisements</a></li>
                                    <li><a href="#" class="fa-angle-right">Adds Closed</a></li>
                                    <li><a href="#" class="fa-angle-right">Monthly or Yearly</a></li>
                                    <li><a href="#" class="fa-angle-right">Trial Adds</a></li>
                                    <li><a href="#" class="fa-angle-right">Add Making</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
                        <div class="widget">
                            <div class="widget--title">
                                <h2 class="h4">Career</h2>
                                <i class="icon fa fa-user-o"></i>
                            </div>
                            <div class="links--widget">
                                <ul class="nav">
                                    <li><a href="#" class="fa-angle-right">Available Post</a></li>
                                    <li><a href="#" class="fa-angle-right">Career Details</a></li>
                                    <li><a href="#" class="fa-angle-right">How to Apply?</a></li>
                                    <li><a href="#" class="fa-angle-right">Freelence Job</a></li>
                                    <li><a href="#" class="fa-angle-right">Be a Member</a></li>
                                    <li><a href="#" class="fa-angle-right">Apply Now</a></li>
                                    <li><a href="#" class="fa-angle-right">Send Your Resume</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer--copyright bg--color-3">
            <div class="social--bg bg--color-1"></div>
            <div class="container">
                <p class="text float--left">&copy; 2017 <a href="#">USNEWS</a>. All Rights Reserved.</p>
                <ul class="nav social float--right">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </li>
                </ul>
                <ul class="nav links float--right">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>
<div id="stickySocial" class="sticky--right">
    <ul class="nav">
        <li>
            <a href="#"> <i class="fa fa-facebook"></i> <span>Follow Us On Facebook</span> </a>
        </li>
        <li>
            <a href="#"> <i class="fa fa-twitter"></i> <span>Follow Us On Twitter</span> </a>
        </li>
        <li>
            <a href="#"> <i class="fa fa-google-plus"></i> <span>Follow Us On Google Plus</span> </a>
        </li>
        <li>
            <a href="#"> <i class="fa fa-rss"></i> <span>Follow Us On RSS</span> </a>
        </li>
        <li>
            <a href="#"> <i class="fa fa-vimeo"></i> <span>Follow Us On Vimeo</span> </a>
        </li>
        <li>
            <a href="#"> <i class="fa fa-youtube-play"></i> <span>Follow Us On Youtube Play</span> </a>
        </li>
        <li>
            <a href="#"> <i class="fa fa-linkedin"></i> <span>Follow Us On LinkedIn</span> </a>
        </li>
    </ul>
</div>
<div id="backToTop">
    <a href="#"><i class="fa fa-angle-double-up"></i></a>
</div>
<script data-cfasync="false"
        src="https://cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{asset('fe/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('fe/js/bootstrap.min.js')}}"></script>
<script src="{{asset('fe/js/jquery.sticky.min.js')}}"></script>
<script src="{{asset('fe/js/jquery.hoverIntent.min.js')}}"></script>
<script src="{{asset('fe/js/jquery.marquee.min.js')}}"></script>
<script src="{{asset('fe/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('fe/js/isotope.min.js')}}"></script>
<script src="{{asset('fe/js/resizesensor.min.js')}}"></script>
<script src="{{asset('fe/js/theia-sticky-sidebar.min.js')}}"></script>
<script src="{{asset('fe/js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('fe/js/jquery.barrating.min.js')}}"></script>
<script src="{{asset('fe/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('fe/js/retina.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK9f7sXWmqQ1E-ufRXV3VpXOn_ifKsDuc"></script>
<script src="{{asset('fe/js/color-switcher.min.js')}}"></script>
<script src="{{asset('fe/js/main.js')}}"></script>
</body>
</html>
