<!-- mulai form -->
    <div class="container-fluid">
    	<div class="col-md-7 col-md-offset-2">
    		<form class="form-horizontal" method="post" action="barang_simpan.php">
    			<legend> Form Input Barang </legend>
                <div class="form-group">
                	<label for="nama_barang" class="col-md-2"> Nama Barang  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="nama_barang" placeholder="nama barang" name="nama_barang">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="harga_barang" class="col-md-2"> Harga Barang  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="harga_barang" placeholder="harga barang" name="harga_barang">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="biaya_penyimapan" class="col-md-2"> Biaya Penyimpanan  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="biaya_peyimpanan" placeholder="biaya penyimpanan" name="biaya_penyimpanan">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="periode_permintaan" class="col-md-2"> Periode Permintaan  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="periode_permintaan" placeholder="periode permintaan" name="periode_permintaan">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="satuan" class="col-md-2"> Satuan  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="keterangan" placeholder="Satuan Barang" name="satuan">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="satuan" class="col-md-2"> Konversi  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="konversi" placeholder="Konversi Satuan Barang" name="konversi">
                    </div>
                </div>
                <br>
                                               
                <div class="form-group">
                	<div class="col-md-7 col-md-offset-2">
                		
                    		<input type="submit" class="btn btn-primary" name="simpan" value="simpan">
                        	<a class="btn btn-danger" href="index.php" role="button">Batal</a>
                    </div>
                </div>
    		</form>
        </div>
    </div>
    
    <!-- akhir form -->
