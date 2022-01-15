@extends('be.layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                    <form class="form-inline" action="{{route('admin.user.search')}}">
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
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Full Name</th>
                            <th>Operation</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($list as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->email}}</td>
                                <td>
                                    {{$item->phone}}
                                </td>
                                <td>{{$item->full_name}}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{route('admin.user.edit',['id'=>$item->id])}}">Edit</a>
                                    <a class="btn btn-danger"
                                       href="{{route('admin.user.delete',['id'=>$item->id])}}"
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
        <li class="breadcrumb-item"><a href="{{route('admin.user.list')}}">User</a></li>
        <li class="breadcrumb-item active">List</li>
    </ol>
@endsection

@section('heading')
    User
@endsection
