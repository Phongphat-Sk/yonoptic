<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Order; // เพิ่มคำสั่งนี้
use App\Models\OrderItem; // เพิ่มคำสั่งนี้

class CheckoutController extends Controller
{
    public function proceedToCheckout(Request $request)
    {
        // ตรวจสอบว่าผู้ใช้ล็อกอินหรือไม่
        if (!Auth::check()) {
            // ถ้าไม่ได้ล็อกอิน ให้ redirect ไปยังหน้าล็อกอิน
            return redirect()->route('login')->with('error', 'โปรดล็อกอินเพื่อทำการสั่งซื้อ');
        }

        // ตรวจสอบว่าตะกร้าสินค้าไม่ว่างหรือไม่
        if (!$request->session()->has('cart')) {
            return redirect()->route('cart.index')->with('error', 'ไม่มีสินค้าในตะกร้า');
        }

        // สร้างรายการสั่งซื้อ
        $order = new Order();
        $order->user_id = auth()->user()->id;
        $order->save();

        // ดึงข้อมูลสินค้าในตะกร้า
        $cartItems = $request->session()->get('cart');

        // เพิ่มรายการสินค้าในตะกร้าลงในรายการสั่งซื้อ
        foreach ($cartItems as $cartItem) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $cartItem['id'];
            $orderItem->quantity = $cartItem['qty'];
            $orderItem->save();
        }

        // ล้างข้อมูลในตะกร้าหลังการสั่งซื้อ
        $request->session()->forget('cart');

        // ส่งกลับไปยังหน้าประวัติการสั่งซื้อ
        return redirect()->route('history')->with('success', 'สั่งซื้อสินค้าเรียบร้อยแล้ว');
    }
}
