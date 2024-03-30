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
            <div class="mx-8" style="width:50%;font-size: 35px">
                <div class="text" style="width:40%">
                    {{ 'CONTACT US' }}
                    <div class="mt-3 line bg-gray-500"></div>
                </div>
                <div class="bg-blue-200 h-auto mt-10 p-5" style="font-size:20px; border-radius:10px; width: 80%">
                    <div class="flex justify-between px-10">
                        <div class="text-blue-700">{{'Mobile'}}</div>
                        <div class="text-blue-400">{{'080 565 6636'}}</div>
                    </div>
                    <div class="mt-5 flex justify-between px-10">
                        <div class="text-blue-700">{{'Email'}}</div>
                        <div class="text-blue-400">{{'yonoptic@gmail.com'}}</div>
                    </div>
                    <div class="mt-5 flex justify-between px-10">
                        <div class="text-blue-700">{{'Facebook'}}</div>
                        <div class="text-blue-400">{{'ร้าน แว่นตาคุณยน '}}</div>
                    </div>
                  
                </div>
                <div class="mt-5 p-5 flex justify-center" style="font-size:25px; border-radius:10px; width: 80%">
                    <div class="flex flex-col justify-center">
                        <div class="text-blue-700 flex justify-center">{{'Operating Hours'}}</div>
                        <div class="mt-2 text-blue-400 flex justify-center" style="font-size: 20px">{{'09:30-18:00 (tuesday - Sunday)'}}</div>
                    </div>
                </div>

            </div>

            <div class="mx-8 mt-10" style="width:50%;">
                <div class="bg-blue-200 h-auto mt-10 px-2 py-8" style="font-size:25px; border-radius:10px; width: 80%; height:70%">
                    <div class="flex flex-col justify-center px-10">
                        <div class="text-blue-600">{{'Message Box'}}</div>
                        <input type="text" class="mt-5 bg-blue-100" style="border-radius: 5px; border:none" id="comment" placeholder="ฝากข้อความถึงเรา">
                    </div>
                    <a href="" class=" flex justify-center">
                        <button type="submit" class="bg-blue-700 mt-10 mx-auto h-10 text-white font-semibold  hover:bg-blue-500" style="font-size:18px;border-radius: 10px; width:50%">ส่ง</button>
                    </a>

                </div>

            </div>




        </div>
    </div>

</x-app-layout>

