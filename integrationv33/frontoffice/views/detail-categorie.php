<?php 
include "backend/core/produitC.php";
$id_cat = 0;
$tri = 1;
if(isset($_GET['id_cat'])){
	$id_cat = (int) $_GET['id_cat'];
}
$produitC =new ProduitC();
if(isset($_GET['tri'])){
	$tri = (int) $_GET['tri'];
	if($tri == 2){
		$lastProducts =$produitC->getProductsCategorieByPrice($id_cat);
	}else if($tri == 3){
		$lastProducts =$produitC->getProductsCategorieByName($id_cat);
	}else{
		$lastProducts =$produitC->getProductsCategorie($id_cat);
	}		
}else{
	$lastProducts =$produitC->getProductsCategorie($id_cat);
}

$array_tri = array("Nouveautés","Prix","Nom");

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

                <div class="col-md-12">

                    <div class="box info-bar">
                        <div class="row">
                          
                            <div class="col-sm-12 col-md-8  products-number-sort">
                                <div class="row">
                                    <form class="form-inline">
                                       
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-sort-by">
                                                <strong>Trier selon</strong>
                                                <select id="select-tri" name="sort-by" class="form-control">
												<?php 
											    	$i=1;
												
											   	  foreach($array_tri as $tri_arrow){
													  if($tri == $i){
														  echo '<option value="'.$i.'" selected>'.$tri_arrow.'</option>';
													  }else{
														  echo '<option value="'.$i.'" >'.$tri_arrow.'</option>';
													  }
													  $i++;
												  }
												?>                                          
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row products">

					<?php if(!empty($lastProducts)){
						    foreach($lastProducts as $product){
								?>
								 <div class="col-md-3 col-sm-4">
									<div class="product">
										<div class="flip-container">
											<div class="flipper">
												<div class="front">
													<a href="detail-produit.php?id=<?php echo $product['id']; ?>">
														<img src="admin/assets/images/<?php echo $product['image']; ?>" alt="" class="img-responsive img-categorie">
													</a>
												</div>
												<div class="back">
													<a href="detail-produit.php?id=<?php echo $product['id']; ?>">
														<img src="admin/assets/images/<?php echo $product['image']; ?>" alt="" class="img-responsive img-categorie">
													</a>
												</div>
											</div>
										</div>
										<a href="detail-produit.php?id=<?php echo $product['id']; ?>" class="invisible">
											<img src="admin/assets/images/<?php echo $product['image']; ?>" alt="" class="img-responsive img-categorie">
										</a>
										<div class="text">
											<h3><a href="detail-produit.php?id=<?php echo $product['id']; ?>"><?php echo $product['nom']; ?></a></h3>
											<p class="price"><?php echo $product['prix']; ?> DT</p>
											<p class="buttons">
												<a href="detail-produit.php?id=<?php echo $product['id']; ?>" class="btn btn-default">Voir details</a>
												<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
											</p>
										</div>
										<!-- /.text -->
									</div>
                            <!-- /.product -->
                        </div>
								<?php
							}
					}?>
                       
                    </div>
                    <!-- /.products -->

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

	<script>
	var id_cat = <?php echo $id_cat;?>;
	$("#select-tri" ).change(function() {
       var tri = $("#select-tri" ).val();
	   window.location.href = "detail-categorie.php?id_cat="+id_cat+"&tri="+tri;
    });
	</script>
</body>

</html>