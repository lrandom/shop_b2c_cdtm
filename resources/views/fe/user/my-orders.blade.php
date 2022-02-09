@extends('fe.layout')
@section('content')
    <div>
        <div>
            <div class="float-right" style="display:flex;gap:10px">
                <a href="{{route('fe.user.my-orders')}}?status=all">All</a>
                <a href="{{route('fe.user.my-orders')}}?status=pending">Pending</a>
                <a href="{{route('fe.user.my-orders')}}?status=processing">Processing</a>
                <a href="{{route('fe.user.my-orders')}}?status=success">Success</a>
                <a href="{{route('fe.user.my-orders')}}?status=canceled">Canceled</a>
            </div>
        </div>

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
                           href="{{route('fe.user.order',['id'=>$item->id])}}">Detail</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$list->links()}}
    </div>
@endsection
