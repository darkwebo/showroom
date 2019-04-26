<?PHP
include "../core/service_vol.php";
if (isset($_POST['ref']) and isset($_POST['compagnie']) and isset($_POST['destination']) and isset($_POST['datev']) and isset($_POST['hdepart'])and isset($_POST['harrivee']))
{
$vol1= new vol($_POST['ref'],$_POST['compagnie'],$_POST['destination'],$_POST['datev'],$_POST['hdepart'],$_POST['harrivee']);
//Partie2

//var_dump($client1);


//Partie3
$ser=new service_vol();
$ser->ajouter($vol1);

	
}else{
	echo "vérifier les champs";
}


?>
