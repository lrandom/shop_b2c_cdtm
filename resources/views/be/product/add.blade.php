@extends('be.layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Product</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{route('admin.product.doAdd')}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter name">
                        </div>

                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" class="form-control">
                                @foreach($categories as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content" class="form-control" placeholder="Enter Content"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" name="price" class="form-control" placeholder="Enter Price">
                        </div>

                        <div>
                            <label>Brand</label>
                            <select name="brand_id" class="form-control">
                                <option></option>
                            </select>
                        </div>

                        <div>
                            <label>Discount Type</label>
                            <select class="form-control">
                                <option value="1">Percentage</option>
                                <option value="2">Direct Amount</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Meta Keyword</label>
                            <input type="text" name="meta_keyword" class="form-control" placeholder="Enter name">
                        </div>

                        <div class="form-group">
                            <label>Meta Content</label>
                            <input type="text" name="meta_content" class="form-control"
                                   placeholder="Enter Meta Content">
                        </div>

                        <div class="form-group">
                            <label>Meta Content</label>
                            <input type="text" name="meta_description" class="form-control"
                                   placeholder="Enter Meta Description">
                        </div>

                        <div class="form-group">
                            <label>Short Description</label>
                            <textarea name="short_description" class="form-control"></textarea>
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
        <li class="breadcrumb-item"><a href="{{route('admin.product.list')}}">Product</a></li>
        <li class="breadcrumb-item active">Add</li>
    </ol>
@endsection
