<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.logo', 'COPCHAROEN') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @props(['active'])

        @php
        $classes = ($active ?? false)
                    ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
                    : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-900 hover:text-blue-400 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
        @endphp
         <style>
        /* ส่วนที่ 1 */
        body {
            overflow-x: hidden;
        }
        .snow {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom:0;
            z-index: 2;
            pointer-events: none;
        }
        /* ส่วนที่ 1 */



    </style>
    </head>

<body>
        <!-- ส่วนที่ 2 -->
    <canvas class="snow" id="snow" width="1848" height="515"></canvas>
            <!-- ส่วนที่ 2 -->
    {{-- header & navbar --}}
    <div class=" bg-white">
        <header class="bg-white " style="height:150px">

            <div class="flex justify-center">
            <a href="{{ route('home') }}">
                <x-application-logo class="" style="margin-top:-10%; height: 200px;" />
            </a>
            </div>
        </header>
    @include('admin.layouts')

    <main>
    {{-- รูปแนะนำบนสุดเบิ้มๆ --}}
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
    </main>
    </div>
        <!-- ส่วนที่ 3 -->
        <script>
        (function () {

        var canvas, ctx;
        var points = [];
        var maxDist = 100;

        function init() {
            //Add on load scripts
            canvas = document.getElementById("snow");
            ctx = canvas.getContext("2d");
            resizeCanvas();
            pointFun();
            setInterval(pointFun, 20);
            window.addEventListener('resize', resizeCanvas, false);
        }
        //Particle constructor
        function point() {
            this.x = Math.random() * (canvas.width + maxDist) - (maxDist / 2);
            this.y = Math.random() * (canvas.height + maxDist) - (maxDist / 2);
            this.z = (Math.random() * 0.5) + 0.5;
            this.vx = ((Math.random() * 2) - 0.5) * this.z;
            this.vy = ((Math.random() * 1.5) + 1.5) * this.z;
            this.fill = "rgba(255,255,255," + ((0.4 * Math.random()) + 0.5) + ")";
            this.dia = ((Math.random() * 2.5) + 1.5) * this.z;
            points.push(this);
        }
        //Point generator
        function generatePoints(amount) {
            var temp;
            for (var i = 0; i < amount; i++) {
                temp = new point();
            };
            // console.log(points);
        }
        //Point drawer
        function draw(obj) {
            ctx.beginPath();
            ctx.strokeStyle = "transparent";
            ctx.fillStyle = obj.fill;
            ctx.arc(obj.x, obj.y, obj.dia, 0, 2 * Math.PI);
            ctx.closePath();
            ctx.stroke();
            ctx.fill();
        }
        //Updates point position values
        function update(obj) {
            obj.x += obj.vx;
            obj.y += obj.vy;
            if (obj.x > canvas.width + (maxDist / 2)) {
                obj.x = -(maxDist / 2);
            }
            else if (obj.xpos < -(maxDist / 2)) {
                obj.x = canvas.width + (maxDist / 2);
            }
            if (obj.y > canvas.height + (maxDist / 2)) {
                obj.y = -(maxDist / 2);
            }
            else if (obj.y < -(maxDist / 2)) {
                obj.y = canvas.height + (maxDist / 2);
            }
        }
        //
        function pointFun() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            for (var i = 0; i < points.length; i++) {
                draw(points[i]);
                update(points[i]);
            };
        }

        function resizeCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            points = [];
            generatePoints(window.innerWidth / 3);
            pointFun();
        }

        //Execute when DOM has loaded
        document.addEventListener('DOMContentLoaded', init, false);
    })();
    </script>
</body>

<footer>
        <div>
            @include('layouts.footer')
        </div>
</footer>
</html>
