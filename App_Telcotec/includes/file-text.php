<?php
/*----------------lecture d'un fichier texte--------------*/
$keys= array();
foreach($KPI as $k => $v) {
$keys[] = array('name'=>$v,'index'=>-1);
}
$data=array();
//ini_set('memory_limit', '512M');
function lire_text()
{
	GLOBAL $url;
	$row=0;
	$donnee = array();
	$result = array();
	/*Ouverture du fichier en lecture seule*/
	$handle = fopen($url, 'r');
	/*Si le fichier n'est pas ouvert*/
	if (!($handle))
	 exit("Impossible d'ouvrir le fichier."); 


	/*Si on a réussi à ouvrir le fichier*/
	if ($handle)
	{
		/*Tant que l'on est pas à la fin du fichier*/
		while (!feof($handle))
		{
			$line = fgets($handle);
			$donnee = explode("\t", $line);
			$result[$row] = $donnee;
			$row++;
		}
	}
	/*On ferme le fichier*/
	fclose($handle);
	return $result;
}
//print_r(lire_text());

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
				@$d[$vv['name']] = $vv['index']>=0 ? trim($v[$vv['index']]) : '';
			}
			$data[] = $d;
		}
	}
 }
 
 position();
// echo "keyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy";
 //var_dump($keys);
 //echo "dateeeeeeeeeeeeeeeeeeeeeeeeeeeee";
  //var_dump($data);
 
?>