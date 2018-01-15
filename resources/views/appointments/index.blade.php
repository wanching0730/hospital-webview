@extends('layouts.app')

@section('content')

    <nav aria-label="breadcrumb" style="background-color: lightblue;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Appointments</li>
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
    <i class="fa fa-plus-square" aria-hidden="true"></i>  Add New Appointment</a> </div>
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

                @foreach($appointments as $appointment)
                  <!-- @foreach($doctors as $doctor)
                    <?php 
                      if($doctor->id == $appointment->doctor_id){
                        $patient_doctor_name = $doctor->doctor_name;
                      }
                        
                    ?>
                  @endforeach -->
                    <tr>
                        <th scope="row"></th>
                        <td><i aria-hidden="true"></i> <a href="/appointments/{{ $appointment->id }}" >  {{ $appointment->description }}</a></li></td>                        
                        <td>{{ $appointment->patient_name }}</td>
                        <td>{{ $appointment->date }}</td>
                        <td>{{ $appointment->time }}</td>
                        <td><?php echo $patient_doctor_name; ?></td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

@endsection



