<?php
//connexion au serveur
$link = mysql_connect("localhost","root","");
//connexion à la base de données
mysql_select_db("siesprit", $link) or die("connexion impossible");
$email = $_GET['email'];//echo $email;
$req = "SELECT * FROM `etudiant` WHERE Email like '%".$email."%'; ";
$resultat = mysql_query($req);
$res = mysql_fetch_row($resultat);
if($email == $res[3])
	echo '<span style="color:red;">Cet Email existe déjà</span>';
else
	echo '<span style="color:green">Cet Email est disponible</span>';