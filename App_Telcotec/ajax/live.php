<?php
session_start();	 
include("../global.php");
$file = $_POST["file"];
$kpi= $_POST["kpi"];
$drive = $_POST["drive"];
$chart = $_POST["chart"];

//print_r($_POST);

$response = array();
	$req = "SELECT distinct(concat(Time,'_',{$kpi})) as cor FROM file_{$file}";

	$dbq = mysql_query($req);

	while($dba = mysql_fetch_array($dbq)) {
		$v = explode("_", $dba['cor']);
		$dba['Time'] = $v[0];
		$dba['kpi'] = $v[1];
		$response[] = array("Time" => $dba['Time'], "kpi" => $dba['kpi']);
	}


echo json_encode($response);

?>