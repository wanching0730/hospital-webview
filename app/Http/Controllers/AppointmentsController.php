<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Doctor;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($doctor_id)
    {
        $appointments = Appointment::where('doctor_id', $doctor_id)->get();

        return view('appointments.index', ['appointments'=> $appointments]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = Doctor::all();

        return view('appointments.create', ['doctors'=>$doctors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        
        $appointment = Appointment::create([
            'patient_id' => 1,
            'patient_name' => $request->input('patient_name'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'doctor_id' => $request->input('doctor_id')
        ]);

        if($appointment){
            return redirect()->route('appointments.show', ['appointment'=> $appointment->id])
            ->with('success' , 'Appointment details added successfully');
        }

        return back()->withInput()->with('errors', 'Error adding new appointment');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        $appointment = Appointment::find($appointment->id);

        return view('appointments.show', ['appointment'=>$appointment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        $appointment = Appointment::find($appointment->id);
        $doctors = Doctor::all();
         
         return view('appointments.edit', ['appointment'=>$appointment, 'doctors'=>$doctors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        $AppointmentUpdate = Appointment::where('id', $appointment->id)
                            ->update([
                                'patient_id'=>1,
                                'patient_name' => $request->input('patient_name'),
                                'description' => $request->input('description'),
                                'date' => $request->input('date'),
                                'time' => $request->input('time'),
                                'doctor_id' => $request->input('doctor_id')
                            ]);

        if($AppointmentUpdate){
            return redirect()->route('appointments.show', ['appointment_id'=>$appointment->id])
            ->with('success', 'Appointment was updated successfully');
        }

        // go back to the page where we coming from
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        $findappointment = Appointment::find( $appointment->id);
         if($findappointment->delete()){
             
             //redirect
             return redirect()->route('appointments.index')
             ->with('success' , 'appointment deleted successfully');
         }
 
         return back()->withInput()->with('error' , 'appointment could not be deleted');
    }
}
