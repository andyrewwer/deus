<!DOCTYPE html>

<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<link href="stylesheet.css" type ="text/css" rel ="stylesheet" />
		<title> MUN Crisis  - Help </title>
		<script src="script.js" type="text/javascript"></script>

	</head>
	<body onload="logOnCheck()"> 
	<nav class="navbar navbar-inverse">
		 <div class="container-fluid navbar-inverse">
		    <div class="navbar-header">
		      <a id="profileTitle" class="navbar-brand" href="profile.php">MUN Crisis </a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		      <ul class="nav navbar-nav navbar-right navbar-inverse">
		        <li><a href="index.php">Home</a></li>
		        <li><a id="logInButton" href="login.php">Log in <span id="badgeNumber"class="badge"></span></a></li>
		        <li class="active"><a href="#">Help <span class="sr-only"></span></a></li>
		        <li ><a id="logOut" ahref = "index.php" onclick="logOut()">Log out</a></li>
</ul>
		</div><!-- /.container-fluid -->
	</nav> 	

		<div id="dialogoverlay"></div>
<div id="dialogbox">
  <div>
    <div id="dialogboxhead"></div>
    <div id="dialogboxbody"></div>
    <div id="dialogboxfoot"></div>
  </div>
</div>

	<h3> This is the help screen </h3>
	</br>
	<div class ="row darkBackground"> 
			<div class="col-xs-6">
				<h4>I can't log in</h4>
				<p> If you remember your email but do not remember the password please email us at admin@muncrisis.com from that email address and we will reset your password and send you the new password to that account. If there is a problem with that email, please explain it by email.</p>
			</br>
			</br>
			</div>
			<div class="col-xs-6">
				<h4>I can't find sign up button</h4>
			<p> Sorry at this time we do not allow new sign ups, we only allocate roles. If you would like a position please email Andrew or Miro at admin@muncrisis.com with your name, your previous crisis/MUN experience and the role/position you would like in this crisis.  </p>

			</br>
			</br>
			</div>
	</div>

	</body>
</html>


