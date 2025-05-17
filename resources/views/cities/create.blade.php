@extends('layouts.backend')

@extends('layouts.backend')

@section('content')
<div class="block block-rounded col-md-12">
    <div class="block-header block-header-default">
        <h3 class="block-title">Add City</h3>
    </div>
    <div class="block-content block-content-full">

        <form action="{{ route('cities.store') }}" method="POST">
            @csrf
            
            <div class="row">
                <div class="col-md-3 mx-auto">
                    <div class="form-group mb-4">
                        <label for="name_en">Name</label>
                        <input type="text" name="name_en" class="form-control" maxlength="100" value="{{ old('name_en', $group->name_en ?? '') }}" autocomplete="off">
                        @error('name_en')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-4 text-end">
                        <label for="name_ur">اردو نام</label>
                        <input type="text" name="name_ur" class="form-control keyboardInput" maxlength="100" id="name_ur" dir="rtl" data-keyboard-id="keyboard-name-ur" value="{{ old('name_ur', $group->name_ur ?? '') }}" autocomplete="off">
                        <div id="keyboard-name-ur" class="simple-keyboard mt-2 keyboard-container" style="display: none;"></div>
                        @error('name_ur')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-sm btn-primary">Save</button>
                <a href="{{ route('cities.index') }}" class="btn btn-sm btn-alt-primary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection