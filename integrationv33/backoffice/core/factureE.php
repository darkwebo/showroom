 <?PHP
require_once('../core/confige.php');
class factureE
	{ 

      function ajouter_fac($fac){
    $sql="insert into facture (numfacture, nomClient, adresseClient, montant, numCommande) values (:numfacture, :nomClient, :adresseClient,:montant, :numCommande)";
    $config=config::getConnexion();
    try{
        $req=$config->prepare($sql);
    
        $numfacture=$fac->getnumfacture();
        $nomClient=$fac->getnomClient();
        $adresseClient=$fac->getadresseClient();
        $montant=$fac->getmontant();
        $numCommande=$fac->getcommande();
    //Bind values is used to prepare thtatement
    //Always do this when there is an interaction from php to mySQL, specially the POST and PUT methods, to tell how they are linked from php to mysql
    //Binds a value to a corresponding named or question mark placeholder in the SQL statement that was used to prepare the statement.
    $req->bindValue(':numfacture',$numfacture);
    $req->bindValue(':nomClient',$nomClient);
    $req->bindValue(':adresseClient',$adresseClient);
    $req->bindValue(':montant',$montant);
    $req->bindValue(':numCommande',$numCommande);
    
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    
  }
  
    function update_fac($fac){
    $sql="UPDATE facture SET nomClient=:nomClient,adresseClient=:adresseClient,montant=:montant,numCommande=:numCommande WHERE numfacture=:numfacture";
    
    $config=config::getConnexion();
    //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{    
        $req=$config->prepare($sql);
    $numfacture=$fac->getnumfacture();
        $nomClient=$fac->getnomClient();
        $adresseClient=$fac->getadresseClient();
        $montant=$fac->getmontant();
        $numCommande=$fac->getcommande();
    $datas = array(':numfacture'=>$numfacture, ':nomClient'=>$nomClient,':adresseClient'=>$adresseClient,':montant'=>$montant,':numCommande'=>$numCommande);
    $req->bindValue(':numfacture',$numfacture);
    $req->bindValue(':nomClient',$nomClient);
    $req->bindValue(':adresseClient',$adresseClient);
    $req->bindValue(':montant',$montant);
    $req->bindValue(':numCommande',$numCommande);
    
    
            $s=$req->execute();
      
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
    
  }
    function supprimer_fac($numfacture){
    $sql="DELETE FROM facture where numfacture= :numfacture";
    $config =config::getConnexion();
        $req=$config->prepare($sql);
    $req->bindValue(':numfacture',$numfacture);
    try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }
    function recupererall(){
    $sql="SELECT * from facture";
    $config= config::getConnexion();
    try{
    $liste=$config->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
      }


      function recuperer_fac($numfacture){
    $sql="SELECT * from facture where numfacture=$numfacture";
    $config= config::getConnexion();
    try{
    $liste=$config->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
      }


       /* function mails ()
{$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'qtcreator6@gmail.com';          // SMTP username
$mail->Password = '123456789az'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, ssl also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom('qtcreator6@gmail.com', 'hello');
//$mail->addReplyTo('info@example.com', 'CodexWorld');
$mail->addAddress('yostsuna@gmail.com');   // Add a recipient
/*$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');*/

/*$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>How to Send Email using PHP in Localhost by CodexWorld</h1>';
$bodyContent .= '<p>This is the HTML email sent from localhost using PHP script by <b>CodexWorld</b></p>';
$mail->addAttachment('C:\Users\ASUS\Desktop\THINGS\PIC\1.png', 'new.jpg');

$mail->Subject = 'Email from Localhost by CodexWorld';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
}*/
function afficher_fac ($facture){
        echo "Numero de la facture: ".$facture->getnumfacture()."<br>";
        echo "Nom du client ".$facture->getnomClient()."<br>";
        echo "adresseClient ".$facture->getadresseClient()."<br>";
        echo "montant: ".$facture->getmontant()."<br>";
        echo "numCommande: ".$facture->getcommande()."<br>";
    }
function PDF ($numfacture)
{
 $sql="SELECT * from facture where numfacture=$numfacture";
    $config= config::getConnexion();
    try{
    $liste=$config->query($sql);
    $ecrire=fopen('facture.txt',"a+");
        fputs($ecrire,$liste);
        fputs($ecrire,"\n");

    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
      }
    
}

?>