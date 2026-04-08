<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>

<div class="container">

    <h1>📦 Products List</h1>

    <a class="button" href="<?php echo e(route('products.create')); ?>">+ Add Product</a>

    <?php if(session('success')): ?>
        <div class="message">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>

        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($product->id); ?></td>
            <td><?php echo e($product->name); ?></td>
            <td>Rs <?php echo e($product->price); ?></td>
            <td><?php echo e($product->description); ?></td>
            <td>
                <a class="btn-edit" href="<?php echo e(route('products.edit', $product->id)); ?>">Edit</a>

                <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn-delete" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\product-crud\resources\views/products/index.blade.php ENDPATH**/ ?>