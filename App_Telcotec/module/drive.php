<?php

if($action=="" || $action=="list") 
{
	$req="select * from fichier where type='Drive test'";
	$dbq=mysql_query($req);
	$nom="";
	while($dba=mysql_fetch_array($dbq)){
		$nom.="<option value='{$dba['nom']}'>".$dba['nom']."</option>";
		
	}
	$req1="select * from fichier where type='Drive test'";
	$dbq1=mysql_query($req);
	$list="";
	while($dba1=mysql_fetch_array($dbq1)){
		//$analyse.="<input type="" value='{$dba['nom']}'>".$dba['nom']."<br>";
		$list.='<input type="checkbox"  class="option" name="new1[]" value="'.$dba1['nom'].'">'.$dba1['nom'].'<br>';
		//echo "dedut";
	//$list.="<option value='{$dba1['nom']}'>".$dba1['nom']."</option>"."<br>";
	}
	
	$kd="";
	foreach($KPI_DRIVE as $k => $v) {
		$kd.="<option value='{$v}'>".$v."</option>";
	}
	include("templates/drive/drive.htm");
	/*include("templates/drive/map.htm");*/
}
//$kpis.='<input type="checkbox"  class="option" name="new[]" value="'.$dba['Field'].'" id="corpo"/>'.$dba['Field'].'<br>';


?>