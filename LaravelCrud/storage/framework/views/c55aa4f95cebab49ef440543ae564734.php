<html>
<head>
    <title>Laravel CRUD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark">
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link text-light" href="/">Products</a>
        </li>
    </ul>
    </nav>
    <h6 class="text-center">Please import database, present in the folder</h6>
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success alert-block">
            <strong><?php echo e($message); ?></strong>
        </div>
    <?php endif; ?>

    <?php echo $__env->yieldContent('main'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\Projects\LaravelCrud\resources\views/layouts/app.blade.php ENDPATH**/ ?>