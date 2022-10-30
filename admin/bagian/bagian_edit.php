<?php

// memanggil koneksi database
//include "session_admin.php";
include "../../class/config.php";
include "../../class/bagian.php";

	$id = $_GET ['id'];
	
	$BagianList = new bagian();
	$BagianList->BagianList();
	$DaftarBagian = $BagianList->BagianList();
	$Bagian = $BagianList->findBagianById($id);
	
	$i=1;
?>

<div class="container-fluid">
    	<div class="col-md-7 col-md-offset-2">
    		<form class="form-horizontal" method="post" action="bagian_update.php">
    			<?php

                    if(empty($Bagian)){

                    }else{
                    foreach ($Bagian as $key => $value) {
                    ?>

                <legend> Form Edit Bagian </legend>
                <input type="hidden" name="id_bagian" value="<?php echo $value['id_bagian'] ?>">
                <div class="form-group">
                	<label for="nama_bagian" class="col-md-2"> Nama Bagian  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="nama_bagian" name="nama_bagian" value="<?php echo $value['nama_bagian']; ?>">
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