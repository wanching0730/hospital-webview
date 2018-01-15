@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb" style="background-color: transparent;">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('doctors.index') }}">Doctors</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $doctor->name }}</li>
    </ol>
</nav>

  <div class="row col-md-9 col-lg-9 col-sm-9 pull-left ">
      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <!-- Jumbotron -->

      <main role="main">
      
      <div class="jumbotron" >
        <h1><strong>{{ $doctor->name }}</strong></h1>
        </br>
        <ul>
          <li class="lead">Position: {{ $doctor->position }}</li>
          <li class="lead">Age: {{$doctor->age}} </li>
          <li class="lead">Email: {{$doctor->email}} </li>
          <li class="lead">Contact Number: {{$doctor->contact_number}} </li>
        </ul>
       <!-- <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p> -->
      </div>

      <!-- Example row of columns -->
      <div class="row  col-md-12 col-lg-12 col-sm-12" style="margin: 9px; ">
          <!-- <a href="/appointments/listDoctorApp/{{ $doctor->id }}" class="pull-right btn btn-primary btn-sm" >View All >></a> -->
          @foreach($doctor->appointments as $appointment)
            <div class="col-lg-4 col-md-4 col-sm-4">
              <h2>{{ $appointment->description }}</h2>
              <p class="text-danger"> {{$appointment->patient_name}} </p>
              <p><a class="btn btn-primary" href="/appointments/{{ $appointment->id }}" role="button"> View Appointment >></a></p>
            </div>
          @endforeach
      </div>

      </main>
  </div>



<div class="col-sm-3 col-md-3 col-lg-3 pull-right">
          <!--<div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div> -->
          <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/doctors/{{ $doctor->id }}/edit"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a></li>
              <li><a href="/appointments/create"><i class="fa fa-plus" aria-hidden="true"></i> Add</a></li>
              <li>
   
              <a   
              href="#"
                  onclick="
                  var result = confirm('Are you sure you wish to delete this Doctor?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          "
                          ><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>

              <form id="delete-form" action="{{ route('doctors.destroy',[$doctor->id]) }}" 
                method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form>

              </li>
              </br>
              <li><a href="/appointments/listDoctorApp/{{ $doctor->id }}"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> List of Appointments</a></li>
            
            <br/>
            

              <!-- <li><a href="#">Add new member</a></li> -->
            </ol>
          </div>

          <!--<div class="sidebar-module">
            <h4>Members</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
            </ol>
          </div> -->
        </div>

      </div>
 </div>

@endsection


