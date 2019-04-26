<?php
require '../core/addpanier.php';
$db = Config::getConnexion();

?>
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
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<link rel="stylesheet" type="text/css" href="css/panier.css">
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
					<a href="deco.php">
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
		           	  echo "Deconnecter";
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
					<a href="Profil.php">
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
					<li class=" menu__item"><a class="menu__link" href="about.html">A Propos</a></li>
					
					<li class="menu__item dropdown" style="display:none">
					   <a class="menu__link" href="#" class="dropdown-toggle" data-toggle="dropdown">P'tit Codes <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="icons.html">Icons Web</a></li>
									<li><a href="typography.html">Typographie</a></li>
								</ul>
					</li>
					<li class=" menu__item"><a class="menu__link" href="contact.html">Contacts</a></li>
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
							<form action="panier.php" method="post">
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
<hr size="4px" color = "#2fdab8"/>
<div align="center">
    <nav align="left">
        <span align = "center"> 
        	<h4 class = "green">
        		<img height= 20% width= 10% src="images/p.png">Votre Panier  
                    <?php if(empty($_SESSION['panier'])):;
                    echo "a été Vidé";
                    endif;?>
            </h4>
        </span>
        <form action="index.php">
    		<input align ="left" type="image" value="submit" height= 15% width= 8% align = "right" src="images/back.png">
    	</form>
    </nav>
</div>
<hr color = "#2fdab8"/>
   <!--/contact-->
<div class ="commande">
	<table cellspacing="2" align="center" height= "25%" width="80%"  cellpadding="10">
		
        <thead>
        <?php if(!empty($_SESSION['panier'])):?>
		<tr class = "pure">
            <td colspan="2"><div align="center"><span class="ddj">Article</span></div></td>
            <td><div align="center"><span class="ddj">Prix</span></div> <div align="center"><span class="ddj">Unitaire</span></div></td>
            <td><div align="center"><span class="ddj">Action</span></div></td>
            <td><div align="center"><span class="ddj">Quantite</span></div></td>
            <td><div align="center"><span class="ddj">Totaux</span></div></td>
        </tr>
		<?php endif;?>
        </thead>
        <form  action="../core/verif.php" method="POST">
        	<?php
                $products=$db->prepare('SELECT * FROM client');
                $products->execute();
                $result=$products->fetchAll(PDO::FETCH_OBJ);
                foreach ($result as $product): ?>
                <input type="hidden" name="login" value="<?php echo $product->id; ?>">
                <input type="hidden" name="pwd" value="<?php echo $product->password; ?>">
                <?php endforeach ?>
            <?php
		    $id=array_keys($_SESSION['panier']);
            if(empty($id)){
                $products=array();
            }
            else{ 
                $products=$db->prepare('SELECT * FROM produit WHERE id IN ('.implode(',', $id).')');
                $products->execute();
            }
            $cmpt=0;
            foreach ($products as $product):
            $cmpt++; ?>
        <tbody>
            <tr class="frame">
				<td class="cart_product" >
					<div  align="center">
						<a href=""><img width="155px" height = "150px" src="images/<?php echo $product['id'];?>.jpg" alt="" /></a>
					</div>
				</td>
				<td class="cart_description">
				    <div align="center">
				    	<h4> <input class="notborder" type="text" name="<?php echo("nom".$cmpt) ?>" id="<?php echo("nom".$cmpt) ?>" value="<?php echo $product['nom'];?>" size="25px" ></h4>
					    <p name="id">Product ID: <?php echo $product['id'];?></p>
					    <input type="hidden" name="<?php echo("idtt".$cmpt) ?>" id ="<?php echo("idtt".$cmpt) ?>" value="<?php echo $product['id']; ?>"/>
					</div>
                    
				</td>
				<td class="cart_price">
					<div align="center"> 
				        <input class="notborder" name="<?php echo("p".$cmpt) ?>" id="<?php echo("p".$cmpt) ?>" type="text" id="<?php echo("p".$cmpt) ?>" align = "center"  value="<?php echo $product['prix'];?>" size="6px" />DT
				    </div>
				</td>
				<td class="cart_delete">
					<div align="center"> 
						<a class="cart_quantity_delete" href="../core/addpanier.php?del=<?php echo $product['id'];?>"><i class="fa fa-times"></i></a>
					</div>
				</td>
				<td class="cart_quantity">
					<div class="cart_quantity_button" align="center">
						<input name="<?php echo("q".$cmpt) ?>" id="<?php echo("q".$cmpt) ?>"  class="cart_quantity_input" onchange="onchanger('<?php echo $cmpt;?>')" type = "number" max="<?php echo $product['quantite'];?>" value="1"  min ="1" />
                        
					</div>
				</td>
				<td class="cart_total">
					<div align="center"> 
						<input class="notborder" name="<?php echo("t".$cmpt) ?>" id="<?php echo("t".$cmpt) ?>" type="text" value="<?php echo $product['prix'];?>" size="6px" />DT
					</div>
				</td>
			</tr>

       	    <?php endforeach; if(!empty($_SESSION['panier'])): ?>
       	    <tr>
       	    	<td></td>
       	    	<td></td>
       	    	<td></td>
       	    	<td></td>
       	    	<td></td>
       	    	<td align="center">
		 		  	<input type="submit" id="reserver" name="reserver" value="Reserver" class="btn primary">
				</td>
       	    </tr>
			<tr class="pure">
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<div align="left">
                    	<span class="dddj">Total <span class= "hhh">du</span</span>
                    </div>
                    <div align="right">
                    	<span class="dj"><span class= "hhh">PA</span>nier</span>
                    </div>
                </td>
                <td>
                	<div align="center"></div>
                    <div align="center"></div>
                </td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<div align="center"></div>
                </td>
                <td>
                   	<div color="red" align="center"></div>
                   	<div align="center" class="puttttttt">
                   		<span class="ddj"><span class= "hhh1">TOTAL</span></span>
                   		<hr/>
                   		<h4 class= "not"><input class= "not" type="text"  value="<?php $pa = new panierC(); echo ($pa->calculer_t());?>" name="total"  size="7px" id="total">DT</h4>
                   		<hr/>
                   	</div>
                </td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td align = "center" colspan="2">
					<input type="hidden" name="var1" value="<?php echo $cmpt;?>"/>
       		        <!--input type="image" value="submit" height= "40%" width="30%" align = "right" src="../images/front.png"-->
       		        <input type="submit" value="Passer la Commande" class="btn secondary"/>
				</td>
			</tr>
			</form>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>
					
				</td>
			</tr>
        <?php endif ?>
    	</tbody>
 	</table>
