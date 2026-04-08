<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">

    <h1>📦 Products List</h1>

    <a class="button" href="{{ route('products.create') }}">+ Add Product</a>

    @if(session('success'))
        <div class="message">
            {{ session('success') }}
        </div>
    @endif

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>

        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>Rs {{ $product->price }}</td>
            <td>{{ $product->description }}</td>
            <td>
                <a class="btn-edit" href="{{ route('products.edit', $product->id) }}">Edit</a>

                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn-delete" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</div>

</body>
</html>