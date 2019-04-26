<?php 
include "../core/fournisseurC.php";
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
    <div class="panel-heading">
Liste des fournisseurs    
</div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
		<tr>
		 <th colspan="4" ></th>
		 <th><a href="ajout-fournisseur.php" class="btn btn-primary" >Ajouter un fournisseur</a></th>
		 </tr>
          <tr>
			<th>nom</th>
			<th>email</th>
            <th>tel</th>
            <th>adresse</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
		  <?php 
		      if(!empty($listefournisseur)){
				  foreach($listefournisseur as $fournisseur){
					  ?>
					    <tr>
							<td><span class="text-ellipsis"><?php echo $fournisseur['nom']; ?></span></td>
							<td><?php echo $fournisseur['email']; ?></td>
							<td><span class="text-ellipsis"><?php echo $fournisseur['tel']; ?></span></td>
							<td><span class="text-ellipsis"><?php echo $fournisseur['adresse']; ?></span></td>
							<td>
							   <button type="" value="" class="btn-actions"><a href="modif-fournisseur.php?id=<?php echo $fournisseur['id']; ?>" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i></a></button>
							  <form method="POST" action="business/supprimerFournisseur.php">
									<button type="submit" value="" class="btn-actions"><i class="fa fa-times text-danger text"></i></button>
									<input type="hidden" value="<?php echo $fournisseur['id']; ?>" name="id">
	                           </form>
							</td>
                        </tr>	  
					  <?php
				  }
			  }
		  ?>

	  </tbody>
      </table>

    </div>

  </div>
  <th><a href="mail.php" class="btn btn-primary" >Envoyer Email</a></th>
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
