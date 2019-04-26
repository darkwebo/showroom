<?php 
include "C:/xampp/htdocs/backoffice/core/produitC.php";

// get id produit

$id = 0;
$produit = array();
if(isset($_GET['id'])){
	$id = $_GET['id'];
}
$produitC =new ProduitC();
$produit=$produitC->recupererProduit($id);

// get values

$nom ="";
$image = "";
$prix = "";
$quantite = "";
$description = "";
$categorie_id = 0;
$fournisseur_id = 0;

if(!empty($produit)){
	$nom = $produit['nom'];
	$image = $produit['image'];
	$prix = $produit['prix'];
	$quantite = $produit['quantite'];
	$description = $produit['description'];
	$categorie_id = $produit['categorie_id'];
	$fournisseur_id = $produit['fournisseur_id'];
}

// get list categories
include "C:/xampp/htdocs/backoffice/core/categorieC.php";
$categorieC =new categorieC();
$listeCategorie=$categorieC->afficherCategorie();


// get list fournisseurs
include "C:/xampp/htdocs/backoffice/core/fournisseurC.php";
$fournisseurC =new fournisseurC();
$listefournisseur=$fournisseurC->afficherFournisseur();

?><!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Basic_table :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
<?php include("includes/left-menu.php");?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
  
        <div class="row">
        <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Modifier un produit
            </header>
            <div class="panel-body">
                <form class="form-horizontal bucket-form" method="post" action="business/modifProduit.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nom</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nom" required  value="<?php echo $nom?>" >
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="col-sm-3 control-label">Image</label>
                        <div class="col-sm-6">
                            <input type="file" class="form-control" name="image" required >
                        </div>
                    </div>
                   
                   <div class="form-group">
                        <label class="col-sm-3 control-label">Prix</label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" name="prix" required value="<?php echo $prix?>" step="0.01" min="0"  >
                        </div>
                    </div>
					
                     <div class="form-group">
                        <label class="col-sm-3 control-label">Quantité</label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" name="quantite"  value="<?php echo $quantite?>" min="0" >
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-6">
							<textarea  class="form-control" name="description" required  ><?php echo $description?></textarea>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="col-sm-3 control-label">Catégorie</label>
                        <div class="col-sm-6">
                            <select  class="form-control" name="categorie">
							   <option value='0'></option>
							   <?php 
							       if(!empty($listeCategorie)){
									   foreach($listeCategorie as $categorie){
										   if($categorie_id == $categorie['id']){
											   echo "<option value='".$categorie['id']."' selected>".$categorie['nom']."</option>";
										   }else{
											   echo "<option value='".$categorie['id']."'>".$categorie['nom']."</option>";
										   }
									   }
								   }
							   ?>
							</select>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="col-sm-3 control-label">Fournisseur</label>
                        <div class="col-sm-6">
                             <select  class="form-control" name="fournisseur">
							   <option value='0'></option>
							   <?php 
							       if(!empty($listefournisseur)){
									   foreach($listefournisseur as $fournisseur){
										   if($fournisseur_id == $fournisseur['id']){
										   echo "<option value='".$fournisseur['id']."' selected>".$fournisseur['nom']."</option>";
										   }else{
											   echo "<option value='".$fournisseur['id']."'>".$fournisseur['nom']."</option>";
										   }
									   }
								   }
							   ?>
							</select>
                        </div>
                    </div>
					 <input type="hidden" class="form-control" name="id" value="<?php echo $id ;?>"  >
					<div class="form-group">
						<div class="col-lg-offset-3 col-lg-6">
							<button class="btn btn-primary" type="submit" name="modifier" >Modifier</button>
						</div>
                    </div>
                </form>
            </div>
        </section>
        </div>
        </div>
    </div>
  </div>
</div>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			</div>
		  </div>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
