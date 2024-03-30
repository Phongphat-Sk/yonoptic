<x-app-layout>
    <x-slot name="admin">
    </x-slot>

    <div class="bg-blue-100 flex pb-10 max-w-7xl mx-auto mt-10 pb-20" style="height: 150vh; border-radius:20px">

    <nav x-data="{ open: false }" class="bg-blue-300 border-b border-gray-100 w-60 mt-10 mx-10" style="height: 100%; border-radius:15px">
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
            <div :class="{'block': open, 'hidden': !open}" class="hidden sm:flex flex-col items-start space-y-5 px-10" style="color:blue" >
                <!-- Your existing navigation links -->
                {{ __('menu') }}
                <div class="div"></div>
                <div class="" style="width:100%; font-size:18px; color:black;">
                    <a class="hover:text-gray-500" href="admin">
                        {{ __('Dashboard') }}
                    </a>
                </div>
                <div class="" style="width:100%; font-size:18px; color:black">
                    <a class="hover:text-gray-500" href="product">
                        {{ __('Product') }}
                    </a>
                </div>
                <div class="" style="width:100%; font-size:18px; color:black">
                    <a class="hover:text-gray-500" href="admin">
                        {{ __('Settings') }}
                    </a>
                </div>

                <!-- Add other navigation links as needed -->
            </div>
        </div>
    </nav>

    {{-- total product --}}
    <div class="rightbox flex flex-col mx-auto w-full">
        <div class="flex mx-20 mt-20" style="font-size:25px; color:gray">{{'Hello'}}</div>
        <div class="flex mx-20 mb-10" style="font-size: 45px; font-weight:bold">{{ Auth::user()->name }}</div>
        <div class="bg-blue-200 flex mx-auto my-10" style="width:90%; height:250px; border-radius:20px;">
            <div class="m-auto" style="font-size: 30px; font-weight:bold; ">
                {{'Welcome to Admin board'}}
            </div>

        </div>
        
        <div class="flex mx-auto w-full">
            <div class="bg-gray-100 flex flex-col m-auto p-5" style="width:40%; height:200px; border-radius:20px">
                <div class="" style="font-size: 20px; font-weight:bold">
                    {{'Total Product '}}
                </div>
                <div class="mt-6 flex text-blue-500" style="font-size: 30px; font-weight:bold; justify-content:space-between">
                    {{'0'}}
                    {{'ชิ้น'}}
                </div>
            </div>
            <div class="bg-gray-100 flex flex-col m-auto p-5" style="width:40%; height:200px; border-radius:20px">
                <div class="" style="font-size: 20px; font-weight:bold">
                    {{'Total Price '}}
                </div>
                <div class="mt-6 flex text-blue-500" style="font-size: 30px; font-weight:bold; justify-content:space-between">
                    {{'$'}}
                    {{'0'}}
                </div>
            </div>
        </div>
    </div>

    </div>

    <style>
        /* เส้น */
        .line {
            background-color:gray;
            width: 100%;
            height: 1px; /* ทำให้เท่ากับความสูงของหน้าเว็บ */
        }
        .hey:hover{
            color: gray;
        }
    </style>



</x-app-layout>
