@extends('layouts.backend')

@section('content')
<div class="block block-rounded col-md-12">
    <div class="block-header block-header-default">
        <h3 class="block-title">Edit Group</h3>
    </div>
    <div class="block-content block-content-full">
        <form action="{{ route('groups.update', $group) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        @include('groups.partials.form', ['group' => $group])
    </form>
</div>
</div>
@endsection
