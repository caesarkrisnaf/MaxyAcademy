
<?php $__env->startSection('title', 'Banner'); ?>
<?php $__env->startSection('banner', 'active'); ?>
<?php $__env->startSection('main', 'show'); ?>
<?php $__env->startSection('main-active', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <a href="/banner/<?php echo e($banner->id); ?>/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
    <a href="/banner" class="btn btn-secondary btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
    <div class="card mt-3">
        <img src="/upload/banner/<?php echo e($banner->sampul); ?>" height="450px" class="card-img-top" alt="...">
        <div class="card-body">
            <h2 class="card-title"><?php echo e($banner->judul); ?></h2>
            <p class="card-text"><?php echo $banner->konten; ?></p>
            <p class="card-text"><small class="text-muted"><?php echo e($banner->created_at->diffForHumans()); ?></small></p>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sb-admin/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_8_blog\resources\views/admin/banner/show.blade.php ENDPATH**/ ?>