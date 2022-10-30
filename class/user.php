<?php
	class user
	{
		private $username;
		private $password;

		function setUsername($username)
		{
			$this->username = $username;
		}
		
		function setPassword($password)
		{
			$this->password = $password;
		}

		function Authentication()
		{
			global $connection;
			$sql = mysqli_query($connection, "SELECT * FROM pegawai where username='$this->username' and password='$this->password'");

			if(mysqli_num_rows($sql) > 0){
				while ($row = mysqli_fetch_array ($sql))
				{
					$data [] = $row;
				}
				
				return $data;
			}
		}

		public static function cekLogin()
		{
			$logged_in = false;
			//jika session username belum dibuat, atau session username kosong
			if (!isset($_SESSION) || empty($_SESSION)) {	
				//redirect ke halaman login
				header("Location:../index.php");
			} else {
				$logged_in = true;
			}
		}
	}
?>