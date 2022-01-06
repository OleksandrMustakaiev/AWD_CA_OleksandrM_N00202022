<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Course <?php echo e($course->title); ?>

                </div>
                <div class="card-body">
                    <table id="table-festivals" class="table table-hover">
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td><?php echo e($course->name); ?></td>
                            </tr>
                            <tr>
                                <td>Course Code</td>
                                <td><?php echo e($course->course_code); ?></td>
                            </tr>
                            <tr>
                                <td>CAO Points</td>
                                <td><?php echo e($course->cao_points); ?></td>
                            </tr>
                            <tr>
                                <td>Start Date</td>
                                <td><?php echo e($course->start_date); ?></td>
                            </tr>
                            <tr>
                                <td>Contact Email</td>
                                <td><?php echo e($course->contact_email); ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <a href="<?php echo e(route('admin.courses.index')); ?>" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/alexmus/Desktop/Advanced Web Development/Laravel/myCA/resources/views/admin/courses/show.blade.php ENDPATH**/ ?>