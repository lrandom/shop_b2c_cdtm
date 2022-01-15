@extends('be.layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Logo</th>
                            <th>Name</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($list as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>
                                    @if($item->logo_path)
                                        <img src="{{asset($item->logo_path)}}" alt="{{$item->name}}"
                                             style="width: 100px; height: 100px">
                                    @else
                                        <img src="https://via.placeholder.com/150

C/O https://placeholder.com/"
                                             style="width: 100px; height: 100px">
                                    @endif
                                </td>
                                <td>{{$item->name}}</td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="{{route('admin.brand.edit',['id'=>$item->id])}}">Edit</a>
                                    <a class="btn btn-danger"
                                       href="{{route('admin.brand.delete',['id'=>$item->id])}}"
                                       onclick="return confirm('Are you you want to delete this ?')" href="">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    {{$list->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('bread-crumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.brand.list')}}">Brand</a></li>
        <li class="breadcrumb-item active">List</li>
    </ol>
@endsection


@section('heading')
    Brand
@endsection

