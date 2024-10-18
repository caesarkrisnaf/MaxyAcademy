   <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="<?php echo $__env->yieldContent('search-url'); ?>" method="POST">
            <div class="input-group">
                <?php echo csrf_field(); ?>
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" name="search" value="<?php echo e($search ? $search : ''); ?>">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form><?php /**PATH C:\xampp\htdocs\laravel_8_blog\resources\views/sb-admin/search.blade.php ENDPATH**/ ?>