<?php
include "C:/xampp/htdocs/backoffice/core/produitC.php";
include "C:/xampp/htdocs/backoffice/entites/produit.php";

$produitC=new ProduitC();

if (isset($_POST['ajouter'])){
  
  $nom = $_POST['nom'];
  
  // upload image
      $image = "" ;
     if (!empty($_FILES)) {
        $file = $_FILES['image'];
        if ($file['name'] != '') {
            $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
       $extensions = array("jpg","png");
            if (in_array($ext, $extensions)) {
                $name_p = md5($file['name']).".".$ext;
                $path = "../assets/images/" . $name_p;
                if (move_uploaded_file($file['tmp_name'], $path)) {
                    $image = $name_p;
                }
            }
        }
    }
  
  $prix = $_POST['prix'];
  $quantite = $_POST['quantite'];
  $description = $_POST['description'];
  $categorie_id = $_POST['categorie'];
  $fournisseur_id = $_POST['fournisseur']; 
  

  $produit=new Produit($nom,$image,$prix,$quantite,$description, $categorie_id, $fournisseur_id); 
    $produitC->ajouterProduit($produit);
  header('Location: ../produits.php');
}

?>