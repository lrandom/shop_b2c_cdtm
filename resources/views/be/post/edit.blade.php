@extends('be.layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Post</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" enctype="multipart/form-data" action="{{route('admin.post.doEdit',['id'=>$post->id])}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">

                            @if($post->thumbnail_path)
                                <img src="{{asset($post->thumbnail_path)}}" alt=""/>
                            @endif

                            <label for="exampleInputFile">Thumbnail</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="thumbnail" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control"
                                   value="{{$post->title}}"
                                   placeholder="Enter name">
                        </div>

                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content"
                                      class="form-control"
                                      placeholder="Enter content">{!! $post->content !!}</textarea>

                        </div>

                        <div class="form-group">
                            <label>Short Description</label>
                            <input type="text" name="short_description"
                                   value="{{$post->short_description}}"
                                   class="form-control"
                                   placeholder="Enter Short Description">
                        </div>

                        <div class="form-group">
                            <label>Meta keyword</label>
                            <input type="text" name="meta_keyword"
                                   value="{{$post->meta_keyword}}"
                                   class="form-control"
                                   placeholder="Meta Keyword">
                        </div>

                        <div class="form-group">
                            <label>Meta Description</label>
                            <input type="text" name="meta_description"
                                   value="{{$post->meta_description}}"
                                   class="form-control"
                                   placeholder="Meta Description">
                        </div>


                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option <?php if ($category->id == $post->category_id) {
                                        echo 'selected="selected"';
                                    } ?> value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Type</label>
                            <select name="type" class="form-control">
                                <option <?php if ($post->type == 1) {
                                    echo 'selected="selected"';
                                } ?> value="{{$category->id}}" value="1">Normal News
                                </option>
                                <option <?php if ($post->type == 1) {
                                    echo 'selected="selected"';
                                } ?> value="2">Special News
                                </option>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
@section('bread-crumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.post.list')}}">Post</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
@endsection
