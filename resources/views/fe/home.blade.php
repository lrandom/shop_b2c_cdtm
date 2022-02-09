@extends('fe.layout')

@section('main-content')
    <!-- post-banner start -->
    <div class="post-banner-area-2 bg-gray pd-bottom-50">
        <div class="container">
            <div class="row justify-content-center">
                @for($i=0;$i<count($fiveCategories);$i++)
                    @if($i==1)
                        <div class="col-lg-8">
                            <div class="top-post-wrap top-post-wrap-4">

                                <div class="thumb">
                                    <div class="overlay"></div>
                                    <img src="{{asset($fiveCategories[$i]->post->thumbnail_path)}}"
                                         alt="{{$fiveCategories[$i]->post->title}}">
                                </div>
                                <div class="top-post-details">
                                    <a class="tag" href="#">{{$fiveCategories[$i]->name}}</a>
                                    <h6><a href="#">{{$fiveCategories[$i]->post->title}}</a></h6>
                                    <div class="meta">
                                        <a href="#" class="author">
                                            Malika Hamira
                                        </a>
                                        <div class="date">
                                            <i class="fa fa-clock-o"></i>
                                            12 Jun 22
                                        </div>
                                        <div class="views">
                                            586 Views
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-4">
                            <div class="top-post-wrap top-post-wrap-4">
                                <div class="thumb">
                                    <div class="overlay"></div>
                                    <img src="{{asset($fiveCategories[$i]->post->thumbnail_path)}}"
                                         alt="{{$fiveCategories[$i]->post->title}}">
                                </div>
                                <div class="top-post-details">
                                    <a class="tag" href="#">{{$fiveCategories[$i]->name}}</a>
                                    <h6><a href="#">A woman can break the record in the world boxing game</a></h6>
                                    <div class="meta">
                                        <a href="#" class="author">
                                            Malika Hamira
                                        </a>
                                        <div class="date">
                                            <i class="fa fa-clock-o"></i>
                                            12 Jun 22
                                        </div>
                                        <div class="views">
                                            586 Views
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endfor
            </div>
        </div>
    </div>
    <!-- post-banner end -->

    <!-- top-story area Start -->
    @if(!$topStoriesNews->isEmpty())
    <div class="top-story-area pd-top-70 pd-bottom-50">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h5 class="title">Top Stories</h5>
                    </div>
                    <div class="col-sm-6 text-sm-right align-self-center">
                        <a class="see-all-btn float-sm-right" href="#">View all</a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($topStoriesNews as $topStoriesNew)
                    <div class="col-lg-3 col-md-6">
                        <div class="top-story-wrap">
                            <h6><a href="#">{{$topStoriesNew->title}}</a></h6>
                            <p>11 Jun, 2020 | By {{$topStoriesNew->user->full_name}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
    <!-- top-story area End -->

    <div class="bg-gray pd-top-80 pd-bottom-80 text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="#">
                        <img src="{{asset('fe/assets/img/ad/3.png')}}" alt="img">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- top-news area Start -->
    <div class="top-news-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 pd-top-70">
                    <div class="section-title pb-0">
                        <div class="row">
                            <div class="col-md-4">
                                <h5 class="title mb-0">City News</h5>
                            </div>
                            <div class="col-md-8 align-self-center text-left text-md-right">
                                <div class="top-news-tab d-inline-block">
                                    <ul class="nav nav-tabs">
                                        <li><a class="active" data-toggle="tab" href="#news1">Travel</a>
                                        </li>
                                        <li><a data-toggle="tab" href="#news2">Foods</a>
                                        </li>
                                        <li><a data-toggle="tab" href="#news3">News</a>
                                        </li>
                                        <li><a data-toggle="tab" href="#news4">Beauty</a>
                                        </li>
                                        <li><a data-toggle="tab" href="#news5">Life Style</a>
                                        </li>
                                        <li><a data-toggle="tab" href="#news6">Music</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-news-tab-content tab-content">
                                <div id="news1" class="tab-pane fade active show">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/12.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">Best fashion model in 2020 get idea from there</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/13.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">Doing everything on time is the habit of successful
                                                            people</a></h6>
                                                </div>
                                            </div>
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/14.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">We need green forests to survive healthy</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/15.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">Good Design Can Create a Beautiful nterface For
                                                            Everyone.</a></h6>
                                                </div>
                                            </div>
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/16.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">Be careful not to eat fatty foods 10 tips for
                                                            woman</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/17.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">I think to Change our Attention Make For Valuable
                                                            Face.</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="news2" class="tab-pane fade show">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/12.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">Best fashion model in 2020 get idea from there</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/13.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">Doing everything on time is the habit of successful
                                                            people</a></h6>
                                                </div>
                                            </div>
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/14.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">We need green forests to survive healthy</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/15.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">Good Design Can Create a Beautiful nterface For
                                                            Everyone.</a></h6>
                                                </div>
                                            </div>
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/16.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">Be careful not to eat fatty foods 10 tips for
                                                            woman</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/17.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">I think to Change our Attention Make For Valuable
                                                            Face.</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="news3" class="tab-pane fade show">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/12.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">Best fashion model in 2020 get idea from there</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/13.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">Doing everything on time is the habit of successful
                                                            people</a></h6>
                                                </div>
                                            </div>
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/14.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">We need green forests to survive healthy</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/15.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">Good Design Can Create a Beautiful nterface For
                                                            Everyone.</a></h6>
                                                </div>
                                            </div>
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/16.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">Be careful not to eat fatty foods 10 tips for
                                                            woman</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/17.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">I think to Change our Attention Make For Valuable
                                                            Face.</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="news4" class="tab-pane fade show">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/12.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">Best fashion model in 2020 get idea from there</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/13.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">Doing everything on time is the habit of successful
                                                            people</a></h6>
                                                </div>
                                            </div>
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/14.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">We need green forests to survive healthy</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/15.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">Good Design Can Create a Beautiful nterface For
                                                            Everyone.</a></h6>
                                                </div>
                                            </div>
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/16.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">Be careful not to eat fatty foods 10 tips for
                                                            woman</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/17.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">I think to Change our Attention Make For Valuable
                                                            Face.</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="news5" class="tab-pane fade show">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/12.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">Best fashion model in 2020 get idea from there</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/13.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">Doing everything on time is the habit of successful
                                                            people</a></h6>
                                                </div>
                                            </div>
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/14.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">We need green forests to survive healthy</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/15.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">Good Design Can Create a Beautiful nterface For
                                                            Everyone.</a></h6>
                                                </div>
                                            </div>
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/16.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">Be careful not to eat fatty foods 10 tips for
                                                            woman</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/17.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">I think to Change our Attention Make For Valuable
                                                            Face.</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="news6" class="tab-pane fade show">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/12.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">Best fashion model in 2020 get idea from there</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/13.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">Doing everything on time is the habit of successful
                                                            people</a></h6>
                                                </div>
                                            </div>
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/14.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">We need green forests to survive healthy</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/15.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">Good Design Can Create a Beautiful nterface For
                                                            Everyone.</a></h6>
                                                </div>
                                            </div>
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/16.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">Be careful not to eat fatty foods 10 tips for
                                                            woman</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="top-post-wrap top-post-wrap-4">
                                                <div class="thumb">
                                                    <div class="overlay"></div>
                                                    <img src="assets/img/post/17.png" alt="img">
                                                </div>
                                                <div class="top-post-details">
                                                    <a class="tag" href="#">Fashion</a>
                                                    <h6><a href="#">I think to Change our Attention Make For Valuable
                                                            Face.</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="recent-news-area recent-news-area-2">
                                <div class="section-title pd-top-40">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h5 class="title">Recent News</h5>
                                        </div>
                                        <div class="col-sm-6 text-sm-right align-self-center">
                                            <a class="see-all-btn" href="#">View All</a>
                                        </div>
                                    </div>
                                </div>
                                @foreach($recentNews as $recentNew)
                                    <div class="media-post-wrap-2 media bg-gray shadow-none">
                                        <div class="thumb">
                                            <img style="width:270px;" src="{{asset($recentNew->thumbnail_path)}}" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <h6><a href="#">{{$recentNew->title}}</a></h6>
                                            <div class="meta">
                                                <a href="#" class="author">
                                                    By {{$recentNew->user->full_name}} <span>|</span>
                                                </a>
                                                <div class="date">
                                                    11 Jun, 2020 <span>|</span>
                                                </div>
                                                <div class="comment">
                                                    <i class="fa fa-comments-o"></i>
                                                    0
                                                    <span>|</span>
                                                </div>
                                            </div>
                                            <p>{{$recentNew->short_description}}</p>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-area">
                        <div class="widget widget-subscribe text-center">
                            <h5>Subscribe Now</h5>
                            <div class="widget-subscribe-details">
                                <div class="thumb">
                                    <img src="{{asset('fe/assets/img/icon/envelope.png')}}" alt="img">
                                </div>
                                <h6>Subscribe Our Newslatter</h6>
                                <div class="newsletter-inner">
                                    <input type="text" placeholder="Enter Your Email address">
                                    <button><i class="fa fa-paper-plane-o"></i></button>
                                </div>
                                <p>There is only notifications about new products & updates</p>
                            </div>
                        </div>
                        <div class="widget widget-social-area">
                            <h5 class="widget-title">Social Media</h5>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook-square"></i>Facebook 12k</a>
                                </li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i>Pinterest 32k</a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin-square"></i>Linkedin 16k</a>
                                </li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter-square"></i>Twitter 9k</a></li>
                                <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram 12k</a></li>
                                <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i>Youtube 34k</a></li>
                            </ul>
                        </div>
                 {{--       <div class="widget widget-post">
                            <h5 class="widget-title">Top Travel Posts</h5>
                            <div class="single-widget-post">
                                <div class="thumb">
                                    <img src="assets/img/widget/6.png" alt="img">
                                </div>
                                <h6>Travel ipsum dolor sit amet, consectetur adipiscing elit aliqua.</h6>
                            </div>
                            <div class="single-widget-post">
                                <div class="thumb">
                                    <img src="assets/img/widget/5.png" alt="img">
                                </div>
                                <h6>A good family aloways wants to learning from the nature & will happy.</h6>
                            </div>
                            <a class="load-more-btn" href="#">Load More</a>
                        </div>--}}

                        <div class="widget widget-list">
                            <h5 class="widget-title">Best Stories</h5>
                            @foreach($topStoriesNews as $topStoriesNew)
                                <div class="media-post-wrap media">
                                    <div class="thumb">
                                        <img style="width:150px" src="{{asset($topStoriesNew->thumbnail_path)}}" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <h6><a href="#">{{$topStoriesNew->title}}</a></h6>
                                        <div class="meta">
                                            <a href="#" class="author">
                                                By: {{$topStoriesNew->user->full_name}}
                                            </a>
                                            <div class="date">
                                                <i class="fa fa-clock-o"></i>
                                                19 Jun 22
                                            </div>
                                            <div class="views">
                                                {{$topStoriesNew->view_count}} Views
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                          {{--  <a class="load-more-btn" href="#">Load More</a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top-news area End -->

    <!-- visitors-area Start -->
    {{--<div class="visitors-area pd-top-70 pd-bottom-50 bg-gray">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-lg-6">
                        <h5 class="title m-0">Top Posts</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="visitor-slider owl-carousel owl-theme">
                        <div class="item">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="assets/img/visitor/1.png" alt="img">
                                </div>
                                <a class="tag tag-2" href="#">Technology</a>
                                <h6><a href="#">Do yoga and stay healthy forever | 10 tips</a></h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="assets/img/visitor/2.png" alt="img">
                                </div>
                                <a class="tag tag-3" href="#">World</a>
                                <h6><a href="#">Woman fashion is the most popular in the world.</a></h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="assets/img/visitor/3.png" alt="img">
                                </div>
                                <a class="tag" href="#">Fitness</a>
                                <h6><a href="#">Our most interesting object. Take care all time.</a></h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="assets/img/visitor/4.png" alt="img">
                                </div>
                                <a class="tag tag-3" href="#">World</a>
                                <h6><a href="#">Play The Music Do Fresh Your Mind</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    <!-- visitors-area End -->

    <div class="pd-top-80 pd-bottom-80 text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a class="kgl-add-inner" href="#">
                        <img src="{{asset('fe/assets/img/ad/4.png')}}" alt="img">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
