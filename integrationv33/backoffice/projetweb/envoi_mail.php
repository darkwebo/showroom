<?PHP
include_once '../confige.php';
require_once('modele/Produitpromo.php');
require_once('modele/Produitaimer.php');
require '../views/PHPMailer-master/PHPMailerAutoload.php';


$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'qtcreator6@gmail.com';          // SMTP username
$mail->Password = '123456789az'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to
$mail->setFrom('qtcreator6@gmail.com', 'SDA');

if(isset($_GET['nom']))
{
   $prod=new Produit_aimer();
   $req1=$prod->list_client_nom($_GET['nom']);
   while($donnee=$req1->fetch())
   {
      $email=$prod->selectionner_client($donnee['client']);      
      $mail->addAddress($email);  
$mail->isHTML(true);  
$bodyContent = "salut cher client  le produit ".$_GET['nom']."\n est en solde dès maintenant";
$msg="hello";
$mail->Subject =$msg;
$mail->Body    = $bodyContent;

$mail->addAttachment("C:/xampp/htdocs/backoffice/projetweb/images/".$_GET['nom'].".jpg",  'new.jpg');

if(!$mail->send()) 
{
    echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('votre mail a ete envoyer ');
        window.location.replace('../view/mail_compose.php');
        </SCRIPT>";
        header("Location: ../views/mail_compose.php");
}
else 
{
    echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('echec d'envoi de Email);
        window.location.replace('../view/mail_compose.php');
        </SCRIPT>";
        header("Location: ../views/mail_compose.php");
}
   header("location:gallery.php?action=1&id=".$_GET['id']);
}

}


else
{


$date=new DateTime();
$pro=new Produitpromo();
$req=$pro->afficher_produit();
$n=0;
while($donnee=$req->fetch())
{   
	$date1=new DateTime($donnee['date_debut_promo']);
	if($date1==$date)
	{
       
       $n++;
	}
$mail->addAddress("bienvenunanfa@gmail.com");  
$mail->isHTML(true);  
$bodyContent = "salut les gens le produit ".$donnee['nom']."\n est en solde dès maintenant";
$mail->Subject ="alert";
$mail->Body    = $bodyContent;

$mail->addAttachment("C:/xampp/htdocs/backoffice/projetweb/images/".$donnee['nom'].".jpg", 'new.png ,new.jpg ,new.pdf');

if(!$mail->send()) 
{
    echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('votre mail a ete envoyer ');
        window.location.replace('../view/mail_compose.php');
        </SCRIPT>";
        header("Location: ../views/mail_compose.php");
}
else 
{
    echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('echec d'envoi de Email);
        window.location.replace('../view/mail_compose.php');
        </SCRIPT>";
        header("Location: ../views/mail_compose.php");
}
}
}
     
?>









































<?php

/*require_once('modele/Produitpromo.php');
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
$date=new DateTime();
$pro=new Produitpromo();
$req=$pro->afficher_produit();
$n=0;
while($donnee=$req->fetch())
{   
	$date1=new DateTime($donnee['date_debut_promo']);


	if($date1==$date)
	{
       
       $n++;
	}
	else
	{
		mail("bienvenunanfa@gmail.com", "Alert", "salut les gens le produit ".$donnee['nom']."\n est en solde dès maintenant".$message ,$header);
	}
}*/

?>