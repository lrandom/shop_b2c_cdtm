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
                        <a href="home-1.html" class="btn-link"> <img src="{{asset('fe/img/logo.png')}}"
                                                                     alt="USNews Logo"/> <span
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
                <?php
                $categories = \App\Models\Category::all();
                ?>
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
                        @foreach($categories as $category)
                            <li><a href="national.html">{{$category->name}}</a></li>
                        @endforeach

                        {{--   <li class="dropdown megamenu filter">
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
                           </li>--}}
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

    @section('main-content')

    @show

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

@section('script')

@show
</body>
</html>
