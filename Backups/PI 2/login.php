<!DOCTYPE html>

<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />
		<link href="stylesheet.css" type ="text/css" rel ="stylesheet" />
		<title> MUN Crisis  - Login </title>
		<script src="script.js" type="text/javascript"></script>
	</head>
	<body onload="logOnCheck()"> 
	<nav class="navbar navbar-default navbar-inverse">
		 <div class="container-fluid navbar-inverse">
		    <div class="navbar-header">
		      <a id="profileTitle" class="navbar-brand" href="profile.php">MUN Crisis </a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right navbar-inverse">
		        <li><a href="index.php">Home</a></li>
		        <li class="active"><a href="#">Log in</a></li>
		        <li><a id="helpButton" href="help.php">Help <span class="sr-only"></span></a></li>
		        <li ><a id="logOut" ahref = "index.php" onclick="logOut()">Log out</a></li>
</ul>
		    </div><!-- /.navbar-collapse -->
		    <div class="container" id="form-container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
										<div class="row">
									<div class="form-group">
											<div class="col-sm-6">
												<input type="submit" onclick="sendForm(event)" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="LogIn">
											</div>
									</div>
									<div class="form-group">
											<div class="col-sm-6">
												<div class="text-center">
													<a href="help.php" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<script>
    					(function() {
       					 var age = document.getElementById('login-submit');
        				age.addEventListener('keypress', function(event) {
           				 if (event.keyCode == 13 || event.keyCode == 10) {
           				 	event.preventDefault();
							sendForm(event);
			            }});
    }());
</script>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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
	<h3 id="loginH3"> This is the login screen </h3>

		</br>

		</body>
</html>