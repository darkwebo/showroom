<?PHP
include "../core/factureE.php";
$factureE = new factureE();
if (isset($_GET["id"])){
    echo $_GET["id"];
    $factureE->supprimer_fac($_GET["id"]);
	header('Location: crud2.php');
}

?>