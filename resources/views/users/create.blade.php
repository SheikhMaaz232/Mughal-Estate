@extends('layouts.backend')

@section('content')
<div class="block block-rounded col-md-12">
    <div class="block-header block-header-default">
        <h3 class="block-title">Create User</h3>
    </div>
    <div class="block-content block-content-full">
    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="form-label" for="name_eng">English Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="name_eng" name="name_eng" value="{{ old('name_eng') }}" placeholder="Enter a name in English">
            @error('name_eng')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label class="form-label" for="name_ur">اردو نام <span class="text-danger">*</span></label>
            <input type="text" class="form-control keyboardInput" id="name_ur" dir="rtl" name="name_ur" value="{{ old('name_ur') }}" placeholder="نام درج کریں" autocomplete="off">
            @error('name_ur')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label class="form-label" for="father_name_eng">Father English Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="father_name_eng" name="father_name_eng" value="{{ old('father_name_eng') }}"  placeholder="Enter father's name in English">
            @error('father_name_eng')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label class="form-label" for="father_name_ur">والد کا نام (اردو) <span class="text-danger">*</span></label>
            <input type="text" class="form-control keyboardInput" id="father_name_ur" dir="rtl" name="father_name_ur" value="{{ old('father_name_ur') }}"  placeholder="والد کا نام درج کریں" autocomplete="off">
            @error('father_name_ur')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>

        <!-- Shared keyboard container -->
        <div id="keyboard" class="simple-keyboard mt-2" style="display: none;"></div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}"  class="form-control" value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
            @error('password')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation"   class="form-control">
            @error('password_confirmation')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-sm btn-primary">Save</button>
            <a href="{{ route('users.index') }}" class="btn btn-sm btn-alt-primary">Cancel</a>
        </div>
    </form>
</div>
</div>
</div>
<!-- Simple Keyboard JS -->
{{--  <script src="https://cdn.jsdelivr.net/npm/simple-keyboard@3/build/index.js"></script>  --}}


@endsection
