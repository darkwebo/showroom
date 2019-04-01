<?php
///
// Module gestion des utilisateurs
//
if ($action == "list" || $action == "")
{
/*select le nbre de formule dans la base de donnée*/
$sql="SELECT COUNT(id) as nbFormule FROM utilisateur";
$req= mysql_query($sql) or die(mysql_error());
$data=mysql_fetch_assoc($req);
//affichage du nbre de formule
$nbFormule=$data['nbFormule'];
//le nbre de formule a affiché par page
$perPage=27;
//calculer le nbre de la page:: ceil: pour ne pas prendre le partie entier superieur
$nbPage=ceil($nbFormule/$perPage);
//echo $nbPage;
//le numero de la premiere page: ce chiffre va changer pour prendre le nbre de la page
//$cPage=1;
//recuperer get_page
if(isset($_GET['p']) && $_GET['p']>0 && $_GET['p']<=$nbPage)
{
$cPage=$_GET['p'];
}
else
{
$cPage=1;
}
	$requett_ = "SELECT * FROM utilisateur ORDER BY id ASC LIMIT ".(($cPage-1)*$perPage).",$perPage";
    
    include("templates/utilisateur/hlistuser.htm");
  
    $dbq1 = mysql_query($requett_);
    while($dbf1 = mysql_fetch_array($dbq1))
    {   
		$sql = "select * FROM role where id='{$dbf1['role_id']}'";
		//echo $sql;
		$dbq2 = mysql_query($sql);
		
		$dbf2 = mysql_fetch_array($dbq2);
        include("templates/utilisateur/listuser.htm");
	}
    echo "</table>";
    echo "</form>";
	echo "</div>";
		//afficher le lien qui amene au page
for ($i=1;$i<=$nbPage;$i++)
{
if($i==$cPage)
{
  echo "<link rel='stylesheet' type='text/css' href='css/pagination.css'></head><body><span><a href=\"?cmd=utilisateur&p=$i\" class='active'>$i</a></span> ";
}
else
{
  //echo "<a href=\"?cmd=formule&p=$i\">$i </a> |";
  echo "<html><head><link rel='stylesheet' type='text/css' href='css/pagination.css'></head><body><span><a href=\"?cmd=utilisateur&p=$i\">$i</a></span> </body></html>";
  }
 }
	
	
	
	
}


if ($action == "add")
{
	$dbq2 = mysql_query("SELECT * FROM role");
	$role = "";
	while($dbf2 = mysql_fetch_array($dbq2)) {
		$role .= '<option value="'.$dbf2['id'].'">'.$dbf2['name'].'</option>';
	}
   include("templates/utilisateur/adduser.htm");
}
if ($action == "save")
{
//var_dump($_REQUEST);
   
    $nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password2 = md5($password);
    $role = $_POST['role'];

	
   $dbq1 = mysql_query("insert into utilisateur(nom,prenom,email,login,pass,role_id) values ('$nom','$prenom','$email','$login','$password2','$role')");
	
   
    goto_("?cmd=utilisateur&action=list",0);
}

if ($action == "mod")
{
        $id = $_GET['id'];    
        $dbq = mysql_query("SELECT * FROM utilisateur Where id='$id'");
        $dbf = mysql_fetch_array($dbq);
		
		$dbq2 = mysql_query("SELECT * FROM role");
			$role = "";
			while($dbf2 = mysql_fetch_array($dbq2)) {
				$role .= '<option value="'.$dbf2['id'].'"'.($dbf2['id'] == $dbf['role_id'] ? ' SELECTED' : '').'>'.$dbf2['name'].'</option>';
			}
		
        include("templates/utilisateur/moduser.htm");
       

}
if ($action == "savemod")
{
    $id = $_GET['id'];
    $nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $role = $_POST['role'];
	
  $req_login = mysql_query("UPDATE utilisateur SET nom='$nom',prenom='$prenom',email='$email',login='$login',role_id='$role' WHERE id='$id'");
    if ($password != '' && $password2 != '' && $password == $password2)
    {   $password2 = md5($password2);
        $dbq1 = mysql_query("UPDATE utilisateur SET pass = '$password2' WHERE id='$id'");
    }

    goto_("?cmd=utilisateur&action=list",0);
}
if ($action == "del")
{   $id = $_GET['id'];
   
        if(empty($_GET['ok']))
        {
            echo "<br><div id='info'>Do you really want delete this user <a href='index.php?cmd=utilisateur&action=del&id=$id&ok=ok'>Yes</a> -- <a href='?cmd=utilisateur&action=list'>No</a><div></div></div>";
            
        }
        else if ($_GET['ok'] == 'ok')
        {   
            $dbq1 = mysql_query("Delete From utilisateur Where id='$id'");
		
             goto_("?cmd=utilisateur&action=list",0);

        }
}
if ($action == 'acces')
{
	
	$id = $_GET['go'];

	include("templates/utilisateur/acces.htm");
	
}
if ($action == 'saveacces')
{
	
	$id = $_GET['go'];
	$req_delete = mysql_query("delete from acces_module where Id_user = '".$id."'");
	
	$req_module = mysql_query("select * from module where id_module IS NULL");
	while ($res_module = mysql_fetch_array($req_module))
	{
		$idm = $res_module[0];
		if (isset($_POST[$idm]))
		{
			$r = mysql_query("insert into acces_module (Id,Id_module,Id_user,Type) values ('','$idm','$id','1')");
		}
       
	}
	
	$req_smodule = mysql_query("select * from module where id_module IS NOT NULL");
	while ($res_smodule = mysql_fetch_array($req_smodule))
	{
		$ids = $res_smodule[0];
		if (isset($_POST['sous'.$ids.'']))
		{
			$s = mysql_query("insert into acces_module (Id,Id_module,Id_user,Type) values ('','$ids','$id','2')");
		}
       
	}
	
	goto_("?cmd=utilisateur&action=list",0);
}
?>