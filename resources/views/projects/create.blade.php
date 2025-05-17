@extends('layouts.backend')

@section('content')
<div class="block block-rounded col-md-12">
    <div class="block-header block-header-default">
        <h3 class="block-title">Add Project</h3>
    </div>
    <div class="block-content block-content-full">
        <form action="{{ route('projects.store') }}" method="POST">
            @include('projects.partials.form')
        </form>
    </div>
</div>
@endsection
