<div id="post1" class="tab-pane fade active show">
 {{--   <div class="media-post-wrap media">
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
    </div>--}}

    @foreach($posts as $post)
        <div class="media-post-wrap media">
            <div class="thumb">
                <img src="{{asset($post->thumbnail_path)}}" width="100" alt="img">
            </div>
            <div class="media-body">
                <h6><a href="#">{{$post->title}}</a>
                </h6>
                <div class="meta">
                    <div class="date">
                        <i class="fa fa-clock-o"></i>
                        12 Jun 22
                    </div>
                    <a href="#" class="author">
                        <i class="fa fa-user"></i>
                        {{$post->user->full_name}}
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
