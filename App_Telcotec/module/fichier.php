<?php
///
// Module gestion des fichiers
//
if ($action == "list" || $action == "")
{


$sql="SELECT COUNT(id) as nbFormule FROM fichier";
$req= mysql_query($sql) or die(mysql_error());
$data=mysql_fetch_assoc($req);


$nbFormule=$data['nbFormule'];

$perPage=25;

$nbPage=ceil($nbFormule/$perPage);

if(isset($_GET['p']) && $_GET['p']>0 && $_GET['p']<=$nbPage)
{
$cPage=$_GET['p'];
}
else
{
$cPage=1;
}
//echo $cPage;
$file="";
$affichage="";
if(isset($_GET['affichage'])) {
	$affichage=$_GET['affichage'];
 }
 if($affichage=="ALL files")
 {
 $requett_ = "SELECT * FROM fichier ORDER BY id ASC LIMIT ".(($cPage-1)*$perPage).",$perPage";
 $sql="SELECT COUNT(id) as nbFormule FROM fichier";
$req= mysql_query($sql) or die(mysql_error());
$data=mysql_fetch_assoc($req);


if($nbFormule==0)
{

$nbPage=1;
}
else
{
$nbPage=ceil($nbFormule/$perPage);
}
$nombre_page="";
for ($i=1;$i<=$nbPage;$i++)
{
//$nombre_page.="<option value='$i'".(isset($_GET['p']) && $_GET['p']==$i ? ' selected' : '').">".$i."</option>";
$nombre_page.="<option value='".$i."'";
if($i==$cPage)
{
$nombre_page.="selected='selected'";
}
$nombre_page.=">".$i."</option>";

}

 }
 else{

	$requett_ = "SELECT * FROM fichier where country='$affichage'ORDER BY id ASC LIMIT ".(($cPage-1)*$perPage).",$perPage";
	$sql="SELECT COUNT(id) as nbFormule FROM fichier where country='$affichage' ";
$req= mysql_query($sql) or die(mysql_error());
$data=mysql_fetch_assoc($req);


$nbFormule=$data['nbFormule'];

//$perPage=222;

if($nbFormule==0)
{

$nbPage=1;
}
else
{
$nbPage=ceil($nbFormule/$perPage);
}
$nombre_page="";
for ($i=1;$i<=$nbPage;$i++)
{
//$nombre_page.="<option value='$i'".(isset($_GET['p']) && $_GET['p']==$i ? ' selected' : '').">".$i."</option>";
$nombre_page.="<option value='".$i."'";
if($i==$cPage)
{
$nombre_page.="selected='selected'";
}
$nombre_page.=">".$i."</option>";

}
	}
	$file.="<option value='$affichage'".(isset($_GET['affichage']) && $_GET['affichage']==$affichage ? ' selected' : '').">".$affichage."</option>";
    echo "<br><br><br>";

	echo "<link rel='stylesheet' type='text/css' href='css/pagination.css'>";

$limit=2;
for ($i=1;$i<=$nbPage;$i++)
{
if($i<=$limit || $i>$nbPage-$limit ||($i>$cPage-$limit && $i<$cPage+$limit))
{
if($i==$cPage)
{
 echo "<span><a href=\"?cmd=fichier&affichage=$affichage&p=$i\" class='active'>$i</a></span>";
}
else
{
  //echo "<a href=\"?cmd=formule&p=$i\">$i </a> |";
  echo "<span><a href=\"?cmd=fichier&affichage=$affichage&p=$i\">$i</a></span>";
  }
  }
  else
  {
  if($i>$limit && $i<$cPage-$limit)
    $i=$cPage-$limit;
	elseif($i>=$cPage+$limit && $i < $nbPage-$limit)
	$i= $nbPage-$limit;

  echo " ... ";
  }
 }
    include("templates/fichier/hlistfichier.htm");

    $dbq1 = mysql_query($requett_);
    while($dbf1 = mysql_fetch_array($dbq1))
    {
        include("templates/fichier/listfichier.htm");
	}
    echo "</table>";
    echo "</form>";
	echo "</div>";
    	//afficher le lien qui amene au page
		echo "<link rel='stylesheet' type='text/css' href='css/pagination.css'>";
$limit=2;
for ($i=1;$i<=$nbPage;$i++)
{
if($i<=$limit || $i>$nbPage-$limit ||($i>$cPage-$limit && $i<$cPage+$limit))
{
if($i==$cPage)
{
 echo "<span><a href=\"?cmd=fichier&affichage=$affichage&p=$i\" class='active'>$i</a></span>";
}
else
{
  //echo "<a href=\"?cmd=formule&p=$i\">$i </a> |";
  echo "<span><a href=\"?cmd=fichier&affichage=$affichage&p=$i\">$i</a></span>";
  }

  }
  else
  {
  if($i>$limit && $i<$cPage-$limit)
    $i=$cPage-$limit;
	elseif($i>=$cPage+$limit && $i < $nbPage-$limit)
	$i= $nbPage-$limit;

  echo " ... ";
  }

 }


}
if ($action == "add")
{
   include("templates/fichier/addfichier.htm");
}
if ($action == "save")
{

	set_time_limit(3600);

	$affichage=@$_GET['affichage'];
	$p=@$_GET['p'];
	$nom =@$_POST['nom'];


	$country=@$_POST['country'];


	$date = @$_POST['date'];

    $format = @$_POST['text'];

	$type = @$_POST['omc'];

	if(isset($date))
	{
	$d = explode('/', $date);
	$date = $d[2].'-'.$d[1].'-'.$d[0];
	}

	if (isset($_FILES['url']) AND $_FILES['url']['error'] == 0 )
	{
		$infosurl = pathinfo($_FILES['url']['name']);
        $extension_url = $infosurl['extension'];
        $extensions_autorisees = array('csv' ,'txt' , 'xls', 'xlsx');//tableau d'extention des fichier uploder

        if ( in_array($extension_url, $extensions_autorisees))
        {
            // On peut valider les fichier et les stockers définitivement
            move_uploaded_file($_FILES['url']['tmp_name'], 'uploads/'.basename($_FILES['url']['name']));

			$url = 'uploads/'.basename($_FILES['url']['name']);


			//$dbq1 = mysql_query("insert into fichier(nom,date,url,format,type) values ('$nom','$date','$url', '$format','$type')");
			if($type=='Drive test')
			{
			$dbq1 = mysql_query("insert into fichier(nom,country,date,url,format,type) values ('$nom','$country','$date','$url', '$format','$type')");
			if($extension_url == 'txt') {
			include('includes/file-text.php');
			} else if($extension_url == 'csv') {
			include('includes/file-csv.php');
			} else if($extension_url == 'xls' || $extension_url == 'xlsx') {
			include('includes/file-excel.php');
			}

				$sql = "CREATE TABLE IF NOT EXISTS `file_{$nom}`(
			`id` int(11) NOT NULL AUTO_INCREMENT,";
			foreach($keys as $k =>$v){
			$sql.="`{$v['name']}` varchar(200) DEFAULT NULL,";
			}
			$sql.="PRIMARY KEY (`id`)
			) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";
             //echo $sql;
			mysql_query($sql);


			$sql = "INSERT into `file_{$nom}` VALUES ";
			//echo $date;
			foreach($data as $k =>$v){
			$sql .= "(NULL,'"    ;
					$sql .= implode("','", $v);
					$sql .= "'),";
			}
			$sql = substr($sql, 0, -1);
			//echo $sql;
			mysql_query($sql);
			goto_("?cmd=fichier&action=list&affichage=$affichage&p=$p",0);

			}
			else if($type=='Compteur OMC') {
				if($extension_url == 'csv')
				{
					include('includes/omc-csv.php');
				}
				else if($extension_url == 'txt')
				{
					include('includes/omc-txt.php');
				}
				else if($extension_url == 'xls' || $extension_url == 'xlsx')
				{
					include('includes/omc-xls.php');
				}
				//print_r($keys);
				$erreur=array();
				$obligatoire=array('Date','Heure','BSC','Cell');
				//print_r($obligatoire);
				function verife_file()
									{
									GLOBAL $obligatoire;
									GLOBAL $erreur;
									GLOBAL $keys;
									$i=0;   //indice du parcours table elemnt formule
									$j=0;  //indice du parcours  table element file
									$k=0;   //indice pour remplir le table erreur
									while($i<count($obligatoire))
									{
									if(in_array($obligatoire[$i],$keys)==false)
									{
									$erreur[$k]=$obligatoire[$i];
									$k++;

									}
									$i++;
									}
									return $erreur;
									}
									//fin de la fonction verife
				$resultats=verife_file();
				$b=0;
				$long1=count($resultats);

				if($long1>0)
				{
				echo $long1;
					echo "<strong>Error Message :</strong><br><br>";
					 while($b<$long1)
					 {

					 echo " <span>* The Field '" .$resultats[$b]. "' is required to parse the selected  file data  !!!</span><br><br>" ;
					 $b++;
					 }
					 echo "<br><div id='info'>Do you want to enter another file ?<a href='?cmd=fichier&action=add'>Yes</a> -- <a href='?cmd=fichier&action=list'>No</a><div></div></div>";


				}
				 else if($long1==0){
                 $dbq1 = mysql_query("insert into fichier(nom,country,date,url,format,type) values ('$nom','$country','$date','$url', '$format','$type')");
				$sql = "CREATE TABLE IF NOT EXISTS `file_{$nom}` (
			`id` int(11) NOT NULL AUTO_INCREMENT,";
			if (is_array($keys))
				{
			foreach($keys as $k =>$v){
			$sql.="`{$v}` varchar(200) DEFAULT NULL,";
			}
			   }
			$sql.="PRIMARY KEY (`id`)
			) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";

			//echo $sql;
			mysql_query($sql);
			//}
			$sql = "INSERT into `file_{$nom}` VALUES ";

			foreach($data as $k =>$v){
			$sql .= "(NULL,'"    ;
					$sql .= implode("','", $v);
					$sql .= "'),";
			}

			$sql = substr($sql, 0, -1);
			//echo $sql;
			mysql_query($sql);
			goto_("?cmd=fichier&action=list&affichage=$affichage&p=$p",0);
			}




		}
    }
	 //goto_("?cmd=fichier&action=list",0);
   }
}
if ($action == "add_exist")
{
// on recupererl'ID du fichier a modifier
$id = $_GET['id'];
 //$id = $_GET['id'];
        $dbq = mysql_query("SELECT * FROM fichier Where id='$id'");
        $dbf = mysql_fetch_array($dbq);
   include("templates/fichier/add_data.htm");
}
if ($action == "add_data")
{
set_time_limit(3600);
    ini_set("memory_limit","512M");
	ini_set("upload_max_filesize","512M");
	ini_set("post_max_size","512M");
$id = $_GET['id'];
//$date =  $_POST['date'];
//$format = $_POST['text'];
$affichage=@$_GET['affichage'];
$p=@$_GET['p'];
$req="select * from fichier where id='".$id."'";
			$dbq=mysql_query($req);
			$dba=mysql_fetch_array($dbq);
			$nom = $dba['nom'];
			$type=$dba['type'];



	//partied'insertion de données
	if (isset($_FILES['url']) AND $_FILES['url']['error'] == 0 )
	{
		$infosurl = pathinfo($_FILES['url']['name']);
        $extension_url = $infosurl['extension'];
        $extensions_autorisees = array('csv' ,'txt' , 'xls', 'xlsx');//tableau d'extention des fichier uploder

        if ( in_array($extension_url, $extensions_autorisees))
        {
            // On peut valider les fichier et les stockers définitivement
            move_uploaded_file($_FILES['url']['tmp_name'], 'uploads/'.basename($_FILES['url']['name']));

			$url = 'uploads/'.basename($_FILES['url']['name']);


			//$dbq1 = mysql_query("UPDATE fichier SET date='$date',format='$format' WHERE id='$id'");
			if($type=='Drive test')
			{
			if($extension_url == 'txt') {
			include('includes/file-text.php');
			} else if($extension_url == 'csv') {
			include('includes/file-csv.php');
			} else if($extension_url == 'xls' || $extension_url == 'xlsx') {
			include('includes/file-excel.php');
			}


			$sql = "INSERT into `file_{$nom}` VALUES ";
			foreach($data as $k =>$v){
			$sql .= "(NULL,'"    ;
					$sql .= implode("','", $v);
					$sql .= "'),";
			}
			$sql = substr($sql, 0, -1);
			//echo $sql;
			mysql_query($sql);
			//echo  mysql_affected_rows() ;
			goto_("?cmd=fichier&action=list&affichage=$affichage&p=$p",0);

			}
			else if($type=='Compteur OMC') {
				if($extension_url == 'csv')
				{
					include('includes/omc-csv.php');
				}
				else if($extension_url == 'txt')
				{
					include('includes/omc-txt.php');
				}
				else if($extension_url == 'xls' || $extension_url == 'xlsx')
				{
					include('includes/omc-xls.php');
				}
		    //recuperer les données de l'ancien fichier
			$nom_ancien=$_POST['nom1'];
			//echo $nom_ancien;
			 $tab_existe=array();
					$p=0;
					$req1="SHOW COLUMNS FROM `file_{$nom_ancien}` where field not in ('id')";
					 $dbq1=mysql_query($req1);

						while($dba=mysql_fetch_array($dbq1))
					 {
					  //echo $dba['Field'].'<br>';
					  $tab_existe[$p]=$dba['Field'];
					 $p++;
					 }
			        //print_r($tab_existe);
					$long11=count($tab_existe);


					//afficher les données de nouveau fichier;
					$long22=count($keys);
					///////////////////////////////////////////////////////////
					$erreur1=array();

				//print_r($obligatoire);
				function verife_file1()
									{
									GLOBAL $tab_existe;
									GLOBAL $erreur1;
									GLOBAL $keys;
									$i=0;   //indice du parcours table elemnt formule
									$j=0;  //indice du parcours  table element file
									$k=0;   //indice pour remplir le table erreur
									while($i<count($keys))
									{
									if(@in_array($tab_existe[$i],$keys)==false)
									{
									$erreur1[$k]=@$tab_existe[$i];
									$k++;

									}
									$i++;
									}
									return $erreur1;
									}
									//fin de la fonction verife
				$resultats1=verife_file1();
				$b=0;
				$long111=count($resultats1);



					///////////////////////////////////////////////////////////


					if($long11!=$long22)
					{
					 echo "<strong>Error Message :</strong><br><br>";


 echo " <span>* the number of columns in the selected file is different from that existing in the database!!!</span><br><br>" ;

					 echo "<br><div id='info'>Do you want to enter another file ?<a href='?cmd=fichier&action=add_exist&id={$_GET['id']}'>Yes</a> -- <a href='?cmd=fichier&action=list'>No</a><div></div></div>";


				    }
					//

				if(($long111>0)&&($long11==$long22))
				{
					echo "<strong>Error Message :</strong><br><br>";
					 while($b<$long111)
					 {

					 echo " <span>* The Field '" .$resultats1[$b]. "' is missing  in the selected  file data  !!!</span><br><br>" ;
					 $b++;
					 }
					 echo "<br><div id='info'>Do you want to enter another file ?<a href='?cmd=fichier&action=add_exist&id={$_GET['id']}'>Yes</a> -- <a href='?cmd=fichier&action=list'>No</a><div></div></div>";


				}

					//teste sur les contenues
					else if($long111==0)
					{
					$id = $_GET['id'];
					$date =  $_POST['date'];
					$format = $_POST['text'];
					if(isset($date))
						{
						$d = explode('/', $date);
						$date = @($d[2].'-'.$d[1].'-'.$d[0]);
						}


				$req = mysql_query("UPDATE fichier SET date='$date',format='$format' WHERE id='$id'");

			$sql = "INSERT into `file_{$nom}` VALUES ";

			foreach($data as $k =>$v){
			$sql .= "(NULL,'"    ;
					$sql .= implode("','", $v);
					$sql .= "'),";
			}

			$sql = substr($sql, 0, -1);
			//echo"ollllleeeeeeeeeeeeeeee";
			//echo $sql;
			mysql_query($sql);
			goto_("?cmd=fichier&action=list&affichage=$affichage&p=$p",0);
			}
			}




		}
    }

 //goto_("?cmd=fichier&action=list",0);
}
if ($action == "mod")
{
$country='';
        $id = $_GET['id'];
        $dbq = mysql_query("SELECT * FROM fichier Where id='$id'");
        $dbf = mysql_fetch_array($dbq);
		$country .= '<option value="'.$dbf['country'].'">'.$dbf['country'].'</option>';
        include("templates/fichier/modfichier.htm");


}
if ($action == "savemod")
{
//var_dump($_REQUEST);

    $id = $_GET['id'];
    $name=@$_POST['nom1'];
	$country=@$_POST['country'];
    $nom =@$_POST['nom'];
	$date =@$_POST['date'];
	$position = strpos($date, '/');
   if((isset($date))&& ($position==true))
	{
	$d = explode('/', $date);
	$date = @$d[2].'-'.@$d[1].'-'.@$d[0];
	}
  $req_login = mysql_query("UPDATE fichier SET nom='$nom',country='$country',date='$date' WHERE id='$id'");
    $req_login1 = mysql_query("RENAME TABLE file_{$name} TO file_{$nom}");
	//echo $req_login1;
    $az="ali";

	$affichage=@$_GET['affichage'];
	$p=@$_GET['p'];

    goto_("?cmd=fichier&action=list&affichage=$affichage&p=$p",0);

}
if ($action == "del")
{
$affichage=@$_GET['affichage'];
$p=@$_GET['p'];
$id = $_GET['id'];
  $dbq = mysql_query("SELECT * FROM fichier Where id='$id'");
        $dbf = mysql_fetch_array($dbq);
         $nom=$dbf['nom'];
        if(empty($_GET['ok']))
        {
            echo "<br><div id='info'>Do you really want  to delete this file " .$nom. " ? <a href='index.php?cmd=fichier&action=del&id=$id&affichage=ALL files&p=1&ok=ok'>Yes</a> -- <a href='?cmd=fichier&action=list&affichage=ALL files&p=1'>No</a><div></div></div>";

        }
        else if ($_GET['ok'] == 'ok')
        {
			$dbq = mysql_query("SELECT * FROM fichier Where id='$id'");
			$dbf = mysql_fetch_array($dbq);
            mysql_query("DROP TABLE `file_{$dbf['nom']}`");
			$dbq1 = mysql_query("Delete From fichier Where id='$id'");


             goto_("?cmd=fichier&action=list&affichage=$affichage&p=$p",0);

        }
}

?>
