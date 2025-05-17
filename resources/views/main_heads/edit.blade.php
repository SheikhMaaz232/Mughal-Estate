@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Main Head</h2>

    <form action="{{ route('main-heads.update', $mainHead->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name_en" class="form-label">Name (English)</label>
            <input type="text" class="form-control" id="name_en" name="name_en" value="{{ old('name_en', $mainHead->name_en) }}" required autocomplete="off">
            @error('name_en')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="name_ur" class="form-label">Name (Urdu)</label>
            <input type="text" class="form-control input-urdu" id="name_ur" name="name_ur" value="{{ old('name_ur', $mainHead->name_ur) }}" required autocomplete="off">
            @error('name_ur')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('main-heads.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
