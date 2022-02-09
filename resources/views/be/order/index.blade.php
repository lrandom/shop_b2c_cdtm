@extends('be.layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"></h3>

                    <div class="float-right" style="display:flex;gap:10px">
                        <a href="{{route('admin.order.list')}}?status=all">All</a>
                        <a href="{{route('admin.order.list')}}?status=pending">Pending</a>
                        <a href="{{route('admin.order.list')}}?status=processing">Processing</a>
                        <a href="{{route('admin.order.list')}}?status=success">Success</a>
                        <a href="{{route('admin.order.list')}}?status=canceled">Canceled</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Full Name</th>
                            <th>Phone</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($list as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->full_name}}</td>
                                <td>{{$item->phone}}</td>

                                <td>{{\Akaunting\Money\Money::USD($item->total,true)}}</td>
                                <td>
                                    @switch($item->status)
                                        @case(1)
                                        <span class="badge badge-warning">Pending</span>
                                        @break

                                        @case(2)
                                        <span class="badge badge-primary">Processing</span>
                                        @break

                                        @case(3)
                                        <span class="badge badge-success">Success</span>
                                        @break

                                        @case(4)
                                        <span class="badge badge-danger">Canceled</span>
                                        @break
                                    @endswitch
                                </td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="{{route('admin.order.detail',['id'=>$item->id])}}">Detail</a>

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success">Change Status</button>
                                        <button type="button" class="btn btn-success dropdown-toggle"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu" style="">
                                            <a class="dropdown-item"
                                               href="{{route('admin.order.change-status',['id'=>$item->id,'status'=>1])}}">Pending</a>
                                            <a class="dropdown-item"
                                               href="{{route('admin.order.change-status',['id'=>$item->id,'status'=>2])}}">Processing</a>
                                            <a class="dropdown-item"
                                               href="{{route('admin.order.change-status',['id'=>$item->id,'status'=>3])}}">Succeed</a>
                                            <a class="dropdown-item"
                                               href="{{route('admin.order.change-status',['id'=>$item->id,'status'=>4])}}">Cancel</a>
                                        </div>
                                    </div>
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
        <li class="breadcrumb-item"><a href="{{route('admin.order.list')}}">Order</a></li>
        <li class="breadcrumb-item active">List</li>
    </ol>
@endsection


@section('heading')
    Order
@endsection
