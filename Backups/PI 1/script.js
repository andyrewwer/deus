var Alert = new CustomAlert();

var alertIsShowing = false;
var username;
var password;
function testPassword() {

	username = document.getElementById("username").value
	password = document.getElementById("password").value
	document.cookie = "username=" + username;
	document.cookie ="loggedIn=YES";
	if(getCookie("messages") == null) {
		document.cookie = "messages=1";
	}

	console.log(document.cookie);
	console.log(password);

//	if (password =="password" && username == "username"){
		 window.location = "profile.php";
		alertIsShowing = false;
//	}else {
		document.getElementById("password").value = "";
		Alert.render("It seems that you have put the wrong username/pasword. ")
		return false;

//	}
}
function setTextInProfile() {
	console.log(document.cookie);
	var x = getCookie("username");

	document.getElementById("test1").innerHTML = "Username: " +x ;
	var y = getCookie("loggedIn");
	if (y) {
		setProfileName();
	}		
}
function setProfileName(){
	document.getElementById("profileTitle").innerHTML = getCookie("username");
	document.getElementById("badgeNumber").innerHTML = getCookie("messages");
}
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}
function sendForm(e){
  e.preventDefault();
	if (!alertIsShowing) {
	  testPassword();
	}else {
		Alert.ok();
	}
	alertIsShowing = !alertIsShowing;
}

function CustomAlert(){
    this.render = function(dialog){
        var winW = window.innerWidth;
        var winH = window.innerHeight;
        var dialogoverlay = document.getElementById('dialogoverlay');
        var dialogbox = document.getElementById('dialogbox');
        dialogoverlay.style.display = "block";
        dialogoverlay.style.height = winH+"px";
        dialogbox.style.left = (winW/2) - (550 * .5)+"px";
        dialogbox.style.top = "100px";
        dialogbox.style.display = "block";
        document.getElementById('dialogboxhead').innerHTML = "Incorrect Username/Password combination";
        document.getElementById('dialogboxbody').innerHTML = dialog;
        document.getElementById('dialogboxfoot').innerHTML = '<button style="border-radius: 30%; background-color: #FFF" onclick="Alert.ok()">OK</button> ';
    }
	this.ok = function(){
		document.getElementById('dialogbox').style.display = "none";
		document.getElementById('dialogoverlay').style.display = "none";
	}
}
function CustomConfirm(){
    this.render = function(dialog, id){
        var winW = window.innerWidth;
        var winH = window.innerHeight;
        var dialogoverlay = document.getElementById('dialogoverlay');
        var dialogbox = document.getElementById('dialogbox');
        dialogoverlay.style.display = "block";
        dialogoverlay.style.height = winH+"px";
        dialogbox.style.left = (winW/2) - (550 * .5)+"px";
        dialogbox.style.top = "100px";
        dialogbox.style.display = "block";
        
        document.getElementById('dialogboxhead').innerHTML = "Please Confirm";
        document.getElementById('dialogboxbody').innerHTML = dialog;
        document.getElementById('dialogboxfoot').innerHTML = '<button onclick="Confirm.yes(id)">Yes</button> <button onclick="Confirm.no()">No</button>';
    }
    this.no = function(){
        document.getElementById('dialogbox').style.display = "none";
        document.getElementById('dialogoverlay').style.display = "none";
		return "NO";	
    }
    this.yes = function(id){
        document.getElementById('dialogbox').style.display = "none";
        document.getElementById('dialogoverlay').style.display = "none";
        if (id = "logOut") {
        	document.cookie = "loggedIn=NO";
			document.cookie = "username=";
			window.location = "index.php";

        }
    	return "YES";
    }
}
var Confirm = new CustomConfirm();

function logOnCheck(){
	console.log("sadf");
	console.log(getCookie("badgeNumber"));

	if(getCookie("loggedIn") == "YES"){
		setProfileName();
		var x = document.getElementById("logInButton");
		if (x != null) {
			x.innerHTML = "Your Profile ";
			var span = document.createElement("span");
			span.innerHTML = getCookie("messages");
			span.className = "badge";
			span.setAttribute('class','badge');
			x.setAttribute('href', 'profile.php');
			x.appendChild(span); 
//			x.style.display = 'none';
		}
		var y = document.getElementById("helpButton");
		if (y != null) {
			y.innerHTML = "Telegram";
			y.setAttribute('href', 'telegram.php');
		}
		if (document.getElementById("form-container") != null) {
			document.getElementById("form-container").style.display = 'none';
			document.getElementById("loginH3").innerHTML = "You are already logged on, you must be here accidentally!";			
		} 
		var z = document.getElementById("badgeNumber");
		if (z != null) {
			z.innerHTML = getCookie("messages");
		}
	}else if(getCookie("loggedIn") != "YES") {
		document.getElementById("logOut").style.display = 'none';
		var z = document.getElementById("badgeNumber");
		if (z != null) {
			z.innerHTML = "";
		}

	}
}

function logOut ()  {
	console.log("test");
	Confirm.render("Are you sure you want to log out?", "logOut");

}

function sendMessage(){
	var x = getCookie("messages");
	x = parseInt(x) + 1;
	document.cookie = "messages=" + x;
	setProfileName();
}
function readMessage(){
	var x = getCookie("messages");
	x = parseInt(x) - 1;
	if (x > -1) {
		document.cookie = "messages=" + x;
		setProfileName();		
	}else {
		Alert.render("You have no messages left to read!");
	}

}
