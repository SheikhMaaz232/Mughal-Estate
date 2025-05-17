<?php $__env->startSection('content'); ?>
<div class="block block-rounded col-md-12">
    <div class="block-header block-header-default">
        <h3 class="block-title">Add Company</h3>
    </div>
    <div class="block-content block-content-full">
        <form class="js-validation" action="<?php echo e(route('companies.store')); ?>" method="POST" novalidate="novalidate">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-lg-4">
                    <p class="fs-sm text-muted">
                        Please enter the company names in both Urdu and English.
                    </p>
                </div>
                <div class="col-lg-8 col-xl-5">
                    <div class="mb-4">
                        <label class="form-label" for="name_eng">English Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name_eng" name="name_eng" value="<?php echo e(old('name_eng')); ?>" placeholder="Enter a name in english">
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
                        <input type="text" class="form-control keyboardInput" dir="rtl" id="name_ur" name="name_ur" value="<?php echo e(old('name_ur')); ?>" placeholder="نام درج کریں" autocomplete="off">
                        
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

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                        <a href="<?php echo e(route('companies.index')); ?>" class="btn btn-sm btn-alt-primary">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\icon-villas\resources\views/companies/create.blade.php ENDPATH**/ ?>