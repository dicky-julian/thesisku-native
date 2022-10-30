<?php

// memanggil koneksi database

include "../../class/config.php";
include "../../class/pegawai.php";
include "../../class/bagian.php";

	$id = $_GET ['id'];
	
	$BagianList = new bagian();
	$BagianList->BagianList();
	$DaftarBagian = $BagianList->BagianList();
	
	$PegawaiList = new pegawai();
	$PegawaiList->PegawaiList();
	$DaftarPegawai = $PegawaiList->PegawaiList();
	$Pegawai = $PegawaiList->findPegawaiById($id);
	
	
	
	$i=1;
?>

<div class="container-fluid">
    	<div class="col-md-7 col-md-offset-2">
    		<form class="form-horizontal" method="post" action="pegawai_update.php">
    			<?php

                    if(empty($Pegawai)){

                    }else{
                    foreach ($Pegawai as $key => $value) {
                    ?>

                <legend> Form Edit Pegawai </legend>
                <input type="hidden" name="id_pegawai" value="<?php echo $value['id_pegawai'] ?>">
                <div class="form-group">
                	<label for="username" class="col-md-2"> Username  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="username" name="username" value="<?php echo $value['username']; ?>">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="password" class="col-md-2"> Password  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="password" name="password" value="<?php echo $value['password']; ?>">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="nama_pegawai" class="col-md-2"> Nama Pegawai  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="nama pegawai" name="nama_pegawai" value="<?php echo $value['nama_pegawai']; ?>">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="alamat_pegawai" class="col-md-2"> Alamat Pegawai  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="alamat pegawai" name="alamat_pegawai" value="<?php echo $value['alamat_pegawai']; ?>">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="handphone_pegawai" class="col-md-2"> Handphone Pegawai  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="hp_pegawai" name="hp_pegawai" value="<?php echo $value['hp_pegawai']; ?>">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="id_bagian" class="col-md-2"> Bagian  </label>
                    <div class="col-md-7">
                	<select class="form-control" name="id_bagian" id="id_bagian">
                          	<?php
									foreach($DaftarBagian as $dri){
                                ?>
                                <option <?php echo ($dri['id_bagian'] == $value['id_bagian']) ? 'selected' : '' ?> value="<?php echo $dri['id_bagian'] ?>"><?php echo $dri['nama_bagian'] ?></option>
                                <?php
									}
								?>                            	
                          </select>
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