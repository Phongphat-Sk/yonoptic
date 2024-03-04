@foreach($products as $product)
        <div class="bg-gray-100 my-3 p-4 mx-5" style='width:20%; border:1px solid black'>
            <div class="p-2 text-black flex flex-col">
                <div class="flex justify-center">
                    <a href="{{ route('productdetail', $product['id']) }}">
                        <img src="{{ asset('pic/แว่น.jpg') }}" alt="Product Image" width="100%" height="auto">
                    </a>
                </div>
                <div class="flex justify-center my-2" style='font-size:15px'>
                    <span>Order ID: {{ $product->id }}</span>
                </div>
                <div class="flex justify-center my-2" style='font-size:20px'>
                    <span>{{ 'ชื่อสินค้า: ' . $product['name'] }}</span>
                </div>
                <div class="flex justify-center my-2" style='font-size:20px'>
                    <span>{{ 'ราคา: ' . $product['price'] . '$' }}</span>
                </div>
                
            </div>
        </div>
    @endforeach
