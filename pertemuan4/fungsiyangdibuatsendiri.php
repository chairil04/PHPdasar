<?php 
	function salam($waktu, $nama){
		return "selamat $waktu, $nama!";
	};
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan fungsi</title>
 </head>
 <body>
 	<h1><?= salam("pagi","chairil") ?></h1>
 </body>
 </html>