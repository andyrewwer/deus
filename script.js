var Alert = new CustomAlert();
var alertIsShowing = false;
var username;
var password;
function testPassword() {

	username = document.getElementById("username").value
	password = document.getElementById("password").value
	document.cookie = "username=" + username;
	document.cookie ="loggedIn=YES";
	console.log(document.cookie);
	console.log(password);

//	if (password =="password" && username == "username"){
		 window.location = "profile.php";
		alertIsShowing = false;
/*	}else {
		document.getElementById("password").value = "";
		Alert.render("It seems that you have put the wrong username/pasword. ")
		return false;

	}*/
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


function logOnCheck(){
	if(getCookie("loggedIn")){
		setProfileName();
		var x = document.getElementById("logInButton");
		if (x != null) {
			x.innerHTML = "Profile";
			x.setAttribute('href', 'profile.php');
//			x.style.display = 'none';
		}
		document.getElementById("form-container").style.display = 'none';
	}
}









