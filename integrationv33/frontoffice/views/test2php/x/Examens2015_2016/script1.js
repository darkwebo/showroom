$(document).ready(function(){
	$("#spanA").click(function(){
		$("#formA").slideToggle("slow");
	
	});
	$("#spanI").click(function(){
		$("#formI").slideToggle("slow");
	
	});

});
function auth()
{
	//alert("yes");
	// Recupération de email
var email = document.getElementById("email").value;//alert(pseudo);
var pwd = document.getElementById("pwd").value;

//instanciation
var xhr = new XMLHttpRequest;
//var URL = "script.php";
xhr.open('GET', 'script.php?email='+email+'&pwd='+pwd, true);
//on associe un header à notre fichier
//xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
xhr.send(null);
xhr.onreadystatechange = result;
function result(){
	if((xhr.readyState == 4) && (xhr.status == 200)){
	document.getElementById("zone").innerHTML = xhr.responseText;
}
	}

}
function verif()
{
	//alert("yes");
	// Recupération de email
var mail = document.getElementById("mail").value;

//instanciation
var xhr = new XMLHttpRequest;
//var URL = "verif.php";
xhr.open('GET', 'verif.php?email='+mail, true);
//on associe un header à notre fichier
//xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
xhr.send(null);
xhr.onreadystatechange = result;
function result(){
	if((xhr.readyState == 4) && (xhr.status == 200)){
	document.getElementById("msg").innerHTML = xhr.responseText;
}
	}

}