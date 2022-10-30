<!-- Mulai Tabel -->
<?php

// memanggil koneksi database

include "../class/config.php";
include "../class/pemesanan.php";
include "../class/barang.php";
//include "../class/pegawai.php";

	$id = $_GET['id'];
	
	$PesananList = new pemesanan();
	$PesananList->PesananList();
	$DaftarPesanan = $PesananList->PesananList();
	
	$PesananEditList = new pemesanan();
	$PesananEditList->PesananEditList();
	$DaftarPesananEdit = $PesananEditList->PesananEditList();
	$EditPesanan = $PesananEditList->findPesananById($id);
	
	
	
	$BarangList = new barang();
	$BarangList->BarangList();
	$DaftarBarang = $BarangList->BarangList();
	
?>
<div class="container-fluid">
	<div class="row">
        <div class="col-md-7 col-md-offset-2">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th> </th>
                        <th> Nama Pemesan </th>
                        <th> Nama Barang </th>
                        <th> Jumlah Barang </th>
                        
                        
                    </tr>
                    <tr>
                    <?php
                        foreach ($DaftarPesananEdit as $key => $data) {
                    ?>
                        <td> <?php echo $key+1 ?> </td>
                        <td> <?php echo $data["nama_pemesan"] ?> </td>
                        <td> <?php echo $data["id_barang"] ?> </td>
                        <td> <?php echo $data["jumlah_pesanan"] ?> </td>
                        <td> 
                            <a href="pesanan_form_edit.php?id=<?php echo $data['id_pesanan'] ?>">
                            <button type="button" class="btn btn-primary">
                                <span class="glyphicon glyphicon-pencil">
                                    Edit
                                </span>
                            </button>
                            </a> 
                        </td>
                        
                        </tr>
                        <?php
                        }
                    ?>    
                </table>
            </div>
        </div>
	</div>
</div>