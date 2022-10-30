<?php
	class bagian
	{
		private $id_bagian;
		private $nama_bagian;
		
		function setId_Bagian ($id_bagian)
		{
			$this->id_bagian = $id_bagian;
		}

		function setNama_Bagian ($nama_bagian)
		{
			$this->nama_bagian = $nama_bagian;
		}

		function getId_Bagian ()
		{
			return $id_bagian;
		}

		function getNama_Bagian ()
		{
			return $nama_bagian;
		}

		function AddBagian ()
		{
			global $connection;
			$sqlAddBagian = mysqli_query($connection, "INSERT INTO bagian VALUES ('$this->id_bagian','$this->nama_bagian')");
		}

		function BagianList ()
		{
			global $connection;
			$sqlBagianList = mysqli_query($connection, "SELECT * FROM bagian ORDER BY nama_bagian ASC");
			while ($row = mysqli_fetch_array ($sqlBagianList))
			{
				$data [] = $row;
			}
			return $data;
		}

		function findBagianById ($id)
		{
			global $connection;
			$sqlEditBagian = mysqli_query($connection, "SELECT * FROM bagian WHERE id_bagian = '$id'");
			while ($row = mysqli_fetch_array ($sqlEditBagian))
			{
				$data[] = $row;
			}
			return $data;			
		}

		function BagianUpdate ()
		{
			global $connection;
			$sqlBagianUpdate = mysqli_query($connection, "UPDATE bagian SET nama_bagian ='$this->nama_bagian' WHERE id_bagian = '$this->id_bagian'");
		}
		
		function BagianDelete ($id)
		{
			global $connection;
			$sqlBagianDelete = mysqli_query($connection, "DELETE FROM bagian WHERE id_bagian = '$id'");
		}
	}
?>