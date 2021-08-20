
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
                        <a href="/super/review/create" class="btn my-2 my-sm-0 btn-primary">Add New Review</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- Info table -->
        <div class="row mr-2">
          <div class="col-12 product-table bg-white pl-0 pr-0 ml-2 shadow-sm">
                        <?php if(session('errors')): ?>
                          <div class="alert alert-danger">
                              <ul>
                                      <li><?php echo e($errors); ?></li>
                              </ul>
                          </div>
                          <?php endif; ?>
                          <?php if(session('status')): ?>
                              <div class="alert alert-success">
                                  <?php echo e(session('status')); ?>

                              </div>
                          <?php endif; ?>
            <table class="bg-white table table-hover table-bordered table-responsive">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Designation</th>
                  <th>Review</th>
                  <th>Image</th>
                  <th width="100">Action</th>
                </tr>
              </thead>
              <tbody id="myTable">
                <?php $i=1 ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($item->id); ?></td>
                  <td> <?php echo e($item->name); ?></td>
                  <td><?php echo e($item->designation); ?></td>
                  <td><?php echo e($item->review); ?></td>
                  <td> <img  src="<?php echo e(asset('storage/'.$item->image)); ?>" alt="" class="img-fluid" style='height: auto; width: 200px; object-fit: contain'> </td>
                  <td>
                    <a href="/super/review/edit/<?php echo e($item->id); ?>" class="btn btn-primary">Edit</a>
                    <a href="/super/review/delete/<?php echo e($item->id); ?>" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>  

            <nav aria-label="Page navigation">
              <ul class="pagination justify-content-center">
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
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\ebutify\ebutify_freelancer\resources\views/admin/review-index.blade.php ENDPATH**/ ?>