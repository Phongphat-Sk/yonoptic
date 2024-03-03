@extends('products.layout')

@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Product</div>
  <div class="card-body">
       
      <form action="{{ url('product') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <label>Details</label></br>
        <input type="text" name="details" id="details" class="form-control"></br>
        <label>Picture</label></br>
        <input type="file" name="picture" id="picture" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop