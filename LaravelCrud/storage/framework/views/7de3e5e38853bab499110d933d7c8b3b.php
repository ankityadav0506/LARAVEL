

<?php $__env->startSection('main'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 mt-4">
            <div class="card p-4">
                <p>Name : <b><?php echo e($product->name); ?></b></p>
                <p>Description : <b><?php echo e($product->description); ?></b></p>
                <img src="/products/<?php echo e($product->image); ?>" class="rounded" width="100%">
            </div>  
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projects\LaravelCrud\resources\views/products/show.blade.php ENDPATH**/ ?>