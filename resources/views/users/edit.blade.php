@extends('layouts.backend')

@section('content')
<div class="block block-rounded col-md-12">
    <div class="block-header block-header-default">
        <h3 class="block-title">Add Company</h3>
    </div>
    <div class="block-content block-content-full">
        <div class="row">
            <div class="col-sm-6 col-md-6 mx-auto">
                <h2>Edit User</h2>
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="form-label" for="name_eng">English Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name_eng" name="name_eng" value="{{ old('name_eng', $user->name_eng) }}">
                        @error('name_eng')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label d-block text-end" for="name_ur">اردو نام <span class="text-danger">*</span></label>
                        <input type="text" class="form-control input-urdu" id="name_ur" name="name_ur" value="{{ old('name_ur', $user->name_ur) }}" autocomplete="off">
                        @error('name_ur')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label" for="father_name_eng">Father English Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="father_name_eng" name="father_name_eng" value="{{ old('father_name_eng', $user->father_name_eng) }}" >
                        @error('father_name_eng')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label d-block text-end" for="father_name_ur">والد کا نام (اردو) <span class="text-danger">*</span></label>
                        <input type="text" class="form-control input-urdu" id="father_name_ur" name="father_name_ur" value="{{ old('father_name_ur', $user->father_name_ur) }}" autocomplete="off">
                        @error('father_name_ur')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Shared keyboard container -->
                    <div id="keyboard" class="simple-keyboard mt-2" style="display: none;"></div>

                    {{-- Password fields are usually left blank during edit unless the user wants to change them --}}
                    <div class="mb-3">
                        <label>New Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Confirm New Password</label>
                        <input type="password" name="password_confirmation" class="form-control">
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                        <a href="{{ route('users.index') }}" class="btn btn-sm btn-alt-primary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
