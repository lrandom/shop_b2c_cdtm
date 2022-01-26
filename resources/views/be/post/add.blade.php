@extends('be.layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Post</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" enctype="multipart/form-data" action="{{route('admin.post.doAdd')}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
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
                            <input type="text" name="title" class="form-control" placeholder="Enter title">
                        </div>

                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content"
                                      class="form-control"
                                      placeholder="Enter content"></textarea>

                        </div>

                        <div class="form-group">
                            <label>Short Description</label>
                            <input type="text" name="short_description" class="form-control"
                                   placeholder="Enter Short Description">
                        </div>

                        <div class="form-group">
                            <label>Meta keyword</label>
                            <input type="text" name="meta_keyword" class="form-control"
                                   placeholder="Meta Keyword">
                        </div>

                        <div class="form-group">
                            <label>Meta Description</label>
                            <input type="text" name="meta_description" class="form-control"
                                   placeholder="Meta Description">
                        </div>


                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" class="form-control">

                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Type</label>
                            <select name="type" class="form-control">
                                <option value="1">Normal News</option>
                                <option value="2">Special News</option>
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
        <li class="breadcrumb-item active">Add</li>
    </ol>
@endsection
