<?php 
	$mahasiswa = ["chairil",0110217054,"teknik informatik","chairilhs10"];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>daftar mahasiswa</title>
 </head>
 <body>
 
<h1>daftar mahasiswa</h1>
<ul>
	<?php foreach ($mahasiswa as $mhs) :?>
		<li><?php echo $mhs; ?></li>
	<?php endforeach; ?>
</ul>

 </body>
 </html>