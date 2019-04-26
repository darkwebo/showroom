<?PHP
include_once 'confige.php';


	class client
	{ 
	//attributs
    private $nom ; 
    private $mail ;
    private $password;
    private $id;

    //methodes
    public function __construct()
    {
      $this->nom="";
      $this->mail="";
      $this->password="";
    }

    public function getnom(){return $this->nom;}
    public function getmail(){return $this->mail;}
    public function getpassword(){return $this->password;}

/////////////////////////////

    public function setnom($nom){$this->nom=$nom;}
    public function setmail($mail){$this->mail=$mail;}
    public function setpassword($password){$this->password=$password;}
    public function setid($id){$this->id=$id;}

    public function ajouter_client()
    {
      $config=config::getConnexion();
      $sql =$config->prepare("INSERT INTO client (name, id, mail, password)
                              VALUES (?, ?, ? ,?)");

	$sql->bindParam(1,$this->name);
  $sql->bindParam(2,$this->id);
	$sql->bindParam(3,$this->mail);
	$sql->bindParam(4,$this->password);

	$sql->execute();
    }

    
  }
    
    
    $empl=new client();
    
    $empl->setnom($_POST['Name']);
    $empl->setmail($_POST['Email']);
    $empl->setpassword($_POST['password']);
    $empl->setid($_POST['id']);

    $empl->ajouter_client();
    //$empl->update_empl();
    //$empl->delete_empl();
    echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('bienvenu');
        window.location.replace('profile.php');
        </SCRIPT>";
    //header("Location: http://localhost/elite_shoppy-web_Free20-06-2017_1215725234/web/index.html");
    
?>