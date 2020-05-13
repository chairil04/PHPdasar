<?php 
	
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>array asosiatif</title>
 	<style>
 		.bulat{
 			width: 30px;
 			height: 30px;
 			background-color: yellow;
 			text-align: center;
 			line-height: 30px;
 			margin: 3px;
 			float: left;
 			transition: 1s;
 		}
 		.bulat:hover{
 			transform: rotate(360deg);
 			border-radius: 50%;
 		}
 		.clear{
 			clear: both;
 		}

 	</style>
 </head>
 <body>

<?php $angka = [
	[1,4,3],
	[3,5,6],
	[8,7,0]
]; ?>

	<?php foreach ($angka as $number) :?>
 		<?php foreach ($number as $satuan) :?> 	
		 	<div class="bulat"><?php echo $satuan; ?></div>
		 <?php endforeach; ?>
		<div class="clear"></div>
 	<?php endforeach; ?>
 
 </body>
 </html>