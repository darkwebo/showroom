<?php
    header('Content-Type: text/html; charset: UTF-8');
	include("../global.php");
	
	$id = $_POST['param1'];
	$check = $_POST['param2'];
	
	$lignes = '';
	$req = mysql_query("select * from module where Id_module = '".$id."' order by ordre");
	$num = mysql_num_rows($req);
	while ($res = mysql_fetch_array($req))
	{
		$lignes.=  $res[0]."-";
	}
	$lignes = substr($lignes,0,-1);
	
	      
	echo $id."_".$lignes."_".$num."_".$check;
?>