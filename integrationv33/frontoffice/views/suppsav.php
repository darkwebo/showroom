<?PHP
include_once "../entite/produitret.php";
include_once "../core/traitment.php";



    
       $sav=new produitret();
    $sav->setId($_GET['id']);
  $savc=new produitretC();
  $savc->supprimer_produitret($sav);

  header("Location: http://localhost/web2/view/affichersav.php");

    
?>