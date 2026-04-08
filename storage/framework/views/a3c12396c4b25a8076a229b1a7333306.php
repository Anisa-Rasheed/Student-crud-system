<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>

<div class="container">

    <h1>✏ Edit Product</h1>

    <form method="POST" action="<?php echo e(route('products.update', $product->id)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <input type="text" name="name" value="<?php echo e($product->name); ?>">

        <input type="text" name="price" value="<?php echo e($product->price); ?>">

        <textarea name="description"><?php echo e($product->description); ?></textarea>

        <button type="submit">Update Product</button>
    </form>

</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\product-crud\resources\views/products/edit.blade.php ENDPATH**/ ?>