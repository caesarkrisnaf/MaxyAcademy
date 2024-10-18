
<?php $__env->startSection('title', 'Logo'); ?>
<?php $__env->startSection('logo', 'active'); ?>
<?php $__env->startSection('pengaturan', 'show'); ?>
<?php $__env->startSection('pengaturan-active', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Logo</h1>

    <a href="/logo/<?php echo e($logo->id); ?>/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit Logo</a>

    <div class="card mt-4">
    <img src="/upload/logo/<?php echo e($logo->gambar); ?>" height="500px" class="card-img-top" alt="...">
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sb-admin/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_8_blog\resources\views/admin/logo/index.blade.php ENDPATH**/ ?>