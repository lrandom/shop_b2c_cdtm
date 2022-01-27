@extends('be.layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                    <form class="form-inline" action="{{route('admin.product.search')}}">
                        <div class="input-group">
                            <input class="form-control"
                                   type="search"
                                   name="query"
                                   placeholder="Type anything" aria-label="Search">
                            <div class="input-group-append bg-primary">
                                <button class="btn btn-sidebar">
                                    <i class="fas fa-search fa-fw text-white"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Short Description</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($list as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>
                                    @if($item->preview)
                                        <img src="{{asset($item->preview->path)}}"
                                             style="width: 100px; height: 100px">
                                    @else
                                        <img src="https://via.placeholder.com/150

C/O https://placeholder.com/"
                                             style="width: 100px; height: 100px">
                                    @endif
                                </td>
                                <td>{{$item->name}}</td>
                                <td>{{\Akaunting\Money\Money::USD($item->price,true)}}</td>
                                <td>
                                    <span class="badge badge-primary">
                                             @if($item->category)
                                            {{$item->category->name}}
                                        @else
                                            No Category
                                        @endif
                                    </span>
                                </td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="{{route('admin.product.edit',['id'=>$item->id])}}">Edit</a>
                                    <a class="btn btn-danger"
                                       href="{{route('admin.product.delete',['id'=>$item->id])}}"
                                       onclick="return confirm('Are you you want to delete this ?')" href="">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    {{$list->appends(request()->query())->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('bread-crumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.product.list')}}">Category</a></li>
        <li class="breadcrumb-item active">List</li>
    </ol>
@endsection

@section('heading')
    Product
@endsection
