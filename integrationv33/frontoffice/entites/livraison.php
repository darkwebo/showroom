<?PHP
include_once '../confige.php';
//require 'PHPMailer-master/PHPMailerAutoload.php';

	class livraison
	{ 
	//attributs
    private $numLivraison ; 
    private $nomClient;
    private $adresseClient;
    private $ville ; 
    private $numCommande ; 

    //methodes
    public function __construct($numLivraison,$nomClient,$adresseClient,$ville,$numCommande)
    {
      $this->numLivraison=$numLivraison;
      $this->nomClient=$nomClient;
      $this->adresseClient=$adresseClient;
      $this->ville=$ville;
      $this->numCommande=$numCommande;
    }

    public function getnumLivraison(){return $this->numLivraison;}
    public function getnomClient(){return $this->nomClient;}
    public function getadresseClient(){return $this->adresseClient;}
    public function getville(){return $this->ville;}
    public function getnumCommande(){return $this->numCommande;}
/////////////////////////////
    public function setnumLivraison($numLivraison){$this->numLivraison=$numLivraison;}
    public function setnomClient($nomClient){$this->nomClient=$nomClient;}
    public function setadresseClient($adresseClient){$this->adresseClient=$adresseClient;}
    public function setville($ville){$this->ville=$ville;}
    public function setnumCommande($numCommande){$this->numCommande=$numCommande;}

  }
  ?>
