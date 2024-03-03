<x-app-layout>

    {{-- รูปที่มีปุ่มพาเข้าร้าน --}}
    <div class="py-5 bg-white mt-10">
        <div class="max-w-5xl mx-auto sm:px-6 flex space-x-5">
            {{-- กล่องพื้นหลัง --}}
            <div class="p-2 bg-brown-300 text-black flex-col mx-5 my-3" style="border:1px solid #333 ;width:300px; height:300px; font-size: 15px;">
                <div class="flex justify-center" style="width:100%; height:100%;">
                    <svg style="width:100%; height:100%;" >
                        <a href="">
                            <image href="{{ asset('pic/แว่น.jpg') }}" width='100%' height='100%'/>
                        </a>
                    </svg>
                </div>
            </div>


            {{-- คำอธิบายรูป --}}
            <div class="shadow-sm " style="width:500px">
                {{-- ข้อความ/รูป --}}
                <div class="pt-2 px-2 text-black" style="font-size: 25px;">
                    {{ 'Name product' }}
                </div>
                <div class="pt-1 px-2 text-gray-300" style="font-size: 15px;">
                    {{ 'product id:' }}
                </div>
                <div class="pt-2 px-2 text-black" style="font-size: 20px;">
                    {{ 'xxxx THB' }}
                </div>
                {{-- สี --}}
                <div class="pt-2 px-2 text-black flex" style="font-size: 17px;">
                    {{ 'สี | Color' }}
                </div>
                <div class="px-2 pt-2 text-blue-900 flex">
                    <select class="h-10" style="border-radius: .5rem; font-size:14px; border:.5px gray solid" onchange="this.form.submit()">
                        <option value="">กรุณาเลือก</option>
                                                <option value="34">Adidas</option>
                                                <option value="67">Bausch &amp; Lomb</option>
                                                <option value="16">Beverly Hills Polo Club : BHPC</option>
                                                <option value="39" >Bossini</option>
                    </select>
                </div>
                <div class="pt-6 px-2 text-black flex flex-wrap" style="font-size: 20px; width:50%">
                    {{ 'รายละเอียดสินค้า xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx xxxxxxxxxxxxxxx' }}
                </div>
                <div class="mt-5 flex justify-center flex-col">
                {{-- ปุ่ม --}}
                <a href="" class=" flex justify-center">
                    <button class="bg-blue-600 mt-5 mx-auto h-10 font-semibold  hover:bg-blue-500" style="border-radius: .1px; width:100%">Add to cart</button>
                </a>
                <a href="cart" class=" flex justify-center">
                    <button class="bg-blue-300 mt-2 mx-auto h-10 font-semibold  hover:bg-blue-200" style="border-radius: .1px; width:100%">Buy now</button>
                </a>
                </div>
            </div>



        </div>
    </div>

    <div class="mb-20"></div>

</x-app-layout>
