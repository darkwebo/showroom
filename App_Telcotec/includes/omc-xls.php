<?php
include('PHPExcel/PHPExcel.php');
/*----------------lecture d'un fichier Excel--------------*/
$keys= array();
foreach($KPI as $k => $v) {
$keys[] = array('name'=>$v,'index'=>-1);
}
$data=array();
$keys = array();
//ini_set('upload_max_filesize','500M'); 
ini_set('memory_limit','512M');
set_time_limit(3600);

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

	$data = lire_text();
	$keys = $data[1];
	unset($data[1]);	
 
// var_dump($keys);
// var_dump($data);
 
?>