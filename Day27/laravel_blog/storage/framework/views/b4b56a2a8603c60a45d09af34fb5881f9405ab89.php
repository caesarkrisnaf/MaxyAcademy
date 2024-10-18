
<!DOCTYPE html>
<html lang="en">


<?php echo $__env->make('sb-admin/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php echo $__env->make('sb-admin/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php echo $__env->make('sb-admin/topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

         <?php echo $__env->yieldContent('content'); ?>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php echo $__env->make('sb-admin/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php echo $__env->make('sb-admin/button-topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Logout Modal-->
  <?php echo $__env->make('sb-admin/logout-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  
  <?php echo $__env->make('sb-admin/javascript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  
  <?php echo $__env->yieldContent('ck-editor'); ?>

  
  <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->yieldContent('javascript'); ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\MaxyAcademy\Day27\laravel_blog\resources\views/sb-admin/app.blade.php ENDPATH**/ ?>