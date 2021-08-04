
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href="stylesheet.css" type ="text/css" rel ="stylesheet" />

	<title> MUN Crisis</title>
	<script src="script.js" type="text/javascript"></script>

</head>
<body onload="setTextInProfile()"> 
	<nav class="navbar navbar-inverse">
		<div class="container-fluid navbar-inverse">
			<div class="navbar-header">
				<a id="profileTitle" href="index.php" class="navbar-brand">MUN Crisis </a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<ul class="nav navbar-nav navbar-right navbar-inverse">
				<li><a href="index.php">Home</a></li>
				<li class="active"><a href="#">Your Profile <span id="badgeNumber" class="badge"></span></a></li>
				<li ><a href="telegram.php">Telegram <span class="sr-only"></span></a></li>
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
	<h3 > This is your profile </h3>
	<h3 id="appendMe"> </h3>
	<div  class="verticalLine">
		<div class="col-sm-offset-6 col-sm-3 col-xs-6">
			<p id="test1">Username: </p>
			<button class="btn" onclick="readMessage()">Read Message</button>
			<br/>
			<button class="btn"  onclick="sendMessage()">Send Message</button>
			<p id="test2">Bodyguards: </p>
			<p id="profileTitle">Spies: </p>
		</div>
	</div>
</body>
</html>