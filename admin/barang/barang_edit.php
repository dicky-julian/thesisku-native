<?php

// memanggil koneksi database
//include "../session_admin.php";
include "../../class/config.php";
include "../../class/barang.php";

	$id = $_GET ['id'];
	
	$BarangList = new barang();
	$BarangList->BarangList();
	$DaftarBarang = $BarangList->BarangList();
	$Barang = $BarangList->findBarangById($id);
	
	$i=1;
?>

<div class="container-fluid">
    	<div class="col-md-7 col-md-offset-2">
    		<form class="form-horizontal" method="post" action="barang_update.php">
    			<?php

                    if(empty($Barang)){

                    }else{
                    foreach ($Barang as $key => $value) {
                    ?>

                <legend> Form Edit Barang </legend>
                <input type="hidden" name="id_barang" value="<?php echo $value['id_barang'] ?>">
                <div class="form-group">
                	<label for="nama_bagian" class="col-md-2"> Nama Barang  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $value['nama_barang']; ?>">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="Harga Barang" class="col-md-2"> Harga Barang  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="harga_barang" name="harga_barang" value="<?php echo $value['harga_barang']; ?>">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="Biaya Peyimpanan" class="col-md-2"> Biaya Penyimpanan  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="biaya_penyimpanan" name="biaya_penyimpanan" value="<?php echo $value['biaya_penyimpanan']; ?>">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="periode permintaab" class="col-md-2"> Periode Permintaan  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="periode permintaan" name="periode_permintaan" value="<?php echo $value['periode_permintaan']; ?>">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="Satuan" class="col-md-2"> Satuan  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="satuan" name="satuan" value="<?php echo $value['satuan']; ?>">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="Keterangan" class="col-md-2"> Konversi  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="biaya_penyimpanan" name="konversi" value="<?php echo $value['konversi']; ?>">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<div class="col-md-7 col-md-offset-2">
                		<input type="submit" class="btn btn-md btn-primary" name="update" value="Update" >
                        	<a class="btn btn-danger" href="index.php" role="button">Batal</a>
                    	
                    </div>
                </div>
                <?php
                    }}
                    ?>
    		</form>
        </div>
    </div>
    
    <!-- akhir form -->