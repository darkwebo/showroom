<?PHP
include_once '../confige.php';
//require 'PHPMailer-master/PHPMailerAutoload.php';

	class livraison
	{ 
	//attributs
    private $numLivraison ; 
    private $nomClient ; 
    private $identifiant; 
    private $adresseClient ; 
    private $CP ; 
    private $ville ; 
    private $numCommande ; 

    //methodes
    public function __construct()
    {
      $this->numLivraison=0;
      $this->nomClient="";
      $this->identifiant="";
      $this->adresseClient=0;
      $this->CP=0;
      $this->ville="";
      $this->numCommande=0;
    }

    public function getnumLivraison(){return $this->numLivraison;}
    public function getnomClient(){return $this->nomClient;}
    public function getidentifiant(){return $this->identifiant;}
    public function getadresseClient(){return $this->adresseClient;}
    public function getCP(){return $this->CP;}
    public function getville(){return $this->ville;}
    public function getcommande(){return $this->numCommande;}
/////////////////////////////
    public function setnumLivraison($numLivraison){$this->numLivraison=$numLivraison;}
    public function setnomClient($nomClient){$this->nomClient=$nomClient;}
    public function setidentifiant($identifiant){$this->identifiant=$identifiant;}
    public function setadresseClient($adresseClient){$this->adresseClient=$adresseClient;}
    public function setCP($CP){$this->CP=$CP;}
    public function setville($ville){$this->ville=$ville;}
    public function setcommande($numCommande){$this->numCommande=$numCommande;}

   
  

    public function delete_liv()
    {
      $config=config::getConnexion();
      $sql =$config->prepare("delete from livraison where numLivraison=?");

  $sql->bindParam(1,$this->numLivraison);
  

  /*$numLivraison=$liv->getnumLivraison() ; 
  $nomClient=$liv->getnomClient() ; 
  $identifiant=$liv->getidentifiant() ; 
  $adresseClient=$liv->getadresseClient() ; 
  $numCommande=$liv->getcommande() ;*/
   header('Location: livraisonsupprimer.html');

  $sql->execute();
    }
  }
    
    
    $liv=new livraison();



    
    $liv->setnumLivraison($_POST['numLivraison']);
  

   
   $liv->delete_liv();
  
 
?>
