
<?php $__env->startSection('title', 'Tentang Kami'); ?>
<?php $__env->startSection('tentang', 'active'); ?>

<?php $__env->startSection('content'); ?>
   <div class="card mt-4 shadow-sm">
        <div class="card-body">
            <h3 class="card-title">Tentang Kami</h3>

            <p class="card-text"><?php echo $tentang->konten; ?></p>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <a href="<?php echo e($tentang->facebook); ?>">
                    <div class="card-body bg-primary text-center m-3">
                        <i class="fab fa-facebook-f fa-3x text-white"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
               <a href="<?php echo e($tentang->instagram); ?>">
                    <div class="card-body bg-danger text-center m-3">
                        <i class="fab fa-instagram fa-3x text-white"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo e($tentang->twitter); ?>">
                    <div class="card-body bg-info text-center m-3">
                        <i class="fab fa-twitter fa-3x text-white"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('artikel/template/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_8_blog\resources\views/artikel/tentang.blade.php ENDPATH**/ ?>