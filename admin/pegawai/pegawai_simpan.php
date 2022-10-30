<?php

// memanggil koneksi database

include "../../class/config.php";
include "../../class/pegawai.php";

// mulai penyimpanan

	if (isset($_POST['simpan']));
	{
		
		$AddPegawai = new pegawai ();
		$AddPegawai->setUsername($_POST['username']);
		$AddPegawai->setPassword($_POST['password']);
		$AddPegawai->setNama_Pegawai($_POST['nama_pegawai']);
		$AddPegawai->setAlamat_Pegawai($_POST['alamat_pegawai']);
		$AddPegawai->setHp_Pegawai($_POST['hp_pegawai']);
		$AddPegawai->setId_Bagian($_POST['id_bagian']);
				
		$AddPegawai->AddPegawai();
		
		header ("location:index.php");
	}
	

?>