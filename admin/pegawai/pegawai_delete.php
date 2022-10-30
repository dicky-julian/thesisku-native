<?php
	include "../../class/config.php";
	include "../../class/pegawai.php";
	
	if (isset($_GET['id']));
	{
		$PegawaiDelete = new pegawai();
		$PegawaiDelete->PegawaiDelete($_GET['id']);
		
		header ("location:index.php");
	}
?>