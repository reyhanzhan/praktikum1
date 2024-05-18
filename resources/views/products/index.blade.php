@extends('layouts.main')

@section('container')

<a href="{{ route('products.create') }}" class="btn btn-primary">Add New Product</a>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Sku</th>
                <th>Category</th>
                <th>Name</th>
                <th>Detail</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Images</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->sku }}</td>
                    <td>{{ $product->product_category }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_detail }}</td>
                    <td>{{ $product->product_brand }}</td>
                    <td>{{ $product->product_price }}</td>
                    <td>
                        @if($product->fileimages)
                            <img src="{{ asset('storage/' . $product->fileimages) }}" alt="Product Image" style="width: 100px; height: auto;">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>{{ $product->status }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-info">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection