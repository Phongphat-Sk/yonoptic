@extends('products.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Products Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $products->name }}</h5>
        <p class="card-text">Price : {{ $products->price }}</p>
        <p class="card-text">Details : {{ $products->details }}</p>
        <p class="card-text">Picture : {{ $products->picture }}</p> 
  </div>
    </hr>
  </div>
</div>