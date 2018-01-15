@extends('layouts.app')

@section('content')

    <nav aria-label="breadcrumb" style="background-color: lightblue;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$doctor->name}}'s Appointments</li>
        </ol>
    </nav>

    <style>

        table, tbody, tr, th {            
            font-family: "Times New Roman", Times, serif;
            font-size: 18px;
            text-align: "justify";

        }

        .breadcrumb {
            background-color: lightblue;            
        }  
    
    </style>

    <div class="panel-heading"><a  class="pull-right btn btn-primary btn-sm" href="/appointments/create">
    <i class="fa fa-plus-square" aria-hidden="true"></i>  Add new appointment</a> </div>
    </br></br>
        <table class="table table-hover table-dark" border="1">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Description</th>
                    <th scope="col">Patient Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Doctor Name</th>
                </tr>
            </thead>

            <tbody>             

                @foreach($doctor_appointments as $doctor_appointment)
                  
                    <tr>
                        <th scope="row"></th>
                        <td><i aria-hidden="true"></i> <a href="/appointments/{{ $doctor_appointment->id }}" >  {{ $doctor_appointment->description }}</a></li></td>                        
                        <td>{{ $doctor_appointment->patient_name }}</td>
                        <td>{{ $doctor_appointment->date }}</td>
                        <td>{{ $doctor_appointment->time }}</td>    
                        <td>{{ $doctor_appointment->doctor_id }}</td>                   
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

@endsection



