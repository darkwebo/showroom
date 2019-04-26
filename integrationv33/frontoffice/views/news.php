<?PHP
include_once 'confige.php';

  class news
  { 
  //attributs
    private $mail;

    //methodes
    public function __construct()
    {
    
    }

/////////////////////////////
    public function setmail($mail){$this->mail=$mail;}

    public function chercher_mail()
    {
        $config=config::getConnexion();
      $sql =$config->prepare("select mail from newsletter where mail=?");

  $sql->bindParam(1,$this->mail);

  $sql->execute();
foreach($sql as $val)
   {
     if($val['mail']==$_POST['mail'])
     {
      
        return false;
      //header("Location: http://localhost/web/index.html");
     }
     else
     {
      return true;
     }
     

    }  
      
    }

    public function ajouter_mail()
     {
      $config=config::getConnexion();
      $sql =$config->prepare("INSERT INTO newsletter (mail)
                              VALUES (?)");
      $sql->bindParam(1,$this->mail);

      $sql->execute();

      echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('vous avez fais l incription avec sucee');
        window.location.replace('http://localhost/elite_shoppy-web_Free20-06-2017_1215725234/web/index.html');
        </SCRIPT>";
      
     }
}
    
    $news=new news();
    
    $news->setmail($_POST['news']);

    if(!$news->chercher_mail())
    {
      $news->ajouter_mail();
    }
    else
    {
      echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('mail deja existant');
        window.location.replace('http://localhost/elite_shoppy-web_Free20-06-2017_1215725234/web/index.html');
        </SCRIPT>";
    }
    //header("Location: http://localhost/web/index.html");
    
?>