<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start(); ?>
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Typography :: w3layouts</title>
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
</aside><!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="typo-agile">
        <h2 class="w3ls_head">affiche du tracking</h2>
        
        
            <div class="grid_3 grid_5 w3l">
                <h3>statistique</h3>
                <div class="tab-content">
                    <div class="tab-pane active" id="domprogress">
                        <?php
                        require_once('modele/Produitaimer.php');
                     $pro=new Produit_aimer();
                     if(isset($_POST['id']))
                     {
                      $compteur=1;
                      $req=$pro->list_client($_POST['id']);
                      $nombre=0;
                      while($data=$req->fetch())
                    {
                        $nombre=$pro->compte_produit($data['client']);
                        if($compteur%6==1)
                        {
                        ?>
                        <div class="progress">    
                            <div class="progress-bar progress-bar-primary" style="width:<?php echo $nombre."%";?>"></div>
                        </div>
                        <p>le client <?php echo $data['client'];?> a aimé <code><?php echo $nombre;?></code>produit</p>
                        <?php
                        }
                        elseif($compteur%6==2)
                        {
                            ?>

                        <div class="progress"> 
                            <div class="progress-bar progress-bar-info" style="width:<?php echo $nombre."%";?>"></div>
                        </div>
                        <p>le client <?php echo $data['client'];?> a aimé <code><?php echo $nombre;?></code>produit</p>
                            
                         <?php
                        }
                        elseif ($compteur%6==3)
                        {
                            ?>
                          <div class="progress"> 
                            <div class="progress-bar progress-bar-success" style="width:<?php echo $nombre."%";?>"></div>
                        </div>
                        <p>le client <?php echo $data['client'];?> a aimé <code><?php echo $nombre;?></code>produit</p>
                        <?php  
                        }
                        elseif($compteur%6==4)
                        {
                            ?>
                            <div class="progress"> 
                            <div class="progress-bar progress-bar-warning" style="width:<?php echo $nombre."%";?>"></div>
                        </div>
                        <p>le client <?php echo $data['client'];?> a aimé <code><?php echo $nombre;?></code>produit</p> 
                            <?php
                        }
                        elseif ($compteur%6==5) 
                        {
                            ?>
                            <div class="progress"> 
                            <div class="progress-bar progress-bar-danger" style="width:<?php echo $nombre."%";?>"></div>
                        </div>
                        <p>le client <?php echo $data['client'];?> a aimé <code><?php echo $nombre;?></code>produit</p>
                        <?php
                        }
                        elseif ($compteur==0) 
                        {
                          ?>
                             <div class="progress-bar progress-bar-inverse" style="width:<?php echo $nombre."%";?>"></div>
                        </div>
                        <p>le client <?php echo $data['client'];?> a aimé <code><?php echo $nombre;?></code>produit</p>
                          <?php
                            
                        }
                        $compteur++;
                }
            }
                ?>
            
                    
                    </div>
                </div>
        
            
            <div class="grid_3 grid_5 wthree">
                <table>
                    <tr>
                        <td>
                                <h5>clients</h5>
                        </td>
                        <td style="visibility: hidden;">jhjkhkghgkjghkhjkffdfdfdfdfdfdfd</td>
                        <td>
                           <h5>produits aimés</h5> 
                        </td>
                    </tr>
                </table>
            
                
                <div class="col-md-6 w3-agileits">
                    <div class="list-group list-group-alternate"> 
                 <?php         
                   require_once('modele/Produitaimer.php');
                     $pro=new Produit_aimer();
                     if(isset($_POST['id']))
                     {
                      $compteur=1;
                      $req=$pro->list_client($_POST['id']);
                      $nombre=0;
                      while($data=$req->fetch())
                        {
                           $nombre=$pro->compte_produit($data['client']);
                            if($compteur%6==1)
                            {
                               ?>
                               <a href="gallery.php?client=<?=$data['client']?>" class="list-group-item"><span class="badge"><?php echo $nombre ;?></span> <i class="ti ti-email"></i><?php echo $data['client']?></a> 
                               <?php 
                            }
                            elseif($compteur%6==2)
                            {
                                ?>
                                <a href="gallery.php?client=<?=$data['client']?>" class="list-group-item"><span class="badge badge-primary"><?php echo $nombre ;?></span> <i class="ti ti-eye"></i> <?php echo $data['client']?></a> 
                                <?php
                            }
                            elseif ($compteur%6==3) 
                            {
                                ?>
                               <a href="gallery.php?client=<?=$data['client']?>" class="list-group-item"><span class="badge"><?php echo $nombre ;?></span> <i class="ti ti-headphone-alt"></i> <?php echo $data['client']?> </a>
                               <?php
                            }
                            elseif ($compteur%6==4) 
                            {
                                ?> 
                                 <a href="gallery.php?client=<?=$data['client']?>" class="list-group-item"><span class="badge"><?php echo $nombre ;?></span> <i class="ti ti-comments"></i> <?php echo $data['client']?> </a> 

                              <?php  
                            }
                            elseif ($compteur%6==5) 
                            {
                                ?>
                               <a href="gallery.php?client=<?=$data['client']?>" class="list-group-item"><span class="badge badge-warning"><?php echo $nombre ;?></span> <i class="ti ti-bookmark"></i> <?php echo $data['client']?> </a> 
                              <?php 
                            }
                            elseif ($compteur%6==0)
                             {
                               ?>
                               <a href="gallery.php?client=<?=$data['client']?>" class="list-group-item"><span class="badge badge-danger"><?php echo $nombre ;?></span> <i class="ti ti-bell"></i><?php echo $data['client']?></a> 
                               <?php
                            }
                          $compteur++;
                        }

                     }
                    
                  ?>
                  <a                                                
                    </div>
                </div>
                <
               <div class="clearfix"> </div>
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
