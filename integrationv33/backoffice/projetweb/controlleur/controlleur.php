
<?php
require_once('../modele/Produitpromo.php');
 function recupere_nom_produit($nom)
{
   return $nom;
}

function ajouter_produit_promo($p_promo)
{
  
  
   $req=$p_promo->postA_promotion($p_promo->get_nom() ,$p_promo->get_date_d() ,$p_promo->get_date_f(),$p_promo->get_pourcentage());

   if($req==false)
   {
       throw new Exception("Error classe", 1);     
   }
   else 
   {
     header('Location:../basic_table.php');
   }     
}

function supprimer_promo($id)
{
  $p_promo=new Produitpromo();
  $req=$p_promo->suprimer_promotion($id);
  if($req==false)
  {
    throw new Exception("Error: ", 1);  
  }
  else
  {
    header('Location:../basic_table.php');
  }
} 
function modifier_promo($nv_dd,$nv_df,$nv_p,$id)
{
    $p_promo=new Produitpromo();
    $req=$p_promo->Modifier_promotion($nv_dd ,$nv_df,$nv_p,$id);
     if($req==false)
  {
    throw new Exception("Error: ", 1);  
  }
  else
  {
    header('Location:../basic_table.php');
  }
}
     
?>