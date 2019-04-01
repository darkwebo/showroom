<?php
/*----------------lecture d'un fichier csv--------------*/
$data=array();
$keys = array();

ini_set('memory_limit', '512M');
function lire_text()
{
	GLOBAL $url;
	$row=0;
	$donnee = array();
	$result = array();
	$f = fopen ($url, 'r');
    $taille = filesize($url)+1;
    while ($donnee = fgetcsv($f, $taille, $separateur ="\t")) {
        $result[$row] = $donnee;
        $row++;
    }
    fclose ($f);
    return $result;
}

 /*-----------insertion de fichier dans la base de donnée----------*/

	$data = lire_text();
	
$keys = $data[0];
unset($data[0]);
//var_dump($keys);
 //var_dump($data);
 
?>