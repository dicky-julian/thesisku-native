<?php
include "../class/config.php";
include "../class/pemesanan.php";

	if (isset($_POST['simpan']));
		{
			
			$PesananTambah = new pemesanan();
			$PesananTambah->setNama_Pemesan($_POST['nama_pemesan']);
			$PesananTambah->setId_Barang($_POST['id_barang']);
			$PesananTambah->setJumlah_Pesanan($_POST['jumlah_pesanan']);
			$PesananTambah->setLead_Time($_POST['lead_time']);
			$PesananTambah->PesananTambah();
			
			header ("location:pesanan.php");
			
		}
?>

