<?php
session_start();	 
include("../global.php");
$file = $_POST["file"];
$date= $_POST["date"];
$bsc = $_POST["bsc"];
$cell = $_POST["cell"];
$h1 = $_POST["heure1"];
$h2 = $_POST["heure2"];
$tab=$_POST["new"];
$kpi="";
foreach($tab as $val)
{
$kpi.='`'.$val.'`,';
}
$kpi=substr($kpi,0,-1);

//print_r($_POST);

$response = array();
//foreach($data[$kpi] as $k => $v) {
	$req = "SELECT Heure,$kpi FROM file_{$file} WHERE Date='$date' and BSC='$bsc' and Cell='$cell'
	and Heure>='$h1' and Heure<='$h2'";
	$dbq = mysql_query($req);
    // echo $req;
	while($dba = mysql_fetch_assoc($dbq)) {
		//$response[0][0]['state'] = $kpi;
		//$response[0][0][$k] = $dba['count'];
		//$response[1][] = array('valueField' => $k, 'name' => $k);
		foreach($tab as $val) {
			$response[$val][] = $dba[$val];
		}
	}
//}

echo json_encode($response);

?>