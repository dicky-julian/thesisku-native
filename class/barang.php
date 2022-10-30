<?php
	class barang
	{
		private $id_barang;
		private $nama_barang;
		private $harga_barang;
		private $biaya_penyimpanan;
		private $periode_permintaan;
		private $satuan;
		private $konversi;
		
		function setId_Barang ($id_barang)
		{
			$this->id_barang = $id_barang;
		}
		function setNama_Barang ($nama_barang)
		{
			$this->nama_barang = $nama_barang;
		}
		function setHarga_Barang ($harga_barang)
		{
			$this->harga_barang = ($harga_barang);
		}
		function setBiaya_Penyimpanan ($biaya_penyimpanan)
		{
			$this->biaya_penyimpanan = $biaya_penyimpanan;
		}
		function setPeriode_Permintaan ($periode_permintaan)
		{
			$this->periode_permintaan = $periode_permintaan;
		}
		function setSatuan ($satuan)
		{
			$this->satuan = $satuan;
		}		
		function setKonversi ($konversi)
		{
			$this->konversi = $konversi;
		}
		function getId_Barang ()
		{
			return $id_barang;
		}
		function getNama_Barang ()
		{
			return $nama_barang;
		}
		function getHarga_Barang ()
		{
			return $harga_barang;
		}
		function getBiaya_Penyimpanan ()
		{
			return $biaya_penyimpanan;
		}
		function getPeriode_Permintaan ()
		{
			return $periode_permintaan;
		}
		function getSatuan ()
		{
			return $satuan;
		}
		function getKonversi ()
		{
			return $Konversi;
		}
		function AddBarang ()
		{
			global $connection;
			$sqlAddBarang = mysqli_query($connection, "INSERT INTO barang VALUES ('$this->id_barang','$this->nama_barang','$this->harga_barang','$this->biaya_penyimpanan', '$this->periode_permintaan','$this->satuan','$this->konversi')");
		}
		function BarangList ()
		{
			global $connection;
			$sqlBarangList = mysqli_query($connection, "SELECT * FROM barang ORDER BY nama_barang ASC");
			while ($row = mysqli_fetch_array ($sqlBarangList))
			{
				$data [] = $row;
			}
			return $data;
		}
		function findBarangById ($id)
		{
			global $connection;
			$sqlEditBarang = mysqli_query($connection, "SELECT * FROM barang WHERE id_barang = '$id'");
			while ($row = mysqli_fetch_array ($sqlEditBarang))
			{
				$data[] = $row;
			}
			return $data;			
		}
		function BarangUpdate ()
		{
			global $connection;
			$sqlBarangUpdate = mysqli_query($connection, "UPDATE barang SET nama_barang = '$this->nama_barang', harga_barang = '$this->harga_barang', biaya_penyimpanan = '$this->biaya_penyimpanan', periode_permintaan = '$this->periode_permintaan', satuan ='$this->satuan', konversi = '$this->konversi' WHERE id_barang = '$this->id_barang'");
			//UPDATE `barang` SET `nama_barang` = 'kertas kalkir f4', `harga_barang` = '115000', `biaya_penyimpanan` = '10000', `periode_permintaan` = '30', `keterangan` = 'kertas karkir ukuran f4' WHERE `barang`.`id_barang` = 138;
			
		}
		function BarangDelete ($id)
		{
			global $connection;
			$sqlBarangDelete = mysqli_query($connection, "DELETE FROM barang WHERE id_barang = '$id'");
		}
		function StokBarang ()
		{
			global $connection;
			$sqlStokBarang = mysqli_query($connection, "SELECT
						barang.nama_barang,	
						SUM(DISTINCT produksi.jumlah_produksi) as total_produksi,
						SUM(DISTINCT pengambilan.jumlah_pengambilan) as total_pengambilan,
						(
							SUM(DISTINCT produksi.jumlah_produksi) - 
							SUM(DISTINCT 	pengambilan.jumlah_pengambilan)
						) as stok_barang
					FROM
						barang
					JOIN produksi USING (id_barang)
					JOIN pengambilan USING (id_barang)
					GROUP BY nama_barang");
			while ($row = mysqli_fetch_array ($sqlStokBarang))
			{
				$data [] = $row;
			}
			return $data;
		}
/*		function BE ()
		{
			$sqlBE = mysqli_query($connection, "SELECT
					barang.nama_barang,
					ROUND(STDDEV(jumlah_pesanan), 3) AS s_order,
					ROUND(
						AVG(pemesanan.jumlah_pesanan),
						3
					) AS mean_order,
					ROUND(STDDEV(jumlah_produksi), 3) AS s_demand,
					ROUND(
						AVG(produksi.jumlah_produksi),
						3
					) AS mean_demand,
					ROUND(
						(
							STDDEV(jumlah_pesanan) / AVG(jumlah_pesanan)
						),
						3
					) AS cv_order,
					ROUND(
						(
							STDDEV(jumlah_produksi) / AVG(jumlah_produksi)
						),
						3
					) AS cv_demand,
					ROUND(
						(
							(
								STDDEV(jumlah_pesanan) / AVG(jumlah_pesanan)
							) / (
								STDDEV(jumlah_produksi) / AVG(jumlah_produksi)
							)
						),
						3
					) AS BE,
					produksi.lead_time,
					ROUND(
						(
							1 + ((2 * produksi.lead_time) / 30) + (
								(2 * produksi.lead_time ^ 2) / (30 ^ 2)
							)
						),
						3
					) AS parameter,
					ROUND(
						(
							(
								STDDEV(jumlah_pesanan) / AVG(jumlah_pesanan)
							) / (
								STDDEV(jumlah_produksi) / AVG(jumlah_produksi)
							)
						) > 1 + ((2 * produksi.lead_time) / 30) + (
							(2 * produksi.lead_time ^ 2) / (30 ^ 2)
						),
						3
					) AS Bullwhip_Effect
				FROM
					barang
				INNER JOIN pemesanan ON pemesanan.id_barang = barang.id_barang
				INNER JOIN produksi ON produksi.id_barang = pemesanan.id_barang
				GROUP BY
					nama_barang");
			while ($row = mysqli_fetch_array ($sqlBE))
			{
				$data [] = $row;
			}
			return $data;
		}
*/		
		function EOQ ()
		{
			global $connection;
			$sqlEOQ = mysqli_query($connection, "SELECT
							barang.nama_barang,
							barang.harga_barang,
							barang.konversi,
							Sum(pemesanan.pakai) AS D,
							SUM(pemesanan.jumlah_pesanan) AS pesan,
							barang.biaya_penyimpanan AS H,
							ROUND(
								AVG(
									barang.harga_barang * pemesanan.jumlah_pesanan
								),
								2
							) AS C,
							ROUND(
								AVG(pemesanan.jumlah_pesanan),
								3
							) AS R,
							ROUND(
								SQRT(
									(
										2 * (
											AVG(
												barang.harga_barang * pemesanan.jumlah_pesanan
											)
										) * SUM(pemesanan.pakai)
									) / AVG(barang.biaya_penyimpanan)
								),
								3
							) AS EOQ,
							(
								SUM(pemesanan.jumlah_pesanan) * barang.konversi
							) AS kuantitas,
							ROUND(
								(
									Sum(pemesanan.pakai)
								) / SQRT(
									(
										2 * (
											AVG(
												barang.harga_barang * pemesanan.jumlah_pesanan
											)
										) * SUM(pemesanan.pakai)
									) / AVG(barang.biaya_penyimpanan)
								),
								3
							) AS pembelian_optimum,
							ROUND(
								(
									360 / (
										(
											Sum(pemesanan.pakai)
										) / SQRT(
											(
												2 * (
													AVG(
														barang.harga_barang * pemesanan.jumlah_pesanan
													)
												) * SUM(pemesanan.pakai)
											) / AVG(barang.biaya_penyimpanan)
										)
									)
								),
								3
							) AS daur_pembelian
						FROM
							barang
						INNER JOIN pemesanan ON pemesanan.id_barang = barang.id_barang
						GROUP BY
							barang.nama_barang");
							while ($row = mysqli_fetch_array ($sqlEOQ))
								{
									$data [] = $row;
								}
							return $data;
	
		}
		function ROP ()
		{
			global $connection;
			$sqlROP = mysqli_query($connection, "SELECT
						barang.nama_barang,
						barang.harga_barang,
						barang.satuan,
						barang.konversi,
						pemesanan.lead_time,
						Sum(pemesanan.jumlah_pesanan) AS pesanan_total,
						(
							konversi * Sum(pemesanan.jumlah_pesanan)
						) AS total_barang,
						(
							(
								(5 / 100) * (SUM(pemesanan.pakai))
							) + (SUM(pemesanan.pakai))
						) AS X,
						SUM(pemesanan.pakai) AS Y,
						(
							(
								(
									(5 / 100) * (SUM(pemesanan.pakai))
								) + (SUM(pemesanan.pakai))
							) - (SUM(pemesanan.pakai))
						) AS 'X-Y',
						POW(
							(
								(
									(
										(5 / 100) * (SUM(pemesanan.pakai))
									) + (SUM(pemesanan.pakai))
								) - (SUM(pemesanan.pakai))
							),
							2
						) AS 'X-Y^2',
						ROUND(
							SQRT(
								POW(
									(
										(
											(
												(5 / 100) * (SUM(pemesanan.pakai))
											) + (SUM(pemesanan.pakai))
										) - (SUM(pemesanan.pakai))
									),
									2
								) / 12
							),
							3
						) AS sigma,
						ROUND(
							(
								1.65 * (
									SQRT(
										POW(
											(
												(
													(
														(5 / 100) * (SUM(pemesanan.pakai))
													) + (SUM(pemesanan.pakai))
												) - (SUM(pemesanan.pakai))
											),
											2
										) / 12
									)
								)
							),
							3
						) AS safety_stock,
						ROUND(
							(
								AVG(pemesanan.lead_time) * (SUM(pemesanan.pakai) / 360)
							),
							3
						) AS LQ,
						ROUND(
							(
								(
									1.65 * (
										SQRT(
											POW(
												(
													(
														(
															(5 / 100) * (SUM(pemesanan.pakai))
														) + (SUM(pemesanan.pakai))
													) - (SUM(pemesanan.pakai))
												),
												2
											) / 12
										)
									)
								) + (
									AVG(pemesanan.lead_time) * (SUM(pemesanan.pakai) / 360)
								)
							),
							3
						) AS ROP
					FROM
						barang
					INNER JOIN pemesanan ON pemesanan.id_barang = barang.id_barang
					GROUP BY
						nama_barang
								");
							while ($row = mysqli_fetch_array ($sqlROP))
								{
									$data [] = $row;
								}
							return $data;
	
		}
	}
?>