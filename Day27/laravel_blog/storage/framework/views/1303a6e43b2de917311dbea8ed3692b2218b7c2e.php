
<?php $__env->startSection('title', 'Kategori'); ?>
<?php $__env->startSection('kategori', 'active'); ?>
<?php $__env->startSection('main', 'show'); ?>
<?php $__env->startSection('main-active', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Kategori</h1>

    <form action="/kategori" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="nama">Kategori</label>
            <input type="text" class="form-control" id="nama" name="nama">
            <?php $__errorArgs = ['nama'];
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
        <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
        <a href="/kategori" class="btn btn-secondary btn-sm">Kembali</a>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sb-admin/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_8_blog\resources\views/admin/kategori/create.blade.php ENDPATH**/ ?>