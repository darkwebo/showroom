<?php
include "../core/livraisonC.php";
$liv=new livraisonC();
if (isset($_GET["id"]))
{
	echo $_GET["id"];

  $liv->supprimer_liv($_GET["id"]);
  header('Location: liv.php');
}

?>