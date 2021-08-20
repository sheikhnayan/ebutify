
<?php $__env->startSection('content'); ?>
<script src="<?php echo e(asset('admin/assets/ckeditor/ckeditor.js')); ?>"></script>
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
                      <h3>Edit Blog</h3>
                      <?php else: ?>
                      <h3>Add New Blog</h3>
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
                          <form action="/super/blog/update/<?php echo e($data->id); ?>" method="post" enctype='multipart/form-data'> 
                            <?php else: ?>
                          <form action="/super/blog" method="post" enctype='multipart/form-data'>
                            <?php endif; ?>
                            <?php echo csrf_field(); ?>
                            <label for="">Blog Header</label>
                            <input type="text" class="form-control" name="heading" id="" value="<?php echo e($data->heading ?? ''); ?>" placeholder="Enter the blog header"> <br>

                            <label for="">Blog Category</label><br>
                            <select class="form-control" name="category_id">
                              <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option <?php echo e($data->category_id ?? '' == $item->id ? 'selected' : ''); ?> value="<?php echo e($item->id); ?>"><?php echo e($item->category_name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select> <br><br>

                            <label for="">Blog Tags</label>
                            <input type="text" class="form-control" name="tags" id="" value="<?php echo e($data->tags ?? ''); ?>" placeholder="Enter the blog tags with comma after every tags!"> <br>


                            <label for="">Is Popular?</label>
                            <input class="form-control" value="<?php echo e($data->popular ?? 'false'); ?>" <?php echo e($data->popular ?? '' == 'false' ? 'checked' : ''); ?> type="checkbox" name="popular" id="">

                            <label for="">Is Featured?</label>
                            <input class="form-control" value="<?php echo e($data->featured ?? 'false'); ?>" <?php echo e($data->featured ?? '' == 'false' ? 'checked' : ''); ?> type="checkbox" name="featured" id="">

                            <label for="">Blog header image</label>
                            <?php if(isset($data)): ?>
                            <img class="img-fluid" src="<?php echo e(asset('storage/'.$data->image)); ?>" alt="" width="200px">
                            <?php endif; ?>
                            <input type="file" class="form-control" name="image" id=""> <br>

                            <textarea class="form-control" name="editor"></textarea><br>
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
  <script>
    CKEDITOR.replace('editor');

    CKEDITOR.instances['editor'].setData(<?php echo json_encode($data->body ?? ''); ?>)
  </script>
  <script>
    function featured(){
      console.log(this);
      var f = document.getElementById('featured');
      console.log(f.value());
      if( f.value == 0){
        f.setAttribute('value','false');
      }
    }    
  </script>
  <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\ebutify\ebutify_freelancer\resources\views/admin/blog-create.blade.php ENDPATH**/ ?>