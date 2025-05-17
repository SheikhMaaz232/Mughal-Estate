<?php $__env->startSection('content'); ?>
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-1">Groups</h1>
                <h2 class="fs-base lh-base fw-medium text-muted mb-0">List of all groups</h2>
            </div>
            <a href="<?php echo e(route('groups.create')); ?>" class="btn btn-sm btn-primary">Add New Group</a>

        </div>

    </div>

</div>
<div class="content">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Group Code</th>
                <th>Name (EN)</th>
                <th>Name (UR)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($group->group_code); ?></td>
                    <td><?php echo e($group->name_eng); ?></td>
                    <td><?php echo e($group->name_ur); ?></td>
                    <td>
                        <a href="<?php echo e(route('groups.show', $group)); ?>" class="btn btn-sm btn-info">View</a>
                        <a href="<?php echo e(route('groups.edit', $group)); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form action="<?php echo e(route('groups.destroy', $group)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\icon-villas\resources\views/groups/index.blade.php ENDPATH**/ ?>