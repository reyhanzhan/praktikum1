@extends('layouts.main')

@section('container')

<div class="container">
    <h1>Create Product</h1>
    
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <div class="form-group">
            <label for="sku">SKU:</label>
            <input type="text" class="form-control" id="sku" name="sku" required>

            <label for="product_category">Product Category:</label>
            <input type="text" class="form-control" id="product_category" name="product_category" required>

            <label for="product_name">Product Name:</label>
            <input type="text" class="form-control" id="product_name" name="product_name" required>

            <label for="product_detail">Product Details:</label>
            <input type="text" class="form-control" id="product_detail" name="product_detail" required>

            <label for="product_brand">Product Brand:</label>
            <input type="text" class="form-control" id="product_brand" name="product_brand" required>

            <label for="product_price">Product Price:</label>
            <input type="text" class="form-control" id="product_price" name="product_price" required>

            <label for="status">status:</label>
            <input type="text" class="form-control" id="status" name="status" required>

            <label for="slug">slug:</label>
            <input type="text" class="form-control" id="slug" name="slug" required>

         
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection