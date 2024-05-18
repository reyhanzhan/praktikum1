@extends('layouts.main')

@section('container')
<div class="container">

    <h2>Brands List</h2>
    <a href="{{ route('brands.create') }}" class="btn btn-primary">Add New Brand</a>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Brand</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($brands as $brands)
            
                <tr>
                    <td>{{ $brands->id }}</td>
                    <td>{{ $brands->product_brand }}</td>
                    <td>{{ $brands->status }}</td>
                    <td>
                        <a href="{{ route('brands.edit', $brands->id) }}" class="btn btn-info">Edit</a>
                        <form action="{{ route('brands.destroy', $brands->id) }}" method="POST"
                            style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah anda yakin?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection
{{-- <h1>ini brands</h1>
<dd>{{$brands}}</dd> --}}
