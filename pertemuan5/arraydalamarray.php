<?php 
	$mahasiswa = [["chairil",0110217054,"teknik informatik","chairilhs10"],["hilman",0110217054,"teknik informatik","chairilhs10"],["syah",0110217054,"teknik informatik","chairilhs10"],["icha",0110217054,"teknik informatik","chairilhs10"]
];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>daftar mahasiswa</title>
 </head>
 <body>
 
<h1>daftar mahasiswa</h1>
	<?php foreach ($mahasiswa as $mhs) :?>
	<ul>
	<li>Nama : <?= $mhs[0]; ?></li>
	<li>Nim : <?= $mhs[1]; ?></li>
	<li>prodi : <?= $mhs[2]; ?></li>
	<li>email : <?= $mhs[3]; ?></li>
	</ul>
	<?php endforeach; ?>
 </body>
 </html>