<div class="container">

@include('partials.errors')
@include('partials.success')

<div class="row">

<div class="row col-md-9 col-lg-9 col-sm-9 pull-left" style="background: white;">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <h1>Add New Appointment </h1>

      <!-- Example row of columns -->
    <div class="row  col-md-12 col-lg-12 col-sm-12" >

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


<div class="col-sm-3 col-md-3 col-lg-3 pull-right">
          <!--<div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div> -->
          <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/appointments"><i class="fa fa-user-o" aria-hidden="true"></i> List of appointments</a></li>
              
            </ol>
          </div>
        </div>
    </div>
</div>
       