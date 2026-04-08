<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">

    <h1>✏ Edit Product</h1>

    <form method="POST" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')

        <input type="text" name="name" value="{{ $product->name }}">

        <input type="text" name="price" value="{{ $product->price }}">

        <textarea name="description">{{ $product->description }}</textarea>

        <button type="submit">Update Product</button>
    </form>

</div>

</body>
</html>