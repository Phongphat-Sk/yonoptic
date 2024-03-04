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
            <div class="carttopic mx-8" style="width: 100% ;font-size: 35px">
                {{ 'Order History' }}
                <div class="mt-3 line bg-gray-500 mb-10"></div>
                <div class="bg-green-500 ตำแหน่งข้อมูลวางทับได้เลย" style="width: 100%; height:250px"></div>
            </div>


            <div class="mb-10"></div>

        </div>
    </div>

</x-app-layout>