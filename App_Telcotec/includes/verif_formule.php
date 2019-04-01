
<?php
//partie verification ::
 $erreur=array();
//echo $erreur[0];
$m=0;
$taille= count($erreur);
while($m<$taille)
{
//echo $erreur[$m];
$m++;

}
//recuperer les colonnes de la fichier selectionnées
 $tab_formule=array();
$p=0;
$req1="SHOW COLUMNS FROM `file_{$file}` where field not in ('id','Date','Heure','BSC','Cell')";
 $dbq1=mysql_query($req1);

	while($dba=mysql_fetch_array($dbq1))
 {
  //echo $dba['Field'].'<br>';
  $tab_formule[$p]=$dba['Field'];
 $p++;
 }

$long= strlen($formule);

//$tabv=array('ad' => 5,'gl'=>10,'anglais'=>15,'francais'=>10,'physique'=>300,'math'=>34,'tech'=>22);
//print_r($tab1);


//fonction speciale
 function est_speciale($operande)
 {
 $a =-1;
 if(($operande=='+')||($operande=='-')||($operande=='*')||($operande=='/')||($operande=='[')||($operande==']')||($operande=='0')||($operande=='1')||($operande=='2')||($operande=='3')||($operande=='4')||($operande=='5')||($operande=='6')||($operande=='7')||($operande=='8')||($operande=='9')||($operande=='.')||($operande==' '))
 {
 $a=1;
 }
 return $a;
 }
 
 //fonction speciale1
 function est_speciale1($operande)
 {
 $a =-1;
 if(($operande=='+')||($operande=='-')||($operande=='*')||($operande=='/')||($operande=='[')||($operande==']'))
 {
 $a=1;
 }
 return $a;
 }

/*---- fonction qui découpe la formule  et retourne un tableau contient les elements de la formule----*/

function decouper_chaine1($formule)
{
$j=0;//indice du tableau $tab
$i=0;//indice du parcours de la chaine
$tmp='';
$tab=array();
while($i<strlen($formule))
{
if(est_speciale($formule[$i])==1)
{
$i++;
}
 else if(est_speciale($formule[$i])==-1)
{
  while((@est_speciale1($formule[$i])==-1)&&($i<strlen($formule)))
{
$tmp.=$formule[$i];
$i++;
} 
$tab[$j]=trim($tmp);
$j++;
$tmp="";
}  


}

return $tab;
}
//echo $formule;
$list_formule=decouper_chaine1($formule);
echo'<pre>';
//print_r($list_formule);

//fonction pour tester la comptabilité entre les formules et le fichier choisi
function verife_formule_file($formule)
{
GLOBAL $list_formule;
GLOBAL $erreur;
GLOBAL $tab_formule;
$i=0;   //indice du parcours table elemnt formule
$j=0;  //indice du parcours  table element file
$k=0;   //indice pour remplir le table erreur
while($i<count($list_formule))
{
if(in_array($list_formule[$i],$tab_formule)==false)
{
$erreur[$k]=$list_formule[$i];
$k++;

}
$i++;
}
return $erreur;
}
 $result=verife_formule_file($formule);
 
  $req="select * from formulas where id='".$id."'";
			$dbq=mysql_query($req);
			$dba=mysql_fetch_array($dbq);
			  $nom = $dba['name'];
 //fonction qui teste si le nouveay kpi calculé existe déja ou non dans la bd
 function verife_existence($formule)
 {
  $res=1;
  GLOBAL $tab_formule;
  GLOBAL $nom;
 if(in_array($nom,$tab_formule)==true)
{
$res=-1;
}
 return $res;
}
$existe=verife_existence($formule);
 if(verife_existence($formule)==-1){
  $req="select * from formulas where id='".$id."'";
			$dbq=mysql_query($req);
			$dba=mysql_fetch_array($dbq);
			$nom = $dba['name'];
 $f1=$_GET['file'];
 echo "<strong>Information  Message :</strong><br><br>";
 
 
 echo " <span>*The KPI '" .$nom. "' is already existing in the selected file '".$f1."' !!!</span><br>" ;
 
 
  echo "<br><div id='info'>Do you want to display it as a statistic ? <a href='?cmd=omc&file={$_GET['file']}'> Yes</a> -- <a href='?cmd=formule&action=list'>No</a><div></div></div>";
 }
 //
 $b=0;
 $long=count($result);

 if(($long>0)&&(verife_existence($formule)==1)){
 $f1=$_GET['file'];
 echo "<strong>Error Message :</strong><br><br>";
 while($b<$long)
 {
 
 echo " <span>*The KPI '" .$result[$b]. "' is not exist in the selected file '".$f1."' !!!</span><br><br>" ;
 $b++;
 }
  echo "<br><div id='info'>Do you want to verify your formula ?<a href='?cmd=formule&action=mod&id={$_GET['id']}'>Yes</a> -- <a href='?cmd=formule&action=list'>No</a><div></div></div>";
 }
 
 //;
 
 
 /*--------fonction qui prendre en parametre la position de crochet ouvrant et retourne la position du crochet fermant---------*/
