

<?php $__env->startSection('main'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 ">
                <div class="card mt-3 p-3">
                    <h2 class="text-muted">Product Edit #<?php echo e($product->name); ?></h2>
                    <form method="POST" action="/products/<?php echo e($product->id); ?>/update" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo e(old('name', $product->name)); ?>">
                            <?php if($errors->has('name')): ?>
                                <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                           <textarea class="form-control" rows="4" name="description" ><?php echo e(old('description', $product->description)); ?></textarea>
                            <?php if($errors->has('description')): ?>
                                <span class="text-danger"><?php echo e($errors->first('description')); ?></span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control"> 
                            <?php if($errors->has('image')): ?>
                                <span class="text-danger"><?php echo e($errors->first('image')); ?></span>
                            <?php endif; ?>
                        </div>
                        <button class="btn btn-dark" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projects\LaravelCrud\resources\views/products/edit.blade.php ENDPATH**/ ?>