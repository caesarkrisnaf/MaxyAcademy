<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="/upload/logo/<?php echo e($logo->gambar); ?>" width="50px" height="50px" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo $__env->yieldContent('home'); ?>" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo $__env->yieldContent('kategori'); ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Kategori
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="dropdown-item" href="/artikel-kategori/<?php echo e($row->slug); ?>"><?php echo e($row->nama); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo $__env->yieldContent('author'); ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Author
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php $__currentLoopData = $author; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="dropdown-item" href="/artikel-author/<?php echo e($row->id); ?>"><?php echo e($row->name); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $__env->yieldContent('tentang'); ?>" href="/artikel-tentang">Tentang Kami</a>
                </li>
            </ul>
            <ul class="navbar-nav my-2 my-lg-0">
                <?php if(auth()->guard()->check()): ?>
                <?php if(auth()->check() && auth()->user()->hasRole('admin|penulis')): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">Admin</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#logoutModal" href="#">Logout</a>
                    </li>
                <?php endif; ?>
                   
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav><?php /**PATH C:\xampp\htdocs\laravel_8_blog\resources\views/artikel/template/navbar.blade.php ENDPATH**/ ?>