<div class="container">

@include('partials.errors')
@include('partials.success')

<div class="row">

<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<div class="row col-md-9 col-lg-9 col-sm-9 pull-left ">
      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <!-- Jumbotron -->
      <div class="jumbotron" >
        <h1>{{ $doctor->name }}</h1>
        <p class="lead">{{ $doctor->position }}</p>
        <p class="text-danger"> {{$doctor->age}} </p>
        <p class="text-danger"> {{$doctor->email}} </p>
        <p class="text-danger"> {{$doctor->contact_number}} </p>
       <!-- <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p> -->
      </div>

      <!-- Example row of columns -->
      <div class="row  col-md-12 col-lg-12 col-sm-12" style="background: white; margin: 10px; ">
      <a href="/appointments/create" class="pull-right btn btn-default btn-sm" >Add Appointment</a>
      @foreach($doctor->appointments as $appointment)
        <div class="col-lg-4 col-md-4 col-sm-4">
          <h2>{{ $appointment->description }}</h2>
          <p class="text-danger"> {{$appointment->patient_name}} </p>
          <p><a class="btn btn-primary" href="/appointments/{{ $appointment->id }}" role="button"> View Appointments »</a></p>
        </div>
      @endforeach
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
              <li><a href="/doctors/{{ $doctor->id }}/edit">Edit</a></li>
              <li><a href="/appointments/create">Add Appointments</a></li>
              <li><a href="/doctors">List of Doctors</a></li>
              <li><a href="/appointments/{{$doctor->id}}/1">List of Appointments</a></li>
            
            <br/>

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
                          >
                  Delete
              </a>

              <form id="delete-form" action="{{ route('doctors.destroy',[$doctor->id]) }}" 
                method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form>

              </li>

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


