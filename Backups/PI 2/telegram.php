<!DOCTYPE html>

<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<link href="stylesheet.css" type ="text/css" rel ="stylesheet" />
		<title> MUN Crisis  - Teleram </title>
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
		        <li><a href="profile.php">Your Profile <span id="badgeNumber" class="badge"></span></a></li>
		        <li class="active"><a href="#">Telegram <span class="sr-only"></span></a></li>
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
<h3> This is the Telegram Request Page </h3>
	

<!--	<div id="GoogleForm">
		<iframe src="https://docs.google.com/forms/d/1o3KFc6gG2MsvjFqp4s8FD0T7K_jBFvp3y_XsWT5irTA/viewform?embedded=true" width="760" height="500" frameborder="0" marginheight="0" marginwidth="0">Telegram Request Form, please wait. Loading...</iframe> 
	</div> -->
<div class = "googleForm">

		<form class="form-horizontal">

	<fieldset>

	<!-- Form Name -->
	<legend><span class="googleFormSpan">a</span>  	Telegram Request Form</legend>
	<!-- Password input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="passcodeInput">Delegate Code:</label>
	  <div class="col-md-4">
	    <input id="passcodeInput" name="passcodeInput" type="password" placeholder="Unique Code" class="form-control input-md" required="">
	    <span class="help-block">Help</span>
	  </div>
	</div>

	<!-- Multiple Radios -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="requestSender">Request Sent on Behalf of:</label>
	  <div class="col-md-4">
	  <div class="radio">
	    <label for="requestSender-0">
	      <input type="radio" name="requestSender" id="requestSender-0" value="1" checked="checked">
	      Individual
	    </label>
		</div>
	  <div class="radio">
	    <label for="requestSender-1">
	      <input type="radio" name="requestSender" id="requestSender-1" value="2">
	      Multiple
	    </label>
		</div>
	  <div class="radio">
	    <label for="requestSender-2">
	      <input type="radio" name="requestSender" id="requestSender-2" value="3">
	      Committee
	    </label>
		</div>
	  </div>
	</div>

	<!-- Multiple Radios -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="requestType">Type of Request:</label>
	  <div class="col-md-4">
	  <div class="radio">
	    <label for="requestType-0">
	      <input type="radio" name="requestType" id="requestType-0" value="1" checked="checked">
	      Asset Management
	    </label>
		</div>
	  <div class="radio">
	    <label for="requestType-1">
	      <input type="radio" name="requestType" id="requestType-1" value="2">
	      Communication/Sending Presents
	    </label>
		</div>
	  <div class="radio">
	    <label for="requestType-2">
	      <input type="radio" name="requestType" id="requestType-2" value="3">
	      Defense
	    </label>
		</div>
	  <div class="radio">
	    <label for="requestType-3">
	      <input type="radio" name="requestType" id="requestType-3" value="4">
	      Espionage [Hiring and Using Spies]
	    </label>
		</div>
	  <div class="radio">
	    <label for="requestType-4">
	      <input type="radio" name="requestType" id="requestType-4" value="5">
	      Information [Request Information your Character already knows]
	    </label>
		</div>
	  <div class="radio">
	    <label for="requestType-5">
	      <input type="radio" name="requestType" id="requestType-5" value="6">
	      Meeting [Organising/Requesting]
	    </label>
		</div>
	  <div class="radio">
	    <label for="requestType-6">
	      <input type="radio" name="requestType" id="requestType-6" value="7">
	      Personal [Questions about character/motivations/how crisis works/etc]
	    </label>
		</div>
	  <div class="radio">
	    <label for="requestType-7">
	      <input type="radio" name="requestType" id="requestType-7" value="8">
	      Political
	    </label>
		</div>
	  <div class="radio">
	    <label for="requestType-8">
	      <input type="radio" name="requestType" id="requestType-8" value="9">
	      Publishing/Press Release
	    </label>
		</div>
	  <div class="radio">
	    <label for="requestType-9">
	      <input type="radio" name="requestType" id="requestType-9" value="10">
	      Offensive
	    </label>
		</div>
	  <div class="radio">
	    <label for="requestType-10">
	      <input type="radio" name="requestType" id="requestType-10" value="11">
	      Military
	    </label>
		</div>
	  <div class="radio">
	    <label for="requestType-11">
	      <input type="radio" name="requestType" id="requestType-11" value="12">
	      Monetary
	    </label>
		</div>
	  </div>
	</div>

	<!-- Textarea -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="description">Description:</label>
	  <div class="col-md-6">                
		<p> Make sure to specify as much detail as possible to ensure succesful completion of your intended action.</p>     
	    <textarea class="form-control" id="description" name="description"></textarea>
	  </div>
	</div>

	<!-- Button -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="singlebutton">Submit:</label>
	  <div class="col-md-4">
	    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
	  </div>
	</div>
</div>
</fieldset>
</form>


	</body>
</html>