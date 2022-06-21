<?php
include_once("header.php");
?>

<body>
    <form action="tambah_pelanggan.php" method="POST">
        <input type="hidden" name="req" value="postpenyewaan">
        <div class="col-md-9 p-5 pt-4">
            <h3><i class="fa-solid mr-2"></i>Form Penyewaan</h3>
            <hr>
            <div class="mb-3 row">
                <label for="nama_pelanggan" class="col-sm-2 col-form-label">Nama Pelanggan</label>
                <div class="col-sm-10">
                    <select id="select" class="form-select">
                        <option>Pilih Nama</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tanggal_transaksi" class="col-sm-2 col-form-label">Tanggal Transaksi</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="inputPassword" name="tanggal_transaksi">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tanggal_booking" class="col-sm-2 col-form-label">Tanggal Booking</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="inputPassword" name="tanggal_booking">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="biaya_sewa" class="col-sm-2 col-form-label">Biaya Sewa</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" name="biaya_sewa">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" name="keterangan">
                </div>
            </div>
            <input type="hidden" name="req" value="postpenyewaan">
            <button type="submit" class="btn btn-primary">Submit</button>

        </div>
    </form>



    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!--<script type="text/javascript" src="js/boostrap.min.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js_gedung.js"></script>
</body>

</html>