

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h2>Add Task</h2>

    <form action="<?php echo e(route('tasks.store')); ?>" method="POST" id="task-form">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-control">
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Add Task</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    $(document).ready(function () {
        $('#task-form').submit(function (event) {
            let title = $('input[name="title"]').val().trim();
            if (title === '') {
                alert("Title cannot be empty.");
                event.preventDefault();
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH R:\PROJECTS\TaskManger\TaskManagers\resources\views/tasks/create.blade.php ENDPATH**/ ?>