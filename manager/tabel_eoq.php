<?php
include "../class/config.php";
include "../class/barang.php";
//include "../class/produksi.php";
//include "../class/pemesanan.php";
	
	$EOQ = new barang();
	$EOQ->EOQ();
	$TabelEOQ = $EOQ->EOQ();

?>
<div class="container-fluid">
	<div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th> </th>                       
                        <th> Nama Barang </th>
                        <th> Harga Barang </th>
                        <th> Jumlah Pesanan </th>
                        <th> Biaya Penyimpanan </th>
                        <th> Permintaan per Periode </th>
                        <th> Biaya Tiap Pemesanan </th>                        
                        <th> EOQ </th>
                        <th> Pembelian Optimum </th>
                        <th> Daur Pembelian </th>
                       
                        
                    </tr>
                    <tr>
                    <?php
					
                        foreach ($TabelEOQ as $key => $data) {
                    ?>
                        <td> <?php echo $key+1 ?> </td>                       
                        <td> <?php echo $data['nama_barang'] ?> </td>
                        <td align="center"> <?php echo $data['harga_barang'] ?> </td>
                        <td align="center"> <?php echo $data['pesan'] ?> </td>                        
                        <td align="center"> <?php echo $data['H'] ?> </td>
                        <td align="center"> <?php echo $data['R'] ?> </td>
                        <td align="center"> <?php echo $data['C'] ?> </td>                        
                        <td align="center"> <?php echo $data['EOQ'] ?> </td>
                        <td align="center"> <?php echo $data['pembelian_optimum'] ?> </td>
                        <td align="center"> <?php echo $data['daur_pembelian'] ?> </td>                     
                        
                        </tr>
                        <?php
                        }
                    ?>    
                </table>
            </div>
        </div>
	</div>
</div>
