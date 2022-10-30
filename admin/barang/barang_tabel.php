<!-- Mulai Tabel -->
<div class="container-fluid">
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th> </th>
                        <th> Nama Barang </th>
                        <th> Harga Barang </th>
                        <th> Biaya Penyimpanan </th>
                        <th> Periode Permintaan </th>
                        <th> Satuan </th>
                        <th> Konversi </th>                        
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>
                    <tr>
                    <?php
                        foreach ($DaftarBarang as $key => $data) {
                    ?>
                        <td align=""> <?php echo $key+1 ?> </td>
                        <td> <?php echo $data["nama_barang"] ?> </td>
              			<td align="center"> <?php echo $data["harga_barang"] ?> </td>
                        <td align="center"> <?php echo $data["biaya_penyimpanan"] ?> </td>
                        <td align="center"> <?php echo $data["periode_permintaan"] ?> </td>
                        <td align="center"> <?php echo $data["satuan"] ?> </td>
                        <td align="center"> <?php echo $data["konversi"] ?> </td>
                        
                        <td> 
                            <a href="barang_form_edit.php?id=<?php echo $data['id_barang'] ?>">
                            <button type="button" class="btn btn-primary">
                                <span class="glyphicon glyphicon-pencil">
                                    Edit
                                </span>
                            </button>
                            </a> 
                        </td>
                        <td> 
                            <a href="barang_delete.php?id=<?php echo $data["id_barang"]; ?>">
                            <button onclick="return confirm('Hapus data ini?')" type="button" class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash">
                                    Delete
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