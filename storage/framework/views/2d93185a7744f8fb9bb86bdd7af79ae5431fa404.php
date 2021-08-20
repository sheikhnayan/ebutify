
<?php $__env->startSection('content'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section id="main-content" class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form class="row mb-3 mt-1">
                    <div class="col-12 col-sm pr-sm-0">
                        <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search for names here... " aria-label="Recipient's username">
                    </div>
                    <div class="col-12 col-sm-auto pl-sm-0">
                    </div>
                    <div class="col-12 col-sm-auto pl-sm-0">
                        <a href="<?php echo e(route ('uploadPage')); ?>" class="btn my-2 my-sm-0 btn-primary">Add New Product</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- Info table -->
        <div class="row mr-2">
          <div class="col-12 product-table bg-white pl-0 pr-0 ml-2 shadow-sm">

            <table class="bg-white table table-hover table-bordered table-responsive">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Image</th>
                  <th>Product Name</th>
                  <th>Price</th>
                  <th>Cost</th>
                  <th>Profit</th>
                  <th>Order</th>
                  <th>Total Revinue</th>
                  <th>Date</th>
                  <th>Uploader Name</th>
                  <th width="100">Action</th>
                </tr>
              </thead>
              <?php if($productDetails->count() == 0): ?>
              <tr>
                  <td colspan="5">No products to display.</td>
              </tr>
              <?php endif; ?>
              <tbody id="myTable">
                <?php $i=1 ?>
                <?php $__currentLoopData = $productDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($productDetail->id); ?></td>
                  <?php $__currentLoopData = $productDetail->productImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <td><img class="tbl-img" src="<?php echo e($productImage->image_link_1); ?>"></td>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <td><?php echo e($productDetail->product_name); ?></td>
                  <td>$<?php echo e($productDetail->price); ?></td>
                  <td>$<?php echo e($productDetail->cost); ?></td>
                  <td>$<?php echo e($productDetail->profit); ?></td>
                  <td><?php echo e($productDetail->total_order); ?></td>
                  <td><?php echo e($productDetail->total_revenue); ?></td>
                  <td><?php echo e($productDetail->created_at); ?></td>
                  <td><?php echo e($productDetail->uploader_name); ?></td>
                  <td>
                    <a href="<?php echo e(route ('product-edit', ['id' => $productDetail->id])); ?>" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <?php $i++ ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>  

            <nav aria-label="Page navigation">
              <ul class="pagination justify-content-center">
                <?php echo e($productDetails->links()); ?>

              </ul>
            </nav>
      
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.freelancer-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\ebutify\ebutify_freelancer\resources\views/freelancer/product-research-new.blade.php ENDPATH**/ ?>