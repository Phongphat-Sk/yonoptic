<x-app-layout>

    <style>
        .line {
            width: 100%;
            height: 1px;
        }
    </style>
    @php
        $totalPrice = 0;
    @endphp


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
                    <div class="topic flex flex-col">
                        @foreach($cart as $item)
                            <div class="price">
                                {{ $item['price'] }}
                            </div>
                        @endforeach
                    </div>
                    {{ 'THB' }}
                </div>
                <div class="mt-5 line bg-gray-400" ></div>

                {{-- total --}}
                <div class="mt-5 text-left flex justify-between" style="">
                    <div class="topic" style="font-size: 25px">
                        <b>
                            {{ 'Total' }}
                        </b>
                    </div>
                    @foreach($cart as $item)
                    @php
                            $totalPrice += $item['qty'] * $item['price'];
                    @endphp
                    @endforeach
                    <div class="topic mt-1">
                        {{ $totalPrice }}
                    </div>

                    <div class="topic mt-1">
                        {{ 'THB' }}
                    </div>
                </div>
                <div class="mt-5 line bg-gray-400" ></div>
                <div class="mt-5 flex justify-center flex-col">
                    {{-- ปุ่ม --}}
                    <form action="{{ route('checkout.process') }}" method="POST">
                        @csrf
                       <button type="submit" class="bg-blue-700 mt-5 mx-auto h-14 text-white font-semibold  hover:bg-blue-500" style="border-radius: .1px; width:100%; font-weight:bold">Proceed to Checkout</button>
                    </form>

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

