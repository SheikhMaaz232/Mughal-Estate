<?php $__env->startSection('content'); ?>
<div class="content">
    <h2>Group Details</h2>
    <ul>
        <li><strong>Group Code:</strong> <?php echo e($group->group_code); ?></li>
        <li><strong>Name (EN):</strong> <?php echo e($group->name_eng); ?></li>
        <li><strong>Name (UR):</strong> <?php echo e($group->name_ur); ?></li>
        <li><strong>Description (EN):</strong> <?php echo e($group->description_eng); ?></li>
        <li><strong>Description (UR):</strong> <?php echo e($group->description_ur); ?></li>
        <li><strong>Address (EN):</strong> <?php echo e($group->address_eng); ?></li>
        <li><strong>Address (UR):</strong> <?php echo e($group->address_ur); ?></li>
        <li><strong>Vehicle Type:</strong> <?php echo e($group->v_type); ?></li>
        <li><strong>Image:</strong><br>
            <img src="<?php echo e(asset('storage/' . $group->image)); ?>" alt="Image" width="150">
        </li>
    </ul>
    <a href="<?php echo e(route('groups.index')); ?>" class="btn btn-secondary">Back to List</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\icon-villas\resources\views/groups/show.blade.php ENDPATH**/ ?>