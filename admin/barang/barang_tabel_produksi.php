<!-- Mulai Tabel -->
<div class="container-fluid">
	<div class="row">
        <div class="col-md-3 col-md-offset-8">
            <div class="table-responsive">
                <table class="table">
                	<caption> <b> Keterangan Barang </b> </caption>
                    <tr>
                        <th> </th>
                        <th> ID Barang </th>
                        <th> Nama Barang </th>
                        
                    </tr>
                    <tr>
                    <?php
                        foreach ($DaftarBarang as $key => $data) {
                    ?>
                        <td> <?php echo $key+1 ?> </td>
                        <td align="center"> <?php echo $data["id_barang"] ?> </td>
                        <td> <?php echo $data["nama_barang"] ?> </td>              
                                               
                        </tr>
                        <?php
                        }
                    ?>    
                </table>
            </div>
        </div>
	</div>
</div>