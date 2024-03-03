<x-app-layout>
    <x-slot name="dash">
    </x-slot>

    <x-slot name='logo'>
    </x-slot>



    <div class="py-5 pt-10 bg-white">
        <style>
        @keyframes slideLeft {0% {transform: translateX(0);}100% {transform: translateX(-100%);}}
        .slide-left {animation: slideLeft 10s linear infinite;}
        .image-container {overflow: hidden; position: relative; width: 100%; }
        </style>
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8" >
            {{-- กล่องพื้นหลัง --}}
                {{-- ข้อความ/รูป --}}
                <div class="p-6 text-black flex justify-center" style="font-size: 40px;">
                    <img src="https://www.topcharoen.co.th/content/images/slideshow/0912221662952658.jpg" class="slide-left">
                    <img src="https://www.topcharoen.co.th/content/images/slideshow/0901231693553891.jpg"" class="slide-left">
                    <img src="https://www.topcharoen.co.th/content/images/slideshow/0912221662952658.jpg" class="slide-left">
                    <img src="https://www.topcharoen.co.th/content/images/slideshow/0901231693553891.jpg"" class="slide-left">


                </div>
        </div>
    </div>


    {{-- ทางลัดอีเวนท์ --}}
    <div class="bg-white">
        <div class="max-w-6xl mx-auto sm:px-6 flex ">
            <a href="shop"style="height: 250px; width:35%;">

                <div class=" " style="height: 100%; width:100%;">
                    <div class=" " style="height: 100%; width:100%;">
                        <img src="https://www.topcharoen.co.th/home/thumb/banner/0403181522746976th.jpg/610/405" style=" width: 100%; height: 100%;">
                        <div class="text-blue-400 ml-5" style="font-size: 25px; font-weight:bold; margin-top:-60%;">{{'FRAME'}}</div>
                        <div class="text-white ml-5" style="font-size: 25px; font-weight:bold; ">{{'COLLECTION'}}</div>
                    </div>
                </div>
            </a>

            <a href="shop" style="height: 250px; width:35%;">
                <div class="" style="height: 100%; width:100%">
                    <div class=" " style="height: 100%; width:100%;">
                        <img src="https://www.topcharoen.co.th/home/thumb/banner/0403181522747452th.jpg/610/405" style=" width: 100%; height: 100%;">
                        <div class="text-blue-400 ml-5" style="font-size: 25px; font-weight:bold; margin-top:-60%;">{{'LENS'}}</div>
                        <div class="text-white ml-5" style="font-size: 25px; font-weight:bold; ">{{'COLLECTION'}}</div>
                    </div>
                </div>          
            </a>
            
            <a href="shop " style="height: 250px; width:35%;">
                <div class=" " style="height: 100%; width:100%;">
                    <div class=" " style="height: 100%; width:100%;">
                        <img src="https://www.topcharoen.co.th/home/thumb/banner/0125181516869997th.jpg/610/405" style=" width: 100%; height: 100%;">
                        <div class="text-blue-400 ml-5" style="font-size: 25px; font-weight:bold; margin-top:-60%;">{{'CONTACT LENS'}}</div>
                        <div class="text-white ml-5" style="font-size: 25px; font-weight:bold; ">{{'COLLECTION'}}</div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    {{-- รูปโฆษณาชวนซื้อ --}}
    <div class="py-5 bg-white mt-10">
        <div class="max-w-5xl mx-auto sm:px-6 flex space-x-5">

        <div class="hello" style="height: 100%; width:50%">
            {{-- คำอธิบายรูป --}}
            <div class=" overflow-hidden  " style="height: 200px;">
                {{-- ข้อความ/รูป --}}
                <div class="px-6 py-2 text-black flex justify-center" style="font-size: 40px;">
                    <b>

                        {{ 'แว่นพร้อมเลนส์ปรับแสง  ! ' }}
                    </b>
                </div>
                <div class="px-6 text-black flex justify-center" style="font-size: 20px;">
                    {{ 'โปรสุดคุ้ม! แว่นตาแบรนด์เนม 16 รุ่น พร้อมเลนส์ปรับแสงอัตโนมัติ' }}
                </div>
            </div>
            </div>

            {{-- กล่องพื้นหลัง --}}
            <div class="bg-gray-200 overflow-hidden shadow-sm " style="height: 250px; width:50%">
                {{-- ข้อความ/รูป --}}
                <div class=" text-black flex justify-center" style="font-size: 25px; height:100%">
                    <img src="https://topcharoen.co.th/content/images/promotion/0503181525353150.jpg""  >
                </div>
            </div>


        </div>
    </div>

    {{-- รูปที่มีปุ่มพาเข้าร้าน --}}
    <div class="py-5 bg-white mt-10">
        <div class="max-w-5xl mx-auto sm:px-6 flex space-x-5">
            {{-- กล่องพื้นหลัง --}}
            <div class="bg-gray-200 overflow-hidden shadow-sm " style="height: 250px; width:50%">
                {{-- ข้อความ/รูป --}}
                <div class=" text-black flex justify-center" style="font-size: 25px; height:100%">
                    <img src="https://topcharoen.co.th/content/images/promotion/1120181542699299.jpg""  >
                </div>
            </div>
            <div class="hello" style="height: 100%; width:50%">

            {{-- คำอธิบายรูป --}}
            <div class=" overflow-hidden  " style="height: 200px;">
                {{-- ข้อความ/รูป --}}
                <div class="px-6 py-2 text-black flex justify-center" style="font-size: 40px;">
                    <b>

                        {{ 'ซื้อคู่ถูกกว่า! ' }}
                    </b>
                </div>
                <div class="px-6 text-black flex justify-center" style="font-size: 20px;">
                    {{ 'จะซื้อฝากเพื่อนก็ดี ซื้อให้แฟนก็เลิฟ ซื้อให้ลูกก็เริ่ดดด มีทั้งของเด็กและผู้ใหญ่ รีบด่วนนนนน 16-25 พ.ย. 61 เท่านั้น' }}
                </div>
            </div>
            {{-- ปุ่ม --}}
            <a href="shop" class=" flex justify-center">
                <button class="bg-green-500 mt-5 mx-auto h-10 font-semibold  hover:bg-green-400" style="width:60%; border-radius: 5px;">SHOP</button>
            </a>
            </div>

        </div>
    </div>

    <div class="mb-20"></div>



</x-app-layout>
