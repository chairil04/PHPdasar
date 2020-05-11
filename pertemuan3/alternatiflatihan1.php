<!DOCTYPE html>
<html>
<head>
	<title>alternatif latihan 1 memisahkan php dan html</title>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
	<?php for($i=1; $i < 4; $i++) : ?>
		<tr>
			<?php for($c=1 ; $c < 6; $c++) : ?>
				<td><?= "$i, $c" ?></td>
			<?php endfor; ?>
		</tr>
	<?php endfor; ?>
</table>

</body>
</html>