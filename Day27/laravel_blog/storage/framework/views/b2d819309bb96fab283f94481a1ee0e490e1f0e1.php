
<?php $__env->startSection('title', 'Post'); ?>
<?php $__env->startSection('post', 'active'); ?>
<?php $__env->startSection('main', 'show'); ?>
<?php $__env->startSection('main-active', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <a href="/post/<?php echo e($post->id); ?>/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
    <a href="/post" class="btn btn-secondary btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
    <div class="card mt-3">
        <img src="/upload/post/<?php echo e($post->sampul); ?>" height="450px" class="card-img-top" alt="...">
        <div class="card-body">
            <h2 class="card-title"><?php echo e($post->judul); ?></h2>
            <p class="card-text"><?php echo $post->konten; ?></p>
            <p class="card-text"><small class="text-muted"><?php echo e($post->created_at->diffForHumans()); ?></small></p>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sb-admin/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_8_blog\resources\views/admin/post/show.blade.php ENDPATH**/ ?>