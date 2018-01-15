<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta content="utf-8" http-equiv="encoding">
	<title>Sinch VIDEO Sample app</title>
	<link rel="stylesheet" href="css/call.css"/>
    <link type="text/css" src="{{ URL::asset('css/call.css') }}" rel="stylesheet"></link>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//cdn.sinch.com/latest/sinch.min.js"></script>
</head>

<body>
	<div class="top1">
		<h1>Video calling</h1>
	</div>
	
	<div class="container">

		<div id="chromeFileWarning" class="frame big">
			<b style="color: red;">Warning!</b> Protocol "file" used to load page in Chrome.<br><br>
			Please avoid loading files directly from disk when developing WebRTC applications using Chrome.<br>
			Chrome disables access to microphone which prevents proper functionality.<br>
			<br>
			You can allow working with "file:", if you start Chrome with the flag <i>--allow-file-access-from-files</i>
		</div>

		<div class="clearfix"></div>

		<div class="frame small">
			<div class="inner loginBox">
				<h3 id="login">Sign in</h3>
				<form id="userForm">
					<input id="username" placeholder="USERNAME"><br>
					<input id="password" type="password" placeholder="PASSWORD"><br>
					<button id="loginUser">Login</button>
					<button id="createUser">Create</button>
				</form>
				<div id="userInfo">
					<h3><span id="username"></span></h3>
					<button id="logOut">Logout</button>
				</div>
			</div>

			<div class="inner takeaways">
				<h3>Takeaways</h3>
				<ul>
					<li>Authenticate users and act on success / failures</li>
					<li>How to create user and login automatically</li>
					<li>After page load, look for an earlier session and try to start it</li>
					<li>Place a video web-to-web call</li>
					<li>Wire up the incoming stream + start/stop ringback tone as needed</li>
					<li>Receiving a video call</li>
					<li>Ending a video call</li>
				</ul>
			</div>
		</div>

		<div class="frame">
			<h3>Video Call</h3>
			<div id="call">
				<form id="newCall">
					<input id="callUserName" placeholder="Username (alice)"><br>
					<button id="call">Call</button>
					<button id="hangup">Hangup</button>
					<button id="answer">Answer</button>
					
					<audio id="ringback" src="{{ URL::asset('ringback.wav') }}" loop></audio>
					<audio id="ringtone" src="{{ URL::asset('phone_ring.wav') }}" loop></audio>
				</form>
			</div>
			<div class="clearfix"><br></div>

			<video id="outgoing" autoplay muted></video>
			<video id="incoming" autoplay></video>

			<div id="callLog">
			</div>
			<div class="error">
			</div>
		</div>
	</div>

	<script type="text/javascript" src="{{ URL::asset('js/call.js') }}"></script>

</body>

</html>



