
<?php $__env->startSection('title', 'Logo'); ?>
<?php $__env->startSection('logo', 'active'); ?>
<?php $__env->startSection('pengaturan', 'show'); ?>
<?php $__env->startSection('pengaturan-active', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Logo</h1>

    <form action="/logo/<?php echo e($logo->id); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PATCH'); ?>
       <div class="form-group">
            <label for="logo">Gambar</label>
            <input type="file" class="form-control" id="logo" name="logo">
            <?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Edit</button>
        <a href="/logo" class="btn btn-secondary btn-sm">Kembali</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('sb-admin/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_8_blog\resources\views/admin/logo/edit.blade.php ENDPATH**/ ?>