function position_crochet_fermant($pos,$chaine)
{
@$ouvrant=1;

$pos+=1;
$pos_fermant=-1;
  while($pos<strlen($chaine))
  {

    if($chaine[$pos]=='[')
	   {
	    $ouvrant++;
	   }
	 if($chaine[$pos]==']')
	   {
	    $ouvrant--;
	   }
	   
     if($ouvrant==0)
	 {
	 $pos_fermant=$pos;
	
	 break;
	 }
	 $pos++;
  }
  return $pos;
}
/*---- fonction qui test si le caractere courant est un operande:: +, -, *, / ou un espace  retourne '1' si oui  '-1' sinon----*/
 function est_operande1($operande)
 {
 $a =-1;
 if(($operande=='+')||($operande=='-')||($operande=='*')||($operande=='/')|| ($operande==' '))
 {
 $a=1;
 }
 return $a;
 }   

   
/*---- fonction qui test si le caractere courant est un operande:: +, -, *, ou /  retourne '1' si oui  '-1' sinon----*/
 function est_operande($operande)
 {
 $a =-1;
 if(($operande=='+')||($operande=='-')||($operande=='*')||($operande=='/') )
 {
 $a=1;
 }
 return $a;
 }
  
/*---- fonction qui retourne la priorité de chaque operande---*/
function priorite($operande)
{
$a=-1;
if(($operande=='+')||($operande=='-'))
{
$a=1;
}
if($operande=='*')
{
$a=2;
}
if($operande=='/')
{
$a=3;
}

return $a;

}
/*-----fonction qui retourne 1 si le chaine contient +,-, *,/----*/
function contient_operand($chaine)
{
$retour=-1;
$i=0;
while( $i<strlen($chaine))
{
if(($chaine[$i]=='+')||($chaine[$i]=='-')|| ($chaine[$i]=='*') ||($chaine[$i]=='/'))
{
$retour=1;
break;
}
$i++;
}
return $retour;
}

/*---- fonction qui découpe la formule  et retourne un tableau contient les elements de la formule----*/

