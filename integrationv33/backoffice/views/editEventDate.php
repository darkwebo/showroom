<?php

// Connexion à la base de données
require_once('../core/confige.php');

if (isset($_POST['Event'][0]) && isset($_POST['Event'][1]) && isset($_POST['Event'][2])){
	
	
	$id = $_POST['Event'][0];
	$start = $_POST['Event'][1];
	$end = $_POST['Event'][2];

	$sql = "UPDATE events SET  start = '$start', end = '$end' WHERE id = $id ";
	$config=config::getConnexion();

	
	$query=$config->prepare($sql);
	if ($query == false) {
	 print_r($query->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}else{
		die ('OK');
	}

}
header('Location: calendar.php');

	
?>
