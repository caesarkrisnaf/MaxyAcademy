  <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search" action="<?php echo $__env->yieldContent('search-url'); ?>" method="POST">
                  <div class="input-group">
                      <?php echo csrf_field(); ?>
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" name="search" value="<?php echo e($search ? $search : ''); ?>">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li><?php /**PATH C:\xampp\htdocs\laravel_8_blog\resources\views/sb-admin/search-responsive.blade.php ENDPATH**/ ?>