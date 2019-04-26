<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?PHP
include_once '../entites/sign_in.php';
include_once '../core/sign_in_manage.php';
    
    if(isset($_POST['sign']))
    {
    $sign_in=new sign_in();
    $sign_in->setid($_POST['id']);
    $sign_in_manage=new sign_in_manage();
    $sign_in_manage->chercher_client($sign_in);  
    }  
?>

<?PHP
include_once '../entites/client.php';
include_once '../core/client_manage.php';
$client=new client();
$client_manage=new client_manage();

    if(isset($_POST['inscri']))
    {
      $client->setnom($_POST['Name']);
      $client->setmail($_POST['Email']);
      $client->setpassword($_POST['password']);
      $client->setid($_POST['idcli']);
      $client_manage->ajouter_client($client);
      echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('bienvenu');
        window.location.replace('../views/profile.php');
        </SCRIPT>";
    }
    if(isset($_POST['modiprofile']))
    {
      $client->setnom($_POST['Name']);
      $client->setmail($_POST['mail']);
      $client->setpassword($_POST['newpassword']);
      $client->setid($_POST['idclient']);
      $client_manage->modifier_client($client);
      echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('profile modifier avec succee');
        window.location.replace('../views/profile.php');
        </SCRIPT>";
    }
    else if (isset($_POST['suppprofile']))
    {
      $client->setid($_POST['idclient']);
      $client_manage->supprimer_client($client);
      echo "<SCRIPT type='text/javascript'> //not showing me this
        window.location.replace('../views/deco.php');
        </SCRIPT>";
    }
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
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- header -->
<div class="header" id="home">
	<div class="container">
		<ul>
		    <li> <?php 
					if (!isset($_SESSION['id']))
					{
					?>
					 <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true">
			    	<?php 
					}
					else
					{
					?>
					<a href="index.php">
					<?php 
					 }
					 ?>
					 	
					 </i>							
					 <?php
		             if(!isset($_SESSION['id']))
		             {
		              echo "Connecter-vous";
		             } 
		             else
		             {
		           	  echo "deconnecter";
		           	  //session_destroy();
		             }
		             ?></li>
			<li>
				<?php 
					if (!isset($_SESSION['id']))
					{
					?>
					 <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true">
			    	<?php 
					}
					else
					{
					?>
					<a href="profile.php">
					<?php 
					 }

					 ?>
					 </i>							
					 <?php
		             if(!isset($_SESSION['id']))
		             {
		              echo "inscriver-vous";
		             } 
		             else
		             {
		           	  echo "SALUT : ".$_SESSION['id'];
		             }
		             ?>
			</a></li>
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
					
					<li class=" menu__item menu__item--current" style="display:<?php 
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
					<li class="dropdown menu__item" style="display:none">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Men<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.html"><img src="images/top2.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="mens.html">Clothing</a></li>
											<li><a href="mens.html">Wallets</a></li>
											<li><a href="mens.html">Footwear</a></li>
											<li><a href="mens.html">Watches</a></li>
											<li><a href="mens.html">Accessories</a></li>
											<li><a href="mens.html">Bags</a></li>
											<li><a href="mens.html">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="mens.html">Jewellery</a></li>
											<li><a href="mens.html">Sunglasses</a></li>
											<li><a href="mens.html">Perfumes</a></li>
											<li><a href="mens.html">Beauty</a></li>
											<li><a href="mens.html">Shirts</a></li>
											<li><a href="mens.html">Sunglasses</a></li>
											<li><a href="mens.html">Swimwear</a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="dropdown menu__item" style="display:none">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Women <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.html">Clothing</a></li>
											<li><a href="womens.html">Wallets</a></li>
											<li><a href="womens.html">Footwear</a></li>
											<li><a href="womens.html">Watches</a></li>
											<li><a href="womens.html">Accessories</a></li>
											<li><a href="womens.html">Bags</a></li>
											<li><a href="womens.html">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.html">Jewellery</a></li>
											<li><a href="womens.html">Sunglasses</a></li>
											<li><a href="womens.html">Perfumes</a></li>
											<li><a href="womens.html">Beauty</a></li>
											<li><a href="womens.html">Shirts</a></li>
											<li><a href="womens.html">Sunglasses</a></li>
											<li><a href="womens.html">Swimwear</a></li>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.html"><img src="images/top1.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="menu__item dropdown" style="display:none">
					   <a class="menu__link" href="#" class="dropdown-toggle" data-toggle="dropdown">P'tit Codes <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="icons.html">Icons Web</a></li>
									<li><a href="typography.html">Typographie</a></li>
								</ul>
					</li>
					<li class=" menu__item"><a class="menu__link" href="contact.php">Contacts</a></li>
					<li class=" menu__item"><a class="menu__link" href="contact.html">F.A.Q</a></li>
					<li class=" menu__item" style="display:<?php 
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
						<<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Connectez-<span>Vous</span></h3>
									<form action="profile.php" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="id" required="">
								<label>identifiant</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="pas" required=""> 
								<label>mot de passe</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign In" name="sign">
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
						 <form action="profile.php" method="POST">
							<div class="styled-input agile-styled-input-top">
								<input type="text"  name="Name" required="">
								<label>Nom</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="idcli" required=""> 
								<label>id</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="email" name="Email" required=""> 
								<label>Mail</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="password" required=""> 
								<label>Mot de Passe</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="Confirm Password" required=""> 
								<label>Confirmer Mot de Passe</label>
								<span></span>
							</div> 
							<input type="submit" value="Inscrivez-Vous" name="inscri">
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
														<p><a href="#">En cliquant sur Enregistrer, j'accepte vos termes</a></a></p>

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
			<h3>ton <span>Profile </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.php">Acceuil</a><i>|</i></li>
								<li>ton profile</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>


	             <div class="col-md-6 contact-form">
						<h4 class="white-w3ls"><span>ton</span> PROFILE</h4>
						<form action="profile.php" method="POST">
                            
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="" value="<?php echo $_SESSION['name']; ?>">
								<label>Nom</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="idclient" required="" value="<?php echo $_SESSION['id']; ?>"> 
								<label>identifiant</label>
								<span></span>
							</div> 
							
							<div class="styled-input">
								<input type="email" name="mail" required="" id="mailo" value="<?php echo $_SESSION['mail']; ?>"> 
								<label>Mail</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="newpassword" id="pass1" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.passwordcon.pattern = this.value;"">
								<label>neauveux mot de passe</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="newpasswordconfirm" id="passwordcon" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" >
								<label>confimer mot de passe</label>
								<span></span>
							</div>
							
							<input type="submit" value="MODIFIER" name="modiprofile">
							</br>
							</br>
							</br>
							</br>
							</br>
							</br>
							<input type="submit" value="supprimer votre compte" name="suppprofile">
						</form>
					</div>





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
				<form action="news.php" method="post">
					<input type="email" placeholder="Entre votre adresse mail..." name="news" required="">
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
</body>
</html>