<?php session_start();
if (isset($_SESSION['id'])) {
    
 ?>
<?php
include_once '../entites/element.php';

$db=config::getConnexion();
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Responsive_table :: w3layouts</title>
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
<link rel="stylesheet" type="text/css" href="../views/panier.css">
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

    <a href="index.html" class="logo">
        VISITORS
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
                <span class="username" > <?php echo $_SESSION['id'];?>  </span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
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
                    <a href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>UI Elements</span>
                    </a>
                    <ul class="sub">
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="glyphicon.html">glyphicon</a></li>
                        <li><a href="grids.html">Grids</a></li>
                    </ul>
                </li>
                <li>
                    <a href="fontawesome.html">
                        <i class="fa fa-bullhorn"></i>
                        <span>Font awesome </span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a class="active" href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Data Tables</span>
                    </a>
                    <ul class="sub">
                        <li><a class="active" href="basic_table.html">Basic Table</a></li>
                        <li><a href="responsive_table.html">Responsive Table</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Form Components</span>
                    </a>
                    <ul class="sub">
                        <li><a href="form_component.html">Form Elements</a></li>
                        <li><a href="form_validation.html">Form Validation</a></li>
                        <li><a href="dropzone.html">Dropzone</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-envelope"></i>
                        <span>Mail </span>
                    </a>
                    <ul class="sub">
                        <li><a href="mail.html">Inbox</a></li>
                        <li><a href="mail_compose.html">Compose Mail</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="sub">
                        <li><a href="chartjs.html">Chart js</a></li>
                        <li><a href="flot_chart.html">Flot Charts</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="sub">
                        <li><a href="google_map.html">Google Map</a></li>
                        <li><a href="vector_map.html">Vector Map</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-glass"></i>
                        <span>Extra</span>
                    </a>
                    <ul class="sub">
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="404.html">404 Error</a></li>
                        <li><a href="registration.html">Registration</a></li>
                    </ul>
                </li>
                <li>
                    <a href="login.html">
                        <i class="fa fa-user"></i>
                        <span>Login Page</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Listes De Commandes des Clients Abonné
    </div>
    <div class="col-sm-3" align= "left">
        <form method="Post"><table>
            <tr>
                <td colspan="4">Rechercher:</td>
                <td><input id="search" type="search" class="form-control input-sm" placeholder="rechercher..."></td>
            </tr>
        </table>
        </form>
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/function.js"></script>
    <div  id= "resultat">
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs sm md" data-title="DOB">ID_Commande</th>
            <th data-breakpoints="xs sm md" data-title="DOB">Adresse@mail</th>
            <th data-breakpoints="xs sm md" data-title="DOB">ID_Client</th>
            <th data-breakpoints="xs sm md" data-title="DOB">Date</th>
            <th data-breakpoints="xs sm md" data-title="DOB">Action</th>
            <th data-breakpoints="xs sm md" data-title="DOB">Totaux</th>
          </tr>
        </thead>

        <?php
        $id = $_GET['id']; 
        $products=$db->prepare("SELECT * FROM  liste_commandes join client on liste_commandes.id_Clt = client.id WHERE liste_commandes.id_Commande = '$id' ORDER BY liste_commandes.id_Commande DESC");
        $products->execute();?>
        <tbody>
        <?php while($result=$products->fetch()):?>
            <tr data-expanded="true">
                <td><?php echo $result['id_Commande'];?></td>
                <td><?php echo $result['mail'];?></td>
                <td><?php echo $result['id_Clt'];?></td>
                <td width="15%" ><?php echo $result['date'];?></td>
                <td width="10%">
                    <!--form action="print_pdf.php" method="Post">
                        <input type="hidden" name="id" value="<?php// echo $result['id_Commande']; ?>">
                        <input class="fa fa-times text-danger text" height="5%" width="8%" type="image" value = "submit" name="" src="images/d.png" />
                    </form>
                    <form>
                        <input type="image"  value="submit" name="" src="">Detail
                    </form-->
                    <a href="commande_pdf.php?id=<?php echo $result['id_Commande']; ?>">
                        <input class="fa fa-times text-danger text" height="10%" width="30%" type="image" value = "submit" name="" src="images/ddd.png" />
                    </a>
                    <a href="afficher_detail.php?id=<?php echo $result['id_Commande']; ?>">
                        <input class="fa fa-times text-danger text" height="10%" width="30%" type="image" value = "submit" name="detail" src="images/hhh.png" />
                    </a>
                </td>
                <td><?php echo $result['total'];?></td>
            </tr>
            <div>
              <table class="tabl" width="85%" height="100%" align="center" ui-jq="footable" ui-options='{
                "paging": {
                  "enabled": true
                },
                "filtering": {
                  "enabled": true
                },
                "sorting": {
                  "enabled": true
                }}'>
                <thead>
                  <tr>
                    <th data-breakpoints="xs">ID</th>
                    <th>Article</th>
                    <th data-breakpoints="xs">Prix Unitaire</th>
                    <th data-breakpoints="xs sm md" data-title="DOB">Quantite</th>
                    <th data-breakpoints="xs sm md" data-title="DOB">Total</th>
                    <th data-breakpoints="xs sm md" data-title="DOB">Supprimer</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                $id = $_GET['id'];
                $products=$db->prepare("SELECT produit.id, Commande.id,total, id_C, article,id_ligne, prixUnitaire, Commande.quantite as quanti FROM   Commande JOIN produit  ON produit.id = Commande.id WHERE Commande.id_C = '$id' order by Commande.id_ligne desc");
                $products->execute();
                $i=0;
                while($result=$products->fetch()):
                $i++;
                ?>
                
                  <tr data-expanded="true">
                    <td><?php echo $result['id'];?></td>
                    <td><img height = "200px" width= "100px" src=" images/<?php echo $result['id'];?>.jpg"><?php echo $result['article'];?></td>
                    <td><?php echo $result['prixUnitaire']; ?> DT</td>
                    <td>
                        <form method="POST">
                            <input type="hidden" id="<?php echo("id".$i) ?>" value="<?php echo $result['id_ligne']; ?>">
                            <input type="hidden" id="<?php echo ("prixUnitaire".$i) ?>" value="<?php echo $result['prixUnitaire']; ?>">
                            <input type="number" id="<?php echo ("quantite".$i) ?>" size = "3" min="0" max="<?php echo $result['quanti'];?>" value="<?php echo $result['quanti'];?>" onchange="modifier_Ajax(<?php echo $i ?>)">
                            <!--
                            <input class="fa fa-times text-danger text" type="image" value = "submit" name="" src="images/c.png" height = "35px" width= "20px" />-->
                        </form>
                    </td>
                    <script type="text/javascript" src="js/modifA_jax.js"></script>
                    <td><input class="notborder" size="5" type="text" id="total<?php echo $i ?>" name="total" value ="<?php echo $result['total'];?>"/> DT</td>
                    
                    <td>
                        <form action="SupprimerCommande.php" method="Post">
                            <input type="hidden" name="id" value="<?php echo $result['id_ligne']; ?>">
                            <input class="fa fa-times text-danger text" type="image" value = "submit" name="" src="images/close_1.png" />
                        </form>
                    </td>
                  </tr>
                </tbody>
                <?php endwhile?>
              </table>
            </div>
        <?php endwhile;?>
        </tbody>
      </table>
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
</body>
</html>
<?php 
}
else 
{
   echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('vous devez vous connecter');
        window.location.replace('login.php');
        </SCRIPT>"; 
}
 ?>