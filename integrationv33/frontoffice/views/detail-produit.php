<?php 
include "backend/core/produitC.php";

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

if(!empty($produit)){
	$nom = $produit['nom'];
	$image = $produit['image'];
	$prix = $produit['prix'];
	$quantite = $produit['quantite'];
	$description = $produit['description'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">
    <title>
        Rashovski
    </title>
    <meta name="keywords" content="">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>
    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">
    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/respond.min.js"></script>
    <link rel="shortcut icon" href="favicon.png">
	
</head>

<body>
 
 <?php include("includes/header.php"); ?>

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-9">

                    <div class="row" id="productMain">
                        <div class="col-sm-6">
                            <div id="mainImage">
                                <img src="admin/assets/images/<?php echo $image; ?>" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="box">
                                <h1 class="text-center"><?php echo $nom; ?></h1>
                                <p class="goToDescription"><a href="#details" class="scroll-to">Faites défiler les détails du produit</a>
                                </p>
                                <p class="price"><?php echo $prix; ?> DT</p>
                                <?php if($quantite > 0){
									 echo '<p class="product-disponible">Disponible</p>';
								} else{
							       	echo '<p class="product-horsstock">Hors stock</p>';	
								} ?>
                                <p class="text-center buttons">
                                    <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Ajouter au panier</a> 
                                    <a href="#" class="btn btn-default"><i class="fa fa-heart"></i> Ajouter au favoris</a>
                                </p>
                            </div>

                            <div class="row" id="thumbs">
                                <div class="col-xs-4">
                                    <a href="admin/assets/images/<?php echo $image; ?>" class="thumb">
                                        <img src="admin/assets/images/<?php echo $image; ?>" alt="" class="img-responsive">
                                    </a>
                                </div>                            
                            </div>
                        </div>

                    </div>


                    <div class="box" id="details">
                        <p>
                            <h4>Détails produit</h4>
                            <p><?php echo $description; ?></p>
                         
                            <hr>
                            <div class="social">
                                <h4>Envoyez à tes amis</h4>
                                <p>
                                    <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                                </p>
                            </div>
                    </div>
					
                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


      <?php include("includes/footer.php"); ?>


    </div>
    <!-- /#all -->


    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>

</body>

</html>