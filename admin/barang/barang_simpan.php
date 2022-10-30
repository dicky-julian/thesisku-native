<?php

// memanggil koneksi database

include "../../class/config.php";
include "../../class/barang.php";

// mulai penyimpanan

	if (isset($_POST['simpan']));
	{
		$AddBarang = new barang();
		$AddBarang->setNama_Barang($_POST['nama_barang']);
		$AddBarang->setHarga_Barang($_POST['harga_barang']);
		$AddBarang->setBiaya_Penyimpanan($_POST['biaya_penyimpanan']);
		$AddBarang->setPeriode_Permintaan($_POST['periode_permintaan']);
		$AddBarang->setSatuan($_POST['satuan']);
		$AddBarang->setKonversi($_POST['konversi']);
		$AddBarang->AddBarang();
		
		header ("location:index.php");
	}
	

?>