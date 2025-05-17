<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Services\CompanyService;

class CompanyController extends Controller
{
    public function index()
    {
        //Get selected company
        // $companyId = session('selected_company_id');
        // $company = Company::find($companyId);
       
        $companies = Company::latest()->paginate(10);

        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(StoreCompanyRequest $request)
    {
        $data = $request->all();
        $group = app(CompanyService::class)->create($data, $request->file('image'));
        return redirect()->route('companies.index')->with('success', 'Company created successfully.');
    }

    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }

    public function edit($id)
    {
        $company = Company::findOrFail($id);
        return view('companies.edit', compact('company'));
    }

    public function update(UpdateCompanyRequest $request, Company $company)
    {
        $company->update($request->only(['name_eng', 'name_ur']));

        return redirect()->route('companies.index')
            ->with('success', 'Company updated successfully.');
    }

    public function destroy(Company $company)
    {
        $company->delete();

        return redirect()->route('companies.index')
            ->with('success', 'Company deleted successfully.');
    }
}
