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

        if(!$product) {
            return redirect()->route('cart.index')->with('error_message', 'สินค้าไม่ถูกต้อง');
        }

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


    public function checkout(Request $request)
{
    // ดำเนินการเพิ่มข้อมูลสินค้าไปยังหน้า history ที่นี่
    // รับข้อมูลสินค้าที่ต้องการเพิ่มจาก $request
    // ดำเนินการเพิ่มข้อมูลลงในฐานข้อมูลหรือที่ต้องการ
    // เช่น สร้างการสั่งซื้อใหม่, เพิ่มข้อมูลลงในตาราง history เป็นต้น

    // ตัวอย่างการสร้างการสั่งซื้อใหม่
    $order = new Order();
    $order->user_id = Auth::id(); // ใส่ ID ของผู้ใช้ที่ทำการสั่งซื้อ
    $order->save();

    // เป็นต้น

    // หลังจากดำเนินการเสร็จสิ้น ให้ Redirect ไปยังหน้า history หรือหน้าอื่นตามที่คุณต้องการ
    return redirect()->route('history')->with('success_message', 'การสั่งซื้อสำเร็จแล้ว');
}




}
