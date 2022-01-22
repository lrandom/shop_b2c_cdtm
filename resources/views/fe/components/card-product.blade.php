<div class="shadow">
    <a href="{{route('fe.product.detail',['id'=>$product->id])}}" class="block">
        <div class="relative">

            @if($product->preview)
                <img src="{{asset($product->preview->path)}}" class="object-cover h-64 w-full"/>
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
    </a>
</div>
