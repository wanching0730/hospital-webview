@extends('layouts.app')

@section('content')
<style>
#mydiv {
  position: fixed;
  top: 55%;
  left: 50%;
  margin-top: -50px;
  margin-left: -100px;
}

#mydiv p {
  position: fixed;
  top: 70%;
  left: 10%;
  margin-top: -50px;
  margin-left: -100px;
}

</style>
<div id="mydiv">
    <h1>Welcome</h2>
    <p>The Group's flagship hospital, Pantai Hospital Kuala Lumpur (PHKL), has a proud history of
        serving the Malaysian public for nearly 40 years. Established in 1974, Pantai Hospital Kuala
        Lumpur initially had 68 beds and 20 medical specialists. Today, the hospital has 332 beds and has
        a medical staff of more than 170 specialists. It is strategically located close to the city centre and
        within the cozy residential neighbourhood of Bangsar. PHKL is accredited with Joint Commission
        International (JCI)</p>
</div>

@endsection