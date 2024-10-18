

<?php $__env->startSection('title', 'Products'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="my-4">Product Management</h1>

    <!-- Success Message -->
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <!-- Button to Open Add New Product Modal -->
    <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#addProductModal">
        Add New Product
    </button>

    <!-- Products Table -->
    <div class="card">
        <div class="card-header">
            <h4>Products List</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="products-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($product->name); ?></td>
                            <td><?php echo e($product->description); ?></td>
                            <td><?php echo e($product->price); ?></td>
                            <td><?php echo e($product->stock); ?></td>
                            <td>
                                <!-- Detail Button -->
                                <button class="btn btn-link text-info p-0" data-bs-toggle="modal" data-bs-target="#detailModal<?php echo e($product->id); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details">
                                    <i class="fas fa-eye"></i>
                                </button>

                                <!-- Delete Action -->
                                <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST" style="display: inline-block;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-link text-danger p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Product">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>

                                <!-- Edit Action -->
                                <button class="btn btn-link text-secondary p-0" data-bs-toggle="modal" data-bs-target="#editModal<?php echo e($product->id); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Product">
                                    <i class="fas fa-edit"></i>
                                </button>

                                <!-- Detail Modal -->
                                <div class="modal fade" id="detailModal<?php echo e($product->id); ?>" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel<?php echo e($product->id); ?>" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="detailModalLabel<?php echo e($product->id); ?>">Product Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="form-group mb-3">
                                            <label for="name">Name</label>
                                            <p><?php echo e($product->name); ?></p>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="description">Description</label>
                                            <p><?php echo e($product->description); ?></p>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="price">Price</label>
                                            <p>$<?php echo e($product->price); ?></p>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="stock">Stock</label>
                                            <p><?php echo e($product->stock); ?></p>
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="editModal<?php echo e($product->id); ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel<?php echo e($product->id); ?>" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel<?php echo e($product->id); ?>">Edit Product</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <form action="<?php echo e(route('products.update', $product->id)); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>
                                            <div class="form-group mb-3">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" value="<?php echo e($product->name); ?>" class="form-control" required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="description">Description</label>
                                                <textarea name="description" class="form-control" required><?php echo e($product->description); ?></textarea>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="price">Price</label>
                                                <input type="number" name="price" value="<?php echo e($product->price); ?>" step="0.01" class="form-control" required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="stock">Stock</label>
                                                <input type="number" name="stock" value="<?php echo e($product->stock); ?>" class="form-control" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Update Product</button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Product Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addProductModalLabel">Add New Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo e(route('products.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="price">Price</label>
                <input type="number" name="price" step="0.01" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="stock">Stock</label>
                <input type="number" name="stock" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    $(document).ready(function() {
        // Initialize DataTables
        $('#products-table').DataTable();

        // Initialize Bootstrap tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
          return new bootstrap.Tooltip(tooltipTriggerEl)
        });
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MaxyAcademy\Day26\Tugas-day26\resources\views/products/index.blade.php ENDPATH**/ ?>