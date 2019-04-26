<?PHP
include "../../core/categorieC.php";
include "../../entites/categorie.php";

$categorieC=new CategorieC();

if (isset($_POST['ajouter'])){
	$nom = $_POST['nom'];
	$categorie=new Categorie($nom);	
    $categorieC->ajouterCategorie($categorie);
	header('Location: ../categorie.php');
}

?>