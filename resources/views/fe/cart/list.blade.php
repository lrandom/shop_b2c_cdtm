@extends('fe.layout')
@section('content')

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $.ajax({
                url: '{{route('api.cart.get')}}',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    /* if(data.status == 'success'){
                         $('#cart-list').html(data.html);
                     }*/
                }
            })
        });
    </script>
@endsection
