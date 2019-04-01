<?php

if($action=="" || $action=="list") {


$req="select * from fichier where type='Compteur OMC'";

	$dbq=mysql_query($req);

	

	$file="";
	$fs = "";
	if(isset($_GET['file'])) {
		$fs=$_GET['file'];
	}

	while($dba=mysql_fetch_array($dbq)){
		if($fs==""){
			$fs =$dba['nom'];
		}
		$file.="<option value='{$dba['nom']}'".(isset($_GET['file']) && $_GET['file']==$dba['nom'] ? ' selected' : '').">".$dba['nom']."</option>";
	}

if($fs!="") 
{

 $req1="select distinct(Date) from `file_{$fs}`";
 //echo $req1;
 $dbq1=mysql_query($req1);
 $date="";
 $ds="";
 if(isset($_GET['date'])) {
	$ds=$_GET['date'];
 }

 while($dba1=mysql_fetch_array($dbq1))
 {
 if($ds=="") {
 $ds = $dba1['Date'];
 }
 $date.="<option value='{$dba1['Date']}'".(isset($_GET['date']) && $_GET['date']==$dba1['Date'] ? ' selected' : '').">".$dba1['Date']."</option>";
 
 }

  
 $req2="select distinct(BSC) from `file_{$fs}` where Date='$ds'";
 $dbq2=mysql_query($req2);
 $bsc="";
 $bs="";
 if(isset($_GET['bsc'])) {
	$bs=$_GET['bsc'];
 }
 while($dba2=mysql_fetch_array($dbq2))
 {
 if($bs=="") {
 $bs = $dba2['BSC'];
 }
 $bsc.="<option value='{$dba2['BSC']}'".(isset($_GET['bsc']) && $_GET['bsc']==$dba2['BSC'] ? ' selected' : '').">".$dba2['BSC']."</option>";
 }
  
  $req3="select distinct(Agregation) from `file_{$fs}` where BSC='$bs' and DATE='$ds'";
 $dbq3=mysql_query($req3);
 $agregation="";
 $as="";
 if(isset($_GET['agregation'])) {
	$as=$_GET['agregation'];
 }
 while($dba3=mysql_fetch_array($dbq3))
 {	
  if($as=="") {
 $as = $dba3['Agregation'];
 }
 $agregation.="<option value='{$dba3['Agregation']}'".(isset($_GET['agregation']) && $_GET['agregation']==$dba3['Agregation'] ? ' selected' : '').">".$dba3['Agregation']."</option>";
 
 }
$req4="select distinct(Cell) from `file_{$fs}` where Agregation='$as' and BSC='$bs'";
 $dbq4=mysql_query($req4);
 $cell="";
 $cs="";
 if(isset($_GET['cell'])) {
	$cs=$_GET['cell'];
 }
 while($dba4=mysql_fetch_array($dbq4))
 {
 $dba4['Cell']=trim($dba4['Cell']);
  if($cs=="") {
 $cs = $dba4['Cell'];
 }
 $cell.="<option value='{$dba4['Cell']}'".(isset($_GET['cell']) && $_GET['cell']==$dba4['Cell'] ? ' selected' : '').">".$dba4['Cell']."</option>";
 
 }

 
   
 $req5="select distinct(Heure) from `file_{$fs}` where Cell='$cs' and Agregation='$as' and BSC='$bs' and DATE='$ds'";
 $dbq5=mysql_query($req5);
 $heure1="";
 while($dba=mysql_fetch_array($dbq5))
 {
 $heure1.="<option value='{$dba['Heure']}'>".$dba['Heure']."</option>";
 
 }
 
   
 
 $req6="SHOW COLUMNS FROM `file_{$fs}` where field not in ('id','Date','Heure','BSC', 'Agregation', 'Cell')";
 $dbq6=mysql_query($req6);
 $kpis ="";
	while($dba=mysql_fetch_array($dbq6))
 {
 $kpis.='<input type="checkbox"  class="option" name="new[]" value="'.$dba['Field'].'" id="corpo"/>'.$dba['Field'].'<br>';
 
 }


 /*$req9="select distinct(name) from `formulas` where id < 10";
 $dbq9=mysql_query($req9);
 $dash ="";
	while($dba9=mysql_fetch_array($dbq9))
 {
 $dash.='<input type="checkbox"  class="option" name="new[]" value="'.$dba9['Field'].'"/>'.$dba9['Field'].'<br>';
 
 }*/

 
 ////////

}
	include("templates/omc/omc.htm");
}
?>