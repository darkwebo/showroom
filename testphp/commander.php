<?PHP
include_once 'configex1.php';

class lunette
	{ 
	//attributs
    private $referance ; 
    private $marque ; 
    private $type ; 
    private $prix ; 
    private $nbstock ; 

    //methodes
    public function __construct()
    {
      
    }
    public function setref($referance){$this->referance=$referance;}
    public function setmarque($marque){$this->marque=$marque;}
    public function settype($type){$this->type=$type;}
    public function setprix($prix){$this->prix=$prix;}
    public function setnbstock($nbstock){$this->nbstock=$nbstock;}

    public function getref(){return $this->referance;}
    public function getmarque(){return $this->nom;}
    public function gettype(){return $this->type;}
    public function getprix(){return $this->prix;}
    public function getnbstock(){return $this->nbstock;}

    public function maj()
    {
$config=config::getConnexion();
      $sql =$config->prepare("update lunette set nombrestock=? where referance=?");

  $sql->bindParam(1,$this->nbstock);
  $sql->bindParam(2,$this->referance);
  
  $sql->execute();
    }

}

$lunette= new lunette();
$lunette->setref($_POST['ref']);
$stock=$_POST['nbstock']-1;
$lunette->setnbstock($stcok);

  $lunette->maj();
header("Location: http://localhost/testphp/gestionlunette.php")
?>
