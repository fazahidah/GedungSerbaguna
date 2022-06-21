<?php
include_once("header.php");
?>

<!--  Post Barang jumbotron-->
<div class="container h-100 col-md-9 p-5 pt-4">
    <div class="card-body" style="background-color: #333;">
        <h2 class="card-title" style="color: white;">Tambah Data Pelanggan</h2>
        <form action="apiService.php" method="post">
        <input type="hidden" name="req" value="postpelanggan">
            <div>
                <b style="color: white;">Nama</b>
                <input type="text" class="tambahNama" name="namapelanggan" id="" value=""></input>
                <b style="color: white;">Alamat </b>
                <input type="text" class="tambahalamat" name="alamat" id="" value=""></input>
                <b style="color: white;">Nomer Telepon</b>
                <input type="text" class="tambahtelepon" name="notelp" id="" value=""></input>
                <div class="pt-2">
                    <input type="hidden" name="req" value="postpelanggan">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </form>
    </div>
    <hr>
    <!-- Table Data -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Pelanggan</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nomer Telepon</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
			<?php $no=1; include 'apiService.php';
            $data_api = mysqli_query($db->koneksi, "SELECT * from pelanggan"); foreach($data_api as $i): ?>
			<tr>
				<td><?=$no?></td>
				<td><?=$i['nama']?></td>
				<td><?=$i['alamat']?></td>
				<td><?=$i['nomer_telepon']?></td>
				<td class="btn-group" role="group">
					<a href="" class="btn btn-xs btn-warning fas fa-edit" data-toggle="modal"
            data-target="#modal<?php echo $i['id_pelanggan']; ?>"></a>

            <!-- Modal -->
            <div class="modal fade" id="modal<?php echo $i['id_pelanggan']; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Barang</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="apiService.php" method="post">
                                <input type="hidden" name="req" value="postupdate">
                                <input type="hidden" name="id" value="<?php echo $i['id_pelanggan']; ?>">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Nama Pelanggan</label>
                                        <input name="editNama" type="text" class="form-control" value="<?php echo $i['nama']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Alamat</label>
                                        <textarea name="editAlamat" class="form-control" rows="3"><?php echo $i['alamat']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">No Telepon</label>
                                        <input name="editNotelp" type="text" class="form-control" value="<?php echo $i['nomer_telepon']; ?>">
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <!-- <input type="hidden" name="req" value="postupdate"> -->
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>

					<a><button class="btn btn-xs btn-danger fas fa-trash"></a>
				</td>
			</tr>
			<?php $no++; endforeach ?>
		</tbody>
    </table>
        
	</div>
</div>

</div>
</body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
<!-- <script>
    $(".editBtn").click(function(){
        $('exampleModal').modal('show');
    })
</script> -->
</html>