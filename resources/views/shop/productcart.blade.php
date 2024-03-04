@isset($cart)
@foreach($cart as $item)
<div class="p-2 text-black flex my-3 pr-10" style="justify-content:space-between; border:1px solid #333 ;width:90%; font-size: 20px;">
    <div class="m-2 flex">
        <svg style="width:100%; height:100%;" >
            <a href="/productdetail">
                <image href="{{ asset('pic/แว่น.jpg') }}" width='100%' height='100%'/>
            </a>
        </svg>
    </div>

    <div class="flex flex-col my-auto">

        <div class="flex justify-center">
            {{ $item['name'] }}
        </div>

        <div class="flex justify-center text-red-500">
            {{ $item['price'] }}
        </div>

        <div class="flex justify-center text-red-500">
            {{ $item['qty'] }}
        </div>

    </div>

    <form action="{{ route('cart.remove', ['id' => $item['id']]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 h-10 my-auto hover:bg-red-400" style="width: 20%">Delete</button>
    </form>


</div>
@endforeach
@endisset
