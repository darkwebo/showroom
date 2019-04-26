<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start(); ?>
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Gallery :: w3layouts</title>
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
<link rel="stylesheet" href="css/lightbox.css">
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
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="index.php" class="logo">
        ADMINISTRATEUR
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-tasks"></i>
                <span class="badge bg-success">8</span>
            </a>
            <ul class="dropdown-menu extended tasks-bar">
                <li>
                    <p class="">You have 8 pending tasks</p>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>25% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="45">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Product Delivery</h5>
                                <p>45% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="78">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Payment collection</h5>
                                <p>87% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="60">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>33% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="90">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>

                <li class="external">
                    <a href="#">See All Tasks</a>
                </li>
            </ul>
        </li>
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important">4</span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">You have 4 Mails</p>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/3.png"></span>
                                <span class="subject">
                                <span class="from">Jonathan Smith</span>
                                <span class="time">Just now</span>
                                </span>
                                <span class="message">
                                    Hello, this is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/1.png"></span>
                                <span class="subject">
                                <span class="from">Jane Doe</span>
                                <span class="time">2 min ago</span>
                                </span>
                                <span class="message">
                                    Nice admin template
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/3.png"></span>
                                <span class="subject">
                                <span class="from">Tasi sam</span>
                                <span class="time">2 days ago</span>
                                </span>
                                <span class="message">
                                    This is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/2.png"></span>
                                <span class="subject">
                                <span class="from">Mr. Perfect</span>
                                <span class="time">2 hour ago</span>
                                </span>
                                <span class="message">
                                    Hi there, its a test
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">See all messages</a>
                </li>
            </ul>
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <i class="fa fa-bell-o"></i>
                <span class="badge bg-warning">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Notifications</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #1 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #2 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #3 overloaded.</a>
                        </div>
                    </div>
                </li>

            </ul>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <span class="username"><?php echo $_SESSION['id'];?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="../views/profile.php"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="../core/deco.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>tableau de bord</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Tracking</span>
                    </a>
                    <ul class="sub">
                        <li><a href="typography.php">Outil tracking</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Table de donnée</span>
                    </a>
                    <ul class="sub">
                        <li><a href="basic_table.php">Basic Table</a></li>
                        <li><a href="responsive_table.php">Responsive Table</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Marketing</span>
                    </a>
                    <ul class="sub">
                        <li><a href="form_component.php">gestion des soldes</a></li>
                        <li><a href="form_validation.php">lancer le traking</a></li>
                        <li><a href="dropzone.php">Dropzone</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-envelope"></i>
                        <span>Mail </span>
                    </a>
                    <ul class="sub">
                        <li><a href="mail.php">Inbox</a></li>
                        <li><a href="mail_compose.php">Compose Mail</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Statistique</span>
                    </a>
                    <ul class="sub">
                        <li><a href="chartjs.php">Chart js</a></li>
                        <li><a href="flot_chart.php">Flot Charts</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-glass"></i>
                        <span>Autre</span>
                    </a>
                    <ul class="sub">
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="registration.php">Registration</a></li>
                    </ul>
                </li>
               
            </ul>           
             </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
                <!-- gallery -->
        <!-- gallery -->
    
            
            <?php
             require_once("modele/Produitpromo.php");
              require_once("modele/Produit.php");
              require_once("modele/Produitaimer.php");
            if(isset($_GET['id']))
            {
                ?>
        <div class="gallery">
        <h2 class="w3ls_head">Detail produit préféré <?php echo $_GET['id']?> </h2>
        <div class="gallery-grids">
                <?php
            $compte=0;
            $chemin1="images/";
            $chemin2=".jpg";
            $pro=new Produit();
            $req=$pro->afficher_detail_produit($_GET['id']);
            while($data=$req->fetch())
            {
               $compte++;
            $chemin3=$chemin1."".$data['nom']."".$chemin2;
            ?>

               <div class="gallery-top-grids">
                    <div class="col-sm-4 gallery-grids-left">
                        <div class="gallery-grid">
                            <a class="example-image-link" href=<?=$chemin3?> data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                <img src=<?= $chemin3 ?> alt="" />
                                <div class="captn">
                                    <h4>Nom: <?=$data['nom']?></h4>
                                    <p>Quantité: <?=$data['quantite']?></p>
                                    <p>Poids: <?=$data['prix']?></p>
                                    <p><font color="white">Promotion:</font>

                                    <?php
                                      $pro=new Produitpromo();
                                      $req1=$pro->rechercher_promotion_existe($data['nom']);
                                      $data1=$req1->fetch();
                                      $req1->closeCursor();
                                      if($data1['nombre']>0)
                                      {
                                        ?>
                                          <a href="envoi_mail.php?nom=<?=$data['nom']?>&id=<?=$_GET['id']?>">oui</a>
                                        <?php
                                      }
                                      else
                                      {
                                       ?>
                                        
                                        <a href="#myModal" data-toggle="modal" type="submit">
                                   <font color="white">non</font>
                                  </a>     
                                     
                                         
                                    
                                    <?php
                                      }
                                    ?> 
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                  
                  </div>
                  <div class="clearfix"> </div>
            <?php 
            $nom=$data['nom'];
           //echo $compte;
        }
            }
            //afficher details les produits les plus aimer
             
        elseif(isset($_GET['client']))
            {
                ?>
                 <div class="gallery">
        <h2 class="w3ls_head">Detail produit aimer par les clients </h2>
        <div class="gallery-grids">
              <?php
            $compteur=0;
            $chemin1="images/";
            $chemin2=".jpg";
            $pro2=new Produit();
            $pro1=new Produit_aimer();
            $req1=$pro1->list_produit($_GET['client']);
            while($data2=$req1->fetch())
            {

                $table[$compteur]=$data2['nom'];
                //echo $table[$compteur];
                $compteur++;
                
            }

            foreach ($table as $nom) 
            {
                
                $req=$pro2->afficher_detail_produit($nom);
                $data=$req->fetch();
                $req->closeCursor();
              
             ///$compte++;
           $chemin3=$chemin1."".$data['nom']."".$chemin2;
            ?>

               <div class="gallery-top-grids">
                    <div class="col-sm-4 gallery-grids-left">
                        <div class="gallery-grid">
                            <a class="example-image-link" href=<?=$chemin3?> data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                <img src=<?=$chemin3?> alt="" />
                                <div class="captn">
                                    <h4>Nom: <?=$data['nom']?></h4>
                                    <p>Quantité: <?=$data['quantite']?></p>
                                    <p>Poids: <?=$data['prix']?></p>
                                    <p><font color="white">Promotion:</font>

                                    <?php
                                      $pro=new Produitpromo();
                                      $req1=$pro->rechercher_promotion_existe($data['nom']);
                                      $data1=$req1->fetch();
                                      $req1->closeCursor();
                                      if($data1['nombre']>0)
                                      {
                                        ?>
                                          <a href="envoi_mail.php?nom=<?=$data['nom']?>&id=<?=$nom?>">oui</a>
                                        <?php
                                      }
                                      else
                                      {
                                       ?>
                                        
                                        <a href="#myModal" data-toggle="modal" type="submit">
                                   <font color="white">non</font>
                                  </a>     
                                     
                                         
                                    
                                    <?php
                                      }
                                    ?> 
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                  
                  </div>
                  <div class="clearfix"> </div>
            <?php 

            $nom=$data['nom'];
           //echo $compte;
        }
            }     
             






            else
            {
             ?>

 <div class="gallery">
        <h2 class="w3ls_head">Gallery produit promo </h2>
        <div class="gallery-grids">

<?php

           //afficher produit promo
           
               $chemin1="images/";
               $chemin2=".jpg";
              
               $pro=new Produitpromo();
               $req=$pro->afficher_pro();
               $req1=$pro->afficher_pro();
               $compteur=0;
               $balise=0;

               while($date1=$req1->fetch())
               {
                $compteur++;
               }

               while ($data=$req->fetch())
               {
                 $chemin3=$chemin1."".$data['nom']."".$chemin2;
                 if($balise==0)
                 {
                  ?>
                  <div class="gallery-top-grids">
                  <?php  
                 }

                 ?>
                    <div class="col-sm-4 gallery-grids-left">
                        <div class="gallery-grid">
                            <a class="example-image-link" href=<?=$chemin3?> data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                <img src=<?=$chemin3?> alt="" />
                                <div class="captn">
                                    <h4><?=$data['nom']?></h4>
                                    <p><?php echo $data['pourcentage']."%"?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                  <?php
                   $balise++; 
                   if($balise==3)
                   {
                    $balise=0;
                  ?>
                  </div>
                  <div class="clearfix"> </div>
                  <?php
                   }                    
                
               }
           }
           
            ?>
    
                
                <div class="clearfix"> </div>
                <script src="js/lightbox-plus-jquery.min.js"> </script>
        
    
    </div>
    <!-- //gallery -->
 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button" >×</button>
                                        <h4 class="modal-title">voulez-vous mettre ce produit en promotion?</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form" action="controlleur/indexproduit.php?action=ajouter&amp;id=0"  method="POST" class="form-horizontal" role="form">
                                    <div class="form-group"  >
                                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">date de debut</label>
                                                <div class="col-lg-10">
                                                    <input type="date" class="form-control" id="inputEmail4" name="date_de_debut">
                                                </div>
                                    </div>
                                        <div class="form-group">
                                                <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label" >date de fin</label>
                                                <div class="col-lg-10">
                                                    <input type="date" class="form-control" id="inputPassword4" name="date_de_fin">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label" >pourcentage</label>
                                                <div class="col-lg-10">
                                                    <input type="number" class="form-control" id="inputPassword4" name="pourcentage">
                                                </div>
                                            </div>
                                                     <input type="hidden" name="nom" value="<?=$nom?>">

                                            <button type="submit" class="btn btn-default">valider</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> 

</section>
 <!-- footer -->
          <div class="footer">
            <div class="wthree-copyright">
              <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
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
<!-- gallery -->

</body>
</html>
