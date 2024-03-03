<div class="flex flex-wrap">
    @foreach($products as $product)
        <div class="p-2 text-black flex-col mx-5 my-3" style="border:1px solid #333; width:200px; font-size: 15px;">
            <div class="m-2 flex justify-center">
                <svg style="width:100%; height:100%;">
                    <a href="{{ route('productdetail', ['id' => $product->id]) }}">
                        <image href="{{ asset('pic/แว่น.jpg') }}" width='100%' height='100%'/>
                    </a>
                </svg>
            </div>

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
    @endforeach
</div>
