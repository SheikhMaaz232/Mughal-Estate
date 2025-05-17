@extends('layouts.backend')

@section('content')
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-1">Groups</h1>
                <h2 class="fs-base lh-base fw-medium text-muted mb-0">List of all groups</h2>
            </div>
            <a href="{{ route('groups.create') }}" class="btn btn-sm btn-primary">Add New Group</a>

        </div>

    </div>

</div>
<div class="content">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Group Code</th>
                <th>Name (EN)</th>
                <th>Name (UR)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($groups as $group)
                <tr>
                    <td>{{ $group->group_code }}</td>
                    <td>{{ $group->name_eng }}</td>
                    <td>{{ $group->name_ur }}</td>
                    <td>
                        <a href="{{ route('groups.show', $group) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('groups.edit', $group) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('groups.destroy', $group) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
