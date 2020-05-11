<?php 
	//menampilkan dua hari setelahnya
	echo date("l", time()+172800);

	//alternatif 1
	echo date("l", time()+60*60*24*2);

	//alternatif 2
	echo date("d M Y", time()+60*60*24*2);

	//cek hari lahir dengan mktime
	//parameter ada 6, (jam,menit,detik,bulan,tanggal,tahun)
	echo date("l", mktime(0,0,0,4,10,1998));

	//strtotime
	echo strtotime("10 apr  1998");
 ?>