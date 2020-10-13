<html>
<body>
	<?php
	$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
       "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
       "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
    );
	
	//exercice 1
	
	foreach($a["19002"] as $result => $resultat)
	{
		$resultat = array_search('Validation', $a["19002"]) +1;
	}
	
	echo "La validation du groupe 19002 se passe à la semaine ".$resultat.".<br><br>";
	
	//exercice 2
	
	foreach($a["19001"] as $result => $resultat)
	{
		$result = array_reverse($a["19001"]);
		$resultat = count($result) - array_search('Stage', $result) +1;
	}
	
	echo "La dernière occurrence de Stage pour le groupe 19001 est la semaine ".$resultat.".<br><br>";
	
	//exercice 3
	
		$abis = array_keys($a);
		var_dump($abis);
		
	//exercice 4
	
	$abis = array_keys($a["19003"], "Stage");
	$resultat = count($abis);
	
	echo "Le stage du groupe 19003 dure ".$resultat." semaines.";
	?>
</body>
</html>