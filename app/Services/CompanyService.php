<?php

namespace App\Services;

use App\Models\Company;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;

class CompanyService
{
    public function paginateCompanies(int $perPage = 10, array $filters = []): LengthAwarePaginator
    {
        return Company::query()
            ->when($filters['search'] ?? null, fn($query, $search) => 
                $query->where('name', 'like', "%{$search}%")
            )
            ->latest()
            ->paginate($perPage)
            ->through(fn($company) => [
                'id' => $company->id,
                'name_eng' => $company->name,
                'name_ur' => $company->name
            ]);
    }

    public function createCompany(array $validatedData): Company
    {
        return Company::create($validatedData);
    }

    public function updateCompany(Company $company, array $validatedData): Company
    {

        $company->update($validatedData);
        return $company;
    }

    public function deleteCompany(Company $company): void
    {
        Storage::disk('public')->delete($company->logo);
        $company->delete();
    }

    public function getCompanyForEditing(Company $company): array
    {
        return $company->only('id', 'name', 'email', 'logo', 'website', 'description');
    }
}