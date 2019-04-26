<?php 
include "C:/xampp/htdocs/backoffice/core/produitC.php";
$produitC =new ProduitC();
$listeProduit=$produitC->afficherProduit();    
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
    <div class="panel-heading">
      Liste des produits
    </div>
    


    <div class="table-responsive">
    			 <th><a href="statchaima.php" class="btn btn-primary" >Statistique</a></th>

      <table class="table table-striped b-t b-light">
        <thead>
		 <tr>
		 	  <a href ="product.php" class="btn-success pull-right"<span class=" glyphicon glyphicon-excel" > EXCEL</a> 
		 <th colspan="5"></th>
		 <th><a href="ajout-produit.php" class="btn btn-primary" >Ajouter un produit</a></th>

		 </tr>

          <tr>

            <th>Produit</th>
			<th>Image</th>
			<th>Description</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>

		  <?php 
		      if(!empty($listeProduit)){
				  foreach($listeProduit as $produit){
					  ?>
					    <tr>
							<td><?php echo $produit['nom']; ?></td>
				            <td><?php if($produit['image'] != ""){ ?><img src="assets/images/<?php echo $produit['image']; ?>" class="image-thumbnail" /><?php } ?></td>
							<td><span class="text-ellipsis"><?php echo $produit['description']; ?></span></td>
							<td><span class="text-ellipsis"><?php echo $produit['prix']." DT"; ?></span></td>
							<td><span class="text-ellipsis"><?php echo $produit['quantite']; ?></span></td>
							<td>
							   <button type="" value="" class="btn-actions" ><a href="modif-produit.php?id=<?php echo $produit['id']; ?>" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i></a></button>
							  <form method="POST" action="business/supprimerProduit.php">
									<button type="submit" value="" class="btn-actions"><i class="fa fa-times text-danger text"></i></button>
									<input type="hidden" value="<?php echo $produit['id']; ?>" name="id">
	                           </form>
							</td>
                        </tr>
                                <br>

	  
					  <?php
				  }
			  }
		  ?>
		

		  <br> <a href="print_pdf.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> PDF</a><br>
	  </tbody>
      </table>
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
?>