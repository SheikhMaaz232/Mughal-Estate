@extends('layouts.backend')

@section('content')
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-1">Main Heads</h1>
                <h2 class="fs-base lh-base fw-medium text-muted mb-0">List of all main heads</h2>
            </div>
            <a href="{{ route('main-heads.create') }}" class="btn btn-primary mt-3 mt-sm-0">Add New</a>
        </div>
    </div>
</div>

<div class="content">
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Main Heads Table</h3>
        </div>
        <div class="block-content block-content-full">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">#</th>
                        <th>Name (EN)</th>
                        <th>Name (UR)</th>
                        <th style="width: 150px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mainHeads as $index => $mainHead)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>{{ $mainHead->name_english }}</td>
                        <td>{{ $mainHead->name_urdu }}</td>
                        <td>
                            <a href="{{ route('main-heads.edit', $mainHead->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('main-heads.destroy', $mainHead->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Del</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
