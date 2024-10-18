<!doctype html>
<html lang="en">

    <?php echo $__env->make('sb-admin/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <body id="page-top">
    
    <?php echo $__env->make('artikel/template/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Footer -->
      <?php echo $__env->make('sb-admin/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Scroll to Top Button-->
    <?php echo $__env->make('sb-admin/button-topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   
   <?php echo $__env->make('sb-admin/logout-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
   
   <?php echo $__env->make('sb-admin/javascript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
  
</html><?php /**PATH C:\xampp\htdocs\MaxyAcademy\Day27\laravel_blog\resources\views/artikel/template/app.blade.php ENDPATH**/ ?>