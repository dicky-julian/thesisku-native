<?php
	include "../../class/config.php";
	include "../../class/barang.php";
	
	if(isset($_POST['update']));
	{	
	
		$BarangUpdate = new barang();
		$BarangUpdate->setId_Barang($_POST['id_barang']);
		$BarangUpdate->setNama_Barang($_POST['nama_barang']);
		$BarangUpdate->setHarga_Barang($_POST['harga_barang']);
		$BarangUpdate->setBiaya_penyimpanan($_POST['biaya_penyimpanan']);
		$BarangUpdate->setPeriode_permintaan($_POST['periode_permintaan']);
		$BarangUpdate->setSatuan($_POST['satuan']);
		$BarangUpdate->setKonversi($_POST['konversi']);
		
		$BarangUpdate->BarangUpdate();
		
		header ("location:index.php");
	}
	
?>