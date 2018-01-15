@extends('layouts.app')

@section('content')

<div class="row  col-md-12 col-lg-12 col-sm-12">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <h1 align="center">Update Appointment Details</h1>

      <!-- Example row of columns -->
    <div class="row  col-md-12 col-lg-12 col-sm-12" >

        <form method="post" action="{{ route('appointments.update', [$appointment->id]) }}">
            {{csrf_field()}}

            <!--hidden form-->
            <input type="hidden" name="_method" value="put">

                            <div class="form-group">
                            <label for="appointment-name">Appointment Description<span class="required">*</span></label>
                            <input   placeholder="Enter description"  
                                      id="appointment-description"
                                      required
                                      name="description"
                                      value="{{$appointment->description}}"
                                      spellcheck="false"
                                      class="form-control"/>
                              </div>                               

                              <div class="form-group">
                                <label for="patient-name">Doctor Name</label>
                                <input placeholder="Enter doctor name"                                          
                                          id="doctor-name"
                                          name="doctor_name"
                                          value="{{$doctor->name}}"
                                          disabled="disabled"
                                          spellcheck="false"
                                          class="form-control"/>
                            </div>


                            <div class="form-group">
                                <label for="patient-name">Patient Name</label>
                                <input placeholder="Enter patient name"                                          
                                          id="patient-name"
                                          name="patient_name"
                                          value="{{$appointment->patient_name}}"
                                          required
                                          spellcheck="false"
                                          class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label for="appointment-date">Date</label>
                                <input placeholder="Enter appointment date"                                          
                                          id="appointment-date"
                                          name="date"
                                          value="{{$appointment->date}}"
                                          required
                                          spellcheck="false"
                                          class="form-control"/>

                            </div>

                            <div class="form-group">
                                <label for="appointment-time">Time</label>
                                <input placeholder="Enter patient name"                                          
                                          id="appointment-time"
                                          name="time"
                                          value="{{$appointment->time}}"
                                          required
                                          spellcheck="false"
                                          class="form-control"/>

                            </div>        

              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit"/>
              </div>
        </form>
        
      </div>     

    </div>

</div>

@endsection
       

