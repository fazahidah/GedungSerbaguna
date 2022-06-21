<?php
include_once("header.php");
?>

<body>
    <form action="apiService.php" method="post">
        <input type="hidden" name="req" value="postsewa">
        <div class="col-md-9 p-5 pt-4">
            <h3><i class="fa-solid mr-2"></i>Form Penyewaan</h3>
            <hr>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Nama Pelanggan</label>
                <div class="col-sm-10">
                    <select id="select" class="form-select" name="namapelanggan">
                    <option value="0" selected="selected">-- Pilih Nama Pelanggan --</option>
                    <?php $no=1; include 'apiService.php';
                    $data_api = mysqli_query($db->koneksi, "SELECT * from pelanggan order by id_pelanggan"); foreach($data_api as $i): ?>
                            <option <?php echo $i['nama']; ?>"><?php echo $i['nama']; ?></option>
                    <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Tanggal Transaksi</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tgltransaksi" name="tanggaltrans">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Tanggal Booking</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tglsewa" name="tanggalsewa">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Biaya Sewa</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="biaya" name="biaya">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ket" name="ket">
                </div>
            </div>
            <div>
                <input type="hidden" name="req" value="postsewa">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>
    </form>



    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!--<script type="text/javascript" src="js/boostrap.min.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js_gedung.js"></script>
</body>

</html>