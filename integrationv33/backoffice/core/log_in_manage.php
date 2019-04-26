<?PHP
include_once 'confige.php';
session_start();

  class log_in_manage
  { 
  
    public function chercher_admin($log_in)
    {
      $config=config::getConnexion();
      $sql =$config->prepare("select id, nom, prenom, mail, phone, password, active from admin where id =?");

  $sql->bindParam(1,$log);
$log=$log_in->getid();
  $sql->execute();
foreach($sql as $val)
   {
     if($val['password']==$_POST['Password']&&$val['active']==1)
     {
      echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('bienvenu');
        window.location.replace('../views/index.php');
        </SCRIPT>";
        $_SESSION['id']=$_POST['idadmin'];
        $_SESSION['nom']=$val['nom'];
        $_SESSION['prenom']=$val['prenom'];
        $_SESSION['mail']=$val['mail'];
        $_SESSION['phone']=$val['phone'];
        $_SESSION['password']=$val['password'];

      //header("Location: http://localhost/web/index.html");
     }
     else if($val['password']==$_POST['Password']&&$val['mail']==0)
     {
      echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('verifier votre compt');
        window.location.replace('../views/login.php');
        </SCRIPT>";
      
     }
     else if($val['password']==$_POST['Password']&&$val['mail']==1)
     {
      echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('bienvenu');
        window.location.replace('../views/login.php');
        </SCRIPT>";
     }
     

    }  
  }

}
    
?>