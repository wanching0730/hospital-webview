@extends('layouts.app')

@section('content')

<div class="col-md-6 col-lg-6 col-md-offset-3  col-lg-offset-3">
    <div class="panel panel-primary ">
    <div class="panel-heading">Doctors <a  class="pull-right btn btn-primary btn-sm" href="/doctors/create">
    <i class="fa fa-plus-square" aria-hidden="true"></i>  Create new</a> </div>
    <div class="panel-body">
        

    <ul class="list-group">
    @foreach($doctors as $doctor)
        <li class="list-group-item"> 
        <i class="fa fa-play" aria-hidden="true"></i> <a href="/doctors/{{ $doctor->id }}" >  {{ $doctor->name }}</a></li>
    @endforeach
    </ul>


    </div>
    </div>
</div>

@endsection