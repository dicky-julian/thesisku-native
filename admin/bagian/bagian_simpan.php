<?php

// memanggil koneksi database

include "../../class/config.php";
include "../../class/bagian.php";

// mulai penyimpanan

	if (isset($_POST['simpan']));
	{	
		$AddBagian = new bagian ();
		$AddBagian->setNama_Bagian($_POST["nama_bagian"]);
		$AddBagian->AddBagian();
		
		header ("location:index.php");
	}
	

?>