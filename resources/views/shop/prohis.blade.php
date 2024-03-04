@isset($products)
@foreach($products as $product)
<div class="bg-gray-100 ตำแหน่งข้อมูลวางทับได้เลย" style="width: 100%;">
<div class="p-2 text-black flex my-3 pr-10" style="justify-content:space-between; border:1px solid #333;height:100% ;width:100%; font-size: 20px;">
    <div class="m-2 flex">
        <svg style="width:100%; height:100%;" >
            <a href="/productdetail">
                <image href="{{ asset('pic/แว่น.jpg') }}" width='100%' height='100%'/>
            </a>
        </svg>
    </div>

    <div class="flex flex-col my-auto mx-10 py-5">

        <div class="flex justify-center">
            {{'ชื่อสินค้า:'}}
            {{ $product->name }}
        </div>

        <div class="flex justify-center ">
        {{ 'ราคา: ' }}
        {{ $product->price . '$'}}
        </div>

        <div class="flex justify-center ">
        {{ 'คำอธิบาย: ' }}
        {{ $product->details }}
        </div>

        <div class="flex justify-center">
            {{ 'สี: ' }}
            {{ $product->color }}
        </div>

        <div class="flex justify-center">
            {{ 'รูปร่าง: ' }}
            {{ $product->shape }}
        </div>

        <div class="flex justify-center">
            {{ 'ประเภท: ' }}
            {{ $product->type }}
        </div>

        <div class="flex justify-center">
            {{ 'วัสดุ: ' }}
            {{ $product->metherial }}
        </div>



    </div>

</div>
</div>
@endforeach
@endisset