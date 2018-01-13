@extends('layouts.app')

@section('content')
<div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
  <div class="panel panel-primary">
    <div class="panel-heading">List of Appointments <a class="pull-right btn btn-primary btn-sm" href="/appointments/create">Create New Appointment</a></div>
    <div class="panel-body">

      <ul class="list-group">
      @foreach($appointments as $appointment)
        <li class="list-group-item"> <a href="/appointments/{{ $appointment->id }}">{{ $appointment->description }}</li>
      @endforeach
      </ul>

    </div>
  </div>
</div>
@endsection