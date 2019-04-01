<?php
session_start();
include("../global.php");
$file = $_POST["file"];
$kpi= $_POST["kpi"];
//echo '|'.$kpi.'|';
$drive = $_POST["drive"];
$chart = $_POST["chart"];

//print_r($_POST);

$response = array();
foreach($data[$kpi] as $k => $v) {
	$req = "SELECT count(id) as count, max(`{$kpi}`) as max, min(`{$kpi}`) as min FROM file_{$file} WHERE length(`{$kpi}`)>0 and `{$kpi}` BETWEEN {$v['from']} and {$v['to']}";
	//$req = "SELECT count(id) as count, max(`{$kpi}`) as max, min(`{$kpi}`) as min FROM file_{$file} WHERE length(`{$kpi}`)>0 and `//{$kpi}`>={$v['from']} and '{$kpi}'< {$v['to']}";
console.log(<?php echo $req;?>);
	$dbq = mysql_query($req);
    //echo $req;
	$dba = mysql_fetch_array($dbq);

	if($chart == 'bar') {

		$response[] = array("index" => $k, "value" => $dba["count"], "max" =>$dba['max'], "min" => $dba['min']);
	} else if($chart == 'pie') {
		$response[] = array("index" => $k, "value" => $dba["count"]);
	}
}

echo json_encode($response);

?>
