<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start(); ?>
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Form_component :: w3layouts</title>
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
    <div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Préparation des soldes
                    </header>
                    <div class="panel-body">
                        <div class="position-center ">
                            <div class="text-center">
                                <a href="#myModal" data-toggle="modal" class="btn btn-success">
                                    choisir article
                                </a>
                                <a href="#myModal-1" data-toggle="modal" class="btn btn-warning">
                                     Date de solde
                                </a>
                                <a href="#myModal-2" data-toggle="modal" class="btn btn-danger">
                                    pourcentage de solde
                                </a>
                            </div>

                            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button" >×</button>
                                        <h4 class="modal-title">Choix article</h4>
                                    </div>
                                    <div class="modal-body">

                                        <form role="form" action="controlleur/indexproduit.php?action=wait&amp;id=0"  method="POST">
                                        <div class="form-group">
                               
                                    <select class="form-control input-lg m-bot15" name="nom_produit">
                                  <?php
                                   require_once('modele/Produit.php');

                                    $p=new Produit();
                                    $req=$p->postproduit();   
                                   while($donnees=$req->fetch())
                                    {
                                    ?>
                                     <option><?php echo $donnees['nom'];?></option>
                                     <?php                                    
                                     }
                                     ?>     
                                    </select>
                                            </div>
        
                                            <div class="form-group">
                                                <label for="exampleInputFile">choisir fichier</label>
                                                <input type="file" id="exampleInputFile3">
                                                <p class="help-block">choisir fichier.</p>
                                            </div>
                                            <button type="submit" class="btn btn-default">valider</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-1" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                        <h4 class="modal-title">date solde</h4>
                                    </div>
                                    <div class="modal-body">

                                        <form method="post" action="controlleur\indexproduit.php?action=ok&amp;id=0" class="form-horizontal" role="form" onsubmit="return control_date()">
                                            <div class="form-group"  >
                                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">date de debut</label>
                                                <div class="col-lg-10">
                                                    <input type="date" class="form-control" id="date_de_debut" name="date_de_debut" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label" >date de fin</label>
                                                <div class="col-lg-10">
                                                    <input type="date" class="form-control" id="date_de_fin" name="date_de_fin">
                                                </div>
                                            </div>
                                            <div class="form-group" id="divcontrol">
                                            </div>
                                          
                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button type="submit" class="btn btn-default" onclick="control_date()">ok</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-2" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                        <h4 class="modal-title">Pourcentage de solde</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="controlleur/indexproduit.php?action=valider&amp;id=0" class="form-inline" role="form" onsubmit="return control()">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">pourcentage</label>
                                                <input type="number" class="form-control sm-input" id="pourcentage" name="pourcentage">
                                            </div>
                                            

                                            <button type="submit" class="btn btn-default" onclick="control()">valider</button>
                                            <div class="form-group" id="divcontrolpourcentage">
                                                
                                            </div>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="row">
        <div class="col-lg-12">
        <section class="panel" >
            <header class="panel-heading">
                Modier une solde 
            </header>
            <div class="panel-body" >
                <form method='POST' action='controlleur/indexproduit.php?action=modifier&amp;id=0'  class="form-horizontal bucket-form" >

                <?php
                  require_once('modele/Produitpromo.php');
                  if(!isset($_GET['val']))
                  {
                    ?>
                     <div class="form-group">
                        <label class="col-sm-3 control-label">ID du solde</label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" name="nv_id" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nouvelle date de debut</label>
                        <div class="col-sm-6">
                            <input type="date" class="form-control" name="nv_dd">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nouvelle date de fin</label>
                        <div class="col-sm-6">
                            <input type="date" class="form-control round-input" name="nv_df">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">pourcentage</label>
                        <div class="col-sm-6">
                            <input class="form-control" id="focusedInput" type="number" name="nv_p" value="">
                        </div>
                    </div>
                    <?php
                    
                    }
                    else
                    {
                        $pro=new Produitpromo();
                        try
                        {
                            $req=$pro->rechercher_promotion($_GET['val']);
                            if($req==false)
                            {
                                throw new Exception("Error Processing Request", 1);
                                
                            }
                        }
                        catch(Exception $e) 
                        { // S'il y a eu une erreur, alors...
                         echo 'Erreur : ' . $e->getMessage();
                        }
                        
                        while($donnee=$req->fetch())
                        {
                            ?>
                           <div class="form-group">
                        <label class="col-sm-3 control-label">ID du solde</label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" name="nv_id" value=<?php echo $donnee['id'] ?>>
                        </div>
                    </div>
                    <div class="form-group" >
                        <label class="col-sm-3 control-label">Nouvelle date de debut</label>
                        <div class="col-sm-6">
                            <input type="date" class="form-control" name="nv_dd" value=<?php echo $donnee['date_debut_promo']?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nouvelle date de fin</label>
                        <div class="col-sm-6">
                            <input type="date" class="form-control round-input" name="nv_df" value=<?php echo $donnee['date_fin_promo']?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">pourcentage</label>
                        <div class="col-sm-6">
                            <input class="form-control" id="focusedInput" type="number" name="nv_p"value=<?php echo $donnee['pourcentage']?>>
                        </div>
                    </div> 
                    <?php
                        }
                    }
                  ?>
                  
                 <button type="submit" class="btn btn-success" id="modifier">Modifier</button>
                </form>
            </div>
        </section>
        <section class="panel" >
            <header class="panel-heading">
                Surprimer une solde 
            </header>
            <div class="panel-body">
                <form method="post"  action="controlleur/indexproduit.php?action=supprimer&amp;id=0" class="form-horizontal bucket-form" >
                    <div class="form-group">
                        <label class="col-sm-3 control-label">ID du solde</label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" name="sup_id">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning">supprimer</button>
                </form>
            </div>
        </section>
        </div>
        </div>


        <!-- page end-->
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
<script type="text/javascript">
    function control()
    {
        if(!document.getElementById('date_de_debut').value=='' && !document.getElementById('date_de_fin').value=='')
        {
        var sdate1 = document.getElementById('date_de_debut').value
var date1 = new Date();
date1.setFullYear(sdate1.substr(6,4));
date1.setMonth(sdate1.substr(3,2));
date1.setDate(sdate1.substr(0,2));

var d1=date1.getTime()
 
var sdate2 = document.getElementById('date_de_fin').value
var date2 = new Date();
date2.setFullYear(sdate2.substr(6,4));
date2.setMonth(sdate2.substr(3,2));
date2.setDate(sdate2.substr(0,2));
var d2=date2.getTime()

    if(d2<d1)
    {
        var modification=document.getElementById('divcontrol').innerHTML='date de fin inferieur a date de debut';
    modification='</br>'+modification
    return false;
    }

    return true; 
    }
  else if(document.getElementById('pourcentage').value<=0)
  {
    var modification=document.getElementById('divcontrolpourcentage').innerHTML=' pourcentage négative ou null';
    modification='</br>'+modification
    return false;
  }
  

}

function control_date()
    {
     if(document.getElementById('date_de_debut').value==''   || document.getElementById('date_de_fin').value=='')
  {
    alert('les champs des dates sont vide');
    return false;
  }  
    }
</script>
</body>
</html>
