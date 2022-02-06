@extends('fe.layout')
@section('content')
    <div class="border mx-auto md:w-2/3 w-full shadow rounded p-10 space-y-5">
        <h3 class="text-xl  text-left font-semibold text-green-500">Đặt hàng thành công</h3>
        <p>Mã đơn hàng của bạn là <span>#{{$orderId}}</span></p>
    </div>
@endsection
