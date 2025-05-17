@extends('layouts.backend')

{{-- Styles --}}
@section('content')
<div class="block block-rounded col-md-6">
    <div class="block-header block-header-default">
        <h3 class="block-title">Add Main Head</h3>
    </div>
    <div class="block-content block-content-full">
        <form action="{{ route('main-heads.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-4">
                    <p class="fs-sm text-muted">
                        Please enter the main head names in both Urdu and English.
                    </p>
                </div>
                <div class="col-lg-8 col-xl-5">

                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="name_english" name="name_eng" placeholder="Enter name in English" autocomplete="off">
                        <label for="name_english">Name English</label>
                    </div>

                    <div class="form-floating mb-4">
                        <input type="text" class="form-control input-urdu" id="name_ur" name="name_ur" placeholder="نام درج کریں" autocomplete="off">
                        <label for="name_urdu">اردو نام</label>
                        <div id="keyboard" class="simple-keyboard mt-2"></div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('main-heads.index') }}" class="btn btn-dark">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
