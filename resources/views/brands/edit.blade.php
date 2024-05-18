@extends('layouts.main')

@section('container')
<div class="container">
    <h1>Edit Brand</h1>
    <form action="{{ route('brands.update', $brand->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="product_brand">Brand Name:</label>
            <input type="text" class="form-control" id="product_brand" name="product_brand" value="{{ $brand->product_brand }}" required>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <textarea class="form-control" id="status" name="status">{{ $brand->status }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Brand</button>
    </form>
</div>
@endsection