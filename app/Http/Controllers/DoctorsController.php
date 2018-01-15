<?php

namespace App\Http\Controllers;

use App\Doctor;
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
            $doctor = Doctor::create([
                'name' => $request->input('name'),
                'position' => $request->input('position'),
                'age' => $request->input('age'),
                'email' => $request->input('email'),
                'contact_number' => $request->input('contact_number'),
                'user_id' => Auth::user()->id
            ]);

            if($doctor){
                return redirect()->route('doctors.show', ['doctor' => $doctor->id])
                ->with('success', 'Doctor was added successfully');
            }
        }

        return back()->withInput()->with('error', 'Error in adding new doctor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        return view('doctors.show', ['doctor'=>$doctor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $Doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        return view('doctors.edit', ['doctor'=>$doctor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $Doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        $DoctorUpdate = Doctor::where('id', $doctor->id)
                            ->update([
                                'name'=>$request->input('name'),
                                'position' => $request->input('position'),
                                'age' => $request->input('age'),
                                'email' => $request->input('email'),
                                'contact_number' => $request->input('contact_number'),
                            ]);

        if($DoctorUpdate){
            return redirect()->route('doctors.show', ['Doctor'=>$doctor->id])
            ->with('success', 'Doctor updated successfully');
        }

        // go back to the page where we coming from
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $findDoctor = Doctor::find($doctor->id);
        if($findDoctor->delete()){

            return redirect()->route('doctors.index')
            ->with('success', 'Doctor was deleted successfully');
        }

        return back()->withInput()->with('error', 'Doctor could not be deleted');
    }

    public function call(){
        return view('doctors.call');
    }
}
