<?php

// memanggil koneksi database

include "../class/config.php";
include "../class/pemesanan.php";
//include "../class/barang.php";

	$id = $_GET ['id'];
	
	//$BarangList = new barang ();
	//$BarangList->BarangList();
	//$DaftarBarang = $BarangList->BarangList();
	
	$PesananList = new pemesanan();
	$PesananList->PesananList();
	$DaftarPesanan = $PesananList->PesananList();
	$Pesanan = $PesananList->findPesananById($id);
		
	$i=1;
?>

<div class="container-fluid">
    	<div class="col-md-7 col-md-offset-2">
    		<form class="form-horizontal" method="post" action="pesanan_update.php">
    			<?php

                    if(empty($Pesanan)){

                    }else{
                    foreach ($Pesanan as $key => $value) {
                    ?>

                <legend> Form Edit Pesanan </legend>
                <input type="text" name="id_pesanan" value="<?php echo $value['id_pesanan'] ?>">
                
                <div class="form-group">
                	<label for="nama_pemesan" class="col-md-3"> Nama pemesan  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" value="<?php echo $value['nama_pemesan']; ?>">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="nama_barang" class="col-md-3"> Nama Barang  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $value['nama_barang']; ?>">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="jumlah_barang" class="col-md-3"> Jumlah Barang  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="jumlah_barang" name="jumlah_barang" value="<?php echo $value['jumlah_pesanan']; ?>">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="jumlah produksi" class="col-md-3"> Jumlah Produksi  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="jumlah_produksi" placeholder="Jumlah Produksi" name="jumlah_produksi">
                    </div>
                </div>
                <br>

                                
                <div class="form-group">
                	<div class="col-md-7 col-md-offset-2">
                		<input type="submit" class="btn btn-md btn-primary" name="update" value="Update" >
                        	
                            <input type="reset" class="btn btn-danger" name="batal" value="batal">
                            
                    	
                    </div>
                </div>
                <?php
                    }}
                    ?>
    		</form>
        </div>
    </div>
    
    <!-- akhir form -->