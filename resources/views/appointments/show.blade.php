@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb" style="background-color: transparent;">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('appointments.index') }}">Appointments</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $appointment->description }}</li>
    </ol>
</nav>


<div class="row col-md-9 col-lg-9 col-sm-9 pull-left ">
      <!-- The justified navigation menu is meant for single line per list item.
          Multiple lines will require custom code not provided by Bootstrap. -->
      <!-- Jumbotron -->
      <div class="jumbotron" >
        <h1><strong>{{ $appointment->description }}</strong></h1>
        </br>
        <ul>
          <li class="lead">Patient Name: {{ $appointment->patient_name }}</li>
          <li class="lead">Date: {{ $appointment->date }}</li>
          <li class="lead">Time: {{ $appointment->time }}</li>
        </ul>     
      </div>
</div>


<div class="col-sm-3 col-md-3 col-lg-3 pull-right">
      <!--<div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
      </div> -->
      <div class="sidebar-module">
        <h4>Actions</h4>
        <ol class="list-unstyled">
          <li><a href="/appointments/{{ $appointment->id }}/edit"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a></li>
          <li><a href="/appointments/create"><i class="fa fa-plus" aria-hidden="true"></i> Add</a></li>             
   
          <li>                 
          <a   
          href="#"
              onclick="
              var result = confirm('Are you sure you wish to delete this Appointment?');
                  if( result ){
                          event.preventDefault();
                          document.getElementById('delete-form').submit();
                  }
                      "
                      ><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>

          <form id="delete-form" action="{{ route('appointments.destroy',[$appointment->id]) }}" 
            method="POST" style="display: none;">
                    <input type="hidden" name="_method" value="delete">
                    {{ csrf_field() }}
          </form>             
          
          </li>

          <!-- <li><a href="#">Add new member</a></li> -->
        </ol>
      </div>

    </div>

@endsection