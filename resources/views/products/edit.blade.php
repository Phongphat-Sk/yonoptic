@extends('products.layout')

@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Product</div>
  <div class="card-body">
       
      <form action="{{ url('product/' .$products->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$products->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$products->name}}" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" value="{{$products->price}}" class="form-control"></br>
        <label>Details</label></br>
        <input type="text" name="details" id="details" value="{{$products->de}}" class="form-control"></br>
        <label>Picture</label></br>
        <input type="file" name="picture" id="picture" value="{{$products->picture}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop