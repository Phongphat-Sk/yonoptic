<x-app-layout>

    <script>
        function handleCategoryChange(selectElement) {
            var selectedCategoryId = selectElement.value;

            if (selectedCategoryId) {
                var dynamicLink = "{{ route('productdetail', ['id' => '/']) }}/" + selectedCategoryId;
                window.location.href = dynamicLink;
            }
        }
    </script>


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
                <div class="px-6 pt-2 text-blue-900 flex flex-col space-y-2">
                    <form id="categoryForm" action="{{ route('productdetail', ['id' => '/']) }}" method="GET">
                        @csrf
                        <select name="category" style="border-radius: .5rem; font-size:14px" onchange="handleCategoryChange(this)">
                            <option value="" selected disabled>Select Category</option>
                            @foreach ($products as $category)
                                <option value="{{ $category->id }}">{{ $category->shape }}</option>
                            @endforeach
                        </select>
                    </form>
                </div>



                {{-- สี --}}
                <div class="pt-6 px-6 text-blue-900 flex" style="font-size: 15px;">
                    {{ 'สี | Color' }}
                </div>
                <div class="px-6 pt-2 text-blue-900 flex">
                    <form id="categoryForm" action="{{ route('productdetail', ['id' => '/']) }}" method="GET">
                        @csrf
                        <select name="category" style="border-radius: .5rem; font-size:14px" onchange="handleCategoryChange(this)">
                            <option value="" selected disabled>Select Category</option>
                            @foreach ($products as $category)
                                <option value="{{ $category->id }}">{{ $category->color }}</option>
                            @endforeach
                        </select>
                    </form>
                </div>

                {{-- วัสดุ --}}
                <div class="pt-6 px-6 text-blue-900 flex" style="font-size: 15px;">
                    {{ 'วัสดุ | Material' }}
                </div>
                <div class="px-6 pt-2 text-blue-900 flex">
                    <form id="categoryForm" action="{{ route('productdetail', ['id' => '/']) }}" method="GET">
                        @csrf
                        <select name="category" style="border-radius: .5rem; font-size:14px" onchange="handleCategoryChange(this)">
                            <option value="" selected disabled>Select Category</option>
                            @foreach ($products as $category)
                                <option value="{{ $category->id }}">{{ $category->meterial }}</option>
                            @endforeach
                        </select>
                    </form>
                </div>

                {{-- ประเภท --}}
                <div class="pt-6 px-6 text-blue-900 flex" style="font-size: 15px;">
                    {{ 'ประเภท | Type' }}
                </div>
                <div class="px-6 pt-2 text-blue-900 flex">
                    <form id="categoryForm" action="{{ route('productdetail', ['id' => '/']) }}" method="GET">
                        @csrf
                        <select name="category" style="border-radius: .5rem; font-size:14px" onchange="handleCategoryChange(this)">
                            <option value="" selected disabled>Select Category</option>
                            @foreach ($products as $category)
                                <option value="{{ $category->id }}">{{ $category->type }}</option>
                            @endforeach
                        </select>
                    </form>
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

            <div class="mb-10"></div>

        </div>
    </div>

</x-app-layout>
 