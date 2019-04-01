<?php
session_start();	 
include("../global.php");
$analyse = $_POST["type-analyse"];
$file = $_POST["file"];
$kpi= $_POST["kpi"];
$drive = $_POST["drive"];
//$chart = $_POST["chart"];
$tab1=$_POST["new1"];  //liste des files

$response = array();
foreach($tab1 as $kk => $vv) {
foreach($data[$kpi] as $k => $v) {
	$req = "SELECT count(id) as count, max(`{$kpi}`) as max, min(`{$kpi}`) as min FROM file_{$vv} WHERE length(`{$kpi}`)>0 and `{$kpi}` BETWEEN {$v['from']} and {$v['to']}";

	$dbq = mysql_query($req);

	$dba = mysql_fetch_array($dbq);

		
		$response[] = array($vv => array("index" => $k, "value" => $dba["count"], "max" =>$dba['max'], "min" => $dba['min']));
	
}
}

echo json_encode($response);

?>