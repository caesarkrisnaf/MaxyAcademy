
<?php $__env->startSection('title', 'penulis'); ?>
<?php $__env->startSection('penulis', 'active'); ?>
<?php $__env->startSection('user', 'show'); ?>
<?php $__env->startSection('user-active', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Penulis</h1>

    <a href="/penulis/create" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah penulis</a>

   <?php if($penulis[0]): ?>
        
        <table class="table mt-4 table-hover table-bordered">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $penulis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <th scope="row" width="15%"><?php echo e($loop->iteration); ?></th>
                    <td><?php echo e($row->name); ?></td>
                    <td><?php echo e($row->email); ?></td>
                    <td width="15%">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="/penulis/<?php echo e($row->id); ?>/konfirmasi" class="btn btn-danger btn-sm mr-1"><i class="fas fa-trash"></i> Hapus</a>
                        </div>
                    </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <?php echo e($penulis->links()); ?>

   <?php else: ?>
       <?php if(session('search')): ?>
             <?php echo session('search'); ?>

       <?php else: ?>
            <div class="alert alert-info mt-4" role="alert">
                Anda belum mempunyai data
            </div>
       <?php endif; ?>
   <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('search-url', '/penulis/search'); ?>

<?php $__env->startSection('search'); ?>
    <?php echo $__env->make('sb-admin/search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('search-responsive'); ?>
    <?php echo $__env->make('sb-admin/search-responsive', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
   <?php echo $__env->make('admin/navbar-mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sb-admin/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_8_blog\resources\views/admin/penulis/index.blade.php ENDPATH**/ ?>