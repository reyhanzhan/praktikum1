@extends('layouts.main')

@section('container')
<div class="container">
    <h1>Create Brand</h1>
    <form method="POST" action="{{ route('brands.store') }}">
        @csrf
        <div class="form-group">
            <label for="product_brand">Brand Name:</label>
            <input type="text" class="form-control" id="product_brand" name="product_brand" required>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" class="form-control" id="status" name="status" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection