<?php
	include "../../class/config.php";
	include "../../class/pegawai.php";
	
	if(isset($_POST['update']));
	{	


		$PegawaiUpdate = new pegawai ();
		$PegawaiUpdate->setId_Pegawai($_POST['id_pegawai']);
		$PegawaiUpdate->setUsername($_POST['username']);
		$PegawaiUpdate->setPassword($_POST['password']);
		$PegawaiUpdate->setNama_Pegawai($_POST['nama_pegawai']);
		$PegawaiUpdate->setAlamat_Pegawai($_POST['alamat_pegawai']);
		$PegawaiUpdate->setHp_Pegawai($_POST['hp_pegawai']);
		$PegawaiUpdate->setId_Bagian($_POST['id_bagian']);
		
		$PegawaiUpdate->PegawaiUpdate();
						
		header ("location:index.php");
	}
	
?>