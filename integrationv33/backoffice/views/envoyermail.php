<?PHP
include_once 'confige.php';
require 'PHPMailer-master/PHPMailerAutoload.php';

  class admin
  { 
  //attributs
    private $id ; 
    private $password;
    private $mail;

    //methodes
    public function __construct()
    {
    
    }

    public function getpassword(){return $this->password;}
    public function getid(){return $this->id;}

/////////////////////////////

    public function setpassword($password){$this->password=$password;}
    public function setid($id){$this->id=$id;}
    public function setmail($mail){$this->mail=$mail;}

    public function envoyer_mail()
    {
      $mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'qtcreator6@gmail.com';          // SMTP username
$mail->Password = '123456789az'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom('qtcreator6@gmail.com', 'SAV SDA');
if($_POST['to']=="all")
{
  $config=config::getConnexion();
      $sql =$config->prepare("select mail from sav");

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

$mail->addAttachment($_POST['file'], 'new.jpg');

if(!$mail->send()) 
{
    echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('votre mail a ete envoyer ');
        window.location.replace(' http://localhost/backoffice/views/afficherrec.php');
        </SCRIPT>";
        header("Location: http://localhost/backoffice/views/afficherrec.php");
}
else 
{
    echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('echec d'envoi de Email);
        window.location.replace(' http://localhost/backoffice/views/afficherrec.php');
        </SCRIPT>";
        header("Location:  http://localhost/backoffice/views/afficherrec.php");
}
     
}
}
    
    $admin=new admin();
    
    $admin->setmail($_POST['to']);

    $admin->envoyer_mail();
    //header("Location: http://localhost/web/index.html");
    
?>