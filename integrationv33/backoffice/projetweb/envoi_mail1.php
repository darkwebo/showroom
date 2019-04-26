<?php
require_once('modele/Produitpromo.php');
$header="MIME-Version: 1.0\r\n";
$header.='From:"rochinel.com"<support@rochinel.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
	<body>
		<div align="left">
			<img src="http://www.primfx.com/mailing/banniere.png" height="100" width="400"/>
			<br />
		</div>
	</body>
</html>
';
      try
      {
      	if(isset($_POST['adresse']))
      	{
      		mail($_POST['adresse'], $_POST['object'], $_POST['contenu']."".$message ,$header);
      		header('location:mail_compose.php');
      	}
      else
      {
      	throw new Exception("message not send", 1);
      	
      }

      }

      catch(Exception $e) 
{ // S'il y a eu une erreur, alors...
    echo 'Erreur : ' . $e->getMessage();
}
		

?>