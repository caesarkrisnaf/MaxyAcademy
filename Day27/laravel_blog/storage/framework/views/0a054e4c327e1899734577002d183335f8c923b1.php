
<?php $__env->startSection('title', 'Setting'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Setting</h1>

    <form action="/user/<?php echo e(Auth::user()->id); ?>/setting" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PATCH'); ?>
        <div class="form-group">
            <label for="password_lama">Password Lama</label>
            <input type="password" class="form-control" id="password_lama" name="password_lama">
            <?php $__errorArgs = ['password_lama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <?php echo session('gagal'); ?>

        </div>
        <div class="form-group">
            <label for="password_baru">Password Baru</label>
            <input type="password" class="form-control" id="password_baru" name="password_baru">
            <?php $__errorArgs = ['password_baru'];
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
        <div class="form-group">
            <label for="password_baru_confirmation">Ulangi Password Baru</label>
            <input type="password" class="form-control" id="password_baru_confirmation" name="password_baru_confirmation">
            <?php $__errorArgs = ['password_baru_confirmation'];
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

<?php echo $__env->make('sb-admin/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_8_blog\resources\views/admin/user/setting.blade.php ENDPATH**/ ?>