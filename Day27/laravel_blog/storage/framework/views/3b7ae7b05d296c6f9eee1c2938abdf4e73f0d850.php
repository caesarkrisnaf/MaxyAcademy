<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Apakah anda yakin ingin keluar.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          
           <a class="btn btn-primary" href="<?php echo e(route('logout')); ?>"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                <?php echo e(__('Logout')); ?>

            </a>

            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                <?php echo csrf_field(); ?>
            </form>
        </div>
      </div>
    </div>
  </div><?php /**PATH C:\xampp\htdocs\MaxyAcademy\Day27\laravel_blog\resources\views/sb-admin/logout-modal.blade.php ENDPATH**/ ?>