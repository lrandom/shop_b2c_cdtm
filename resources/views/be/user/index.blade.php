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
                    {{$list->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
