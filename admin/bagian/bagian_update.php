<?php
	include "../../class/config.php";
	include "../../class/bagian.php";
	
	if(isset($_POST['update']));
	{	
	
		$BagianUpdate = new bagian();
		$BagianUpdate->setId_Bagian($_POST['id_bagian']);
		$BagianUpdate->setNama_Bagian($_POST['nama_bagian']);
		
		$BagianUpdate->BagianUpdate();
		
		header ("location:index.php");
	}
	
?>