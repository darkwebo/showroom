<?php

if ($action == "list" || $action == "")
{
/*select le nbre de formule dans la base de donnée*/
$sql="SELECT COUNT(id) as nbFormule FROM formulas";
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
	$requett_ = "SELECT * FROM formulas ORDER BY id ASC LIMIT ".(($cPage-1)*$perPage).",$perPage";
  

    include("templates/formule/list_formule.htm");
  
    $dbq1 = mysql_query($requett_);
    while($dbf1 = mysql_fetch_array($dbq1))
    {   
       include("templates/formule/listformule.htm");
	   
	}
    echo "</table>";
    echo "</form>";
	echo "</div>";
	//afficher le lien qui amene au page
for ($i=1;$i<=$nbPage;$i++)
{
if($i==$cPage)
{
 echo "<link rel='stylesheet' type='text/css' href='css/pagination.css'></head><body><span><a href=\"?cmd=formule&p=$\"class='active'>$i</a></span> ";
}
else
{
  //echo "<a href=\"?cmd=formule&p=$i\">$i </a> |";
  echo "<link rel='stylesheet' type='text/css' href='css/pagination.css'></head><body><span><a href=\"?cmd=formule&p=$i\" class='active'>$i</a></span> ";
  }
 }
	
	
}

if ($action == "add")
{
$req="select * from fichier where type='Compteur OMC'";
	$dbq=mysql_query($req);
	$file="";
	$fs = "";
	if(isset($_GET['file'])) {
		$fs=$_GET['file'];
	}
	while($dba=mysql_fetch_array($dbq)){
	if($fs==""){
			$fs =$dba['nom'];
		}
		$file.="<option value='{$dba['nom']}'".(isset($_GET['file']) && $_GET['file']==$dba['nom'] ? ' selected' : '').">".$dba['nom']."</option>";
	}
	//remplir la liste de formule	
$req1="SHOW COLUMNS FROM `file_{$fs}` where field not in ('id','Date','Heure','BSC','Cell')";
 $dbq1=mysql_query($req1);
 $list ="";
	while($dba=mysql_fetch_array($dbq1))
 {
 
 $list.='<option value="'.$dba['Field'].'" />'.$dba['Field'].'</option>';
 
 }	
	
   include("templates/formule/addformule.htm");
}
if ($action == "cal")
{
 $id = $_GET['id'];    
        $dbq = mysql_query("SELECT * FROM formulas Where id='$id'");
        $dbf = mysql_fetch_array($dbq); 
$req="select * from fichier where type='Compteur OMC'";
	$dbq=mysql_query($req);
	$file="";
	$fs = "";
	
	while($dba=mysql_fetch_array($dbq)){
	    if($fs==""){
			$fs =$dba['nom'];
		}
		$file.="<option value='{$dba['nom']}'".(isset($_GET['file']) && $_GET['file']==$dba['nom'] ? ' selected' : '').">".$dba['nom']."</option>";
	}
	
       
 
   include("templates/formule/calcule_formule.htm");

   }
 //partie calcule de kpi::
 if ($action == "calculte_formule")
{


$name=$_POST['file'];
$formule=$_POST['formule'];
//var_dump($_REQUEST);
$id = $_GET['id'];
include('includes/verif_formule.php');

include("templates/formule/verife_formule.htm");
//goto_("?cmd=formule",0);



}
if ($action == "save")
{
   
    $name = $_POST['name'];
	$formule = $_POST['formule'];
	$operator=$_POST['operator'];
	
  
    $dbq1 = mysql_query("insert into formulas(name,formule,operator) values ('$name','$formule','$operator')");
	
   
 goto_("?cmd=formule",0);
}

if ($action == "mod")
{
        $id =$_GET['id'];    
        $dbq = mysql_query("SELECT * FROM formulas Where id='$id'");
        $dbf = mysql_fetch_array($dbq);
		
$req="select * from fichier where type='Compteur OMC'";
	$dbq=mysql_query($req);
	$file="";
	$fs = "";
	if(isset($_GET['file'])) {
		$fs=$_GET['file'];
	}
	while($dba=mysql_fetch_array($dbq)){
	if($fs==""){
			$fs =$dba['nom'];
		}
		$file.="<option value='{$dba['nom']}'".(isset($_GET['file']) && $_GET['file']==$dba['nom'] ? ' selected' : '').">".$dba['nom']."</option>";
	}
	//remplir la liste de formule	
$req1="SHOW COLUMNS FROM `file_{$fs}` where field not in ('id','Date','Heure','BSC','Cell')";
 $dbq1=mysql_query($req1);
 $list ="";
	while($dba=mysql_fetch_array($dbq1))
 {
 
 $list.='<option value="'.$dba['Field'].'" />'.$dba['Field'].'</option>';
 
 }	
	      
		
        include("templates/formule/modformule.htm");
       

}
if ($action == "savemod")
{
//var_dump($_REQUEST);
    $id = $_GET['id'];
   $name = $_POST['name'];
	$formule = $_POST['formule'];
	$operator=$_POST['operator'];

  $req_login = mysql_query("UPDATE formulas SET name='$name',formule='$formule',operator='$operator' WHERE id='$id'");
    //echo $req_login;

    goto_("?cmd=formule",0);
	
}
if ($action == "del")
{   $id = $_GET['id'];
   
        if(empty($_GET['ok']))
        {
            echo "<br><div id='info'>Do you really want delete this formula ? <a href='index.php?cmd=formule&action=del&id=$id&ok=ok#contenu2'>Yes</a> -- <a href='?cmd=formule'>No</a><div></div></div>";
            
        }
        else if ($_GET['ok'] == 'ok')
        {   
			$dbq1 = mysql_query("Delete From formulas Where id='$id'");
			
		
               goto_("?cmd=formule",0);

        }
}

?>