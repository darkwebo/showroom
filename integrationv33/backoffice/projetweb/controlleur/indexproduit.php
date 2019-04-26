<?php
require('controlleur.php');
try
{
   $pro=new Produitpromo();
  if($_GET['action']=="modifier")
   {
      if(!isset($_POST['nv_id']) && !isset($_POST['nv_nom']) && !isset($_POST['nv_dd']) && !isset($_POST['nv_df']) &&isset($_POST['nv_p']))
   {
       throw new Exception("les champs sont vide", 1);
   }
   else 
   {
     modifier_promo($_POST['nv_dd'],$_POST['nv_df'],$_POST['nv_p'],$_POST['nv_id']);
     
   }
   }    
   elseif ($_GET['action']=="supprimer") 
   {
    if(!isset($_POST['sup_id']))
    {
    throw new Exception("aucun de suppression selectioné", 1);
    }
   else
   {
       supprimer_promo($_POST['sup_id']);
       
   }
   }
   elseif ($_GET['action']=="supprimer1") 
   {
    if(!isset($_GET['id']))
    {
    throw new Exception("aucun de suppression selectioné", 1);
    }
   else
   {
       supprimer_promo($_GET['id']);     
   }
   }
   elseif($_GET['action']=="wait")
   {
      
     if(isset($_POST['nom_produit']))
     {
      $fichier=fopen('ajout.txt','w+');
      fputs($fichier,$_POST['nom_produit']);
      fclose($fichier);
     }
     else
     {
      throw new Exception("Error ecriture dans le fichier", 1);
     }
      header('location:../form_component.php?nom');
   }
   elseif($_GET['action']=="ok")
   {
    if(isset($_POST['date_de_fin'])&&isset($_POST['date_de_debut']))
     {
      $fichier=fopen('date_fin.txt','r+');
      fputs($fichier ,$_POST['date_de_fin']);
      fclose($fichier);
      $fichier2=fopen('date_debut.txt', 'r+');
      fputs($fichier2,$_POST['date_de_debut']);
      fclose($fichier2);     
      }
      else
     {
      throw new Exception("Error ecriture dans le fichier", 1);
     }
      header('location:../form_component.php?nom='.$_POST['date_de_debut']);
    } 
   
   elseif($_GET['action']=="valider")
   {
    if(isset($_POST['pourcentage']))
     {
      $fichier=fopen('pourcentage.txt','r+');
      fputs($fichier ,$_POST['pourcentage']);
      fclose($fichier);    
      }
      else
     {
      throw new Exception("Error ecriture dans le fichier", 1);
     }
  $nom=fopen('ajout.txt','r+');
  $date_debut=fopen('date_debut.txt','r+');
  $date_fin=fopen('date_fin.txt','r+');
  $pourcentage=fopen('pourcentage.txt','r+');  

  $pro->set_nom(fgets($nom));
  $pro->set_date_d(fgets($date_debut));
  $pro->set_date_f(fgets($date_fin));
  $pro->set_pourcentage(fgets($pourcentage));
  ajouter_produit_promo($pro);
   }
   elseif($_GET['action']=="send")
   {
    header("location:../envoi_mail.php");
   } 
   elseif ($_GET['action']=="sms") 
    {
          header("location:../sms.php");
    }
      elseif ($_GET['action']=="ajouter")
  {
  $nom=$_POST['nom'];
  $date_debut=$_POST['date_de_debut'];
  $date_fin=$_POST['date_de_fin'];
  $pourcentage=$_POST['pourcentage'];  

  $pro->set_nom($nom);
  $pro->set_date_d($date_debut);
  $pro->set_date_f($date_fin);
  $pro->set_pourcentage($pourcentage);
  ajouter_produit_promo($pro);
  }   
   else
   {
    throw new Exception("probleme au ,niveau de l'action ",1);  
   }
  
}
catch(Exception $e) 
{ // S'il y a eu une erreur, alors...
    echo 'Erreur : ' . $e->getMessage();
}

?>