@extends('be.layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Bordered Table</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>
                                Thumbnail
                            </th>
                            <th>Title</th>
                            <th>Short Description</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($list as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>
                                    @if($item->thumbnail_path)
                                        <img width="150" src="{{asset($item->thumbnail_path)}}"/>
                                    @else
                                        <img src="https://via.placeholder.com/150

C/O https://placeholder.com/"/>
                                    @endif
                                </td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->short_description}}</td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="{{route('admin.post.edit',['id'=>$item->id])}}">Edit</a>
                                    <a class="btn btn-danger"
                                       href="{{route('admin.post.delete',['id'=>$item->id])}}"
                                       onclick="return confirm('Are you you want to delete this ?')" href="">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    {{$list->withQueryString()->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('bread-crumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.post.list')}}">Category</a></li>
        <li class="breadcrumb-item active">List</li>
    </ol>
@endsection
