<?php

namespace App\Http\Controllers\Companies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Companies;

class CompaniesController extends Controller
{
    public function listView()
    {
        $companies = Companies::all();
        return view('admin.companies.companiesList')->with('companyData', $companies);
    }

    public function addCompanyView()
    {
        return view('admin.companies.addCompany');
    }

    public function addCompany()
    {
        return view('admin.companies.addCompany');
    }

    public function view(Companies $company)
    {
        return view('admin.companies.viewCompany', compact('company'));
    }

    public function viewEdit(Companies $company)
    {
        return view('admin.companies.editCompany', compact('company'));
    }

    public function registerCompany(Request $request)
    {
        $companyData = $request->validate([
            'name' => 'required|string',
            'website' => 'nullable|url',
            'phone' => 'nullable|string',
            'email' => 'nullable|email|unique:companies',
            'contact_person_name' => 'nullable|string',
            'contact_person_email' => 'nullable|email',
            'country_or_registration' => 'nullable|string',
            'registration_year' => 'nullable|integer',
        ]);

        Companies::create($companyData);

        return response()->json(['message' => 'Company added successfully']);
    }

    public function editCompany(Request $request, Companies $company)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'website' => 'nullable|url',
            'phone' => 'nullable|string',
            'email' => 'nullable|email|unique:companies,email,' . $company->id,
            'contact_person_name' => 'nullable|string',
            'contact_person_email' => 'nullable|email',
            'country_or_registration' => 'nullable|string',
            'registration_year' => 'nullable|integer',
        ]);

        $company->update($validatedData);

        return response()->json(['message' => 'Company updated successfully', 'company' => $company]);
    }

    public function deleteCompany(Companies $company)
    {
        $company->delete();
        return response()->json(['message' => 'Company deleted successfully']);
    }
}
