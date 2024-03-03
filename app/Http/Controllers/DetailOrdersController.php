<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\DetailOrdersController;

class DetailOrdersController extends Controller
{
    //
    public function index()
    {
        $products = Product::all(); // ดึงข้อมูลสินค้าทั้งหมด
        return view('shop.productdetail', compact('products')); // ส่งข้อมูลสินค้าไปยังหน้า shop.blade.php
    }

    public function show($id)
    {
        $product = Product::findOrFail($id); // ค้นหาสินค้าจาก ID

        return view('shop.productdetail', compact('product')); // ส่งข้อมูลสินค้าไปยังหน้า productdetail.blade.php
    }
}