<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();

        //pass $doctors to index 
        return view('doctors.index', ['doctors'=>$doctors]);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()){
            $company = Doctor::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'user_id' => Auth::user()->id
            ]);

            if($company){
                return redirect()->route('doctors.show', ['company' => $company->id])
                ->with('success', 'Company created successfully');
            }
        }

        return back()->withInput()->with('error', 'Error in creating new company');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //search database to find matched ID
        //$company = Company::where('id', $company->id)->first();

        //$company = Company::find($company->id);

        return view('doctors.show', ['company'=>$company]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('doctors.edit', ['company'=>$company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $companyUpdate = Company::where('id', $company->id)
                            ->update([
                                'name'=>$request->input('name'),
                                'description'=>$request->input('description')
                            ]);

        if($companyUpdate){
            return redirect()->route('doctors.show', ['company'=>$company->id])
            ->with('success', 'Company updated successfully');
        }

        // go back to the page where we coming from
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $findCompany = Company::find($company->id);
        if($findCompany->delete()){

            return redirect()->route('doctors.index')
            ->with('success', 'Company deleted successfully');
        }

        return back()->withInput()->with('error', 'Company could not be deleted');
    }
}
