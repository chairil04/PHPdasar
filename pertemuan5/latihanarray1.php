<?php 
	//membuat array cara lama
$hari = array("senin","selasa","rabu");

	//cara baru 
$bulan = ["januari","februari"];

	//tipe data nya boleh beda
$arr1 =[123,"sabtu",false];

//menampilkan array
//dapat gunatan var_dump atau print_r

var_dump($hari);
echo "<br>";
print_r($bulan);
//atau
echo "<br>";
echo $arr1[1]; 

	//menambahkan nilai pada array
$hari[]= "kamis";
echo "<br>";
var_dump($hari); 
	
 ?>