<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hospital</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/3894624ed9.js"></script>

</head>
<body background="bg.jpg">

<link rel="stylesheet" href="CSS/main_front.css" type="text/css">

<header role="banner">

		<div class="brand">Gion Hospital</div>
		<div class="address-bar">Kajang</div>
		<div id="flags" class="text-center"></div>

<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar">halo</span>
        <span class="icon-bar">halo</span>
        <span class="icon-bar">halo</span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">

      @if (Auth::guest())
        <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-user"></span> Login</a></li>
        <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
        
      @else
        <li><a href="{{ route('home') }}">Overview</a></li>
        <li><a href="{{ route('doctors.index') }}">Doctors</a></li>
        <li><a href="#">Contact Us</a></li>
        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> 
                                    Logout <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
        
       
       @endif

      </ul>				
     
    </div>
  </div>
</nav>
</header>

</br>
  
<div class="container" >

@include('partials.errors')
@include('partials.success')

    <div class="row">
        @yield('content')
    
    </div>
 </div>         

</body>
</html>