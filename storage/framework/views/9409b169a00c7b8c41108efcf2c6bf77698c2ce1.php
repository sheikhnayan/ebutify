
<?php $__env->startSection('content'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section id="main-content" class="content">
      <div class="container-fluid">
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
              <tbody id="myTable">
                <?php $__currentLoopData = $homepage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td>HomePage Image <?php echo e($item->id); ?></td>
                  <td> <img  src="<?php echo e(asset('storage/'.$item->image)); ?>" alt="" class="img-fluid" style='height: auto; width: 200px; object-fit: contain'></td>
                  <form action="/super/homepage/<?php echo e($item->id); ?>" method="POST" enctype='multipart/form-data'>
                    <?php echo csrf_field(); ?>
                  <td><input class="form-control" type="file" name="image" required></td>
                  <td>
                    <input type="submit" value="Change" class="btn btn-primary">
                  </td>
                </form>
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
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\ebutify\ebutify_freelancer\resources\views/admin/homepage.blade.php ENDPATH**/ ?>