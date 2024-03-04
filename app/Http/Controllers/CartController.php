<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Session;

class CartController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $cart = Session::get('cart');
        if(!$cart) {
            $cart = [];
        } // ดึงข้อมูลสินค้าทั้งหมด
        //return view('shop.cart', compact('products')); // ส่งข้อมูลสินค้าไปยังหน้า shop.blade.php
        return view('shop.cart')->with('cart', $cart);
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

        return view('shop.cart')->with('cart', $cart);
    }

    public function remove($id)
    {
        $cart = Session::get('cart');
        
        // ตรวจสอบว่าสินค้าที่ต้องการลบอยู่ในตะกร้าหรือไม่
        if(isset($cart[$id])) {
            unset($cart[$id]); // ลบสินค้าออกจากตะกร้าโดยใช้คีย์ ID
            Session::put('cart', $cart); // อัปเดตตะกร้าใน Session
        }
        
        return view('shop.cart')->with('cart', $cart);
    }

}
