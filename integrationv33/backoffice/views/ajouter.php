<?PHP
include_once "../entites/produitret.php";
include_once "../core/traitment.php";


    
    $produitret=new produitret();
    $produitret->setId($_POST['id']);
    $produitret->setdesignation($_POST['designation']);
    $produitret->setquantite($_POST['quantite']);
    $produitret->setprix($_POST['prix']);
     $produitretC=new produitretC();

    $produitretC->ajouter_produitret($produitret);
  header("Location: http://localhost/backoffice/views/afficherrec.php");

 
    
?>