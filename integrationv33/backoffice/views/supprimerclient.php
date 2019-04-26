<?PHP
include_once 'confige.php';
require 'PHPMailer-master/PHPMailerAutoload.php';

class client
{
	private $id;

	function __construct()
	{
		
	}
	
	function getId()
	{
		return $this->id;
	}
	
	function setId($id)
	{
		$this->id=$id;
	}
	
    public function chercher_admin()
    {
      $config=config::getConnexion();
      $sql =$config->prepare("select mail from client where id =?");

  $sql->bindParam(1,$this->id);

  $sql->execute();
foreach($sql as $val)
   {
     if($val['mail']==$_POST['mail'])
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

$bodyContent = '<p>votre compt a ete supprimer de la par de l admin à cause des comportement inapproprié</p>';

$mail->Subject = 'suppression du compt';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('votre mot de passe a ete envoyer ver votre mail');
        window.location.replace('http://localhost/web/login.html');
        </SCRIPT>";
        header("Location: http://localhost/web/login.html");
} else {
    echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('echec d'envoi de Email);
        window.location.replace('http://localhost/web/forgotpass.html');
        </SCRIPT>";
        header("Location: http://localhost/web/login.html");
}
     }
     else 
     {
      echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('mail introuvable');
        window.location.replace('http://localhost/web/forgotpass.html');
        </SCRIPT>";
        header("Location: http://localhost/web/login.html");
      
     }

    }  
  }
	public function supprimer_client()
    {
      $config=config::getConnexion();
      $sql =$config->prepare("delete from client where id=?");

	$sql->bindParam(1,$this->id);

	$sql->execute();
    }

}
    
    
    $client=new client();
    $client->setId($_POST['id']);

    $client->supprimer_client();

    

    header("Location: http://localhost/web/supprimerclient.html");

    
?>