@extends('layouts.main')

@section('container')


<a href="{{ route('product_categories.create') }}" class="btn btn-primary">Add Product_Category</a>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama Kategori</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($productCategories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->product_category_name }}</td>
                <td>{{ $category->status }}</td>
                <td>
                    <a href="{{ route('product_categories.edit', $category->id) }}" class="btn btn-sm btn-info">Edit</a>
                    <form action="{{ route('product_categories.destroy', $category->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
