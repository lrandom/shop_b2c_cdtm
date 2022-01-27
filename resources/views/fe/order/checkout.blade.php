@extends('fe.layout')
@section('content')
    <div class="border mx-auto md:w-2/3 w-full shadow rounded p-10 space-y-5">
        <h3 class="text-xl  text-left font-semibold">Xác nhận đặt hàng</h3>
        <div>
            <ul>
                <li><strong>SubTotal: </strong>
                    <span class="sub-total"></span>

                </li>
                <li><strong>Tax:</strong>
                    <span class="tax"></span>
                </li>
                <li><strong>Total Price:</strong>
                    <span class="total-price"></span>
                </li>
            </ul>

        </div>

        <hr>

        <div>
            <h4 class="text-lg font-semibold text-left">Thông tin mua hàng</h4>
            <form class="space-y-5 mt-2">
                <div>
                    <label for="" class="block font-semibold">Full name</label>
                    <input class="border border-black p-2 w-full" type="text" name="full_name"/>
                </div>

                <div>
                    <label for="" class="block font-semibold">Phone</label>
                    <input class=" border border-black p-2 w-full" type="text" name="phone"/>
                </div>

                <div>
                    <label for="" class="block font-semibold">Address</label>
                    <input class=" border border-black p-2 w-full" type="text" name="address"/>
                </div>

                <div>
                    <label for="" class="block font-semibold">Note</label>
                    <textarea class=" border border-black p-2 w-full" name="note"></textarea>
                </div>

                <div>
                    <submit href="" class="bg-black text-white font-bold px-5 py-3">
                        Make Order
                    </submit>
                </div>
            </form>
        </div>

    </div>

@endsection
