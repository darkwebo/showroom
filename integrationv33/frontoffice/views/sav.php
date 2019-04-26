<?PHP
include_once "../entites/sav.php";
include_once "../core/traitment.php";




    
    
    $sav=new Reclamation();
    $sav->setId($_POST['idclient']);
    $sav->setNom($_POST['Name']);
    $sav->setMail($_POST['Email']);
    $sav->setsujet($_POST['Subject']);
    $sav->setMessage($_POST['Message']);
        $sav->setId_vente($_POST['id_vente']);
    $savc= new reclamationC();
        $savc->ajouter_reclamation($sav);

    echo"merci pour votre fidelite";
 

     header("Location: http://localhost/frontoffice/views/index.php");
?>