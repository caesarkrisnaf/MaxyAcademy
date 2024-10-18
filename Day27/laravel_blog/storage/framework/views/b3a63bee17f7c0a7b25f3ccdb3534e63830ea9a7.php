

<?php if(isset($tag_dipilih)): ?>
     <?php $__env->startSection('title'); ?>
        Tag : <?php echo e($tag_dipilih->nama); ?>

    <?php $__env->stopSection(); ?>
<?php endif; ?>

<?php if(isset($kategori_dipilih)): ?>
    <?php $__env->startSection('title'); ?>
        Kategori : <?php echo e($kategori_dipilih->nama); ?>

    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('kategori', 'active'); ?>
<?php endif; ?>

<?php if(isset($author_dipilih)): ?>
    <?php $__env->startSection('title'); ?>
        Author : <?php echo e($author_dipilih->name); ?>

    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('author', 'active'); ?>
<?php endif; ?>

<?php if(isset($home)): ?>
    <?php $__env->startSection('title', 'Semua Post'); ?>
    <?php $__env->startSection('home', 'active'); ?>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
   <?php if(isset($banner)): ?>
        <div id="carouselExampleIndicators" class="carousel slide mt-4" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo e($loop->index); ?>" class="<?php echo e(($loop->first) ? 'active' : ''); ?>"></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
            <div class="carousel-inner">
                <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="carousel-item <?php echo e(($loop->first) ? 'active' : ''); ?>">
                        <a href="/artikel-banner/<?php echo e($row->slug); ?>"><img src="/upload/banner/<?php echo e($row->sampul); ?>" height="400xp" class="d-block w-100" alt="..."></a>
                        <div class="carousel-caption d-none d-md-block">
                            <h3><?php echo e($row->judul); ?></h3>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
   <?php endif; ?>

    <?php if(isset($rekomendasi)): ?>
        <?php if($rekomendasi->isNotEmpty()): ?>
            <h2 class="my-4 text-center">Rekomendasi</h2>

            <div class="row mt-4">
                <?php $__currentLoopData = $rekomendasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 mt-5">
                            <div class="card shadow-sm">
                                <a href="/<?php echo e($row->post->slug); ?>"><img src="/upload/post/<?php echo e($row->post->sampul); ?>" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo e($row->post->judul); ?></h5>
                                    <p class="card-text"><small class="text-muted"><?php echo e($row->post->created_at->diffForHumans()); ?></small></p>
                                </div>
                            </div>
                        </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="d-flex justify-content-center mt-4"><?php echo e($rekomendasi->links()); ?></div>
        <?php endif; ?>
    <?php endif; ?>

    <h2 class="my-4 text-center"><?php echo $__env->yieldContent('title'); ?></h2>

    <div class="d-flex justify-content-center">
        <form class="form-inline my-2 my-lg-0" method="GET" action="<?php echo e(url()->full()); ?>">
            <input class="form-control mr-sm-2" type="search" placeholder="Search For ..." aria-label="Search" name="search" value="<?php echo e($search); ?>">
            <button class="btn btn-primary my-2 my-sm-0 mx-auto" type="submit">Search</button>
        </form>
    </div>

    <?php if(session('search')): ?>
        <div class="row mt-4 justify-content-center text-center">
            <div class="col-md-6">
                <div class="alert alert-info" role="alert">
                <?php echo e(session('search')); ?>

                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="row mt-4">
            <?php $__currentLoopData = $artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 mt-5">
                        <div class="card shadow-sm">
                            <a href="/<?php echo e($row->slug); ?>"><img src="/upload/post/<?php echo e($row->sampul); ?>" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($row->judul); ?></h5>
                                <p class="card-text"><small class="text-muted"><?php echo e($row->created_at->diffForHumans()); ?></small></p>
                            </div>
                        </div>
                    </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="d-flex justify-content-center mt-4"><?php echo e($artikel->links()); ?></div>
        <?php endif; ?>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('artikel/template/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MaxyAcademy\Day27\laravel_blog\resources\views/artikel/index.blade.php ENDPATH**/ ?>