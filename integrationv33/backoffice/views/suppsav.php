<?PHP
include_once "../entites/produitret.php";
include_once "../core/traitment.php";



    
       $sav=new produitret();
    $sav->setId($_GET['id']);
  $savc=new produitretC();
  $savc->supprimer_produitret($sav);

  header("Location: http://localhost/backoffice/views/affichersav.php");

    
?>