@extends('layouts.app')

@section('content')

<div class="row col-md-9 col-lg-9 col-sm-9 pull-left">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <h1>Add new doctor </h1>

      <!-- Example row of columns -->
    <div class="row  col-md-12 col-lg-12 col-sm-12" >

      <form method="post" action="{{ route('doctors.store') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="doctor-name">Name<span class="required">*</span></label>
                                <input placeholder="Enter name"  
                                          id="doctor-name"
                                          required
                                          name="name"
                                          spellcheck="false"
                                          class="form-control"
                                           />
                            </div>

                            <div class="form-group">
                                <label for="doctor-position">Position</label>
                                <input placeholder="Enter position"                                       
                                          id="doctor-position"
                                          name="position"
                                          class="form-control"/>  
                            </div>

                            <div class="form-group">
                                <label for="doctor-age">Age</label>
                                <input placeholder="Enter age"                                       
                                          id="doctor-age"
                                          name="age"
                                          class="form-control"/>  
                            </div>

                            <div class="form-group">
                                <label for="doctor-email">Email</label>
                                <input placeholder="Enter email"                                       
                                          id="doctor-email"
                                          name="email"
                                          type="email"
                                          class="form-control"/>  
                            </div>

                            <div class="form-group">
                                <label for="doctor-phone">Phone Number</label>
                                <input placeholder="Enter phone number"                                       
                                          id="doctor-phone"
                                          name="contact_number"
                                          class="form-control"/>  
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary"
                                       value="Submit"/>
                            </div>
                        </form>
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
              <li><a href="/doctors"> <i class="fa fa-building-o" aria-hidden="true"></i>List of Doctors</a></li>
              
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
