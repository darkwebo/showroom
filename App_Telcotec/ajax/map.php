<?php
session_start();	 
include("../global.php");
$file = $_POST["file"];
$kpi = $_POST["nom"];
$drive = $_POST["drive"];
$data =$_POST['data'];
//print_r($kpi);
//print_r($_POST);

set_time_limit(3600);


$response = array();


	$req = "SELECT distinct(concat(Latitude,'_',Longitude)) as cor, {$kpi}, bler FROM file_{$file} WHERE length(`Longitude`)>0 and length(`Latitude`)>0 ";

	$dbq = mysql_query($req);
	
     //echo $dbq;
	while($dba = mysql_fetch_array($dbq)) {
		$v = explode("_", $dba['cor']);
		$dba['Latitude'] = $v[0];
		$dba['Longitude'] = $v[1];
		$tab = array("Latitude" => $dba['Latitude'], "Longitude" => $dba['Longitude'], $kpi => $dba[$kpi], 'label' => '');
		
		if($drive == 'Coverage Evaluation' || $drive == 'Signal Evaluation' ) {
			foreach($data[$kpi] as $key => $val) {
				if($tab[$kpi] >= $val['from'] && $tab[$kpi] <= $val['to']) {
					$tab['label'] = $key;
				}
			}
		}
		if($drive=='road')
		{
		foreach($data[$kpi] as $key => $val) {
				
					$tab['label'] ='';
				
			}
		
		
		}
		
		$response[] = $tab;
	}


echo json_encode($response);

?>