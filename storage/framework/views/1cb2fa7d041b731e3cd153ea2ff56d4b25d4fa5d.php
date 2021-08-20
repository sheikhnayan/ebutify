
<?php $__env->startSection('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section class="amazon-form-content">
        <div class="container-fluid">
            <div class="row">
              <div class=" col-12">
                <div class="row amazon-form-main shadow bg-white m-4">
                    <div class="col-12 amazon-form-header shadow p-3">
                      <?php if(isset($data)): ?>
                      <h3>Edit Review</h3>
                      <?php else: ?>
                      <h3>Add New Review</h3>
                      <?php endif; ?>
                    </div>
                    <div class="col-12">
                      <div class="row pt-3 pl-3">
                        <div class="col-lg-12 amazon-form-content pl-2 pr-3 pb-4">
                          <?php if($errors->any()): ?>
                          <div class="alert alert-danger">
                              <ul>
                                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <li><?php echo e($error); ?></li>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </ul>
                          </div>
                          <?php endif; ?>
                          <?php if(session('status')): ?>
                              <div class="alert alert-success">
                                  <?php echo e(session('status')); ?>

                              </div>
                          <?php endif; ?>
                          <?php if(isset($data)): ?>
                          <form action="/super/review/update/<?php echo e($data->id); ?>" method="post" enctype='multipart/form-data'> 
                            <?php else: ?>
                          <form action="/super/review" method="post" enctype='multipart/form-data'>
                            <?php endif; ?>
                            <?php echo csrf_field(); ?>
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" id="" value="<?php echo e($data->name ?? ''); ?>" placeholder="Enter Reviewer's Name"> <br>

                            <label for="">Designation</label>
                            <input type="text" class="form-control" name="designation" id="" value="<?php echo e($data->designation ?? ''); ?>" placeholder="Enter Reviewer's designation"> <br>

                            <label for="">Reviewer's image</label>
                            <?php if(isset($data)): ?>
                            <img class="img-fluid" src="<?php echo e(asset('storage/'.$data->image)); ?>" alt="" width="200px">
                            <?php endif; ?>
                            <input type="file" class="form-control" name="image" id=""> <br>

                            <label for="">Review</label>
                            <textarea class="form-control" name="review"  cols="30" rows="10" placeholder="Enter the Review"> <?php echo e($data->review ?? ''); ?></textarea>

                            <input class="form-control btn btn-success" type="submit"
                            <?php if(isset($data)): ?>
                            value="Update"
                            <?php else: ?>
                              value="Create" 
                            <?php endif; ?>
                             >
                          </form>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\ebutify\ebutify_freelancer\resources\views/admin/review-create.blade.php ENDPATH**/ ?>