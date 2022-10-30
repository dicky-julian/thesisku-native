<?php
	include "../class/config.php";
	include "../class/barang.php";
	include "../class/pengambilan.php";
	
	$BarangList = new barang();
	$BarangList->BarangList();
	$DaftarBarang = $BarangList->BarangList();
	
	$AmbilBarangList = new pengambilan();
	$AmbilBarangList->AmbilBarangList();
	$DaftarPengambilan = $AmbilBarangList->AmbilBarangList();

?>