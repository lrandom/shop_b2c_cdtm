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

    <!--BANNER-->
    <div>
        <img src="{{asset('fe/img/banner.jpg')}}" class="mx-auto object-cover h-96 w-full"/>
    </div>
    <!--END BANNER-->

    <!--MAIN CONTENT-->

    <div class="space-y-10">
        <!--TOP PRODUCT-->
        <div class="space-y-5">
            <h3 class="font-bold text-xl">FEATURE PRODUCT <a style="color:#F2994A;" class="text-sm font-normal">See
                    All</a>
            </h3>
            <div class="grid md:grid-cols-4 grid-cols-1 gap-10">
                @foreach($featureProducts as $product)
                    <div class="shadow">
                        <div class="relative">

                            @if($product->preview > 0)
                                <img src="{{asset($product->preview)}}" class="object-cover h-64 w-full"/>
                            @else
                                <img src="https://via.placeholder.com/150

C/O https://placeholder.com/"
                                     class="object-cover h-64 w-full">

                                <a class="absolute top-4 w-10 h-10 text-center rounded shadow right-4 p-2 bg-white">
                                    <i class="bi bi-heart"></i>
                                </a>
                            @endif
                        </div>


                        <div class="px-4 py-2">
                            <div class="flex justify-between items-center">
                                <h3 class="font-bold text-lg">{{$product->name}}</h3>
                                <a class="shadow py-1 px-2 text-center w-10 rounded" style="background: #F2C94C;">
                                    <i class="bi bi-cart "></i>
                                </a>
                            </div>
                            <div>
                                <span class="text-gray-400 line-through">300$</span>
                                <span class="text-red-500">300$</span>
                            </div>
                            <p class="text-sm">{{$product->short_description}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!--NEW ARIVAL PRODUCT-->
        <div class="space-y-5">
            <h3 class="font-bold text-xl">NEW ARIVAL PRODUCT <a style="color:#F2994A;" class="text-sm font-normal">See
                    All</a>
            </h3>
            <div class="grid md:grid-cols-4 grid-cols-1 gap-10">
                @foreach($newProducts as $product)
                    <div class="shadow">
                        <div class="relative">
                            <img src="{{asset('fe/img/shoes.jpeg')}}" class="object-cover h-64 w-full"/>
                            <a class="absolute top-4 w-10 h-10 text-center rounded shadow right-4 p-2 bg-white">
                                <i class="bi bi-heart"></i>
                            </a>
                        </div>


                        <div class="px-4 py-2">
                            <div class="flex justify-between items-center">
                                <h3 class="font-bold text-lg">Product Name</h3>
                                <a class="shadow py-1 px-2 text-center w-10 rounded" style="background: #F2C94C;">
                                    <i class="bi bi-cart "></i>
                                </a>
                            </div>
                            <div>
                                <span class="text-gray-400 line-through">300$</span>
                                <span class="text-red-500">300$</span>
                            </div>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Accusamus,
                                adipisci.</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        @if($brands && count($brands->toArray())>0)
            <div class="space-y-5">
                <h3 class="font-bold text-xl">
                    BRAND
                </h3>

                <div>
                    <!-- Set up your HTML -->
                    <div class="owl-carousel">
                        @foreach($brands as $item)
                            <div class="p-2">
                                <div class="shadow bg-gray-200 p-2 h-24 flex items-center justify-center">
                                    <img src="{{asset($item->logo_path)}}"
                                         class="object-cover h-16 w-full"/>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </div>
    <!--END MAIN CONTENT-->

    <!--NEWSETTLER FORM-->
    <div class="md:grid grid-cols-7 place-items-center p-10" style="background: #DFDFDF">
        <div class="col-span-3">
            <h4 class="font-bold text-3xl">Đăng ký nhận bản tin</h4>
            <p class="font-bold text-base">Đừng bỏ lỡ hàng ngàn sản phẩm và các chuwong trình siêu hấp dẫn</p>
        </div>

        <div class="col-span-4">
            <form class="flex gap-2 items-center border-2 w-full">
                <input type="email" class="bg-white h-16 w-48 p-2"/>
                <button class="uppercase text-2xl h-16 font-bold bg-yellow-300 p-2">Get News</button>
            </form>
        </div>
    </div>

    <!--END FORM-->

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

<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            items: 10,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 10
                }
            }
        });
    });
</script>
</body>
</html>
