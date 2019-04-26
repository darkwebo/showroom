
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











			
			
			