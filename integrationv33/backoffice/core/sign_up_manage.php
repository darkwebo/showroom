<?PHP
include_once 'confige.php';

  class sign_up_manage
  { 
    public function ajouter_admin($sign_up,$choix)
    {
      $config=config::getConnexion();
      $sql =$config->prepare("INSERT INTO admin (id ,nom ,prenom ,mail ,phone ,password,code)
                              VALUES (?, ?, ?, ?, ?, ?, ?)");

  $sql->bindParam(1,$id);
  $sql->bindParam(2,$nom);
  $sql->bindParam(3,$prenom);
  $sql->bindParam(4,$mail);
  $sql->bindParam(5,$phone);
  $sql->bindParam(6,$password);
  $sql->bindParam(7,$code);

  $id=$sign_up->getid();
  $nom=$sign_up->getnom();
  $prenom=$sign_up->getprenom();
  $mail=$sign_up->getmail();
  $password=$sign_up->getpassword();
  $phone=$sign_up->getphone();
  $code=rand(1000,9999);

  $sql->execute();
  if($choix=="email")
  {
require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'qtcreator6@gmail.com';          // SMTP username
$mail->Password = '123456789az'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, ssl also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom('qtcreator6@gmail.com', 'admin');
//$mail->addReplyTo('info@example.com', 'CodexWorld');


  $mail->addAddress($_SESSION['mail']);

//$mail->addAddress($mail);   // Add a recipient
/*$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');*/

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = 'verifier votre compte on clicon sure le lien si dessou';
$secret = "35onoi2=-7#%g03kl";
$email = urlencode($sign_up->getmail());
$hash = MD5($sign_up->getmail().$secret);
$link = "http://localhost/backoffice/views/verif.php?email=$email&hash=$hash&id=$id";
$bodyContent .="<br>".$link;

$mail->Subject = 'verification compt';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('un mail de verification a ete envoyer ver votre boit mail');
        window.location.replace('../views/login.php');
        </SCRIPT>";
}
else
{
  require ('../views/sms/Clockwork.php');
$api='3dc525bd6c44662cb423497cf9852cce1ead1e52';

$clockwork = new mediaburst\ClockworkSMS\Clockwork($api);

$message = array('to' => '216'.$phone, 'message' => 'votre code de verification : '.$code);
$envoye = $clockwork->send($message);
echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('un sms avec un code de verification a ete envoyer');
        window.location.replace('../views/verif2.php?id=$id');
        </SCRIPT>";
}

    }

    public function chercher_client($id,$mail,$phone)
    {
      $config=config::getConnexion();
      $sql =$config->prepare("select id,mail,phone from admin");

  $sql->execute();
  foreach($sql as $val)
   {
  if($val['id']==$id)
  {
    return 1;
  }
  if($val['mail']==$mail)
  {
    return 2;
  }
  if($val['phone']==$phone)
  {
    return 3;
  }
  else
  {
    return false;
  }
   }
    } 
}  
?>