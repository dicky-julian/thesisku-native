<?php
include "../class/config.php";
include "../class/barang.php";
//include "../class/produksi.php";
//include "../class/pemesanan.php";
	
	$BE = new barang();
	$BE->BE();
	$DaftarBE = $BE->BE();

?>
<div class="container-fluid">
	<div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th> </th>
                        <th> Nama Barang </th>                        
                        <th> Deviasi Pesanan </th>
                        <th> Mean Pesanan </th>
                        <th> Deviasi Produksi </th>
                        <th> Mean Produksi </th>
                        <th> Lead Time </th>
                        <th> BE </th>
                        <th> Parameter </th>
                        <th> Bullwhip Effect </th>
                        
                    </tr>
                    <tr>
                    <?php
					
                        foreach ($DaftarBE as $key => $data) {
                    ?>
                        <td> <?php echo $key+1 ?> </td>
                        <td> <?php echo $data["nama_barang"] ?> </td>                       
                        <td> <?php echo $data["s_order"] ?> </td>
                        <td> <?php echo $data["mean_order"] ?> </td>
                        <td> <?php echo $data["s_demand"] ?> </td>                        
                        <td> <?php echo $data["mean_demand"] ?> </td>
                        <td> <?php echo $data["lead_time"] ?> </td>
                        <td> <?php echo $data["BE"] ?> </td>
                        <td> <?php echo $data['parameter'] ?> </td>
                        <td> <?php if (($data['BE']) > ($data['parameter']))
								{
															echo '<button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#myModal">
							<span class="glyphicon glyphicon-thumbs-up">
							  Solusi Bullwhip
							</span>
						</button>';
								}
								else
								{
									echo "Tidak Terjadi Bullwhip Effect";
								}
								
							?> 
						
                        
                        
                        </tr>
                        <?php
                        }
                    ?>    
                </table>
            </div>
        </div>
	</div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> Solusi Bullwhip</h4>
      </div>
      <div class="modal-body">
        	<ol>
    			<li> Menjamin ketersediaan produk dengan memperhatikan tingkat pemesanan </li>
        		<li> Mengatisipasi terjadinya fluktuasi permintaan  </li>
        		<li> Menjaga arus komunikasi agar tidak terjadi penundaan sehingga arus permintaan selalu lancar </li>
                <li> Menjaga <b>Lead Time </b> tetap stabil </li>
                <li> Melakukan peramalan dengan metode yang akurat <i> (dilakukan penelitian lanjutan) karena pada penelitian ini tidak dibahas metode peramalan </li>
    		</ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>