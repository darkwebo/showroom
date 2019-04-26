<?PHP
include_once 'configex1.php';


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
      $sql =$config->prepare("INSERT INTO client (nom, id, mail, password)
                              VALUES (?, ?, ?, ?, ?)");

  $sql->bindParam(1,$this->nom);
  $sql->bindParam(2,$this->mail);
  $sql->bindParam(3,$this->password);
  $sql->bindParam(4,$this->id);

  $sql->execute();
    }

    public function modifier_client()
    {
      $config=config::getConnexion();
      $sql =$config->prepare("update client set name=?, mail=?, password=? where id=? ");

  $sql->bindParam(1,$this->nom);
  $sql->bindParam(2,$this->mail);
  $sql->bindParam(3,$this->password);
  $sql->bindParam(4,$this->id);

  $sql->execute();
    }
    public function supprimer_client()
    {
      $config=config::getConnexion();
      $sql =$config->prepare("delete from client where id=?");
      $sql->bindParam(1,$this->id);

  $sql->execute();
    }

    public function confiermer_pass()
    {
     $config=config::getConnexion();
      $sql =$config->prepare("select password from client where id =?");

  $sql->bindParam(1,$this->id);

  $sql->execute();
foreach($sql as $val)
   {
     if($val['password']!=$_POST['passeword'])
     {
      return false;
     }
     else
     {
      return true;
     }
    }
    }
  }
    
    
    $client=new client();
    
    $client->setnom($_POST['Name']);
    $client->setmail($_POST['mail']);
    $client->setpassword($_POST['newpassword']);
    $client->setid($_POST['idclient']);

    if(isset($_POST['modiprofile']))
    {
      $client->modifier_client();
    }
    else if (isset($_POST['suppprofile']))
    {
      $client->supprimer_client();
    }
    else if (isset($_POST['confirmerpass']))
    {
      if(!$client->confiermer_pass())
      {
        echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('mot de passe incorrect');
        window.location.replace('profile.php');
        </SCRIPT>";
      }
      else
      {
        echo "<SCRIPT type='text/javascript'> //not showing me this
        window.location.replace('profile.php');

        document.getElementById('mailo').disabled = false;

        document.getElementById('pass1').disabled = false;

        document.getElementById('passwordcon').disabled = false;
        </SCRIPT>";
      }
    }

    //header("Location: http://localhost/web/index.html");
    
?>