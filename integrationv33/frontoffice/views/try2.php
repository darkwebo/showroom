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

    public function chercher_client()
    {
      $config=config::getConnexion();
      $sql =$config->prepare("select password from client where id =?");

  $sql->bindParam(1,$this->id);

  $sql->execute();
foreach($sql as $val)
   {
     if($val['password']==$_POST['pas'])
     {
      /*echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('bien venue');
        window.location.replace('http://localhost/elite_shoppy-web_Free20-06-2017_1215725234/web/profile.html');
        </SCRIPT>";*/
        echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('bienvenu');
        window.location.replace('profile.php');
        </SCRIPT>";
      //header("Location: http://localhost/elite_shoppy-web_Free20-06-2017_1215725234/web/profile.html");
     }
     else 
     {
      /*echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('id/mot de passe incorrect');
        window.location.replace('http://localhost/elite_shoppy-web_Free20-06-2017_1215725234/web/profile.html');
        </SCRIPT>";*/
      header("Location: index.html");
     }
   
   }

   }
    
  }
    
    
    $empl=new client();
    $empl->setid($_POST['id']);
    $empl->chercher_client();

   //header("Location: http://localhost/web/index.html");
    
?>