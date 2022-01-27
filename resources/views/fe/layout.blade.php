<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{asset('fe/owl-carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('fe/owl-carousel/assets/owl.theme.default.min.css')}}">

    <script src="{{asset('fe/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('fe/owl-carousel/owl.carousel.min.js')}}"></script>
</head>
<body>
<div class="container mx-auto space-y-10">
    <img src="{{asset('fe/img/logo.png')}}" width="160" class="mx-auto"/>


    @include('fe.commons.nav')

    @section('content')

    @show

    @include('fe.commons.footer')

</div>

<script>
    const formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD',
    });
</script>
<script src="{{asset('fe/js/cart.js')}}"></script>
<script>
    const API_TOTAL_ITEMS_IN_CART = "{{route('api.cart.total-items')}}";
    getTotalItems(API_TOTAL_ITEMS_IN_CART);
</script>
@section('script')
@show

</body>
</html>
