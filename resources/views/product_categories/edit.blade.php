@extends('layouts.main')

@section('container')
<form action="{{ route('product_categories.update', $productCategory->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="product_category_name">Category Name:</label>
        <input type="text" class="form-control" id="product_category_name" name="product_category_name" value="{{ $productCategory->product_category_name }}" required>
    </div>
    <div class="form-group">
        <label for="status">Status:</label>
        <select class="form-control" id="status" name="status">
            <option value="active" {{ $productCategory->status == 'active' ? 'selected' : '' }}>Active</option>
            <option value="inactive" {{ $productCategory->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>


@endsection