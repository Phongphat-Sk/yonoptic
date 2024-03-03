<x-app-layout>

    <style>
        /* เส้น */
        .line {
            width: 1px;
            height: 100vh; /* ทำให้เท่ากับความสูงของหน้าเว็บ */
        }
    </style>
    {{-- แทบค้นหา ซ้าย --}}
    <div class="py-5 pt-10 bg-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-9 flex">
            {{-- กล่องพื้นหลัง --}}
            <div class=" pb-10 pr-3 " style="height: 100%; border-radius:1rem">
                {{-- ทรง --}}
                <div class="px-6 pt-6 text-blue-900 flex" style="font-size: 15px;">
                    {{ 'ทรงแว่น | Shape' }}
                </div>
                <div class="px-6 pt-2 text-blue-900 flex">
                    <select class="h-10" style="border-radius: .5rem; font-size:14px" onchange="this.form.submit()">
                        <option value="">กรุณาเลือก</option>
                                                <option value="34">Adidas</option>
                                                <option value="67">Bausch &amp; Lomb</option>
                                                <option value="16">Beverly Hills Polo Club : BHPC</option>
                                                <option value="39" >Bossini</option>
                    </select>
                </div>

                {{-- สี --}}
                <div class="pt-6 px-6 text-blue-900 flex" style="font-size: 15px;">
                    {{ 'สี | Color' }}
                </div>
                <div class="px-6 pt-2 text-blue-900 flex">
                    <select class="h-10" style="border-radius: .5rem; font-size:14px" onchange="this.form.submit()">
                        <option value="">กรุณาเลือก</option>
                                                <option value="34">Adidas</option>
                                                <option value="67">Bausch &amp; Lomb</option>
                                                <option value="16">Beverly Hills Polo Club : BHPC</option>
                                                <option value="39" >Bossini</option>
                    </select>
                </div>

                {{-- วัสดุ --}}
                <div class="pt-6 px-6 text-blue-900 flex" style="font-size: 15px;">
                    {{ 'วัสดุ | Material' }}
                </div>
                <div class="px-6 pt-2 text-blue-900 flex">
                    <select class="h-10" style="border-radius: .5rem; font-size:14px" onchange="this.form.submit()">
                        <option value="">กรุณาเลือก</option>
                                                <option value="34">Adidas</option>
                                                <option value="67">Bausch &amp; Lomb</option>
                                                <option value="16">Beverly Hills Polo Club : BHPC</option>
                                                <option value="39">Bossini</option>
                    </select>
                </div>

                {{-- ประเภท --}}
                <div class="pt-6 px-6 text-blue-900 flex" style="font-size: 15px;">
                    {{ 'ประเภท | Type' }}
                </div>
                <div class="px-6 pt-2 text-blue-900 flex">
                    <select class="h-10" style="border-radius: .5rem; font-size:14px" onchange="this.form.submit()">
                        <option value="">กรุณาเลือก</option>
                                                <option value="34">Adidas</option>
                                                <option value="67">Bausch &amp; Lomb</option>
                                                <option value="16">Beverly Hills Polo Club : BHPC</option>
                                                <option value="39">Bossini</option>
                    </select>
                </div>
            </div>
            <div class="line bg-blue-900"></div>
            <div class="max-w-7xl">
                <div class="max-w-7xl sm:px-6 lg:px-8">
                    {{-- กล่องพื้นหลัง --}}
                    <div class="overflow-hidden p-7 flex flex-wrap" style=" border-radius:.5rem">
                        {{-- ข้อความ/รูป --}}
                        <div>
                            @include('shop.product')
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-10"></div>

        </div>
    </div>

</x-app-layout>

