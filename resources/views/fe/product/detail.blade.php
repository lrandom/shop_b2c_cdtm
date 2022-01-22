@extends('fe.layout')
@section('content')
    <div class="space-y-2">
        <div class="grid md:grid-cols-2">
            <div>
                <!--TRÌNH XEM ẢNH-->
            </div>

            <div class="space-y-2">
                <h1 class="font-bold text-2xl">Nike Air Max 2090</h1>
                <div>
                    <span>SKU: 189216792</span>
                </div>
                <div class="font-bold text-xl">
                    3000.000 VND
                </div>

                <hr class="borer-b border-1 bg-gray-200">

                <div class="space-y-5">
                    <div class="space-y-2">
                        <div>Color</div>
                        <div class="flex flex-wrap gap-4">
                            <div class="flex items-center gap-2">
                                <div class="bg-gray-200 rounded-full h-6 w-6"></div>
                                <span>Green</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <div class="bg-gray-200 rounded-full h-6 w-6"></div>
                                <span>Red</span>
                            </div>

                        </div>
                    </div>

                    <div class="space-y-2">
                        <div>Size</div>
                        <div class="flex flex-wrap gap-4">
                            <div class="border w-10 h-10 flex items-center justify-center">
                                <div>
                                    8
                                </div>
                            </div>
                            <div class="border w-10 h-10 flex items-center justify-center">
                                <div>
                                    9
                                </div>
                            </div>
                            <div class="border w-10 h-10 flex items-center justify-center">
                                <div>
                                    9.5
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="w-28 border">
                        <div class="flex w-full items-center justify-evenly gap-2 border-gray-300">
                            <div class="text-xl pl-10 cursor-pointer">+</div>
                            <input type="number" class="
                            my-2
                         border-l
                         text-center border-r
                         ring-0
                         border-gray-300 w-12 h-8"/>
                            <div class="text-xl pr-10 cursor-pointer">-</div>
                        </div>
                    </div>


                    <div class="w-1/2 space-y-2">

                        <button class="bg-black w-full text-white py-4 uppercase">Add To Cart</button>
                        <div class="w-full flex gap-2">
                            <button class="border border-gray-300 py-4 px-2 text-sm uppercase w-1/2 inline-block">
                                <i class="bi bi-heart"></i>
                                Add To WishList
                            </button>

                            <button class="border border-gray-300 py-4 px-2 text-sm uppercase w-1/2 inline-block">
                                <i class="bi bi-share"></i>
                                Share
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h4 class="font-semibold text-xl">Thông tin</h4>
        <hr class="borer-b border-1 bg-gray-200"/>
        <div>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, asperiores, atque, autem
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, asperiores, atque, autem
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, asperiores, atque, autem
        </div>

    </div>

    <div>
        <h3 class="font-bold text-xl uppercase">You might like this <a style="color:#F2994A;"
                                                                       class="text-sm font-normal">See
                All</a>
        </h3>
        <div>

        </div>
    </div>


@endsection

