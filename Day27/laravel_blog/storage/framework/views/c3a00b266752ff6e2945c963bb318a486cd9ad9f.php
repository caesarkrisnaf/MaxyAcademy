
<?php $__env->startSection('title', 'Post'); ?>
<?php $__env->startSection('post', 'active'); ?>
<?php $__env->startSection('main', 'show'); ?>
<?php $__env->startSection('main-active', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Post</h1>

    <a href="/post/create" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Post</a>

   <?php if($post[0]): ?>
        
        <table class="table mt-4 table-hover table-bordered">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Sampul</th>
                <th scope="col">Judul</th>
                <th scope="col">Kategori</th>
                <th scope="col">Tag</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <th scope="row"><?php echo e($loop->iteration); ?></th>
                    <td><img src="/upload/post/<?php echo e($row->sampul); ?>" alt="" width="80px" height="80px"></td>
                    <td><?php echo e($row->judul); ?></td>
                    <td><?php echo e($row->kategori->nama); ?></td>
                    <td>
                       <?php $__currentLoopData = $row->tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <span class="badge badge-secondary"><?php echo e($tag->nama); ?></span>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                    <td width="35%">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="/post/<?php echo e($row->id); ?>/rekomendasi" class="btn btn-warning btn-sm mr-1"><i class="<?php echo e($row->rekomendasi ? 'fas fa-star' : 'far fa-star'); ?>"></i> Rekomendasi</a>
                            <a href="/post/<?php echo e($row->id); ?>" class="btn btn-info btn-sm mr-1"><i class="fas fa-eye"></i> Detail</a>
                            <a href="/post/<?php echo e($row->id); ?>/edit" class="btn btn-primary btn-sm mr-1"><i class="fas fa-edit"></i> Edit</a>
                            <a href="/post/<?php echo e($row->id); ?>/konfirmasi" class="btn btn-danger btn-sm mr-1"><i class="fas fa-trash"></i> Hapus</a>
                        </div>
                    </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <?php echo e($post->links()); ?>

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

<?php $__env->startSection('search-url', '/post/search'); ?>

<?php $__env->startSection('search'); ?>
    <?php echo $__env->make('sb-admin/search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('search-responsive'); ?>
    <?php echo $__env->make('sb-admin/search-responsive', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
   <?php echo $__env->make('admin/navbar-mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sb-admin/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_8_blog\resources\views/admin/post/index.blade.php ENDPATH**/ ?>