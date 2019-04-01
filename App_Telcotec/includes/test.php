<?php
error_reporting(E_ALL);
require_once 'PHPExcel/PHPExcel/IOFactory.php';
$objPHPExcel = PHPExcel_IOFactory::load("test.xlsx");
$objWorksheet = $objPHPExcel->getActiveSheet();
echo '<table>' . "\n";
foreach ($objWorksheet->getRowIterator() as $row) {
//if(1 == $row->getRowIndex ()) continue;
echo '<tr>' . "\n";
$cellIterator = $row->getCellIterator();
$cellIterator->setIterateOnlyExistingCells(false);
foreach ($cellIterator as $cell) {

echo '<td>' . $cell->getValue().'['.$cell->getColumn().']' . '</td>' . "\n";
}
echo '</tr>' . "\n";
}
echo '</table>' . "\n";
?> 