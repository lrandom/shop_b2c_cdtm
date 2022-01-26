@extends('fe.layout')
@section('content')
    <div>
        <div class="grid grid-cols-5 border p-5">
            <div class="font-bold">Product</div>
            <div class="font-bold">Price/1 Items</div>
            <div class="font-bold">Quantity</div>
            <div class="font-bold">Total Price</div>
            <div class="font-bold">Action</div>
        </div>

        <div class="grid grid-cols-5 p-5 border" id="cart-table-info">


        </div>
    </div>

@endsection

@section('script')
    <script>
        // $(document).ready(function () {
        const loadCart = () => {
            $.ajax({
                url: '{{route('api.cart.get')}}',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    let cart = data.cart;
                    $('#cart-table-info').empty();
                    for (let i = 0; i < cart.length; i++) {
                        const item = cart[i];
                        $('#cart-table-info').append(`

                                <div class="border-b border-gray-300 py-5">
                                    ${item.name}
                                </div>

                                <div class="border-b border-gray-300 py-5">
                                    ${item.price}
                                </div>

                                <div class="border-b border-gray-300 py-5">

                                    <div class="flex items-center gap-2">
                        <button class="text-3xl">
<i class="bi bi-plus"></i>
</button>
                <input type="number" value="${item.quantity}" class="w-16 border border-gray-400 rounded p-2 input-quantity"/>
<button class="text-3xl">
<i class="bi bi-dash"></i>
</button>
</div>
                                </div>

                                <div class="border-b border-gray-300 py-5">
                                    ${item.price * item.quantity}
                                </div>

                                <div class="border-b border-gray-300 py-5 btn-delete" data-id="${item.id}">
                                    <button><i class="bi bi-trash"></i> Delete</button>
                                </div>
`);
                    }

                    $('.btn-delete').click(function () {
                        const deleteId = $(this).attr('data-id');
                        $.ajax({
                            url: "{{ route('api.cart.delete')}}" + "?id=" + deleteId,
                            success: function () {
                                loadCart();
                            }
                        })
                    });
                }
            })
        }
        // });

        loadCart();
    </script>
@endsection
