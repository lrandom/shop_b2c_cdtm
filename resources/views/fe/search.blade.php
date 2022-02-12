@extends('fe.layout')
@section('main-content')
    <div class="blog-list-area pd-top-50 pd-bottom-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="breadcrumb-inner">
                        <i class="fa fa-home"></i>
                        <ul class="page-list">
                            <li><a href="index-2.html">Home</a></li>
                            <li>Result for "{{$query}}"</li>
                        </ul>
                    </div>

                    <div class="recent-news-area-3">
                   {{--     <div class="section-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5 class="title mb-0">{{$category->name}}</h5>
                                </div>
                            </div>
                        </div>--}}

                        @foreach($posts as $post)
                            <div class="media-post-wrap-2 media shadow-none">
                                <div class="thumb">
                                    <img src="{{asset($post->thumbnail_path)}}" style="width:275px" alt="img">
                                    {{--   <a class="tag" href="#">Working</a>--}}
                                </div>
                                <div class="media-body">
                                    <h6><a href="#">{{$post->title}}</a></h6>
                                    <div class="meta">
                                        <div class="date">
                                            <i class="fa fa-clock-o"></i>
                                            12 Jun 22
                                        </div>
                                        <a href="#" class="author">
                                            <i class="fa fa-user"></i>
                                            {{$post->user->full_name}}
                                        </a>
                                        <div class="views">
                                            Length: 9 Mins
                                        </div>
                                    </div>
                                    <p>{{$post->short_description}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar-area">
                        <div class="widget-tab widget-tab-2 widget">

                            <ul class="nav nav-tabs">
                                <li><a class="active tab-popular" data-toggle="tab" href="#post1">
                                        Popular</a>
                                </li>
                                <li><a class="tab-recent" data-toggle="tab" href="#post2">Recent</a>
                                </li>
                                <li><a class="tab-comment" data-toggle="tab" href="#post3">Comments</a>
                                </li>
                            </ul>

                            <div class="tab-content my-tab-content">
                                {{-- <div id="post1" class="tab-pane fade active show">
                                     <div class="media-post-wrap media">
                                         <div class="thumb">
                                             <img src="assets/img/post/4s.png" alt="img">
                                         </div>
                                         <div class="media-body">
                                             <h6><a href="#">There must be someone behind the person who has achieved</a>
                                             </h6>
                                             <div class="meta">
                                                 <div class="date">
                                                     <i class="fa fa-clock-o"></i>
                                                     12 Jun 22
                                                 </div>
                                                 <a href="#" class="author">
                                                     <i class="fa fa-user"></i>
                                                     Alex Nuya
                                                 </a>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="media-post-wrap media">
                                         <div class="thumb">
                                             <img src="assets/img/post/5s.png" alt="img">
                                         </div>
                                         <div class="media-body">
                                             <h6><a href="#">Best fashion makeup for everyday life style</a></h6>
                                             <div class="meta">
                                                 <div class="date">
                                                     <i class="fa fa-clock-o"></i>
                                                     12 Jun 22
                                                 </div>
                                                 <a href="#" class="author">
                                                     <i class="fa fa-user"></i>
                                                     Alex Nuya
                                                 </a>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="media-post-wrap media mb-0">
                                         <div class="thumb">
                                             <img src="assets/img/post/6s.png" alt="img">
                                         </div>
                                         <div class="media-body">
                                             <h6><a href="#">There must be someone behind the person who has achieved</a>
                                             </h6>
                                             <div class="meta">
                                                 <div class="date">
                                                     <i class="fa fa-clock-o"></i>
                                                     12 Jun 22
                                                 </div>
                                                 <a href="#" class="author">
                                                     <i class="fa fa-user"></i>
                                                     Alex Nuya
                                                 </a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div id="post2" class="tab-pane fade">
                                     <div class="media-post-wrap media">
                                         <div class="thumb">
                                             <img src="assets/img/post/4s.png" alt="img">
                                         </div>
                                         <div class="media-body">
                                             <h6><a href="#">There must be someone behind the person who has achieved</a>
                                             </h6>
                                             <div class="meta">
                                                 <div class="date">
                                                     <i class="fa fa-clock-o"></i>
                                                     12 Jun 22
                                                 </div>
                                                 <a href="#" class="author">
                                                     <i class="fa fa-user"></i>
                                                     Alex Nuya
                                                 </a>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="media-post-wrap media">
                                         <div class="thumb">
                                             <img src="assets/img/post/5s.png" alt="img">
                                         </div>
                                         <div class="media-body">
                                             <h6><a href="#">Best fashion makeup for everyday life style</a></h6>
                                             <div class="meta">
                                                 <div class="date">
                                                     <i class="fa fa-clock-o"></i>
                                                     12 Jun 22
                                                 </div>
                                                 <a href="#" class="author">
                                                     <i class="fa fa-user"></i>
                                                     Alex Nuya
                                                 </a>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="media-post-wrap media mb-0">
                                         <div class="thumb">
                                             <img src="assets/img/post/6s.png" alt="img">
                                         </div>
                                         <div class="media-body">
                                             <h6><a href="#">There must be someone behind the person who has achieved</a>
                                             </h6>
                                             <div class="meta">
                                                 <div class="date">
                                                     <i class="fa fa-clock-o"></i>
                                                     12 Jun 22
                                                 </div>
                                                 <a href="#" class="author">
                                                     <i class="fa fa-user"></i>
                                                     Alex Nuya
                                                 </a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div id="post3" class="tab-pane fade">
                                     <div class="media-post-wrap media">
                                         <div class="thumb">
                                             <img src="assets/img/post/4s.png" alt="img">
                                         </div>
                                         <div class="media-body">
                                             <h6><a href="#">There must be someone behind the person who has achieved</a>
                                             </h6>
                                             <div class="meta">
                                                 <div class="date">
                                                     <i class="fa fa-clock-o"></i>
                                                     12 Jun 22
                                                 </div>
                                                 <a href="#" class="author">
                                                     <i class="fa fa-user"></i>
                                                     Alex Nuya
                                                 </a>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="media-post-wrap media">
                                         <div class="thumb">
                                             <img src="assets/img/post/5s.png" alt="img">
                                         </div>
                                         <div class="media-body">
                                             <h6><a href="#">Best fashion makeup for everyday life style</a></h6>
                                             <div class="meta">
                                                 <div class="date">
                                                     <i class="fa fa-clock-o"></i>
                                                     12 Jun 22
                                                 </div>
                                                 <a href="#" class="author">
                                                     <i class="fa fa-user"></i>
                                                     Alex Nuya
                                                 </a>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="media-post-wrap media mb-0">
                                         <div class="thumb">
                                             <img src="assets/img/post/6s.png" alt="img">
                                         </div>
                                         <div class="media-body">
                                             <h6><a href="#">There must be someone behind the person who has achieved</a>
                                             </h6>
                                             <div class="meta">
                                                 <div class="date">
                                                     <i class="fa fa-clock-o"></i>
                                                     12 Jun 22
                                                 </div>
                                                 <a href="#" class="author">
                                                     <i class="fa fa-user"></i>
                                                     Alex Nuya
                                                 </a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>--}}
                            </div>
                        </div>
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

                        <div class="widget widget-list">
                            <h5 class="widget-title">Best Stories</h5>
                            @foreach($topStoriesNews as $topStoriesNew)
                                <div class="media-post-wrap media">
                                    <div class="thumb">
                                        <img style="width:150px" src="{{asset($topStoriesNew->thumbnail_path)}}"
                                             alt="img">
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

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
     /*   $('.tab-popular').click(function () {
            loadPopularPosts();
        });

        $('.tab-recent').click(function () {
            loadRecentPosts();
        });*/

   /*     function loadPopularPosts() {
            $('.my-tab-content').empty();
            $.ajax({
                method: 'get',
                dataType: 'html',
                url:
                success: function (data) {
                    $('.my-tab-content').append(data);
                }
            })
        }*/

       /* function loadRecentPosts() {
            $('.my-tab-content').empty();
            $.ajax({
                method: 'get',
                dataType: 'html',
                url:
                success: function (data) {
                    $('.my-tab-content').append(data);
                }
            })
        }*/


    </script>
@endsection
