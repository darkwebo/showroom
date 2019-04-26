<?PHP
include_once 'confige.php';
require '../views/PHPMailer-master/PHPMailerAutoload.php';

class mail_send
  { 
    public function envoyer_mail($mail)
    {
      $mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'qtcreator6@gmail.com';          // SMTP username
$mail->Password = '123456789az'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom('qtcreator6@gmail.com', 'ADMIN');
if($_POST['to']=="all")
{
  $config=config::getConnexion();
      $sql =$config->prepare("select mail from client");

  $sql->execute();
foreach($sql as $val)
   {
     $mail->addAddress($val['mail']);  
   }
}
else if($_POST['to']=="newsletter")
{
  $config=config::getConnexion();
      $sql =$config->prepare("select mail from newsletter");

  $sql->execute();
foreach($sql as $val)
   {
     $mail->addAddress($val['mail']);  
   }
}
else if($_POST['to']=="admin")
{
  $config=config::getConnexion();
      $sql =$config->prepare("select mail from admin");

  $sql->execute();
foreach($sql as $val)
   {
     $mail->addAddress($val['mail']);  
   }
}
else
{
  $mail->addAddress($_POST['to']);  
}

$mail->isHTML(true);  

$bodyContent = $_POST['message'];

$mail->Subject = $_POST['subject'];
$mail->Body    = $bodyContent;

$mail->addAttachment("C:/xampp/htdocs/backoffice/views/imagemail/".$_POST['file'], 'new.png ,new.jpg ,new.pdf');

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