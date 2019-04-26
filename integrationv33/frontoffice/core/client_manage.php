<?PHP
include_once 'confige.php';
  class client_manage
  { 
 
     public function ajouter_client($client)
    {
      $config=config::getConnexion();
      $sql =$config->prepare("INSERT INTO client (name, id, mail, password)
                              VALUES (?, ?, ?, ?)");

  $sql->bindParam(1,$nom);
  $sql->bindParam(2,$id);
  $sql->bindParam(3,$email);
  $sql->bindParam(4,$password);
  

  $nom=$client->getnom() ; 
  $email=$client->getmail() ; 
  $password=$client->getpassword() ; 
  $id=$client->getid() ; 

  $sql->execute();
  require '../views/PHPMailer-master/PHPMailerAutoload.php';
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


  $mail->addAddress($client->getmail() );

//$mail->addAddress($mail);   // Add a recipient
/*$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');*/

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = 'verifier votre compte on clicon sure le lien si dessou';
$secret = "35onoi2=-7#%g03kl";
$email = urlencode($client->getmail() );
$hash = MD5($client->getmail() .$secret);
$link = "http://localhost/frontoffice/views/verif.php?email=$email&hash=$hash&id=$id";
$bodyContent .="<br>".$link;

$mail->Subject = 'verification compt';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;

} else {
    echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('un mail de verification a ete envoyer ver votre boit mail');
        </SCRIPT>";
}
    
    }

    public function modifier_client($client)
    {
      $config=config::getConnexion();
      $sql =$config->prepare("update client set name=?, mail=?, password=? where id=? ");

  $sql->bindParam(1,$nom);
  $sql->bindParam(2,$mail);
  $sql->bindParam(3,$password);
  $sql->bindParam(4,$_SESSION["id"]);

  $nom=$client->getnom() ; 
  $mail=$client->getmail() ; 
  if($client->getpassword()=='')
  {
    $password=$_SESSION["mot"];
  }
  else
  {
  $password=$client->getpassword() ;
  $_SESSION["mot"] = $password;
  } 
  $id=$client->getid() ; 

  $sql->execute();
      $_SESSION["id"] = $id;
      
      $_SESSION["mail"] = $mail;
      $_SESSION["name"] = $nom;
    }
    public function supprimer_client($client)
    {
      $config=config::getConnexion();
      $sql =$config->prepare("delete from client where id=?");
      $sql->bindParam(1,$id);

  $id=$client->getid() ; 

  $sql->execute();
    }

    public function confiermer_pass($client)
    {
     $config=config::getConnexion();
      $sql =$config->prepare("select password from client where id =?");

  $sql->bindParam(1,$id);
      
  $id=$client->getid() ; 

  $sql->execute();
foreach($sql as $val)
   {
     if($val['password']!=$_POST['passeword'])
     {
      return false;
     }
     else
     {
      return true;
     }
    }
    }
    public function chercher_client($id,$mail)
    {
      $config=config::getConnexion();
      $sql =$config->prepare("select id,mail from client");

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
  
  else
  {
    return false;
  }
   }
    }   



}
    
    
?>