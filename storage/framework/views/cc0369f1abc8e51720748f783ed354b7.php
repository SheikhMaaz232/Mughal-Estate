<?php $__env->startSection('content'); ?>
<div class="container py-4">
    <h3 class="mb-4">Audit Logs</h3>

    
    <form method="GET" class="row g-3 mb-4">
        <div class="col-md-3">
            <select name="model" class="form-select">
                <option value="">All Models</option>
                <?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($model); ?>" <?php echo e(request('model') == $model ? 'selected' : ''); ?>>
                        <?php echo e(class_basename($model)); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="col-md-3">
            <select name="event" class="form-select">
                <option value="">All Actions</option>
                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($event); ?>" <?php echo e(request('event') == $event ? 'selected' : ''); ?>>
                        <?php echo e(ucfirst($event)); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="col-md-3">
            <select name="user_id" class="form-select">
                <option value="">All Users</option>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($user->id); ?>" <?php echo e(request('user_id') == $user->id ? 'selected' : ''); ?>>
                        <?php echo e($user->name); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="col-md-3">
            <button class="btn btn-primary w-100">Filter</button>
        </div>
    </form>

    
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>User</th>
                    <th>Model</th>
                    <th>Action</th>
                    <th>Record ID</th>
                    <th>Old Values</th>
                    <th>New Values</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $audits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $audit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($audit->created_at->format('d-m-Y H:i:s')); ?></td>
                        <td><?php echo e(optional($audit->user)->name_eng ?? 'System'); ?></td>
                        <td><?php echo e(class_basename($audit->auditable_type)); ?></td>
                        <td><?php echo e(ucfirst($audit->event)); ?></td>
                        <td><?php echo e($audit->auditable_id); ?></td>
                        <td>
                            <pre class="mb-0"><?php echo e(json_encode($audit->old_values, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)); ?></pre>
                        </td>
                        <td>
                            <pre class="mb-0"><?php echo e(json_encode($audit->new_values, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)); ?></pre>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="7">No audit logs found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <?php echo e($audits->withQueryString()->links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\icon-villas\resources\views/audit-logs/index.blade.php ENDPATH**/ ?>