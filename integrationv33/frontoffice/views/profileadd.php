<?PHP
include_once '../core/confige.php';
session_start();

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
    public function getid(){return $this->id;}

/////////////////////////////

    public function setnom($nom){$this->nom=$nom;}
    public function setmail($mail){$this->mail=$mail;}
    public function setpassword($password){$this->password=$password;}
    public function setid($id){$this->id=$id;}

    public function ajouter_client()
    {
      $config=config::getConnexion();
      $sql =$config->prepare("INSERT INTO client (name, id, mail, password)
                              VALUES (?, ?, ?, ?)");

  $sql->bindParam(1,$this->nom);
  $sql->bindParam(2,$this->id);
  $sql->bindParam(3,$this->mail);
  $sql->bindParam(4,$this->password);
  

  $sql->execute();
    }
    
  }
    
    
    $client=new client();
    
    $client->setnom($_POST['Name']);
    $client->setmail($_POST['Email']);
    $client->setpassword($_POST['password']);
    $client->setid($_POST['idcli']);

    if(isset($_POST['inscri']))
    {
      $client->ajouter_client();
     
      echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('un mail de verification a ete envoyer ver votre boit mail');
        window.location.replace('index.php');
        </SCRIPT>";
    }
    

    //header("Location: http://localhost/web/index.html");
    
?>