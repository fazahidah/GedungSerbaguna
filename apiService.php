<?php
require_once("core/Database.php");
$db = new Database();
$Request = @$_REQUEST['req'];


if ($Request == "login") {
    $username = $_POST['username'];
    $password = $_POST['password'];


    // menyeleksi data user dengan username dan password yang sesuai
    $login = mysqli_query($db->koneksi, "select * from login where username='$username' and password='$password'");
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($login);

    // cek apakah username dan password di temukan pada database
    if ($cek > 0) {

        $data = mysqli_fetch_assoc($login);

        // cek jika user login sebagai admin
        if ($data['username'] == "Admin") {

            // buat session login dan username
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['nama'] = "admin";
            // alihkan ke halaman dashboard admin
            header("location:dashboard1.php");
        }
    } else {
        header("location:login.php?pesan=gagal");
    }
} elseif ($Request == "postpelanggan") {
    $namapelanggan = $_POST['namapelanggan'];
    $alamat = $_POST['alamat'];
    $notelp = $_POST['notelp'];
    $datapelanggan = [
        "nama" => $namapelanggan,
        "alamat" => $alamat,
        "nomer_telepon" => $notelp
    ];
    $db->insert("pelanggan", $datapelanggan);
    header("location: daftar_pelanggan.php");
} elseif ($Request == "postpenyewaan") {
    $tanggal_transaksi = $_POST['tanggal_transaksi'];
    $tanggal_booking = $_POST['tanggal_booking'];
    $biaya_sewa = $_POST['biaya_sewa'];
    $keterangan = $_POST['keterangan'];
    $datasewa = [
        "tanggal_transaksi" => $tanggal_transaksi,
        "tanggal_booking" => $tanggal_booking,
        "biaya_sewa" => $biaya_sewa,
        "keterangan" => $keterangan
    ];
    $db->insert("sewa", $datasewa);
    header("location: daftar_penyewa.php");
} elseif ($Request == "logout") {
    session_destroy();
    header("location:../index.php");
}
