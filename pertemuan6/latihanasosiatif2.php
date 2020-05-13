<?php 
	$mahasiswa = [
		["nama" => "chairil","nim" => "0110217054","jurusan" => "teknik infromatika","panggilan"=>"imin","gambar"=>"iril.jpg"],
		["nama" => "sahlan","nim" => "0110217054","jurusan" => "teknik infromatika","panggilan"=>"imen","gambar"=>"sahlan.jpg"],
		["nama" => "chai","nim" => "0110217054","jurusan" => "teknik infromatika","panggilan"=>"amin","gambar"=>"chai.jpg"],
];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>daftar mahasiswa</title>
 </head>
 <body>
 <h1>daftar mahasiswa</h1>

 <?php foreach ($mahasiswa as $mhs): ?>
 	<ul>
 		<li>
 			<img src="img/<?php echo $mhs["gambar"]; ?>">
 		</li>
 		<li>Nama : <?php echo $mhs["nama"]; ?></li>
 		<li>Nama : <?php echo $mhs["nim"]; ?></li>
 		<li>Nama : <?php echo $mhs["jurusan"]; ?></li>
 		<li>Nama : <?php echo $mhs["panggilan"]; ?></li>
 	</ul>
 <?php endforeach; ?>
 </body>
 </html>