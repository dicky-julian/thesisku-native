<?php
	session_start();

	include "class/config.php";
	include "class/user.php";

	$u = new user();
	$u->setUsername (trim(strip_tags($_POST["username"])));
	$u->setPassword (trim(strip_tags($_POST["password"])));	
	$data = $u->Authentication();
	
	if(!empty($data)){
		foreach ($data as $key => $value) {

			echo "starting";

			// SESSION_START() NYA SILAHKAN DI INCLUDE KE SEMUA PAGE PAK, BIAR SESSION USER LOGINNYA KEBACA.
			$_SESSION["statuslogin"]= true;
			//$_SESSION['level'] = $value['id_level'];
			$_SESSION['bagian'] = $value['id_bagian'];
			$_SESSION['nama'] = $value['nama_pegawai'];

			if ($value['id_bagian'] == '1') // SILAHKAN MENYESUAIKAN PAK
			{
				// redirect berdasarkan level user
				header("location:admin/index.php");
			}
			elseif($value['id_bagian'] == '8')
			{
				// redirect berdasarkan level user
				header ("location:manager/index.php");
			}
			elseif($value['id_bagian'] == '9')
			{
				 //redirect berdasarkan level user
				header ("location:gudang/index.php");
			}
			elseif($value['id_bagian'] == '11')
			{
				// redirect berdasarkan level user
				header ("location:produksi/index.php");
			}
			elseif($value['id_bagian'] == '10')
			{
				// redirect berdasarkan level user
				header ("location:tukang_pesan/index.php");
			}
		/*	elseif($value['id_level'] == '6')
			{
				// redirect berdasarkan level user
				header ("location:kepalabagian/index.php");
			} */
			else
			{
				 unset($_SESSION["statuslogin"]);
				$sError="Invalid Username and/or Password";
				//header("Location: index.php?sError=".urlencode($sError));
			}
		}
	}
	else
	{
		$sError="Invalid Username and/or Password";
		header("Location: index2.php?sError=".urlencode($sError));
	}
	
?>