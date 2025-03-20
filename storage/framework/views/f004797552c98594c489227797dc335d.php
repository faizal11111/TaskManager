

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h2 class="mb-4">Task List</h2>
    
    <a href="<?php echo e(route('tasks.create')); ?>" class="btn btn-primary mb-3">Add New Task</a>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($task->id); ?></td>
                    <td><?php echo e($task->title); ?></td>
                    <td><?php echo e($task->description); ?></td>
                    <td><?php echo e(ucfirst($task->status)); ?></td>
                    <td>
                        <a href="<?php echo e(route('tasks.edit', $task->id)); ?>" class="btn btn-warning btn-sm">Edit</a>

                        <form action="<?php echo e(route('tasks.destroy', $task->id)); ?>" method="POST" class="d-inline delete-form">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<script>
    // jQuery Confirmation Before Deleting Task
    $(document).ready(function() {
        $(".delete-form").submit(function(event) {
            if (!confirm("Are you sure you want to delete this task?")) {
                event.preventDefault();
            }
        });
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH R:\PROJECTS\TaskManger\TaskManagers\resources\views/tasks/index.blade.php ENDPATH**/ ?>