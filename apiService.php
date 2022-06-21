<?php
require_once("core/Database.php");
$db = new Database();
$Request = @$_REQUEST['req'];



if ($Request == "login") {
    $username = $_POST['username'];
    $auth = $db->select("SELECT * FROM user WHERE username = '". mysqli_real_escape_string($db->koneksi,$username)."'");
    if (count($auth) > 0) {
        $password = password_verify($_POST['password'],$auth[0]['password']);
        if ($password) {
            $tokenID = md5($username.random_int(1,999));
            // $db->update("user_login",["token"=>$tokenID],$auth[0]['id']);
            $_SESSION["token"] = $tokenID;
            $_SESSION["username"] = $username;
            header("location: ../dashboard1.php");
        }else {
            setcookie("alert","Password Salah !", time() + (15),"/");
            header("location: ../login.php");
        }
    }else {
        setcookie("alert","Username Tidak Ditemukan", time() + (15),"/");
        header("location: ../login.php");
    }
}

elseif($Request == "postpelanggan"){
    $namapelanggan = $_POST['namapelanggan'];
    $alamat = $_POST['alamat'];
    $notelp = $_POST['notelp'];
    $datapelanggan = [
        "nama" => $namapelanggan,
        "alamat" => $alamat,
        "nomer_telepon" => $notelp
    ];
    $db->insert("pelanggan",$datapelanggan);
    header("location: daftar_pelanggan.php");
}

elseif($Request == "postsewa"){
    $namapelanggan = $_POST['namapelanggan'];
    $tanggaltrans = $_POST['tanggaltrans'];
    $tanggalsewa = $_POST['tanggalsewa'];
    $biaya = $_POST['biaya'];
    $ket = $_POST['ket'];
    $datasewa = [
        "nama" => $namapelanggan,
        "tanggal_transaksi" => $tanggaltrans,
        "tanggal_booking" => $tanggalsewa,
        "biaya" => $biaya,
        "keterangan" => $ket
    ];
    $db->insert("sewa",$datasewa);
    header("location: penyewaan1.php");
}

elseif($Request == "postupdate"){
    $id = $_POST['id'];
    $namapelanggan = $_POST['editNama'];
    $alamat = $_POST['editAlamat'];
    $notelp = $_POST['editNotelp'];
    mysqli_query($db->koneksi, "UPDATE `pelanggan` SET `id_pelanggan`=$id,`nama`=$namapelanggan,`alamat`=$alamat,`nomer_telepon`=$notelp WHERE 1");
    header("location: daftar_pelanggan.php");
}


elseif($Request == "logout"){
    session_destroy();
    header("location:../index.php");
}
