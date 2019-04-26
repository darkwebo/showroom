<?php include_once "../confige.php" ?><!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
       <?php
  $config=config::getConnexion();
                            $sql =$config->prepare("SELECT * from produit2 WHERE rating='star-1'") ;
                            $sql->execute();
                                 $var=$sql->rowcount();
                             $sql1 =$config->prepare("SELECT * from produit2 WHERE rating='star-2'") ;
                            $sql1->execute();
                              $var2=$sql1->rowcount();
                                 $sql2 =$config->prepare("SELECT * from produit2 WHERE rating='star-3'") ;
                            $sql2->execute();
                              $var3=$sql2->rowcount();
                                     $sql3 =$config->prepare("SELECT * from produit2 WHERE rating='star-4'") ;
                            $sql3->execute();
                              $var4=$sql3->rowcount();
                         $sql4 =$config->prepare("SELECT * from produit2 WHERE rating='star-5'") ;
                            $sql4->execute();
                              $var5=$sql4->rowcount();
                                $sqlx =$config->prepare("SELECT * from produit2") ;
                            $sqlx->execute();
                                 $varx=$sqlx->rowcount();





 ?>
<!DOCTYPE html>
<html>
<head>
<title>S.D.A un site de commerce en ligne Ecommerce Domaine Agricol | Accueil :: GRAMCH</title>
<!--/tags -->

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="S.D.A une societe de vente de materiel agricole, de conseil ,de suivi du client" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>

<link href="css2/rat.css" rel='stylesheet' type='text/css'/>
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>

</head>
<body>
<!-- header -->
<div class="header" id="home">
	<div class="container">
		<ul>
		    <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Connectez-Vous </a></li>
			<li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Inscrivez-Vous </a></li>
			<li><i class="fa fa-phone" aria-hidden="true"></i> Tel : 0123456789</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@exemple.com</a></li>
		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<!-- header-bot -->
			<div class="col-md-4 logo_agile" align = "left">
				<h4 align = "left"><a href="index.php" align = "left"><img align = "left" src="1.png" width = "100" height = "100"></img><i align = "left" class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a><span>S</span>ociete de <br/><br/><span>D</span>eveloppement<br/><br/> <span>A</span>gricole</h4>
			</div>
        <!-- header-bot -->
		
		<div class="col-md-4 header-middle" align = "center">
			<form action="#" method="post">
					<input type="search" name="search" placeholder="Rechercher..." required="">
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>

		<div class="col-md-4 agileits-social top_content">
						<ul class="social-nav model-3d-0 footer-social w3_agile_social">
						                                   <li class="share">Partager: </li>
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item"><a class="menu__link" href="index.php">Acceuil <span class="sr-only">(current)</span></a></li>

					<li class=" menu__item" style="display:<?php 
					                                       if (!isset($_SESSION['id']))
					                                       { 
					                                       	echo "none";
					                                       }
					                                       	else
					                                       	{
					                                       	 echo "unset";
					                                       	}
					                                       ?>;">
				    <a class="menu__link" href="profile.php">profile</a>
					
					<li class=" menu__item"><a class="menu__link" href="about.php">A Propos</a></li>
					
					
					
					<li class=" menu__item"><a class="menu__link" href="contact.php">Contacts</a></li>
					<li class=" menu__item"><a class="menu__link" href="contact.html">F.A.Q</a></li>
					<li class=" menu__item menu__item--current" style="display:<?php 
					                                       if (!isset($_SESSION['id']))
					                                       { 
					                                       	echo "none";
					                                       }
					                                       	else
					                                       	{
					                                       	 echo "unset";
					                                       	}
					                                       ?>;"><a class="menu__link" href="sa.php">S.A.V</a></li>
					<li class=" menu__item" style="display:<?php 
					                                       if (!isset($_SESSION['id']))
					                                       { 
					                                       	echo "none";
					                                       }
					                                       	else
					                                       	{
					                                       	 echo "unset";
					                                       	}
					                                       ?>;"><a class="menu__link" href="liv.php">Facture</a></li>
					<li class=" menu__item" style="display:<?php 
					                                       if (!isset($_SESSION['id']))
					                                       { 
					                                       	echo "none";
					                                       }
					                                       	else
					                                       	{
					                                       	 echo "unset";
					                                       	}
					                                       ?>;"><a class="menu__link" href="livraison.html">Livraison</a></li>

                    
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
						<form action="#" method="post" class="last"> 
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</form>  
  
						</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->
