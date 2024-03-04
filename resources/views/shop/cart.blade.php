<x-app-layout>

    <style>
        .line {
            width: 100%;
            height: 1px;
        }
    </style>


    {{-- แทบค้นหา ซ้าย --}}
    <div class="py-5 pt-10 bg-white">
        <div class="max-w-7xl space-x-12 mx-auto sm:px-6 lg:px-9 flex">
            <div class="carttopic mx-8" style="width: 60% ;font-size: 35px">
                {{ 'Cart Summary' }}
                <div class="mt-3 line bg-gray-500"></div>
                @include('shop.productcart')
            </div>
            @isset($cart)
            <div class="mt-3 mx-8 carttopic text-right" style="width: 30% ;font-size: 20px">
                {{ 'CART TOTALS' }}
                <div class="mt-5 line bg-gray-400" ></div>
                {{-- subtotal --}}
                <div class="mt-5 text-left flex justify-between">
                    <div class="topic">
                        {{ 'Subtotal' }}
                    </div>
                    @foreach($cart as $item)
                    <div class="topic flex flex-col">
                        {{ $item['price'] }}
                    </div>
                    @endforeach
                    {{ 'THB' }}
                </div>
                <div class="mt-5 line bg-gray-400" ></div>

                {{-- shipping&changlocation --}}
                <div class="mt-5 text-left flex " style="">
                    <div class="topic mr-4">
                        {{ 'Shipping To' }}
                    </div>
                    <div class="topic">
                        {{ '*******' }}
                    </div>
                </div>
                {{-- change location ปุ่มแดง --}}
                <div class="text-red-500 text-left ml-4" style="font-size: 16px">
                    <a href="">
                        {{ 'Change location' }}
                    </a>
                </div>
                <div class="mt-10 line bg-gray-400" ></div>

                {{-- total --}}
                <div class="mt-5 text-left flex justify-between" style="">
                    <div class="topic" style="font-size: 25px">
                        <b>
                            {{ 'Total' }}
                        </b>
                    </div>
                    @foreach($cart as $item)
                    <div class="topic mt-1">
                        {{ $item['qty'] * $item['price'] }}
                    </div>
                    @endforeach
                    <div class="topic mt-1">
                        {{ 'THB' }}
                    </div>
                </div>
                <div class="mt-5 line bg-gray-400" ></div>
                <div class="mt-5 flex justify-center flex-col">
                    {{-- ปุ่ม --}}
                    <a href="" class=" flex justify-center">
                        <button class="bg-blue-700 mt-5 mx-auto h-14 text-white font-semibold  hover:bg-blue-500" style="border-radius: .1px; width:100%; font-weight:bold">Proceed to Checkout</button>
                    </a>
                    <a href="/" class=" flex justify-center">
                        <button class="bg-blue-700 mt-5 mx-auto h-14 text-white font-semibold  hover:bg-blue-500" style="border-radius: 25px; width:50%">กลับสู่หน้าหลัก</button>
                    </a>
                </div>
            </div>
            @endisset


            <div class="mb-10"></div>
        </div>
    </div>

</x-app-layout>

