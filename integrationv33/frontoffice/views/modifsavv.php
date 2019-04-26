<?PHP
include_once "../entites/sav.php";
include_once "../core/traitment.php";



     $sav=new Reclamation();
    $sav->setId($_POST['idclient']);
    $sav->setNom($_POST['Name']);
    $sav->setMail($_POST['Email']);
    $sav->setsujet($_POST['Subject']);
    $sav->setMessage($_POST['Message']);
        $sav->setNum($_POST['cher']);
    $savc= new reclamationC();
        $savc->modifier_reclamation($sav);


    header("Location: http://localhost/frontoffice/views/sav.html");

    
?>