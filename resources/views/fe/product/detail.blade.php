@extends('fe.layout')
@section('content')
    <div class="space-y-2">
        <div class="grid md:grid-cols-2 gap-10">
            <div>
                <!--TRÌNH XEM ẢNH-->
                <figure>
                    <img class="w-full"
                         src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/41df245f-a1e5-4c6a-9c73-bdb0617202f1/court-vision-low-shoes-MRkRPF.png"/>
                </figure>


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

                                ?>
                                @if(isset($variant))
                                    <div>{{$variant->name}}</div>
                                @endif
                                @foreach($variantValue as $variantValue1)
                                    <div class="border px-5 h-10 flex items-center justify-center cursor-pointer">
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
                            <div class="text-xl pl-10 cursor-pointer">+</div>
                            <input type="number" value="1" id="quantity" class="
                            my-2
                         border-l
                         text-center border-r
                         ring-0
                         border-gray-300 w-12 h-8"/>
                            <div class="text-xl pr-10 cursor-pointer">-</div>
                        </div>
                    </div>


                    <div class="w-1/2 space-y-2">

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
    <script>
        $(document).ready(function () {
            $('#btn-add-to-cart').click(function () {
                let quantity = $('#quantity').val();
                let variantValues = ["Đen", "Đỏ"];
                /*   $('.variant-value').each(function () {
                       variantValues.push($(this).val());
                   });*/
                $.ajax({
                    url: '{{route('api.cart.add')}}',
                    type: 'POST',
                    data: {
                        id: {{\Illuminate\Support\Facades\Request::segment(2)}},
                        quantity: quantity,
                        variant_values: variantValues
                    },
                    success: function (data) {
                        alert('Thêm vào giỏ hàng thành công');
                        getTotalItems(API_TOTAL_ITEMS_IN_CART);
                    }
                })
            })
        })
    </script>
@endsection

