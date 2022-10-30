<?php
include "../class/config.php";
include "../class/barang.php";
//include "../class/produksi.php";
//include "../class/pemesanan.php";
	
	$ROP = new barang();
	$ROP->ROP();
	$TabelROP = $ROP->ROP();

?>
<div class="container-fluid">
	<div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th> </th>                        
                        <th> Nama Barang </th>                        
                        <th> Jumlah Pesanan </th>
                        <th> Satuan </th>
                        <th> Konversi </th>
                        <th> Jumlah Total </th>
                        <th> Perkiraan Pemakaian </th>
                        <th> Pemakaian Sebenarnya </th>
                        <th> Waktu Tunggu (Lead Time) </th>                        
                        <th> Safety Stock </th>
                        <th> ROP (ReOrder Point)</th>
                       
                        
                    </tr>
                    <tr>
                    <?php
					
                        foreach ($TabelROP as $key => $data) {
                    ?>
                        <td> <?php echo $key+1 ?> </td>
                        <td> <?php echo $data['nama_barang'] ?> </td>                       
                        <td align="center"> <?php echo $data['pesanan_total'] ?> </td>
                        <td align="center"> <?php echo $data['satuan'] ?> </td>
                        <td align="center"> <?php echo $data['konversi'] ?> </td>
                        <td align="center"> <?php echo $data['total_barang'] ?> </td>                        
                        <td align="center"> <?php echo $data['X'] ?> </td>
                        <td align="center"> <?php echo $data['Y'] ?> </td>
                        <td align="center"> <?php echo $data['lead_time'] ?> </td>
                        <td align="center"> <?php echo $data['safety_stock'] ?> </td>
                        <td align="center"> <?php echo $data['ROP'] ?> </td>
                        
                        
                                             
                        
                        </tr>
                        <?php
                        }
                    ?>    
                </table>
            </div>
        </div>
	</div>
</div>
