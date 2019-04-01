<?php
// gest global variables
$cmd = isset($_GET['cmd']) ? $_GET['cmd'] : "";
$action = isset($_GET['action']) ? $_GET['action'] : "";


if(isset($cmd))
{

	$req = mysql_query("select * from acces_module am, module m where Id_user = '".$_SESSION['id']."' and Type IN ('1','2') and m.Id = am.Id_module  order by ordre");
	$trouve = '0' ;
	while ($res = mysql_fetch_array($req))
	{
		$fich = $res['fichier_php'];
		$cm = $res['cmd'];

		if ($cmd == $cm && strlen($fich))
		{
			include ("module/".$fich."");
			$trouve = '1';
			break;
		}
	}

	if($trouve == 0) {
    switch ($cmd)
    {
		
		case "": case "acceuil":
			include ("module/acceuil.php");
			break;
		/*case "fichier":
		    include ("module/fichier.php");
			break;
		case "drive":
		    include ("module/drive.php");
			break;
			case "mapping":
		    include ("module/map.php");
			break;
		case "omc":
		    include ("module/omc.php");
			//include ("module/formule.php");
			break;
		case "utilisateur":
		    include ("module/utilisateur.php");
			break;
		case "role":
		    include ("module/role.php");
			break;
		case "formule":
		    include ("module/formule.php");
			break;*/
		default:
			goto_('?cmd=acceuil',0);
			break;
	
    }
	}
}
else
{ 

    $cmd ="acceuil" ;
	$action ="list";
    include("module/acceuil.php");

}
?>