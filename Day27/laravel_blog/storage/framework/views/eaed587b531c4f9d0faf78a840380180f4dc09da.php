
<?php $__env->startSection('title', 'Tag'); ?>
<?php $__env->startSection('tag', 'active'); ?>
<?php $__env->startSection('main', 'show'); ?>
<?php $__env->startSection('main-active', 'active'); ?>

<?php $__env->startSection('content'); ?>
    
    <?php echo session('sukses'); ?>


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tag</h1>

    <a href="/tag/create" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Tag</a>

    <?php if($tag[0]): ?>
        
        <table class="table mt-4 table-hover table-bordered">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Slug</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <th scope="row"><?php echo e($loop->iteration); ?></th>
                    <td><?php echo e($row->nama); ?></td>
                    <td><?php echo e($row->slug); ?></td>
                    <td width="20%">
                        <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="/tag/<?php echo e($row->id); ?>/edit" class="btn btn-primary btn-sm mr-1"><i class="fas fa-edit"></i> Edit</a>
                        <form action="/tag/<?php echo e($row->id); ?>" method="post">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin mengahapus data ?')"><i class="fas fa-trash"></i> Hapus</button>
                        </form>
                        </div>
                    </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <?php echo e($tag->links()); ?>

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

<?php $__env->startSection('search-url', '/tag/search'); ?>

<?php $__env->startSection('search'); ?>
    <?php echo $__env->make('sb-admin/search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('search-responsive'); ?>
    <?php echo $__env->make('sb-admin/search-responsive', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
   <?php echo $__env->make('admin/navbar-mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sb-admin/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_8_blog\resources\views/admin/tag/index.blade.php ENDPATH**/ ?>