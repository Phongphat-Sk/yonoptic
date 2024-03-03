<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
}
