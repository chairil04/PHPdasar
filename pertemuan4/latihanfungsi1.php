<?php 
	//memberikan parameter default kepada $waktu dan $nama
	function salam($waktu= "pagi", $nama="admin"){
		return "selamat $waktu, $nama!";
	};
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan fungsi</title>
 </head>
 <body>
 	<h1><?= salam() ?></h1>
 </body>
 </html>