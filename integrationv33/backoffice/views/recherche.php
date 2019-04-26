<!DOCTYPE html>
<head>
<title>Statistique Des Categories</title>
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
<?php  include("includes/left-menu.php");?>
<!--sidebar end-->
<!--main content start-->
<form>
<div  >


 <meta charset="UTF-8">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<meta content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" name="viewport">
		<title>OPEN WEB SCRIPTS</title>
	
	
	<style type="text/css">
	.hide{
		display:none;
		}

	</style>
	
		<!-- On inclu JQuery -->
		<script src="jquery.min.js"></script>
	</head>
	<body>

		<!-- Le champ de recherche -->	
		<!-- L'attribut id est important. C'est lui qui sera...->	
		<!-- ...utiliser par JQuery  pour recupérer la valeur du champ --->	
		<center style="margin-top:40px;">
			<input style="padding:10px;min-width:350px;" id="champ_recherche" placeholder="Rechercher un produit" name="champ_recherche" type="text">
		
		
		<!--Loader pour montrer que la recherche est en cours -->	
		<center class="hide" id="loader_1" style="z-index:1000;margin-top:5px;margin-bottom:5px;"><img style="width:120px;"src="balls.gif" title=""></center>
		
		
		<br /><br />
		
		<!-- Cette div recueillera les résultats de la recherche -->	
		<div id="resultat_recherche"> </div>

		</center>
		
		
		
		
	
<script>
// Fonction obligatoire permettant de de gérer les requètes Ajax, 
// Ne pas la supprimer									
function getXMLHttpRequest(){
	var xhr = null;
	
	if (window.XMLHttpRequest || window.ActiveXObject) {
		if (window.ActiveXObject) {
			try {
				xhr = new ActiveXObject("Msxml2.XMLHTTP");
			} catch(e) {
				xhr = new ActiveXObject("Microsoft.XMLHTTP");
			}
		} else {
			xhr = new XMLHttpRequest(); 
		}
	} else {
		alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
		return null;
	}
	
	return xhr;
}


// Si la page a finie de charger
$(document).ready(function(){
		
 // A chaque fois que l'tulisateur appuie sur une touche dans la barre de recherche
    $("#champ_recherche").keyup(function(){ 
		
		 // On recupère la valeur qu'il a saisi et si le champ n'est pas vide...
		if($("#champ_recherche").val() != ''){
		
			// On affiche le loader pour lui montrer que la recherche est en cours...
			$("#loader_1").removeClass("hide");
		
		// Valeur du champ dans une variable
		 var keywords = $("#champ_recherche").val();
		 
		// Instanciation de l'objet script, la fonction ci-dessus
		var xhr = getXMLHttpRequest();

		
		  // A la réception du résultat des requètes SLQ
			xhr.onreadystatechange = function(){
			if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)){
								
				// On masque le loader puisque la recherche est terminée
				$("#loader_1").addClass("hide");
			
				// On affiche les résultats dans la div de sortie qui a pour id : resultat_recherche (Voir le html)
				document.getElementById("resultat_recherche").innerHTML = xhr.responseText;
				
				
			}
			};
			
			// On appelle la page php loadRecherche.php en POST
			xhr.open("POST", "loadRecherche.php", true);
			xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			
			// On donne le mot ou la lettre tapez par l'utilisateur à la page loadRecherche.php
			xhr.send("keywords="+keywords);

			
		}else{
			// Sinon on ne fait rien puisque la valeur du champ est vide.
		
		}
	
	});
	



});

</script>	
<?php

header("Content-Type: text/html; charset=iso-8859-1");

/// www.openws.xyz
/// par JoCh Soro
/// lisez attentivement les commentaires pour comprendre le script 

	//Confugration de la base de donnees
	// $db = new mysqli('HOST', 'NOM' ,' MOT DE PASSE', 'NOM BASE DE DONNE');	
   $db = new mysqli('localhost', 'root' ,'', 'web');
	
	if(!$db) {
	//au cas ou il y a echec de connexion
		echo 'echec de connexion.';
	} else {
	//au cas il y a reussite de connexion  on envoi la requete " querystring"
		if(isset($_POST['keywords'])){
			$queryString = $db->real_escape_string($_POST['keywords']);
			
		// si on realise que la requette n'est pas vide (>0)
			if(strlen($queryString) >0){
				
		//on selection nom de la base de donnees
		//puis on force la base donnees à verifier dans la colonne nom une lettre correspondant a celle saisi dans la barre de recherche
		// On sélectionne les 16 premières villes
				$requette_Base_Donne = $db->query("SELECT * FROM produit WHERE nom LIKE '$queryString%'  ORDER BY id LIMIT 16");
				
				
			//si on obtient la reponse de la base de donnees donc on peut faire sortir nos elements
				if($requette_Base_Donne){
					
					
			/// notre variable qui va contenir le resultat de la recherche
			$user_info= '';
			
			
			// On ajoute nos bloks html et le debut du tableau
			$user_info .= '		<table class="table" title="A table within a card">
												<thead>
													<tr>
														<th>nom</th>
														<th>prix</th>
														<th>description</th>
													</tr>
												</thead>
												<tbody>';
			
			// Pour chaque ville trouvé, faire...
			while(($result = $requette_Base_Donne->fetch_object())){	

			// Si le résultat n'est pas vide ; c-à_d si une ville correspondant à la saisie a été trouvée
				if($result->id != ''){
					// On ajoute les données pour la ville 
					$user_info .= '<tr>
										<th>'.$result->nom.'</th>
										<th>'.$result->prix.'</th>
										<th>'.$result->description.'</th>
								  </tr>';
							
					} else{ // Sinon aucune ville ne correspondant à la saisie
						
						// Vous pouvez ajouter un message pour informer l'utilisateur qu'aucune correspondance n'a été trouvée
						$user_info .= '';
					}

		 	}
			
			// On ajoute le reste du tableau et on ferme nos div
				$user_info .= '	</tbody>
										</table>';	
						
		
		
		// On affiche le résultat de la recherche
		echo $user_info;		
	
			
			
				} else {
					echo 'OUPS! Désolé! Un probleme est survenu:';
				}
			} else {
				// Ne fait rien
			}
		} else {
			echo 'ACCES DIRECT INTERDIT !';
		}
	}

?>
</div>
</form>
	


 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			</div>
		  </div>
		  
  <!-- / footer -->
</section>

<!--main content end-->
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

?>