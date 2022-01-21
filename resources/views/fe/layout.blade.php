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

    <nav class="flex justify-between items-center shadow p-3" style="background: #f6f6f6">
        <div class="text-xl uppercase font-semibold space-x-3">
            <a href=""><i class="bi bi-house"></i></a>
            <a href="">Nữ</a>
            <a href="">Nam</a>
            <a href="">Trẻ em</a>
            <a href="">Thể thao</a>
            <a href="">Classic</a>
        </div>

        <div class="flex items-center gap-2">
            <input type="search" class="shadow border border-1 border-gray-400 p-2 w-64"
                   placeholder="search..."/>
            <div class="text-xl">
                <a href=""><i class="bi bi-heart"></i></a>
                <a href=""><i class="bi bi-person"></i></a>
                <a href=""><i class="bi bi-cart"></i></a>
            </div>
        </div>
    </nav>


@section('content')

@show


<!--FOOTER-->
    <footer class="p-10 text-white" style="background: #4F4F4F">
        <div class="grid md:grid-cols-4 grid-cols-1 md:gap-10">
            <div class="space-y-5">
                <img src="{{asset('fe/img/logo.png')}}" width="160" class="mx-left"/>
                <hr class="border-1 border-white">
                <ul class="space-y-5">
                    <li>Address: Quang Ninh - VietNam</li>
                    <li>Phone: 023928379</li>
                    <li>Fax: 0181092812</li>
                </ul>
            </div>

            <div class="space-y-5">
                <h3 class="uppercase font-bold">About Us</h3>
                <hr class="border-1 border-white">
                <ul class="space-y-5">
                    <li><a>Introduction</a></li>
                    <li><a>Our franchise</a></li>
                    <li><a>Career</a></li>
                </ul>
            </div>

            <div class="space-y-5">
                <h3 class="uppercase font-bold">Support</h3>
                <hr class="border-1 border-white">
                <ul class="space-y-5">
                    <li>Order Guide</li>
                    <li>Refund Policy</li>
                    <li>Hotline</li>
                </ul>
            </div>

            <div class="space-y-5">
                <h3 class="uppercase font-bold">Social</h3>
                <hr class="border-1 border-white">
                <div class="flex gap-2">
                    <span class="border-2 border-white rounded-full w-10 h-10 flex items-center justify-center">
                        <a href="">
                            <i class="bi bi-facebook"></i>
                        </a>
                    </span>
                    <span class="border-2 border-white rounded-full w-10 h-10 flex items-center justify-center">
                        <a href="">
                           <i class="bi bi-instagram"></i>
                        </a>
                    </span>
                    <span class="border-2 border-white rounded-full w-10 h-10 flex items-center justify-center">
                        <a href="">
                         <i class="bi bi-youtube"></i>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </footer>
    <!--END FOOTER-->
</div>

@section('script')
@show
</body>
</html>
