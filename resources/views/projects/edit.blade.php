@extends('layouts.backend')

@section('content')
<div class="block block-rounded col-md-12">
    <div class="block-header block-header-default">
        <h3 class="block-title">Edit Project</h3>
    </div>
    <div class="block-content block-content-full">
        <form action="{{ route('projects.update', $project->id) }}" method="POST">
            @include('projects.partials.form',['project' => $project])
        </form>
    </div>
</div>
@endsection
