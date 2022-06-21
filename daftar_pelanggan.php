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
            <?php $no = 1;
            include 'apiService.php';
            $data_api = mysqli_query($db->koneksi, "SELECT * from pelanggan");
            foreach ($data_api as $i) : ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $i['nama_pelanggan'] ?></td>
                    <td><?= $i['alamat'] ?></td>
                    <td><?= $i['nomer_telepon'] ?></td>
                    <td class="btn-group" role="group">
                        <a class="editBtn">
                            <button class="btn btn-xs btn-warning fas fa-edit" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        </a>
                        <a><button class="btn btn-xs btn-danger fas fa-trash"></a>
                    </td>
                </tr>
            <?php $no++;
            endforeach ?>
        </tbody>
    </table>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>
</body>
<script>
    $(".editBtn").click(function() {
        $('exampleModal').modal('show');
    })
</script>

</html>