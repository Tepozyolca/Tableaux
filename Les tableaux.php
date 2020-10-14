<html>
<body>
	<?php
	$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
       "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
       "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
    );
	
	//exercice 1
	
		$resultat = array_search('Validation', $a["19002"]) +1; //On cherche la première instance de 'Validation' avec la fonction 'array_search'.
	
	echo "La validation du groupe 19002 se passe à la semaine ".$resultat.".<br><br>";
	
	//exercice 2
	
		$result = array_reverse($a["19001"]); //On inverse le tableau pour pouvoir utiliser 'array_search' ,
											  //pour que la dernière instance de stage soit la première dans le tableau tampon.
											  
		$resultat = count($result) - array_search('Stage', $result) +1; //On récupère le nombre total de valeurs dans le tableau du groupe 19001,
																		//puis, vu que le résultat de la commande est basée sur le tableau mais inversé,
																		//on soustrait la valeur de la clé obtenu pour avoir la bonne valeur
	
	echo "La dernière occurrence de Stage pour le groupe 19001 est la semaine ".$resultat.".<br><br>";
	
	//exercice 3
	
		$abis = array_keys($a); //On extrait les clés du tableaux, celles-ci représentant les codes des groupes.
		var_dump($abis); //On affiche le tableau
		
	//exercice 4
	
	$abis = array_keys($a["19003"], "Stage"); //On crée un tableau alternatif, contenant uniquement les instances de stages.
	$resultat = count($abis); //On compte le nombre de valeur du tableau généré ci dessus.
	
	echo "Le stage du groupe 19003 dure ".$resultat." semaines.";
	?>
</body>
</html>