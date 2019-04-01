<?php

if($action=="" || $action=="list") {
	$req="select * from fichier where type='Drive test'";
	$dbq=mysql_query($req);
	$nom="";
	while($dba=mysql_fetch_array($dbq)){
		$nom.="<option value='{$dba['nom']}'>".$dba['nom']."</option>";
	}
	$kd="";
	foreach($KPI_DRIVE as $k => $v) {
		$kd.="<option value='{$v}'>".$v."</option>";
	}
	
	
	
	include("templates/mapping/mapping.htm");
}




?>