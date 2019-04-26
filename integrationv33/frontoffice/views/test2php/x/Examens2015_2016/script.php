<?php
//connexion au serveur
$link = mysql_connect("localhost","root","");
//connexion à la base de données
mysql_select_db("vente", $link) or die("connexion impossible");

$email=$_GET['email'];
$pwd=$_GET['pwd'];

$req = "SELECT * FROM `users` WHERE Email like '%".$email."%' AND Password like  '%".$pwd."%';";
$resultat = mysql_query($req);
$ligne=mysql_fetch_array($resultat);

	if($email == $ligne['Email'] AND $pwd == $ligne['Password'])
	{
		//header("Location: recherche.php");
		echo '<span style="color:green;"><b>Authentification réussie</b>. Accéder à la <a  href="recherche.php">liste des produits</a></span>';
	}
	else
		echo '<span style="color:red;">Email ou mot de passe erroné</span>';