function decouper_chaine($chaine)
{
$j=0;//indice du tableau $tab
$i=0;//indice du parcours de la chaine
$tmp="";
$tab=array();
while($i<strlen($chaine))
{
      //si le caractere courant est '['
    if($chaine[$i]=='[') {
		$finale=position_crochet_fermant($i,$chaine);
		 $i=$i+1;
		   while($i<$finale) {
				$tmp.=$chaine[$i];
				$i++;
			}
			 //echo"------";
			 //echo $tmp;
			 $tab[$j]=trim($tmp);
			 $j++;
		 $i=$finale+1;
		 $tmp="";
       }	   
	 // si le caractere courant est un operande ou un espace
      else if (est_operande($chaine[$i])==1)
	  {
	  	 $tab[$j]=$chaine[$i];
		 $j++;
	   $i++;
	  }
	  else if (est_operande1($chaine[$i])==-1)  { // si le caractere courant different de  +,-;*,/ ou espace ou de[
		   while(($i<strlen($chaine))&&(est_operande($chaine[$i])==-1)) {
			 $tmp.=$chaine[$i];
			 $i++;
			}
			//echo"------";
			 //echo $tmp;
			 $tab[$j]=trim($tmp);
				 $j++;
				 $tmp="";
				
		 } else if($chaine[$i]==" ") {
		 $i++;
		 }
}
foreach($tab as $key => $val) {
	if(contient_operand($val)==1 && strlen($val)>1 ) {
		$tab[$key] = decouper_chaine($val);
	}
}
return $tab;
}
echo'<pre>';
$tab=decouper_chaine($formule);
//print_r($tab);
function calcul($tab, $tabv) {

	 //echo 'do5ol<br/>';print_r($tab);echo'<br/>';
	//echo "eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee";
	 //print_r($tab);
	if(is_array($tab)) {
		foreach($tab as $key => $val) {
			if(is_array($tab[$key])) {
				$tab[$key] = calcul($tab[$key], $tabv);
			} else if(est_operande($val) == 1) {
				//if(is_array($tab[$key-1])) {
					$tab[$key-1] = calcul($tab[$key-1], $tabv);
				//}
				//if(is_array($tab[$key+1])) {
				 
					$tab[$key+1] = calcul($tab[$key+1], $tabv);
					//echo "<br>";
				 //echo $tab[$key+1];
				//}
				if($val == '+') {
					if($tab[$key-1]=="")
					{
					 throw new Exception("The field is empty");
					}
					if($tab[$key+1]=="")
					{
					 throw new Exception("The field is empty");
					}
					
					$tab[$key+1] = $tab[$key-1]+$tab[$key+1];
					
				}else
				if($val == '-') {
					//echo 'sub ---- '.$tab[$key-1].' --- '.$tab[$key+1];
					//echo "<br>";
					if($tab[$key-1]=="")
					{
					 throw new Exception("The field is empty");
					}
					if($tab[$key+1]=="")
					{
					 throw new Exception("The field is empty");
					}
					$tab[$key+1] = $tab[$key-1]-$tab[$key+1];	
					//echo $tab[$key+1];
				}else
				if($val == '*') {
					//echo 'mul ---- '.$tab[$key-1].' --- '.$tab[$key+1];
					//echo "<br>";
					if($tab[$key-1]=="")
					{
					 throw new Exception("The field is empty");
					}
					if($tab[$key+1]=="")
					{
					 throw new Exception("The field is empty");
					}
					$tab[$key+1] = $tab[$key-1]*$tab[$key+1];	
					//echo $tab[$key+1];
				}else
				if($val == '/') {
					//echo 'div ---- '.$tab[$key-1].' --- '.$tab[$key+1];
					//echo "<br>";
					if($tab[$key+1]==0)
					{
					 throw new Exception("division by zero is not allowed");
					}
					if($tab[$key-1]=="")
					{
					 throw new Exception("The field is empty");
					}
					if($tab[$key+1]=="")
					{
					 throw new Exception("The field is empty");
					}
					$tab[$key+1] = $tab[$key-1]/$tab[$key+1];	
					//echo $tab[$key+1];
				}
				
				unset($tab[$key-1]);
				unset($tab[$key]);
				//var_dump($tab);
				if(count($tab) == 1) {
					$tab = $tab[$key+1];
					//break;
				}
			}
		}
	} else if(is_numeric($tab)) {
		if(!is_float($tab)) {
			$tab = floatval($tab);
		}
	} else if(is_string($tab) && strlen($tab)>1 && est_operande($tab) == -1) {
		$tab = $tabv[$tab];
	}
	return $tab;
}
//var_dump(calcul(decouper_chaine($formule), $val));
 if(($long==0)&&(verife_existence($formule)==1))
 {
 $f1=$_GET['file'];
 //echo $f1;
 echo"<strong> Information Message :</strong><br><br>";
 echo"<span>* Verifying the existence of indicators in the selected file '".$f1."' is completed with success.</span><br><br>";
  $kpi="";
 foreach($list_formule as $val)
{
$kpi.='`'.$val.'`,';
}
$kpi=substr($kpi,0,-1);
//echo "<br>" .$kpi;
 
 
 $tabv = array();

 
 $nom=$name;

	$req = "SELECT id,$kpi FROM file_{$nom}";
	//echo $req;
	$dbq = mysql_query($req);
    //echo $dbq;
		if($dbq === FALSE) {
    die(mysql_error()); 
                          }
	//$dba = mysql_fetch_assoc($dbq);

	
	while($dba = mysql_fetch_assoc($dbq)) {
		
			$tabv[] = $dba;
		
	}
  $req="select * from formulas where id='".$id."'";
			$dbq=mysql_query($req);
			$dba=mysql_fetch_array($dbq);
			$nom = $dba['name'];
$fichier=$_GET['file'];
//echo $fichier; `file_{$nom}`
 $req2="ALTER TABLE `file_{$fichier}` ADD {$nom} VARCHAR(200) NOT NULL";
 mysql_query($req2);
 echo(mysql_query($req2));
foreach($tabv as $key => $val) {
try{
$finale=calcul(decouper_chaine($formule), $val);
$finale1=number_format($finale, 2, ',', ' ');
mysql_query("UPDATE `file_{$fichier}` set $nom='$finale1' where id={$val['id']}");
}
catch(Exception $e)
{
echo $e->getMessage().': in line '.$val['id'].'<br/>';
}
catch(Exception $e)
{
echo $e->getMessage().'champ vide <br/>';
}

}
 //print_r($finale);
//echo '<br/>';
//calcul(decouper_chaine($formule), $val);
 //partie insertion dans la base de donnéé
 
 //ALTER TABLE file_{?????} ADD {?????} VARCHAR(200);
 //remplissage
 
 

echo"<span>* The new indicator '".$nom."' has been calculated successfully.</span><br><br>"; 
echo"<span>* The new indicator '".$nom."' has been added to the database with success.</span><br>"; 
  echo "<br><div id='info'>Do you want to display the new indicator '".$nom."' as a statistic ? <a href='?cmd=omc&file={$_GET['file']}'> Yes</a> -- <a href='?cmd=formule&action=list'>No</a><div></div></div>";
  }
?>



