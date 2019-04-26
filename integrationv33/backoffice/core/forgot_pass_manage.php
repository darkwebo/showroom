<?PHP
include_once 'confige.php';
require '../views/PHPMailer-master/PHPMailerAutoload.php';

  class forgot_pass_manage
  { 
    public function chercher_admin($forgot_pass,$mail)
    {
      $config=config::getConnexion();
      $sql =$config->prepare("select mail,password from admin where mail =?");

  $sql->bindParam(1,$mail1);
  $mail1=$forgot_pass->getmail();
  $sql->execute();
foreach($sql as $val)
   {
     if($val['mail']==$mail)
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
$mail->addAddress($val['mail']);  

$mail->isHTML(true);  

$bodyContent = '<h1>MOT DE PASSE</h1>';
$bodyContent .= '<p>'.$val['password'].'</p>';

$mail->Subject = 'recuperation mot de passe';
$mail->Body    = $bodyContent;

if(!$mail->send()) 
{
    echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('votre mot de passe a ete envoyer ver votre mail');
        window.location.replace('../views/login.php');
        </SCRIPT>";
        //header("Location: ../views/login.php");
} else 
{
    echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('echec d'envoi de Email);
        window.location.replace('../views/forgotpass.html');
        </SCRIPT>";
        header("Location: ../views/forgotpass.php");
}
     }
     else 
     {
      echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('mail introuvable');
        window.location.replace('../views/login.php');
        </SCRIPT>";
        header("Location: ../views/login.php");
      
     }

    }  
  }

}
    
?>