<!-- Modal1 -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Connectez-<span>Vous</span></h3>
									<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>Nom</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="Email" required=""> 
								<label>Mail</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign In">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#" data-toggle="modal" data-target="#myModal2" > Avez-vous un compte?</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal1 -->
<!-- Modal2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Connectez-<span>Vous</span></h3>
						 <form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>Nom</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="Email" required=""> 
								<label>Mail</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="text" name="password" required=""> 
								<label>Mot de Passe</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="Confirm Password" required=""> 
								<label>Confirmer Mot de Passe</label>
								<span></span>
							</div> 
							<input type="submit" value="Inscrivez-Vous">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#">En cliquant sur Enregistrer, j'accepte vos termes</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal2 -->
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>C<span>ontactez-Nous </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.php">Acceuil</a><i>|</i></li>
								<li>Contacts</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
   <!--/contact-->
    <div class="banner_bottom_agile_info">
	    <div class="container">
		  <div class="contact-grid-agile-w3s">
		  	
				<div class="col-md-4 contact-grid-agile-w3">

						<div class="contact-grid-agile-w31">
							
							<h4>envoyer reclamation</h4>
			                <form action="sav.html">

					
					       <input type="image" value="submit" src="images/arrow1.png" alt="submit Button" onMouseOver="this.src='images/arrow1.png'">

				<div class="clearfix"></div>
			</form>
		
							
						</div>
					</div>
					<div class="col-md-4 contact-grid-agile-w3">
						<div class="contact-grid-agile-w32">
							
							<h4>consulter reclamation </h4>
							<form action="savsupp.html">
							<input type="image" value="submit" src="images/arrow1.png" alt="submit Button" onMouseOver="this.src='images/arrow1.png'">
							<div class="clearfix"></div>
			                 </form>
							
						</div>
					</div>
				
			</form>
							
						</div>
					</div>

					<div class="clearfix"> </div>
				</div>
	   </div>
	 </div>
	   
   <div class="banner_bottom_agile_info">

	<div class="container">

	   <div class="agile-contact-grids">

				<div class="agile-contact-left">
					
						
					<div class="col-md-6 contact-form">
						<h4 class="white-w3ls"><span>Formulaire</span> de reclamation</h4>
						<form action="sav.php" method="POST">
                            
							<div class="styled-input agile-styled-input-top">
								<input type="text" pattern="[A-Za-z]{1,50}" name="Name" required="">
								<label>Nom</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="idclient" required=""> 
								<label>identifiant</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="email" name="Email" required=""> 
								<label>Mail</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="text" name="Subject" pattern="[A-Za-z]{1,50}" required="">
								<label>Sujet</label>
								<span></span>
							</div>
							<div class="styled-input">
								<textarea name="Message" pattern="[A-Za-z]{1,50}" required=""></textarea>
								<label>Message</label>
								<span></span>
							</div>	 
							<input type="submit" value="Envoyer">
						</form>
					</div>
				</div>

<div>
<form action="ajouterrating.php" method="Post">

	<div class="star-rating">
			<input id="star-5" type="radio" name="rating" value="star-5">
			<label for="star-5" title="5 stars">
					<i class="active fa fa-star" aria-hidden="true"></i>
			</label>
			<input id="star-4" type="radio" name="rating" value="star-4">
			<label for="star-4" title="4 stars">
					<i class="active fa fa-star" aria-hidden="true"></i>
			</label>
			<input id="star-3" type="radio" name="rating" value="star-3">
			<label for="star-3" title="3 stars">
					<i class="active fa fa-star" aria-hidden="true"></i>
			</label>
			<input id="star-2" type="radio" name="rating" value="star-2">
			<label for="star-2" title="2 stars">
					<i class="active fa fa-star" aria-hidden="true"></i>
			</label>
			<input id="star-1" type="radio" name="rating" value="star-1">
			<label for="star-1" title="1 star">
					<i class="active fa fa-star" aria-hidden="true"></i>
			</label>
		<div class="idriss">
        <legend>Review</legend>  
        <p><label for="review"></label><input type="hidden" name="comnt" value="hh" > 
        </input> <input type="submit" name="x" value="Evaluer"></p>

