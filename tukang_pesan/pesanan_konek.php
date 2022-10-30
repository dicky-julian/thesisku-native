<?php


// memanggil koneksi database

include "../class/config.php";
include "../class/pemesanan.php";
include "../class/barang.php";
//include "../class/pegawai.php";

	
	$PesananList = new pemesanan ();
	$PesananList->PesananList();
	$DaftarPesanan = $PesananList->PesananList();
		
	$BarangList = new barang();
	$BarangList->BarangList();
	$DaftarBarang = $BarangList->BarangList();
	
?>