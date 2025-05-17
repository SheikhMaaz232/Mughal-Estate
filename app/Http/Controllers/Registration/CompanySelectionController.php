<?php
namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanySelectionController extends Controller
{
    public function showForm()
    {
        $companies = Company::all();
        return view('auth.select_company', compact('companies'));
    }

    public function storeSelection(Request $request)
    {
        $request->validate([
            'company_id' => 'required|exists:companies,id',
        ], [
            'company_id.required' => 'Please select a company.',
            'company_id.exists' => 'The selected company is invalid.',
        ]);

        session(['selected_company_id' => $request->company_id]);

        return redirect()->route('dashboard');
    }
}
