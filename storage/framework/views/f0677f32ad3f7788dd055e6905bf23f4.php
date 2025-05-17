<?php $__env->startSection('content'); ?>
<div class="block block-rounded col-md-12">
    <div class="block-header block-header-default">
        <h3 class="block-title">Create User</h3>
    </div>
    <div class="block-content block-content-full">
    <form action="<?php echo e(route('users.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="mb-4">
            <label class="form-label" for="name_eng">English Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="name_eng" name="name_eng" value="<?php echo e(old('name_eng')); ?>" placeholder="Enter a name in English">
            <?php $__errorArgs = ['name_eng'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-4">
            <label class="form-label" for="name_ur">اردو نام <span class="text-danger">*</span></label>
            <input type="text" class="form-control keyboardInput" id="name_ur" dir="rtl" name="name_ur" value="<?php echo e(old('name_ur')); ?>" placeholder="نام درج کریں" autocomplete="off">
            <?php $__errorArgs = ['name_ur'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-4">
            <label class="form-label" for="father_name_eng">Father English Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="father_name_eng" name="father_name_eng" value="<?php echo e(old('father_name_eng')); ?>"  placeholder="Enter father's name in English">
            <?php $__errorArgs = ['father_name_eng'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-4">
            <label class="form-label" for="father_name_ur">والد کا نام (اردو) <span class="text-danger">*</span></label>
            <input type="text" class="form-control keyboardInput" id="father_name_ur" dir="rtl" name="father_name_ur" value="<?php echo e(old('father_name_ur')); ?>"  placeholder="والد کا نام درج کریں" autocomplete="off">
            <?php $__errorArgs = ['father_name_ur'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- Shared keyboard container -->
        <div id="keyboard" class="simple-keyboard mt-2" style="display: none;"></div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo e(old('email')); ?>"  class="form-control" value="<?php echo e(old('email')); ?>">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation"   class="form-control">
            <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-sm btn-primary">Save</button>
            <a href="<?php echo e(route('users.index')); ?>" class="btn btn-sm btn-alt-primary">Cancel</a>
        </div>
    </form>
</div>
</div>
</div>
<!-- Simple Keyboard JS -->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\icon-villas\resources\views/users/create.blade.php ENDPATH**/ ?>