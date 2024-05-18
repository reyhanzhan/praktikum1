@extends('layouts.main')

@section('container')

<form action="{{ route('product_categories.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="product_category_name">Category Name:</label>
        <input type="text" class="form-control" id="product_category_name" name="product_category_name" required>
    </div>
    <div class="form-group">
        <label for="status">Status:</label>
        <select class="form-control" id="status" name="status">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
