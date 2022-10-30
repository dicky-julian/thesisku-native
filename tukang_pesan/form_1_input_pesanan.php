<?php
	include "pesanan_konek.php";
?>


<!-- mulai form -->
    <div class="container-fluid">
    	<div class="col-md-7 col-md-offset-2">
    		<form class="form-horizontal" method="post" action="pesanan_simpan.php">
    			<legend> Form Input Pesanan </legend>
                
                <div class="form-group">
                	<label for="nama pemesan" class="col-md-3"> Nama Supplier  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="Nama Pemesan" placeholder="Nama atau Instansi Pemesan" name="nama_pemesan">
                    </div>
                </div>
                <br>

                
                <div class="form-group">
                	<label for="nama_barang" class="col-md-3"> Nama Barang  </label>
                	<div class="col-md-7">
                    	<select class="form-control" name="id_barang" id="nama_barang">
                          	<option value="">----- Pesanan Bahan Baku -----</option>
                            	<?php
									foreach($DaftarBarang as $dri){
										echo '<option value="'.$dri['id_barang'].'">'.$dri['nama_barang'].'</option>';
									}
								?>
                            	
                          </select>

                    </div>
                </div>
                <br>

                
                <div class="form-group">
                	<label for="jumlah pesanan" class="col-md-3"> Jumlah Pesanan  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="jumlah pesanan" placeholder="Jumlah Pesanan Barang dalam angka" name="jumlah_pesanan">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="jumlah pesanan" class="col-md-3"> Waktu Tunggu Pesanan  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="lead time" placeholder="Waktu Tunggu Pesanan" name="lead_time">
                    </div>
                </div>
                <br>

                
                <div class="form-group">
                	<div class="col-md-7 col-md-offset-2">
                		
                    		<input type="submit" class="btn btn-primary" name="simpan" value="simpan">
                        	<input type="reset" class="btn btn-danger" name="batal" value="batal">
                    	
                    </div>
                </div>
    		</form>
        </div>
    </div>
    
    <!-- akhir form -->
<style>

    .ui-autocomplete {
      padding: 0;
      list-style: none;
      background-color: #fff;
      width: 218px;
      border: 1px solid #B0BECA;
      max-height: 350px;
      overflow-x: hidden;
    }
    .ui-autocomplete .ui-menu-item {
      border-top: 1px solid #B0BECA;
      display: block;
      padding: 4px 6px;
      color: #353D44;
      cursor: pointer;
    }
    .ui-autocomplete .ui-menu-item:first-child {
      border-top: none;
    }
    .ui-autocomplete .ui-menu-item.ui-state-focus {
      background-color: #D5E5F4;
      color: #161A1C;
    }
</style>