</div>
<p>4.1 average based on <?php echo $varx?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="">
      <div  style="width: <?php echo $var5."%"?>; height: 18px; background-color: #4CAF50;"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $var5 ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div style="width: <?php echo $var4."%"?>; height: 18px; background-color: #2196F3;"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $var4 ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div style="width: <?php echo $var3."%"?>; height: 18px; background-color: #00bcd4;"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $var3 ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div style="width: <?php echo $var2."%"?>; height: 18px; background-color: #ff9800;"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $var2 ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div style="width: <?php echo $var."%"?>; height: 18px; background-color: #f44336;"></div>
    </div>
    </div>




<br><br><br></br></br></br>
 </form>

</div>
				<div class="clearfix"> </div>
			</div>
       </div>
	</div>
 <!--//contact-->
<!--/grids-->
<div class="coupons">
		<div class="coupons-grids text-center">
			<div class="w3layouts_mail_grid">
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>LIVRAISON GRATUITE</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-headphones" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>SUPPORT 24/7</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-shopping-bag" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>GARANTIE DE REMBOURSEMENT</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
					<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-gift" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>COUPONS CADEAUX GRATUITS</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
</div>
<!--grids-->
<!-- footer -->
<div class="footer">
	<div class="footer_agile_inner_info_w3l">
		<div class="col-md-3 footer-left">
			<h5><a href="index.php"><img align = "left" src="1.png" width = "100" height = "100"></img></a><span>S</span>ociete de <br/><br/><span>D</span>eveloppement<br/><br/> <span>A</span>gricole</h5>
			<p>Lorem ipsum quia dolor
			sit amet, consectetur, adipisci velit, sed quia non 
			numquam eius modi tempora.</p>
			<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
		</div>
		<div class="col-md-9 footer-right">
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Nos <span>Informations</span> </h4>
					<ul>
						<li><a href="index.php">Acceuil</a></li>
						<li><a href="mens.html">Men</a></li>
						<li><a href="womens.html">Women</a></li>
						<li><a href="about.html">A Propos</a></li>
						<li><a href="typography.html">P'tit Codes</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				
				<div class="col-md-5 sign-gd-two">
					<h4><span>Informations</span> sur le magasin </h4>
					<div class="w3-address">
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Tel:</h6>
								<p>+216 56 557 801</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Addresse mail</h6>
								<p>mail :<a href="mailto:example@email.com"> mail@exemple.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Localisation</h6>
								<p>Ariana, Tunis, Tunisie. 
								
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 sign-gd flickr-post">
					<h4><span>Articles</span> sur Flickr </h4>
					<ul>
						<li><a href="single.html"><img src="images/t1.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t1.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
			<div class="agile_newsletter_footer">
					<div class="col-sm-6 newsleft">
				<h3>S'INSCRIRE AU NEWSLETTER !</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form action="#" method="post">
					<input type="email" placeholder="Entre votre adresse mail..." name="email" required="">
					<input type="submit" value="Submit">
				</form>
			</div>

		<div class="clearfix"></div>
	</div>
		<p class="copy-right">&copiez 2018 S.D.A  Tous droits réservés | Concu par <a href="http://w3layouts.com/">GRAMCH</a></p>
	</div>
</div>
<!-- //footer -->

<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Connexion Gratuite</h3>
										<form>
											<div class="sign-up">
												<h4>Mail :</h4>
												<input type="text" value="Ecrit ici" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Mot de Passe :</h4>
												<input type="password" value="Mot de Passe" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<h4>Re-ecrire Mot de Passe :</h4>
												<input type="password" value="Mot de Passe" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<input type="submit" value="Enregistrer maintemant" >
											</div>
											
										</form>
									</div>
									<div class="login-right">
										<h3>Connectez-vous avec votre compte</h3>
										<form>
											<div class="sign-in">
												<h4>Mail :</h4>
												<input type="text" value="Ecriez-ici" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Mot de Passe :</h4>
												<input type="password" value="Mot de Passe" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Oublier Mot de Passe?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Souviens-toi de moi.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>En vous connectant, vous acceptez notre<a href="#">Termes et conditions</a> and <a href="#">Politique de confidentialité</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
	<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js --> 
<!-- script for responsive tabs -->						
<script src="js/easy-responsive-tabs.js"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
<!-- //script for responsive tabs -->		
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->


<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
window.__lc = window.__lc || {};
window.__lc.license = 9637910;
(function() {
  var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
  lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script>

<!-- End of LiveChat code -->
</body>
</html>