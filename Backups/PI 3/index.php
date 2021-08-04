<!DOCTYPE html>

<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<link href="stylesheet.css" type ="text/css" rel ="stylesheet" />
		<title> MUN Crisis - home</title>
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
		        <li class="active"><a href="#">Home</a></li>
		        <li><a id="logInButton" href="login.php">Log in <span id="badgeNumber" class="badge"></span></a></li>
		        <li ><a id="helpButton" href="help.php">Help <span class="sr-only"></span></a></li>
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
	<h3> This is the main screen </h3>
	 		<h3 id="appendMe"></h3>
	 		<div class="jumbotron col-xs-6 col-sm-6">TEXT </div>
	</body>
</html>
