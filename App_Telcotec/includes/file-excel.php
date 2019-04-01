<?php
include('PHPExcel/PHPExcel.php');
/*----------------lecture d'un fichier Excel--------------*/
$keys= array();
foreach($KPI as $k => $v) {
$keys[] = array('name'=>$v,'index'=>-1);
}
$data=array();

ini_set('memory_limit', '512M');

function lire_text()
{
	GLOBAL $url;
	$cacheMethod = PHPExcel_CachedObjectStorageFactory::cache_to_discISAM; 
	$cacheSettings = array( 'dir' => 'c:/wamp/tmp' );
	PHPExcel_Settings::setCacheStorageMethod($cacheMethod, $cacheSettings);
	$objPHPExcel = PHPExcel_IOFactory::load($url);
	$objWorksheet = $objPHPExcel->getActiveSheet();
	
	
	$row1=0;
	$result = array();
	
	foreach ($objWorksheet->getRowIterator() as $i => $row) {
			$cellIterator = $row->getCellIterator();
			$cellIterator->setIterateOnlyExistingCells(false);
			foreach ($cellIterator as $j => $cell) {
				$result[$i][$j] = $cell->getValue();
			}
	}
	
	return $result;
}



 function position() {
	GLOBAL $keys,$data;
	$res = lire_text();
	//var_dump($res);
	foreach($keys as $k=>$v) {
		foreach($res[1] as $kk => $vv) {
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
// var_dump($keys);
// var_dump($data);
 
?>