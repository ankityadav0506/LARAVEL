

<?php $__env->startSection('main'); ?>
    <div class="container">

        <div class="text-right">
            <a href="products/create" class="btn btn-dark mt-2">New Products</a>
        </div>

        <table class="table table-hover mt-3">
            <thead>
            <tr>
                <th>Sno.</th>
                <th>Name</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->index+1); ?></td>
                    <td><a href="products/<?php echo e($product->id); ?>/show " class="text-dark"> <?php echo e($product->name); ?></a></td>
                    <td><img src="products/<?php echo e($product->image); ?>" class="rounded-circle" height="30" width="30"></td>
                    <td>
                        <a href="products/<?php echo e($product->id); ?>/edit" class="btn btn-dark btn-sm">Edit</a>
                        <form method="post" action="products/<?php echo e($product->id); ?>/delete" class="d-inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

        </table>
        <?php echo e($products->links()); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projects\LaravelCrud\resources\views/products/index.blade.php ENDPATH**/ ?>