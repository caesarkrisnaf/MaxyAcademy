
<?php $__env->startSection('title', 'Artikel'); ?>

<?php $__env->startSection('content'); ?>
   <div class="card mt-4 shadow-sm">
        <img src="/upload/post/<?php echo e($artikel->sampul); ?>" height="400px" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-title"><?php echo e($artikel->judul); ?></h3>
            <small class="card-text">
                <span class="text-muted"><a href="/artikel-kategori/<?php echo e($artikel->kategori->slug); ?>"><?php echo e($artikel->kategori->nama); ?></a></span>
                -
                <span class="text-muted"><?php echo e($artikel->created_at->diffForHumans()); ?></span>
                -
                <span class="text-muted">Tag :</span>
                <?php $__currentLoopData = $artikel->tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($loop->last): ?>
                        <span class="text-muted"><a href="/artikel-tag/<?php echo e($row->slug); ?>"><?php echo e($row->nama); ?></a></span>
                    <?php else: ?>
                        <span class="text-muted"><a href="/artikel-tag/<?php echo e($row->slug); ?>"><?php echo e($row->nama); ?>,</a></span>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </small>
            <br>

            <small>Author : <span class="text-muted"><a href="/artikel-author/<?php echo e($artikel->user->id); ?>"><?php echo e($artikel->user->name); ?></a></span></small>
            <hr>

            <p class="card-text"><?php echo $artikel->konten; ?></p>

            <a href="/like/<?php echo e($artikel->id); ?>" class="text-danger"><i class="fas fa-heart"></i> <?php echo e($like); ?> Like</a>
        </div>
    </div>

    <div id="disqus_thread" class="mt-4"></div>
    <script>
        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://blog-wwe7ssfgas.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('artikel/template/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_8_blog\resources\views/artikel/artikel.blade.php ENDPATH**/ ?>