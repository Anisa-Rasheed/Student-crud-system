<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>

<h1>Edit Product</h1>

<form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $product->name }}"><br><br>

    <input type="text" name="price" value="{{ $product->price }}"><br><br>

    <textarea name="description">{{ $product->description }}</textarea><br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>