<html>
<body>
	<?php 
		echo '<table>';
	
		for ($varx = -1; $varx < 13; $varx++) 
		{
			echo '<tr>';
			for ($vary = -1; $vary < 13; $vary++) 
			{
				echo '<td>';
				if ($varx == -1)
				{
					if ($vary == -1)
						echo null;
					else
						echo $vary;
				}
				else
				{	
					if ($varx != -1 && $vary == -1)
						echo $varx;
					else
						echo $varx*$vary;
				echo '</td>';
				}
			}
			$vary=0;
			echo '</tr>';
		}	
	
		echo '</tr></table>';
	?> 
</body>
</html>
