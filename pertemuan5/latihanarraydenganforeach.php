<?php 
	$angka=[1,2,4,3,5,6];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan 2 menampilkan array</title>
 	<style>
 		.kotak{
 			width: 50px;
 			height: 50px;
 			background-color: yellow;
 			text-align: center;
 			line-height: 50px;
 			margin: 3px;
 			float: left;
 		
 		}
 		.clear {clear: both;}
 	</style>
 </head>
 <body>
 	<?php foreach($angka as $number ) { ?>
 			<div class="kotak"><?php echo $number; ?></div>
 	<?php } ?>

 	<div class="clear"></div>

 	<?php foreach ($angka as $number) : ?>
 		<div class="kotak"><?php echo $number; ?></div>
 	<?php endforeach; ?>
 </body>
 </html>
