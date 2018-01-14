@extends('layouts.app')

@section('content')

    <nav aria-label="breadcrumb" style="background-color: lightblue;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Doctors</li>
        </ol>
    </nav>

    <style>

        table, tbody, tr, th {
            text-align: justify;
            font-family: "Times New Roman", Times, serif;
            font-size: 18px;
            text-align: "justify";

        }

        .breadcrumb {
            background-color: lightblue;            
        }  
    
    </style>

    <div class="panel-heading"><a  class="pull-right btn btn-primary btn-sm" href="/doctors/create">
    <i class="fa fa-plus-square" aria-hidden="true"></i>  Add new appointment</a> </div>
    </br></br>
        <table class="table table-hover table-dark" border="1">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Age</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact Number</th>
                </tr>
            </thead>

            <tbody>

                @foreach($doctors as $doctor)
                    <tr>
                        <th scope="row"></th>
                        <td><i aria-hidden="true"></i> <a href="/doctors/{{ $doctor->id }}" >  {{ $doctor->name }}</a></li></td>
                        <td>{{ $doctor->position }}</td>
                        <td>{{ $doctor->age }}</td>
                        <td>{{ $doctor->email }}</td>
                        <td>{{ $doctor->contact_number }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

@endsection



