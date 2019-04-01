<?php
include("const.php");
include("config.php");
include("includes/mysql.php"); 
include("includes/function.php");



	 $connection = new mydb($db_server,$db_user,$db_pass,$db_name);
     $link = $connection->dbconnect();
	 
	$url_http = $_SERVER["SERVER_NAME"].$_SERVER["PHP_SELF"];
	$url_site = strstr($url_http,strrchr($url_http,"/"),true);
	$url_site="http://".$url_site."/";
	//echo $url_http."---".$url_site;
	 

extract($_GET);
extract($_POST);
@extract($_SESSION);
@extract($GLOBALS);
// extract($_SERVER);
extract($_REQUEST);
extract($_FILES);

?>