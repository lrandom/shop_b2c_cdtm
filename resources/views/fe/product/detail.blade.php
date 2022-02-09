@extends('fe.layout')
@section('content')
    <div class="space-y-2">
        <div class="grid md:grid-cols-2 gap-10">
            <div>
                <!--TRÌNH XEM ẢNH-->
                <ul id="lightSlider">
                    @foreach($product->images as $img)
                        <li data-thumb="{{asset($img->path)}}">
                            <img src="{{asset($img->path)}}"/>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="space-y-2">
                <h1 class="font-bold text-2xl">{{$product->name}}</h1>
                @if($product->sku)
                    <div>
                        <span>SKU: {{$product->sku}}</span>
                    </div>
                @endif
                <div class="font-bold text-xl">
                    {{$product->price}} VND
                </div>

                <hr class="borer-b border-1 bg-gray-200">

                <div class="space-y-5">

                    @foreach($variantValues as $variantValue)

                        <div class="space-y-2">
                            <div class="flex flex-wrap items-center gap-4">
                                <?php
                                if ($variantValue[0]) {
                                    $variant = \App\Models\Variant::find($variantValue[0]->variant_id);
                                }
                                $index = 0;
                                ?>
                                @if(isset($variant))
                                    <div>{{$variant->name}}</div>
                                @endif
                                @foreach($variantValue as $variantValue1)
                                    <?php $index++; ?>
                                    <div variant-id="{{$variant->id}}"
                                         variant-value="{{$variantValue1->value}}"
                                         variant-value-id="{{$variantValue1->id}}"

                                         class="<?php if ($index == 1) {
                                             echo 'active-select-variant';
                                         } ?> btn-select-variant border px-5 h-10 flex items-center justify-center cursor-pointer">
                                        <div>
                                            {{$variantValue1->value}}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach

                    <div class="w-28 border">
                        <div class="flex w-full items-center justify-evenly gap-2 border-gray-300">
                            <div class="btn-qyt-plus text-xl pl-10 cursor-pointer">+</div>

                            <input type="number" value="1" id="quantity" class="
                            my-2
                         border-l
                         text-center border-r
                         ring-0
                         border-gray-300 w-12 h-8"/>
                            <div class="btn-qyt-minus text-xl pr-10 cursor-pointer">-</div>
                        </div>
                    </div>


                    <div class="w-1/2 space-y-2">

                        <input type="hidden" name="variant_info"/>

                        <button id="btn-add-to-cart" class="bg-black w-full text-white py-4 uppercase">
                            Add To Cart
                        </button>

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
            {!!$product->content!!}
        </div>

    </div>

    <div>
        <h3 class="font-bold text-xl uppercase">You might like this
            <a style="color:#F2994A;"
               class="text-sm font-normal">See
                All</a>
        </h3>
        <div class="grid grid-cols-4 gap-10 mt-5">
            @foreach($suggestProducts as $product)
                @include('fe.components.card-product',
['product'=>$product])
            @endforeach
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('fe/light-slider/js/lightslider.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('fe/light-slider/css/lightslider.min.css')}}"/>
    <script>
        $(document).ready(function () {
            let variantInfos = [];
            $('.btn-qyt-plus').click(function () {
                let quantity = $('#quantity').val();
                quantity++;
                $('#quantity').val(quantity);
            });

            $('.btn-qyt-minus').click(function () {
                let quantity = $('#quantity').val();
                if (quantity > 1) {
                    quantity--;
                    $('#quantity').val(quantity);
                }
            });

            $('.btn-select-variant').click(function () {
                $(this).parent().find('.btn-select-variant').removeClass('active-select-variant');
                $(this).addClass('active-select-variant');
            });

            if ($('#lightSlider').length) {
                $("#lightSlider").lightSlider({
                    gallery: true,
                    item: 1,
                    loop: true,
                    slideMargin: 0,
                    thumbItem: 9
                });
            }

            $('#btn-add-to-cart').click(function () {

                let quantity = $('#quantity').val();
                //let variantValues = ["Đen", "Đỏ"];
                variantInfos = [];
                $('.active-select-variant').each(function () {
                    const variantId = $(this).attr('variant-id');
                    const variantValue = $(this).attr('variant-value');
                    const variantValueId = $(this).attr('variant-value-id');
                    variantInfos.push({
                        'variant_id': variantId,
                        'variant_value': variantValue,
                        'variant_value_id':variantValueId
                    });
                });

                //console.log(variantInfos);
                //return;
                $.ajax({
                    url: '{{route('api.cart.add')}}',
                    type: 'POST',
                    data: {
                        id: {{\Illuminate\Support\Facades\Request::segment(2)}},
                        quantity: quantity,
                        variant_infos: variantInfos
                    },
                    success: function (data) {
                        alert('Thêm vào giỏ hàng thành công');
                        getTotalItems(API_TOTAL_ITEMS_IN_CART);
                    }
                })
            })
        })
    </script>

    <style>
        .active-select-variant {
            background: #0c84ff;
            color: white
        }
    </style>
@endsection


