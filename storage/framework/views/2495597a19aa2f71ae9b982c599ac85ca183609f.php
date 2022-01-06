<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Courses</div>

                    <div class="card-body">
                        <?php if(count($courses)=== 0): ?>
                        <p>There is no Courses!</p>
                        <?php else: ?>
                        <table id="table-festivals" class="table table-hover">
                            <thead>
                                <th>Course Name</th>
                                <th>Course Code</th>
                                <th>CAO Points</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr data-id="<?php echo e($course->id); ?>">
                                    <td><?php echo e($course->name); ?></td>
                                    <td><?php echo e($course->course_code); ?></td>
                                    <td><?php echo e($course->cao_points); ?></td>
                                    <td></td>
                                    <td>
                                        <a href="<?php echo e(route('user.courses.show', $course->id)); ?>" class="btn btn-primary">View</a>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/alexmus/Desktop/Advanced Web Development/Laravel/myCA/resources/views/user/courses/index.blade.php ENDPATH**/ ?>