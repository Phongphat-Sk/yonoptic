<x-app-layout>
    <x-slot name="admin">
    </x-slot>

    <div class="bg-blue-100 flex pb-10 max-w-7xl mx-auto mt-10 pb-20" style="height: 150vh; border-radius:20px">

        <nav x-data="{ open: false }" class="bg-blue-300 border-b border-gray-100 w-60 mt-10 mx-10"
            style="height: 100%; border-radius:15px">
            <!-- Primary Navigation Menu -->
            <div class="mx-auto flex flex-col">
                <div class="mx-auto flex flex-col">
                    <!-- Logo -->
                    <div class="mx-auto">
                        <a href="{{ route('home') }}">
                            <x-application-logo class="" style="height: 200px;" />
                        </a>
                    </div>
                </div>

                <!-- Navigation Links -->
                <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:flex flex-col items-start space-y-5 px-10" style="">
                    <!-- Your existing navigation links -->
                    {{ __('menu') }}
                    <div class="div"></div>
                    <div class="text-black" style="width:100%; font-size:18px; color:black;">
                        <a class="text-black hover:text-gray-500" href="admin">
                            {{ __('Dashboard') }}
                        </a>
                    </div>
                    <div class="text-black" style="width:100%; font-size:18px; color:black">
                        <a class="text-black hover:text-gray-500" href="product">
                            {{ __('Product') }}
                        </a>
                    </div>
                    <div class="text-black" style="width:100%; font-size:18px; color:black">
                        <a class="text-black hover:text-gray-500" style="border:none" href="admin">
                            {{ __('Settings') }}
                        </a>
                    </div>

                    <!-- Add other navigation links as needed -->
                </div>
            </div>
        </nav>

        {{-- กล่องขวา --}}
        <div class="rightbox flex flex-col mx-auto w-full pt-20 pr-10">

            <div class="bg-white p-10" style="margin:0;border-radius:20px">
                  <div class="card-header px-10 " style="margin-top:0px; height:50px; font-size: 25px">Create new product</div>
                  <div class="card-body px-10">
                      <form action="{{ url('product') }}" method="post" class="">
                        {!! csrf_field() !!}

                        <label style="">Name</label>
                        <input type="text" name="name" id="name" class="form-control ml-8 mb-4" style="width: 90%"required></br>
                        <label>Price</label></br>
                        <input type="text" name="price" id="price" class="form-control mb-4" style="width: 90%"required></br>
                        <label>Details</label></br>
                        <input type="text" name="details" id="details" class="form-control mb-4" style="width: 90%"required></br>
                        <label class="ml-8">Shape</label></br>
                        <input type="text" name="shape" id="shape" class="form-control mb-4" style="width: 90%"required></br>
                        <label class="ml-8">Color</label></br>
                        <input type="text" name="color" id="color" class="form-control mb-4" style="width: 90%"required></br>
                        <label class="ml-8">Material</label></br>
                        <input type="text" name="material" id="material" class="form-control mb-4" style="width: 90%"required></br>
                        <label class="ml-8">Type</label></br>
                        <input type="text" name="type" id="type" class="form-control mb-4" style="width: 90%"required></br>
                        <label class="ml-8">Picture</label></br>
                        <input type="file" name="picture" id="picture" class="form-control mb-4" style="width: 90%"required></br>
                        <input type="submit" value="Save" class="mt-10 bg-green-400 px-2 p3 cursor-pointer hover:bg-green-300" style="width:200px; border-radius:10px; height:30px; margin-left:-35px"></br>
                    </form>
                    
                  </div>
            </div>


        </div>

    </div>



</x-app-layout>
