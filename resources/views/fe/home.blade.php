@extends('fe.layout')

@section('content')
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
                    @include('fe.components.card-product',['product'=>$product])
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
                    @include('fe.components.card-product',['product'=>$product])
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
@endsection

@section('script')
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
@endsection
