
<?php $__env->startSection('title', 'Footer'); ?>
<?php $__env->startSection('footer', 'active'); ?>
<?php $__env->startSection('pengaturan', 'show'); ?>
<?php $__env->startSection('pengaturan-active', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Footer</h1>

    <form action="/footer/<?php echo e($footer->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PATCH'); ?>
        <div class="form-group">
            <label for="konten">Copyright</label>
            <input type="text" class="form-control" id="konten" name="konten" value="<?php echo e($footer->konten); ?>">
            <?php $__errorArgs = ['konten'];
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
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sb-admin/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_8_blog\resources\views/admin/footer/index.blade.php ENDPATH**/ ?>