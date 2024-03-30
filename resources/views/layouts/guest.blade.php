<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Yonoptic') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased flex justify-center" style="margin-bottom: 10%">
    <div class="flex space-x-12">

        <div class="min-h-screen space-x-10">
            <div>
                <a href="/">
                    <x-application-logo class="w-auto m-auto fill-current text-gray-500" style="height: 250px"/>
                </a>
                <div class=" p-5" style="height: 400px; width:450px; margin-top:-15%;">
                    <img src="pic/iconsm.png" class="m-auto" style=" width: 100%; height: 100%;">

                </div>
            </div>
        </div>

        <div class="flex flex-col pt-20 pl-20" style="width: 500px">
            <div class="mt-20 flex justify-center" style=" font-size: 30px; font-weight:bold">{{'Welcome back to the '}}</div>
            <div class="flex justify-center" style=" font-size: 30px; font-weight:bold">{{'CodeSquid community'}}</div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </div>

    </body>

    {{-- responเตรียมไว้ --}}
    {{-- <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
                    <x-application-logo class="w-auto fill-current text-gray-500" style="height: 250px"/>
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body> --}}
</html>
