<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order; // เพิ่มคำสั่งนี้
use App\Models\OrderItem; // เพิ่มคำสั่งนี้

class HistoryController extends Controller
{
    /**
     * Display the history page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Order::all();
        return view('shop.history')->with('products', $products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Your code to process form submissions or other POST requests
        // For example, you can access form data using $request->input('field_name')
        
        // Process the data...
        
        // Redirect to the history page with a success message
        return redirect()->route('history')->with('success', 'Your message here');
    }
}
