@extends('layouts.app')

@section('content')

<script>
    function validate() {
        var position = document.forms['myForm']["position"].value;

        if(position == ""){
            alert("position must be filled out");
            return false
        }
    }
</script>

<div class="row col-md-12 col-lg-12 col-sm-12">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <h1 align="center">Create New Doctor </h1>

      <!-- Example row of columns -->
    <div class="row  col-md-12 col-lg-12 col-sm-12" >

      <form name="myForm" method="post" action="{{ route('doctors.store') }}" onSubmit="return validate()">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="doctor-name">Name<span class="required">*</span></label>
                                <input placeholder="Enter name"  
                                          id="doctor-name"
                                          required
                                          name="name"
                                          spellcheck="false"
                                          class="form-control"
                                          value="{{old('name')}}"
                                           />
                            </div>

                            <div class="form-group">
                                <label for="doctor-position">Position</label>
                                <input placeholder="Enter position"                                       
                                          id="doctor-position"
                                          name="position"
                                          class="form-control"
                                          value="{{old('position')}}"/>  
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

@endsection
