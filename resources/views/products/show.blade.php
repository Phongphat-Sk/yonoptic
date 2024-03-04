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

            <div class="bg-white" style="margin:0;border-radius:20px">
                  <div class="card-header px-10 " style="margin-top:0px; height:50px; font-size: 25px">Product detail</div>
                  <div class="card-body px-10">
                        <div class="card-body" style="margin-top:-5%">
                        <h5 class="card-title">Name : {{ $products->name }}</h5>
                        <p class="card-text">Price : {{ $products->price }}</p>
                        <p class="card-text">Details : {{ $products->details }}</p>
                        <p class="card-text mt-7">Picture : {{ $products->picture }}</p>
                        <p class="card-text">Details : {{ $products->shape }}</p>
                        <p class="card-text">Details : {{ $products->color }}</p>
                        <p class="card-text">Details : {{ $products->material }}</p>
                        <p class="card-text">Details : {{ $products->type }}</p>
                   </div>
                    </hr>
                  </div>
            </div>


        </div>

    </div>



</x-app-layout>

  

  
