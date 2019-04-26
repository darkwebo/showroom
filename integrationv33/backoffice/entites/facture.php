<?PHP
//require 'PHPMailer-master/PHPMailerAutoload.php';

	class facture
	{ 
	//attributs
    private $numfacture ; 
    private $nomClient ; 
    private $adresseClient ; 
    private $montant; 
    private $numCommande ; 

    //methodes
    public function __construct($numfacture,$nomClient,$adresseClient,$montant,$numCommande)
    {
      $this->numfacture=$numfacture;
      $this->nomClient=$nomClient;
      $this->adresseClient=$adresseClient;
      $this->montant=$montant;
      $this->numCommande=$numCommande;
    }

    public function getnumfacture(){return $this->numfacture;}
    public function getnomClient(){return $this->nomClient;}
    public function getadresseClient(){return $this->adresseClient;}
    public function getmontant(){return $this->montant;}
    public function getcommande(){return $this->numCommande;}
/////////////////////////////
    public function setnumfacture($numfacture){$this->numfacture=$numfacture;}
    public function setnomClient($nomClient){$this->nomClient=$nomClient;}
    public function setadresseClient($adresseClient){$this->adresseClient=$adresseClient;}
    public function setmontant($montant){$this->montant=$montant;}
    public function setcommande($numCommande){$this->numCommande=$numCommande;}
    }
?>