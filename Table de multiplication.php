<html>
<body>
	<?php 
		echo '<table>'; //On crée le tableau en html.
	
		for ($varx = -1; $varx < 13; $varx++) //On initialise les lignes.
											  //En outre, on commence à -1 pour pouvoir ajuster les valeurs de base des produits.
		{
			echo '<tr>'; //Pour laisser le coin en haut, à gauche, vide.
			for ($vary = -1; $vary < 13; $vary++) //On initialise les colonnes.
			{
				echo '<td>';
				if ($varx == -1) //Première ligne.
				{
					if ($vary == -1) 
						echo null;
					else
						echo $vary;
				}
				else
				{	
					if ($varx != -1 && $vary == -1) //Première colonne.
						echo $varx;
					else
						echo $varx*$vary;
				echo '</td>';
				}
			}
			$vary=0; //On réinitialise y pour pouvoir afficher la valeur des produits de la ligne suivante.
			echo '</tr>';
		}	
	
		echo '</tr></table>';
	?> 
</body>
</html>
