@extends('layouts.backend')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">Select a Company</div>

                <div class="card-body">
                    <form action="{{ route('company.select.store') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="company_id">Company</label>
                            <select name="company_id" id="company_id" class="form-control form-select  @error('company_id') is-invalid @enderror">
                                <option value="">Select Company</option>
                                @foreach($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->name_en }}</option>
                                @endforeach
                            </select>
                            @error('company_id')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Proceed to Dashboard</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
