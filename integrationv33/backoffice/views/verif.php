<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
include_once '../core/confige.php';


$secret = "35onoi2=-7#%g03kl";

if(isset($_POST['mailpass']))
{

  if(md5($_POST['mail'].$secret)==$_POST['hash'])
  {
  	$config=config::getConnexion();
      $sql =$config->prepare("UPDATE admin set active=? where id =?");

  $sql->bindParam(1,$active);
  $sql->bindParam(2,$_POST['id']);
$active=1;
  $sql->execute();
  	echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('votre compte a ete verifier merci ');
        window.location.replace('../views/login.php');
        </SCRIPT>";
  }
}
?>
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Login :: w3layouts</title>
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
<div class="log-w3">
<div class="w3layouts-main">
	<h2> valider la verification mail</h2>
		<form action="verif.php" method="POST">
			    <input type="text" name="mail" hidden="" value="<?php echo $_GET["email"]; ?>"> 
			    <input type="text" name="hash" hidden="" value="<?php echo $_GET["hash"]; ?>">
          <input type="text" name="id" hidden="" value="<?php echo $_GET["id"]; ?>">
				<div class="clearfix"></div>
				<input type="submit" value="valider" name="mailpass">
		</form>
</div>
</div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
