@extends('layouts.backend')

@section('content')
<div class="block block-rounded col-md-12">
    <div class="block-header block-header-default">
        <h3 class="block-title">Edit Company</h3>
    </div>
    <div class="block-content block-content-full">
        <form action="{{ route('companies.update', $company->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-4">
                    <p class="fs-sm text-muted">
                        Please enter the company names in both Urdu and English.
                    </p>
                </div>
                <div class="col-lg-8 col-xl-5">
                    <div class="mb-4">
                        <label class="form-label" for="name_eng">English Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name_eng" name="name_eng" placeholder="Enter a name in english" value="{{ old('name_eng', $company->name_eng) }}">
                        @error('name_eng')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror  
                    </div>

                    <div class="mb-4">
                        <label class="form-label" for="name_ur">اردو نام <span class="text-danger">*</span></label>
                        {{--  <label for="name_urdu">اردو نام</label>  --}}
                        <input type="text" class="form-control keyboardInput"  dir="rtl" id="name_ur" name="name_ur" placeholder="Enter a in urdu" value="{{ old('name_ur', $company->name_ur) }}">
                        {{--  <div id="keyboard" class="simple-keyboard mt-2"></div>  --}}
                        @error('name_ur')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror  
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                        <a href="{{ route('companies.index') }}" class="btn btn-sm btn-alt-primary">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
