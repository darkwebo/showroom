<?php

function utf_replace($text)
  {
      $text = str_replace("é","&#233;",$text);
      $text = str_replace("è","&#232;",$text);
      $text = str_replace("â","&#226;",$text);
      $text = str_replace("ê","&#234;",$text);
      $text = str_replace("à","&#224;",$text);
      $text = str_replace("á","&#225;",$text);
      $text = str_replace("ù","&#249;",$text);
      $text = str_replace("ú","&#250;",$text);
      $text = str_replace("â","&#251;",$text);
      return $text;
  }
  function filtre_xml($chaine)
  {
     $chaine=str_replace(" ", "_", $chaine);  // les espaces
     $chaine=str_replace("é", "e", $chaine);  // les espaces
     $chaine=str_replace("è", "e", $chaine);
     $chaine=str_replace("à", "a", $chaine);

     $chaine=str_replace("û", "u", $chaine);
     $chaine=str_replace("ç", "c", $chaine);
     $chaine=str_replace("ç", "c", $chaine);
     $chaine=str_replace("(", "_", $chaine);
     $chaine=str_replace(")", "_", $chaine);

 return $chaine;
  }
function reegel($text)
{
   $text = strip_tags($text);
   $text = utf8_encode($text);
   $text = addslashes($text);
   $text = str_replace("\"","",$text);
   return $text;
}
function check_email($email)
 {
         if (eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[_a-z0-9-]+(\.[_a-z0-9-]+)",$email))
         {
         return true;
         }else
         {
         return false;
         }
}
function check_password($pass)
{
    $check_num=strlen($pass);
    if($check_num < 4)
    {
    return false;
    }else{
    return true;
    }
}
function check_pass_again($pass,$pass_ag)
{
    if($pass==$pass_ag)
    {
    return true;
    }else{
    return false;
    }
    }
    function check_email_again($email,$email_ag)
    {
    if($email==$email_ag)
    {
    return true;
    }else{
    return false;
    }
}
function goto_($site,$time) {
   echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"$time; URL=$site\">\n";
}
function errman($msgid,$icon){
// incon message
	if ($icon == "err1")
	{
	$icon = "images/error1.gif";
	}
	elseif ($icon == "err2")
	{
	$icon = "images/error2.gif";
	}
// error message
	if ($msgid == "1") {
	$msgid = "page not found";
	}
// Show message
	echo "<img src='$icon'> $msgid";
}
function findexts ($filename)
{
$filename = strtolower($filename) ;
$exts = split("[/\\.]", $filename) ;
$n = count($exts)-1;
$exts = $exts[$n];
return $exts;
}


  function create_tab ($dir) { // fonction creant le tableau contenant les repertoires et fichiers
     $dir = rtrim ($dir, '/'); // on vire un eventuel slash mis par l'utilisateur de la fonction a droite du repertoire
     if (is_dir ($dir)) // si c'est un repertoire
     $dh = opendir ($dir); // on l'ouvre
     else {
     echo $dir, ' n\'est pas un repertoire valide'; // sinon on sort! Appel de fonction non valide
     exit;
     }
     while (($file = readdir ($dh)) !== false ) 
	 { //boucle pour parcourir le repertoire
			 if ($file !== '.' && $file !== '..') 
			 { // no comment
				// $path =$dir.'/'.$file; // construction d'un joli chemin...
				  $path =$dir.'/'.$file; // construction d'un joli chemin...
				 if (is_dir ($path)) 
				 { //si on tombe sur un sous-repertoire
						 $tableau[$dir]['dir'][] = $path;
						 $tabTmp = create_tab ($path); // appel recursif pour lire a l'interieur de ce sous-repertoire
						 if (is_array ($tabTmp) && is_array ($tableau))
						 $tableau = array_merge ($tableau, $tabTmp);
				 }
				 else
				 $tableau[$dir]['file'][] = $path;
			 }
     }
     closedir ($dh); // on ferme le repertoire courant
     if (isset ($tableau)) {
     return $tableau;
     }
     }
      function copier_rep ($destination, $reps,$repertoire, $tableau_dir = array ()) 
	  { // fonction pour copier repertoire : on cree un repertoire de meme nom, puis on va chercher les fichiers, et on les copie. Si il y a des sous repertoires, appel recursif.

	 if (empty ($tableau_dir)) {
     echo 'Entrée';
     $tableau_dir = create_tab ($reps);
     }
     if (!is_array ($reps)) {
     $reps = array ($reps);
     }
     foreach ($reps as $rep) {
	          $rep1 = $rep;
	         $rep = str_replace('modele_site',$repertoire,$rep);    
			 if (!is_dir ($destination.'/'.basename ($rep))) {
				 mkdir ($destination.'/'.basename ($rep),0777);
				 if (!empty ($tableau_dir[$rep1]['file']) && isset($tableau_dir[$rep1]['file']) && is_array ($tableau_dir[$rep1]['file'])) {
				 foreach ($tableau_dir[$rep1]['file'] as $fichier) {
				
				 copy ($fichier, $destination.'/'.basename ($rep).'/'.basename ($fichier));
				 }
				 }
				 if (!empty ($tableau_dir[$rep1]['dir']) && isset ($tableau_dir[$rep1]['dir']) && is_array ($tableau_dir[$rep1]['dir'])) {
				 copier_rep ($destination.'/'.basename ($rep), $tableau_dir[$rep1]['dir'],$repertoire, $tableau_dir);
				 }
			 }
     }
     }
      
/*
   function getQuery($mot, $idsCats, $idsFrs){

}
*/
function AffDir($rep)
{
  $j = 1;
  $dir = opendir($rep);
  while ($File = readdir($dir))
  { 
    if($j==1)
	   $chaine .= '<tr>';
    if($File != "." && $File != ".." )
    {
	  $ext = explode('.',$File);
	  $lenth = strlen($ext[0])-1;
	  if($ext[1]=='jpg' && substr($ext[0],$lenth)!='-')
	  {
	    $chaine .='
         <td><div align="center"><a href="images/gallerie/'.$ext[0].'.jpg" rel="gb_imageset[nice_pics]" title="">
          <img src="images/gallerie/'.$ext[0].'-.jpg" width="155" height="127" border="0" /></a> </div></td>
         ';
      //echo $File."<br>";
	    $j++;
	   } 
    }
	if($j==4)
	{   $j=1;
	   $chaine .='</tr>
	     <tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
         </tr>	   
	   '; 
	 }
  }
  if($j==1 || $j==2 || $j==3)
     $chaine .='</tr>';    
  closedir($dir);
  return $chaine;
}
function convertdate($date)
	{
	    $tab = explode("-",$date);
		return $tab[2]."/".$tab[1]."/".$tab[0];
	}
	function convertdate_($date)
	{
	    $tab = explode("/",$date);
		return $tab[2]."-".$tab[1]."-".$tab[0];
	}
function convertprix($prix)
{
	$tab = explode(".",$prix);
	if (count($tab) == '2')
	{
		if ($tab[1] < '100')
		{
			
		$reste = str_pad($tab[1],3,"0");
		$prix = $tab[0].".".$reste ;
		}
		else
		{
		$prix = round($prix,'3');
		$tab2 = explode(".",$prix);
		$reste = str_pad($tab2[1],3,"0");
		$prix = $tab2[0].".".$reste ;
		}
	}
	else
	{
		$prix = $prix.".000";
	}
	return $prix ;
}
?>