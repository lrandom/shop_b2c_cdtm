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
                            <th>Name</th>
                            <th>Variant Value</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($list as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>
                                    @foreach($item->variantValues as $variantValue)
                                        <span class="badge badge-primary">{{$variantValue->value}}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="{{route('admin.variant.edit',['id'=>$item->id])}}">Edit</a>
                                    <a class="btn btn-danger"
                                       href="{{route('admin.variant.delete',['id'=>$item->id])}}"
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
        <li class="breadcrumb-item"><a href="{{route('admin.variant.list')}}">Variant</a></li>
        <li class="breadcrumb-item active">List</li>
    </ol>
@endsection
