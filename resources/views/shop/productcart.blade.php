@foreach($products as $product)
<div class="p-2 text-black flex my-3 pr-10" style="justify-content:space-between; border:1px solid #333 ;width:90%; font-size: 20px;">
    <div class="m-2 flex">
        <svg style="width:100%; height:100%;" >
            <a href="/productdetail">
                <image href="{{ asset('pic/แว่น.jpg') }}" width='100%' height='100%'/>
            </a>
        </svg>
    </div>

    <div class="flex flex-col my-auto">

        <div class="flex justify-center">
            {{ $product->name }}
        </div>

        <div class="flex justify-center text-red-500">
        {{ 'ราคาสินค้า ' . $product->price }}
        </div>

        <div class="flex justify-center text-red-500">
            {{ $product->details }}
        </div>

    </div>

    <button class="bg-red-500 h-10 my-auto hover:bg-red-400" style="width: 20%">Delete</button>


</div>
@endforeach