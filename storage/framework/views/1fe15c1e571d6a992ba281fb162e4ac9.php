<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>

<div class="container">

    <h1>➕ Add Product</h1>

    <form method="POST" action="<?php echo e(route('products.store')); ?>">
        <?php echo csrf_field(); ?>

        <input type="text" name="name" placeholder="Product Name">

        <input type="text" name="price" placeholder="Price">

        <textarea name="description" placeholder="Description"></textarea>

        <button type="submit">Save Product</button>
    </form>

</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\product-crud\resources\views/products/create.blade.php ENDPATH**/ ?>