<div class="container">
    <h2>Brands List</h2>
    <a href="{{ route('brands.create') }}" class="btn btn-primary">Add New Brand</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Brand</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brands as $brand)
            <tr>
                <td>{{ $brand->id }}</td>
                <td>{{ $brand->product_brand }}</td>
                <td>{{ $brand->status }}</td>
                <td>
                    <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-info">Edit</a>
                    <form action="{{ route('brands.destroy', $brand->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{-- <h1>ini brands</h1>
<dd>{{$brands}}</dd> --}}

