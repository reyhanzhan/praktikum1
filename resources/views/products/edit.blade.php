@extends('layouts.main')

@section('container')
<div class="container">
    <h1>Edit Product</h1>

    <form action="/products/{{ $products->id }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="sku">SKU:</label>
            <input type="text" class="form-control" id="sku" name="sku" value="{{ $products->sku }}" required>
        </div>
        <div class="form-group">
            <label for="product_category">Category:</label>
            <input type="text" class="form-control" id="product_category" name="product_category"
                value="{{ $products->product_category }}" required>
        </div>
        <div class="form-group">
            <label for="product_name">Product Name:</label>
            <input type="text" class="form-control" id="product_name" name="product_name"
                value="{{ $products->product_name }}" required>
        </div>
        <div class="form-group">
            <label for="product_detail">Product Detail:</label>
            <textarea class="form-control" id="product_detail" name="product_detail">{{ $products->product_detail }}</textarea>
        </div>
        <div class="form-group">
            <label for="product_brand">Brand:</label>
            <input type="text" class="form-control" id="product_brand" name="product_brand"
                value="{{ $products->product_brand }}" required>
        </div>
        <div class="form-group">
            <label for="product_price">Price:</label>
            <input type="number" class="form-control" id="product_price" name="product_price"
                value="{{ $products->product_price }}" required>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select class="form-control" id="status" name="status">
                <option value="active" {{ $products->status == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ $products->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</div>
@endsection