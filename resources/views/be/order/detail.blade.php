@extends('be.layout')
@section('main-content')
    <div class="card">
        <div class="card-header ui-sortable-handle" style="cursor: move;">
            <h3 class="card-title">
                <i class="ion ion-clipboard mr-1"></i>
                #{{$order->id}}
            </h3>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h4>Receiver Info</h4>
                    <div>
                        <strong>Full Name</strong>
                        <span>{{$order->full_name}}</span>
                    </div>

                    <div>
                        <strong>Phone</strong>
                        <span>{{$order->phone}}</span>
                    </div>

                    <div>
                        <strong>
                            Address
                        </strong>

                        <span>
                            {{$order->address}}
                        </span>
                    </div>

                    @if($order->note)
                        <div>
                            <strong>
                                Note
                            </strong>
                            <br>
                            <pre>
                            {{$order->note}}
                        </pre>
                        </div>
                    @endif
                </div>

                <div class="col-md-6">
                    <h4>Order Info</h4>
                    @foreach($order->orderDetails as $orderDetail)
                        <div>
                            <strong>
                                {{$orderDetail->name}}
                            </strong>
                            <span>
                               {{\Akaunting\Money\Money::USD($orderDetail->price,true)}} X
    {{$orderDetail->quantity}} =
                                    {{
    \Akaunting\Money\Money::USD($orderDetail->price * $orderDetail->quantity,true)
   }}
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer clearfix">
            <div class="float-left">
                <div><strong>Sub Total</strong> <span>{{\Akaunting\Money\Money::USD($order->sub_total)}}</span></div>
                <div><strong>Tax </strong><span>{{$order->tax}}</span></div>
                <div><strong>Total </strong><span>{{\Akaunting\Money\Money::USD($order->total)}}</span></div>
            </div>
            <div class="float-right">
                @if($order->status==1)
                    <a type="button"
                       href="{{route('admin.order.change-status',['id'=>$order->id,'status'=>2])}}"
                       class="btn btn-primary float-right">
                        Processing
                    </a>
                @endif

                @if($order->status==2)
                    <a type="button" class="btn btn-success float-right"
                       href="{{route('admin.order.change-status',['id'=>$order->id,'status'=>3])}}">
                        Success
                    </a>
                @endif

                <a type="button" class="btn btn-danger float-right"
                   href="{{route('admin.order.change-status',['id'=>$order->id,'status'=>4])}}"
                >
                    Cancel
                </a>

            </div>

        </div>
    </div>
@endsection
@section('bread-crumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.order.list')}}">Order</a></li>
        <li class="breadcrumb-item active">Order Detail</li>
    </ol>
@endsection


@section('heading')
    Order
@endsection
