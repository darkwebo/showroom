<?PHP
include_once "../entites/sav.php";
include_once "../core/traitment.php";


    
    $produitret=new reclamation();
    $produitret->setNum($_GET['num']);
             $savc=new reclamationC();
  $savc->supprimer_reclamation($produitret);


 

     header("Location: http://localhost/frontoffice/views/sav.html");

?>