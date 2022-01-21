@php
    $categories = \App\Models\Category::all();
@endphp

<nav class="flex justify-between items-center shadow"
     style="background: #d5d5d5">
    <div class="text-xl uppercase font-semibold  h-full">
        <a class=" hover:bg-black hover:text-white p-5 text-black inline-block h-full" href=""><i
                class="bi bi-house"></i></a>
        @foreach($categories as $cat)
            <a class="hover:bg-black hover:text-white p-5 inline-block h-full]
     <?php if (Request::segment(2) == $cat->id) {
                echo "bg-black text-white";
            } else {
                echo "text-black";
            } ?>"
               href="{{route('fe.category',['id'=>$cat->id])}}">{{$cat->name}}</a>
        @endforeach
    </div>

    <div class="flex items-center gap-2">
        <form action="{{route('fe.search')}}">
            <input type="search" name="q" class="shadow border border-1 border-gray-400 p-2 w-64"
                   placeholder="search..."/>
        </form>

        <div class="text-xl">
            <a class=" hover:bg-black hover:text-white px-3 py-5 text-black inline-block h-full" href="">
                <i class="bi bi-heart"></i></a>
            <a class=" hover:bg-black hover:text-white px-3 py-5  text-black inline-block h-full" href="">
                <i class="bi bi-person"></i></a>
            <a class=" hover:bg-black hover:text-white px-3 py-5  text-black inline-block h-full" href="">
                <i class="bi bi-cart"></i></a>
        </div>
    </div>
</nav>
