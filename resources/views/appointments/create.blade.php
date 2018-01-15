@extends('layouts.app')

@section('content')

<div class="row col-md-12 col-lg-12 col-sm-12">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <h1 align="center">Create New Appointment </h1>

      <!-- Example row of columns -->
    <div class="row  col-md-12 col-lg-12 col-sm-12">

      <form method="post" action="{{ route('appointments.store') }}">
                            {{ csrf_field() }}


                            <div class="form-group">
                                <label for="appointment-name">Appointment Description<span class="required">*</span></label>
                                <input   placeholder="Enter description"  
                                          id="appointment-description"
                                          required
                                          name="description"
                                          spellcheck="false"
                                          class="form-control"/>
                                  </div>
                                

                            @if($doctors != null)
                            <div class="form-group">
                                <label for="doctor_id">Select doctor</label>

                                <select name="doctor_id" class="form-control" > 

                                @foreach($doctors as $doctor)
                                    <option value="{{$doctor->id}}"> {{$doctor->name}} </option>
                                @endforeach
                                </select>
                            </div>
                            @endif

                            <div class="form-group">
                                <label for="patient-name">Patient Name</label>
                                <input placeholder="Enter patient name"                                          
                                          id="patient-name"
                                          name="patient_name"
                                          required
                                          spellcheck="false"
                                          class="form-control"/>

                            </div>

                            <div class="form-group">
                                <label for="appointment-date">Date</label>
                                <input placeholder="Enter appointment date"                                          
                                          id="appointment-date"
                                          name="date"
                                          required
                                          spellcheck="false"
                                          class="form-control"/>

                            </div>

                            <div class="form-group">
                                <label for="appointment-time">Time</label>
                                <input placeholder="Enter patient name"                                          
                                          id="appointment-time"
                                          name="time"
                                          required
                                          spellcheck="false"
                                          class="form-control"/>

                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary"
                                       value="Submit"/>
                            </div>
                        </form>
      </div>
</div>

@endsection