<div class="form-group mb-4 com-md-4">
    <label for="group_code">Group Code</label>
    <input type="text" name="group_code" class="form-control" value="{{ old('group_code', $group->group_code ?? '') }}" autocomplete="off">
    @error('group_code')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-4">
    <label for="name_eng">Name (English)</label>
    <input type="text" name="name_eng" class="form-control" value="{{ old('name_eng', $group->name_eng ?? '') }}" autocomplete="off">
    @error('name_eng')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-4">
    <label for="name_ur">اردو نام</label>
    <input type="text" name="name_ur" class="form-control keyboardInput" id="name_ur" dir="rtl" class="" data-keyboard-id="keyboard-name-ur" value="{{ old('name_ur', $group->name_ur ?? '') }}" autocomplete="off">
    <div id="keyboard-name-ur" class="simple-keyboard mt-2 keyboard-container" style="display: none;"></div>
    @error('name_ur')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-4">
    <label for="description_eng">Description (English)</label>
    <textarea name="description_eng" class="form-control" autocomplete="off">{{ old('description_eng', $group->description_eng ?? '') }}</textarea>
    @error('description_eng')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-4">
    <label for="description_ur">Description (اردو)</label>
    <textarea name="description_ur" class="form-control keyboardInput" id="description_ur" dir="rtl" data-keyboard-id="keyboard-description-ur" autocomplete="off">{{ old('description_ur', $group->description_ur ?? '') }}</textarea>
    <div id="keyboard-description-ur" class="simple-keyboard mt-2 keyboard-container" style="display: none;"></div>
    @error('description_ur')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-4">
    <label for="address_eng">Address (English)</label>
    <input type="text" name="address_eng" class="form-control" value="{{ old('address_eng', $group->address_eng ?? '') }}" autocomplete="off">
    @error('address_eng')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-4">
    <label for="address_ur">Address (اردو)</label>
    <input type="text" name="address_ur" class="form-control keyboardInput" dir="rtl" id="address_ur" data-keyboard-id="keyboard-address-ur" value="{{ old('address_ur', $group->address_ur ?? '') }}" autocomplete="off">
    <div id="keyboard-address-ur" class="simple-keyboard mt-2 keyboard-container" style="display: none;"></div>
    @error('address_ur')
        <div class="text-danger">{{ $message }}</div>
    @enderror
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

{{--  <div class="form-group mb-4">
    <label for="image">Group Image</label>
    <input type="file" name="image" class="form-control-file">
    @error('image')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>  --}}

<div class="d-flex gap-2">
    <button type="submit" class="btn btn-sm btn-primary">
        @if(isset($group) && $group->id)
            Update
        @else
            Save
        @endif
    </button>
    <a href="{{ route('groups.index') }}" class="btn btn-sm btn-alt-primary">Cancel</a>
</div>