<?php
/*----------------lecture d'un fichier csv--------------*/
$keys= array();
foreach($KPI as $k => $v) {
$keys[] = array('name'=>$v,'index'=>-1);
}
$data=array();
//echo $data;
ini_set('memory_limit', '512M');
function lire_text()
{
	GLOBAL $url;
	$row=0;
	$donnee = array();
	$result = array();
	$f = fopen ($url, 'r');
    $taille = filesize($url)+1;
    while ($donnee = fgetcsv($f, $taille, $separateur =";")) {
        $result[$row] = $donnee;
        $row++;
    }
    fclose ($f);
    return $result;
}

 /*-----------insertion de fichier dans la base de donnée----------*/

 function position() {
	GLOBAL $keys,$data;
	$res = lire_text();
	//var_dump($res);
	foreach($keys as $k=>$v) {
		foreach($res[0] as $kk => $vv) {
			if(strpos($vv,$v['name']) !==false) {
				$keys[$k]['index'] = $kk;
			}
		}
	}
	
	foreach($res as $k =>$v) {
		if($k>0) {
			$d = array();
			foreach($keys as $kk => $vv) {
				$d[$vv['name']] = $vv['index']>=0 ? trim($v[$vv['index']]) : '';
			}
			$data[] = $d;
		}
	}
 }
 
 position();
//var_dump($keys);
// var_dump($data);
 
?>