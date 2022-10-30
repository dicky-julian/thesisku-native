<?php
	include "../../class/config.php";
	include "../../class/barang.php";
	
	if (isset($_GET['id']));
	{
		$BarangDelete = new barang();
		$BarangDelete->BarangDelete($_GET['id']);
		
		header ("location:index.php");
	}
?>