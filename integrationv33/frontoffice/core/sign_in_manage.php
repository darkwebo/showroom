<?PHP
include_once 'confige.php';
session_start();

	class sign_in_manage
	{ 
	
    public function chercher_client($sign_in)
    {
      $config=config::getConnexion();
      $sql =$config->prepare("select password,id,name,mail,active from client where id =?");

  $sql->bindParam(1,$id);
  $id=$sign_in->getid();

  $sql->execute();
foreach($sql as $val)
   {
     if($val['password']==$_POST['pas']&&$val['active']==1)
     {
      
        echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('bienvenu');
        window.location.replace('index.php');
        </SCRIPT>";
      $_SESSION["id"] = $val['id'];
      $_SESSION["mot"] = $val['password'];
      $_SESSION["mail"] = $val['mail'];
      $_SESSION["name"] = $val['name'];
     }
     else if($val['password']==$_POST['pas']&&$val['active']==0)
     {
      echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('verifier votre boit mail');
        window.location.replace('index.php');
        </SCRIPT>";
      //header("Location: index.php");
     }
     else
     {
      echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('mot de passe incorrect');
        window.location.replace('index.php');
        </SCRIPT>";
      //header("Location: index.php");
     }
   
   }

   }
    
  }
?>