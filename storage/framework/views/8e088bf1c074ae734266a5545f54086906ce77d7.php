<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <p>Courses</p>
            <a href="<?php echo e(route('admin.courses.create')); ?>" class="btn btn-primary float-right">Add Course</a>
          </div>
          <div class="card-body">
            <?php if(count($courses)=== 0): ?>
              <p>There are no Courses!</p>
            <?php else: ?>
            <table id="table-festivals" class="table table-hover">
                <thead>
                  <th>Name</th>
                  <th>Course Code</th>
                  <th>CAO Points</th>
                  <th>Start Date</th>
                  <th>Contact Email</th>
                  <th></th>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr data-id="<?php echo e($course->id); ?>">
                      <td><?php echo e($course->name); ?></td>
                      <td><?php echo e($course->course_code); ?></td>
                      <td><?php echo e($course->cao_points); ?></td>
                      <td><?php echo e($course->start_date); ?></td>
                      <td><?php echo e($course->contact_email); ?></td>

                      <td>
                        <a href="<?php echo e(route('admin.courses.show', $course->id)); ?>" class="btn btn-primary">View</a>
                        <a href="<?php echo e(route('admin.courses.edit', $course->id)); ?>" class="btn btn-warning">Edit</a>
                        <form style="display:inline-block" method="POST" action="<?php echo e(route('admin.courses.destroy', $course->id)); ?>">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token"  value="<?php echo e(csrf_token()); ?>">
                          <button type="submit" class="form-cotrol btn btn-danger">Delete</a>
                        </form>
                      </td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/alexmus/Desktop/Advanced Web Development/Laravel/myCA/resources/views/admin/courses/index.blade.php ENDPATH**/ ?>