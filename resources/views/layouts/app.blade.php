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

    <body class="font-sans antialiased" >
            <!-- ส่วนที่ 2 -->
    <canvas class="snow" id="snow" width="1848" height="515"></canvas>
            <!-- ส่วนที่ 2 -->

        <div class="min-h-screen bg-white">
            <!-- Page Heading -->
            @if (isset($dash))
                <header class="bg-white shadow" style="height:120px">
                    <div>
                        @if (!Route::has('login'))
                        <div class="sm:top-0 p-2 pl-10 text-left bg-blue-900">
                                @auth
                                    <a href="{{ url('/home') }}" class="font-semibold text-white hover:text-blue-400 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="font-semibold text-white hover:text-blue-400 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-white hover:text-blue-400 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                    @endif
                                @endauth
                        </div>
                        @else
                        @endif
                        </div>
                    <div class="flex justify-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="" style="margin-top:-15%; height: 200px;" />
                    </a>
                    </div>
                </header>
                @include('layouts.navigation')
            @elseif(auth()->check() && auth()->user()->usertype === 'admin')
                @include('admin.layouts')
            @else
                @include('layouts.navigation2')
            @endif



            <!-- Page Content -->
            <main>
                {{ $slot }}
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
    <div class="mb-20"></div>
    <footer>
        <div>
            @include('layouts.footer')
        </div>
    </footer>
</html>
