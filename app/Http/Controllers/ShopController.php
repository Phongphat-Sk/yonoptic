<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\ShopController;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::all(); // ดึงข้อมูลสินค้าทั้งหมด
        return view('shop.shop', compact('products')); // ส่งข้อมูลสินค้าไปยังหน้า shop.blade.php
    }
}