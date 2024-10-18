
<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('dashboard', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

    <!-- Content Row -->
    <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Post</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($jumlah_post); ?></div>
            </div>
            <div class="col-auto">
                <i class="fas fa-file fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Kategori</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($jumlah_kategori); ?></div>
            </div>
            <div class="col-auto">
                <i class="fas fa-tag fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Tag</div>
                <div class="row no-gutters align-items-center">
                <div class="col-auto">
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo e($jumlah_tag); ?></div>
                </div>
                </div>
            </div>
            <div class="col-auto">
                <i class="fas fa-tags fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Banner</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($jumlah_banner); ?></div>
            </div>
            <div class="col-auto">
                <i class="fas fa-image fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>

    <!-- Content Row -->

    

    <div class="card border-bottom-primary">
        <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">Post Hari Ini</h6>
        </div>
        <div class="card-body">
           <?php if($post->count() >= 1): ?>
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Tag</th>
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
                            <?php $__currentLoopData = $row->tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post_tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="badge badge-secondary"><?php echo e($post_tag->nama); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
           <?php else: ?>
                <div class="alert alert-info" role="alert">
               Anda tidak memiliki post terbaru hari ini
                </div>
           <?php endif; ?>
        </div>
    </div>
    
    

    <div class="card border-bottom-success mt-4">
        <div class="card-header">
        <h6 class="m-0 font-weight-bold text-success">Kategori Hari Ini</h6>
        </div>
        <div class="card-body">
           <?php if($kategori->count() >= 1): ?>
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Slug</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <th scope="row"><?php echo e($loop->iteration); ?></th>
                            <td><?php echo e($row->nama); ?></td>
                            <td><?php echo e($row->slug); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
           <?php else: ?>
                <div class="alert alert-info" role="alert">
               Anda tidak memiliki kategori terbaru hari ini
                </div>
           <?php endif; ?>
        </div>
   </div>
    
    

    <div class="card border-bottom-info mt-4">
        <div class="card-header">
        <h6 class="m-0 font-weight-bold text-info">Tag Hari Ini</h6>
        </div>
        <div class="card-body">
           <?php if($tag->count() >= 1): ?>
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tag</th>
                        <th scope="col">Slug</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <th scope="row"><?php echo e($loop->iteration); ?></th>
                            <td><?php echo e($row->nama); ?></td>
                            <td><?php echo e($row->slug); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
           <?php else: ?>
                <div class="alert alert-info" role="alert">
               Anda tidak memiliki tag terbaru hari ini
                </div>
           <?php endif; ?>
        </div>
   </div>
    
    

    <div class="card border-bottom-warning mt-4">
        <div class="card-header">
        <h6 class="m-0 font-weight-bold text-warning">Banner Hari Ini</h6>
        </div>
        <div class="card-body">
           <?php if($banner->count() >= 1): ?>
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Banner</th>
                        <th scope="col">Slug</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <th scope="row"><?php echo e($loop->iteration); ?></th>
                            <td><img src="/upload/banner/<?php echo e($row->sampul); ?>" width="80px" height="80px" alt=""></td>
                            <td><?php echo e($row->judul); ?></td>
                            <td><?php echo e($row->slug); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
           <?php else: ?>
                <div class="alert alert-info" role="alert">
               Anda tidak memiliki banner terbaru hari ini
                </div>
           <?php endif; ?>
        </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sb-admin/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_8_blog\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>