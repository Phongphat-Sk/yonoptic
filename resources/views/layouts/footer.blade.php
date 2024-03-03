<nav x-data="{ open: false }" class="bg-blue-200 border-b border-gray-100 bd-footer py-2 py-md-5">

    <footer class="bd-footer">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Logo -->
    <div class="shrink-0 flex items-center justify-center" style="justify-content: space-between">
        <a href="{{ route('home') }}">
            <x-application-logo class="block w-auto text-gray-800" style="height: 200px" />
        </a>

    <div class="">
        <div class="flex text-black font-semibold text-l">
            {{ 'Stay Contacted :' }}
        </div>
        <div class="flex mt-2 max-w-xl">
            <svg viewBox="0 0 20 20" class="mt-4">
                <a href="https://facebook.com">
                    <image href="{{ asset('pic/fb.png') }}" width='70%' height='70%'/>
                </a>
            </svg>
            <svg viewBox="0 0 20 20" >
                <a href="https://tiktok.com">
                    <image href="{{ asset('pic/tiktok.png') }}" width='100%' height='100%'/>
                </a>
            </svg>
            <svg viewBox="0 0 20 20" >
                <a href="https://line.com">
                    <image href="{{ asset('pic/line.png') }}" width='100%' height='100%'/>
                </a>
            </svg>
        </div>
        <div class="flex text-black font-semibold text-l">
            {{ 'kopcharoen@gmail.com' }}
        </div>

    </div>

    </div>

    </div>


    </footer>

</nav>
