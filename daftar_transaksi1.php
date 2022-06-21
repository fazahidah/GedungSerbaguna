<?php
include_once("header.php");
?>

<body>
    <div class="col-md-9 p-5 pt-4">
        <h3><i class="fa-solid fa-gauge-high mr-2"></i>Daftar Transaksi</h3>
        <hr>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal Transaksi</th>
                    <th scope="col">Tanggal Booking</th>
                    <th scope="col">Biaya</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $sql = "SELECT * FROM sewa";
                $hasil = mysqli_query($koneksi, $sql);
                while ($row = mysqli_fetch_array($hasil)) {
                ?>
                    <tr>
                        <td><?= $row['id_sewa']; ?></td>
                        <td><?= $row['tanggal_transaksi']; ?></td>
                        <td><?= $row['tanggal_booking']; ?></td>
                        <td><?= $row['biaya']; ?></td>
                        <td><?= $row['keterangan']; ?></td>
                        <td><a href="editsewa.php?id=<?= $row['id_sewa'] ?>"> Edit</a> | <a href="deletesewa.php?id=<?= $row['id_sewa'] ?>"> Delete</td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
    </div>



    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!--<script type="text/javascript" src="js/boostrap.min.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js_gedung.js"></script>
</body>

</html>