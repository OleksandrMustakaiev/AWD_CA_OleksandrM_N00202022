<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Edit Course
          </div>
          <div class="card-body">
          <!-- this block is ran if the validation code in the controller fails
          this code looks after displaying the correct error message to the user -->
            <?php if($errors->any()): ?>
              <div class="alert alert-danger">
                <ul>
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
              </div>
            <?php endif; ?>
            <form method="POST" action="<?php echo e(route('admin.courses.update', $course->id)); ?>">
              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
              <input type="hidden" name="_method" value="PUT">

              <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name', $course->name)); ?>" />
              </div>
              <div class="form-group">
                <label for="description">Course Code</label>
                <input type="text" class="form-control" id="course_code" name="course_code" value="<?php echo e(old('course_code', $course->course_code)); ?>" />
              </div>
              <div class="form-group">
                <label for="location">CAO Points</label>
                <input type="text" class="form-control" id="cao_points" name="cao_points" value="<?php echo e(old('cao_points', $course->cao_points)); ?>" />
              </div>
              <div class="form-group">
                <label for="start_date">Start Date</label>
                <input type="date" class="form-control" id="start_date" name="start_date" value="<?php echo e(old('start_date', $course->start_date)); ?>" />
              </div>
              <div class="form-group">
                <label for="contact_email">Contact Email</label>
                <input type="email" class="form-control" id="contact_email" name="contact_email" value="<?php echo e(old('contact_email', $course->contact_email)); ?>" />
              </div>

              <a href="<?php echo e(route('admin.courses.index')); ?>" class="btn btn-outline">Cancel</a>
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/alexmus/Desktop/Advanced Web Development/Laravel/myCA/resources/views/admin/courses/edit.blade.php ENDPATH**/ ?>