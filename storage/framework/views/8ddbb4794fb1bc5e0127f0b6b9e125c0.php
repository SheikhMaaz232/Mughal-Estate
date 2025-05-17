<div class="form-group mb-4 com-md-4">
    <label for="group_code">Group Code</label>
    <input type="text" name="group_code" class="form-control" value="<?php echo e(old('group_code', $group->group_code ?? '')); ?>" autocomplete="off">
    <?php $__errorArgs = ['group_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="text-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="form-group mb-4">
    <label for="name_eng">Name (English)</label>
    <input type="text" name="name_eng" class="form-control" value="<?php echo e(old('name_eng', $group->name_eng ?? '')); ?>" autocomplete="off">
    <?php $__errorArgs = ['name_eng'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="text-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="form-group mb-4">
    <label for="name_ur">اردو نام</label>
    <input type="text" name="name_ur" class="form-control keyboardInput" id="name_ur" dir="rtl" class="" data-keyboard-id="keyboard-name-ur" value="<?php echo e(old('name_ur', $group->name_ur ?? '')); ?>" autocomplete="off">
    <div id="keyboard-name-ur" class="simple-keyboard mt-2 keyboard-container" style="display: none;"></div>
    <?php $__errorArgs = ['name_ur'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="text-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="form-group mb-4">
    <label for="description_eng">Description (English)</label>
    <textarea name="description_eng" class="form-control" autocomplete="off"><?php echo e(old('description_eng', $group->description_eng ?? '')); ?></textarea>
    <?php $__errorArgs = ['description_eng'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="text-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="form-group mb-4">
    <label for="description_ur">Description (اردو)</label>
    <textarea name="description_ur" class="form-control keyboardInput" id="description_ur" dir="rtl" data-keyboard-id="keyboard-description-ur" autocomplete="off"><?php echo e(old('description_ur', $group->description_ur ?? '')); ?></textarea>
    <div id="keyboard-description-ur" class="simple-keyboard mt-2 keyboard-container" style="display: none;"></div>
    <?php $__errorArgs = ['description_ur'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="text-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="form-group mb-4">
    <label for="address_eng">Address (English)</label>
    <input type="text" name="address_eng" class="form-control" value="<?php echo e(old('address_eng', $group->address_eng ?? '')); ?>" autocomplete="off">
    <?php $__errorArgs = ['address_eng'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="text-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="form-group mb-4">
    <label for="address_ur">Address (اردو)</label>
    <input type="text" name="address_ur" class="form-control keyboardInput" dir="rtl" id="address_ur" data-keyboard-id="keyboard-address-ur" value="<?php echo e(old('address_ur', $group->address_ur ?? '')); ?>" autocomplete="off">
    <div id="keyboard-address-ur" class="simple-keyboard mt-2 keyboard-container" style="display: none;"></div>
    <?php $__errorArgs = ['address_ur'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="text-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="block-content block-content-full">
    <h2 class="content-heading border-bottom mb-4 pb-2">Asynchronous File Uploads</h2>
    <div class="row">
      <div class="col-lg-4">
        <p class="fs-sm text-muted">
          Drag and drop sections for your file uploads
        </p>
      </div>
      <div class="col-lg-8 col-xl-5">
        <form class="dropzone dz-clickable" action="be_forms_plugins.html"><div class="dz-default dz-message"><button class="dz-button" type="button">Drop files here to upload</button></div></form>
      </div>
    </div>
  </div>



<div class="d-flex gap-2">
    <button type="submit" class="btn btn-sm btn-primary">
        <?php if(isset($group) && $group->id): ?>
            Update
        <?php else: ?>
            Save
        <?php endif; ?>
    </button>
    <a href="<?php echo e(route('groups.index')); ?>" class="btn btn-sm btn-alt-primary">Cancel</a>
</div><?php /**PATH C:\laragon\www\icon-villas\resources\views/groups/partials/form.blade.php ENDPATH**/ ?>