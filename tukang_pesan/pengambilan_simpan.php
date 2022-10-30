<?php
	include "../class/config.php";
	include "../class/pengambilan.php";
	
	if (isset ($_POST['simpan']));
		{
			
			$AddAmbilBarang = new pengambilan();
			$AddAmbilBarang->setNama_Pengambil($_POST['nama_pengambil']);
			$AddAmbilBarang->setId_Barang($_POST['id_barang']);
			$AddAmbilBarang->setjumlah_pengambilan($_POST['jumlah_pengambilan']);
			
			$AddAmbilBarang->AddAmbil_Barang();
			
			header ("location:pengambilan.php");
		}
	

?>