
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

            <div class="col-11 bg-gray-100" style="overflow:hidden; border-radius: 20px">
                <div class="card">
                    <div class="card-header bg-white p-3" style="font-size: 25px">
                        <h2>เพิ่มสินค้า</h2>
                    </div>
                    <div class="card-body space-y-5 p-10">
                        <a href="{{ url('/product/create') }}" class="" title="Add New Student">
                            <button class="bg-green-500 w-40 h-10 text-black hover:bg-green-300" style="border-radius: 20px">
                                {{'Add New Product'}}
                            </button>

                        </a>

                        <div class="table-responsive mt-5">
                            <table class="table">
                                <thead >
                                    <tr >
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Details</th>
                                        <th>Picture</th>
                                        <th>Shape</th>
                                        <th>Color</th>
                                        <th>Material</th>
                                        <th>Type</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->details }}</td>
                                            <td>{{ $item->picture }}</td>
                                            <td>{{ $item->shape }}</td>
                                            <td>{{ $item->color }}</td>
                                            <td>{{ $item->material }}</td>
                                            <td>{{ $item->type }}</td>
                                            <td class="px-6">
                                                <a
                                                    href="{{ url('/product/' . $item->id) }}"
                                                    title="View Student"><button class="bg-blue-400 p-2 hover:bg-blue-300 px-2 mx-1"><i
                                                            class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                <a
                                                    href="{{ url('/product/' . $item->id . '/edit') }}"
                                                    title="Edit Student"><button class="bg-yellow-400 p-2 hover:bg-yellow-300 px-2 mx-1"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Edit</button></a>

                                                <form method="POST"
                                                    action="{{ url('/product' . '/' . $item->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button
                                                        type="submit" class="bg-red-400 p-2 hover:bg-red-300 px-2 mx-1"
                                                        title="Delete Student" onclick="return confirm("Confirm
                                                        delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        Delete</button>
                                                    </form>
                                                </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
        </div>

    </div>



</x-app-layout>

