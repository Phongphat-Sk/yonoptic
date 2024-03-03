<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Session;

class CartController extends Controller
{
    public function index()
    {
        $products = Product::all(); // ดึงข้อมูลสินค้าทั้งหมด
        return view('shop.cart', compact('products')); // ส่งข้อมูลสินค้าไปยังหน้า shop.blade.php
    }

    public function sub()
    {
        // ดึงรายการสินค้าทั้งหมด
        $products = Product::all();

        // คำนวณราคารวม
        $totalPrice = 0;
        foreach ($products as $product) {
            $totalPrice += $product->price;
        }

        // ส่งข้อมูลไปยังหน้า view
        return view('shop.cart', compact('products', 'totalPrice'));
    }

    public function addToCart(Request $request)
    {
        $product = Product::find($request->product_id);

        $cart = Session::get('cart');
        if(!$cart) {
            $cart = [];
        }

        // Check if product is already in cart
        if(isset($cart[$product->id])) {
            $cart[$product->id]['qty'] += 1;
        } else {
            $cart[$product->id] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'qty' => 1,
                'image' => $product->image
            ];
        }

        Session::put('cart', $cart);

        return redirect()->route('cart.index')->with('success_message', 'สินค้าถูกเพิ่มในตะกร้าแล้ว');
    }
}
