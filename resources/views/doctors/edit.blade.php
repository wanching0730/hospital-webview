@extends('layouts.app')

@section('content')
    
    <div class="col-md-9 col-lg-9 col-sm-9 pull-left" style="background: white;">   

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <h1>Update Doctor Details </h1>       

      <!-- Example row of columns -->
      <div class="row col-md-12 col-lg-12 col-sm-12">

        <form method="post" action="{{ route('doctors.update', [$doctor->id]) }}">
            {{csrf_field()}}

            <!--hidden form-->
            <input type="hidden" name="_method" value="put">

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
                    <input type="submit" class="btn btn-primary" value="Submit"/>
                </div>

        </form>
        
      </div>     

    </div>

    <div class="col-sm-3 col-md-3 col-lg-3 pull-right">  

          <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/doctors/{{$doctor->id}}">View Doctor</a></li>
              <li><a href="/doctors">Doctors List</a></li>
            </ol>
          </div>

    </div>

@endsection