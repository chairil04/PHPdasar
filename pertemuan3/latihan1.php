<!DOCTYPE html>
<html>
<head>
	<title>latihan satu chai</title>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
	<?php 
		for($i = 1; $i < 4;$i++){
			echo "<tr>";
				for ($c = 1; $c < 6; $c++){
					echo "<td>$i,$c</td>";
				}
			echo "</tr>";
		}

	 ?>
</table>

</body>
</html>