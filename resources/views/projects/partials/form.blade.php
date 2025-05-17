@csrf

@if(isset($project))
    @method('PUT')
@endif

<div class="row">
    <div class="col-md-6">  
        <div class="form-group  mb-3">
            <label for="name_en">Name (English)</label>
            <input type="text" class="form-control" id="name_en" name="name_en" maxlength="100"
                   value="{{ old('name_en', $project->name_en ?? '') }}" >
            @error('name_en')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group   mb-3">
            <label for="description_en">Description (English)</label>
            <textarea class="form-control" id="description_en" name="description_en" rows="3" >{{ old('description_en', $project->description_en ?? '') }}</textarea>
        @error('description_en')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group  mb-3">
            <label for="phase_en">Phase (English)</label>
            <input type="text" class="form-control" id="phase_en" name="phase_en" maxlength="100"
                   value="{{ old('phase_en', $project->phase_en ?? '') }}" >
                   @error('phase_en')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="address_en">Address (English)</label>
            <textarea class="form-control" id="address_en" name="address_en" rows="3" >{{ old('address_en', $project->address_en ?? '') }}</textarea>
        @error('address_en')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-md-6 text-end">
        <div class="form-group  mb-3">
            <label for="name_ur">نام (اردو)</label>
            <input type="text" class="form-control keyboardInput" id="name_ur" name="name_ur" maxlength="100" dir="rtl"
                   value="{{ old('name_ur', $project->name_ur ?? '') }}" >
                   @error('name_ur')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="description_ur">تفصیل (اردو)</label>
            <input type="text" class="form-control keyboardInput" id="description_ur" name="description_ur" dir="rtl"
                   value="{{ old('description_ur', $project->description_ur ?? '') }}" >
            @error('description_ur')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group  mb-3">
            <label for="phase_ur">مرحلہ (اردو)</label>
            <input type="text" class="form-control keyboardInput" id="phase_ur" name="phase_ur" maxlength="100" dir="rtl"
                   value="{{ old('phase_ur', $project->phase_ur ?? '') }}" >
             @error('phase_ur')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="address_ur">پتہ (اردو)</label>
            <input type="text" class="form-control keyboardInput" id="address_ur" name="address_ur" maxlength="250" dir="rtl"
                   value="{{ old('address_ur', $project->address_ur ?? '') }}" >
            @error('address_ur')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group  mb-3">
            <label for="group_id">Group</label>
             <select name="group_id" id="group_id" class="form-control form-select @error('group_id') is-invalid @enderror">
                <option value="">Select Group</option>
                @foreach($groups as $group)
                    <option value="{{ $group->id }}"
                        {{ (old('group_id') == $group->id || (isset($project) && $project->group_id == $group->id)) ? 'selected' : '' }}>
                        {{ $group->name_eng }}
                    </option>
                @endforeach
            </select>
        @error('group_id')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="company_id">Company</label>
             <select name="company_id" id="company_id" class="form-control form-select @error('company_id') is-invalid @enderror">
                <option value="">Select Company</option>
                @foreach($companies as $company)
                    <option value="{{ $company->id }}"
                        {{ (old('company_id') == $company->id || (isset($project) && $project->company_id == $company->id)) ? 'selected' : '' }}>
                        {{ $company->name_en }}
                    </option>
                @endforeach
            </select>

        @error('company_id')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="project_code">Project Code</label>
            <input type="text" class="form-control" id="project_code" name="project_code" 
                   value="{{ old('project_code', $project->project_code ?? '') }}" >
            @error('project_code')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="debit_code">Debit Code</label>
            <input type="text" class="form-control" id="debit_code" name="debit_code" maxlength="20"
                   value="{{ old('debit_code', $project->debit_code ?? '') }}" >
            @error('debit_code')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="form-group mb-3">
    <label for="phase_map">Phase Map</label>
    <input type="text" class="form-control" id="phase_map" name="phase_map" maxlength="250"
           value="{{ old('phase_map', $project->phase_map ?? '') }}">
    @error('phase_map')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="d-flex gap-2">
    <button type="submit" class="btn btn-sm btn-primary">
        @if(isset($project) && $project->id)
            Update
        @else
            Save
        @endif
    </button>
    <a href="{{ route('projects.index') }}" class="btn btn-sm btn-alt-primary">Cancel</a>
</div>
