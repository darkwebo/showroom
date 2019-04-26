<?php
include "../entites/rating.php";
include "../core/ratingc.php";


if (isset($_POST['rating'])and isset($_POST['comnt']))
{
$rating1=new rating($_POST['rating'],$_POST['comnt']);
$rating1C=new ratingC();
$rating1C->ajouterrating($rating1);
}
	else{
	echo "vérifier les champs";
}

header("location: http://localhost/frontoffice/views/ajoutersav.php");
	
	?>