
<?php $__env->startSection('title', 'Banner'); ?>

<?php $__env->startSection('content'); ?>
   <div class="card mt-4 shadow-sm">
        <img src="/upload/banner/<?php echo e($banner->sampul); ?>" height="400px" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-title"><?php echo e($banner->judul); ?></h3>
            <small class="card-text">
                <span class="text-muted"><?php echo e($banner->created_at->diffForHumans()); ?></span>
            </small>
            <hr>

            <p class="card-text"><?php echo $banner->konten; ?></p>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('artikel/template/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_8_blog\resources\views/artikel/banner.blade.php ENDPATH**/ ?>