</div>
<hr/>




<!--/grids-->
<div class="coupons">
		<div class="coupons-grids text-center">
			<div class="w3layouts_mail_grid">
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<a href="liv.php"><i class="fa fa-truck" aria-hidden="true"></i></a>
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
<script type="text/javascript">
					
					function changer_desabled()
					{
						var compteur=parseInt(<?php echo $cmpt;?>);
						
						for (var i = 1; i <= compteur; i++)
						 {
							var nom_elt1='nom'+i.toString();
							document.getElementById(nom_elt1).disabled=false;
						}
						for (var i = 1; i <= compteur; i++)
						 {
							var nom_elt2='t'+i.toString();
							document.getElementById(nom_elt2).disabled=false;
						}
						for (var i = 1; i <= compteur; i++)
						 {
							var nom_elt3='p'+i.toString();
							document.getElementById(nom_elt3).disabled=false;
						}
						
							
							document.getElementById('total').disabled=false;
						
					}
                    	
                       function onchanger(indice)
                       {
                       	   var compteur=parseInt(<?php echo $cmpt;?>);
                       	   var tempo1,total=0;
                           var indide_quantite='q'+indice; 
                           var quantite=parseInt(document.getElementById(indide_quantite).value);
                           var indice_prix='p'+indice;

                           var prix=parseFloat(document.getElementById(indice_prix).value);
                           var indice_total='t'+indice;
                           document.getElementById(indice_total).value=prix*quantite;
                         
                           for (var i = 1; i <=compteur; i++)
                           {
                           	tempo1='t'+i.toString();
                           	total+=parseFloat(document.getElementById(tempo1).value);
                           }

                           document.getElementById("total").value=total;
                       }

                    </script>


<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>