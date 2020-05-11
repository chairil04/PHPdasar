<!DOCTYPE html>
<html>
<head>
	<title>alternatif latihan 1 memisahkan php dan html</title>
	<style>
		.warna-baris{
			background-color: silver;
		}
		.warna-kolom{
			background-color: blue;
		}
	</style>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
	<?php for($i=1; $i < 6; $i++) : ?>
		<?php if($i % 2 == 1): ?>
			<tr class="warna-baris">
		<?php else : ?>
			<tr>;
		<?php endif; ?>
			<?php for($c=1 ; $c < 6; $c++) : ?>
				<?php if ($c % 2 == 0):?>
				<td class="warna-kolom"><?= "$i, $c" ?></td>
				<?php else : ?>
				<td><?= "$i,$c" ?></td>
				<?php endif; ?>	
			<?php endfor; ?>
		</tr>
	<?php endfor; ?>
</table>

</body>
</html>