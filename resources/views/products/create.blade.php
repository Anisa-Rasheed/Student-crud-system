<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">

    <h1>➕ Add Product</h1>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf

        <input type="text" name="name" placeholder="Product Name">

        <input type="text" name="price" placeholder="Price">

        <textarea name="description" placeholder="Description"></textarea>

        <button type="submit">Save Product</button>
    </form>

</div>

</body>
</html>