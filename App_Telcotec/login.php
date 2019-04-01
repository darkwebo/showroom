<?php
@session_start();
include("global.php");

$response = "{success: false, errors:[]}";
if(!isset($_POST['username'])||!strlen($_POST['username'])){
$response = "{success: false, errors:[{id:'username', msg:'Champs Requis'}]}";
}
else if(!isset($_POST['password'])||!strlen($_POST['password'])) {
$response = "{success: false, errors:[{id:'password', msg:'Champ Requis'}]}";
}
$username = $_POST['username'];
$password = $_POST['password'];
$password = md5($password);
    if($username && $password) 
	{
			$dbq = mysql_query("SELECT * FROM utilisateur WHERE pass='$password' and login='$username'");
			$dbn = mysql_num_rows($dbq);
			if($dbn > 0) 
			{    	$dbf = mysql_fetch_array($dbq);
					
					$dbq2 = mysql_query("SELECT * FROM ROLE WhERE id={$dbf['role_id']}");
					$dbf2 = mysql_fetch_array($dbq2);

					
					$_SESSION['id'] = $dbf['id'];
				    $_SESSION['cu'] = $dbf['nom']." ".$dbf['prenom'];
					$_SESSION['role'] = $dbf2['role'];
					
				    $response = "{success:true, errors:[]}";

			}
			else 
			{       
			$response = "{success: false, errors:[{id:'user', msg:'Connection error. Check Your Settings.'}]}";
			}
    } else {
	    $response = "{success: false, errors:[{id:'user', msg:'Connection error. Check Your Settings.'}]}";
    }
	
echo($response);
?>