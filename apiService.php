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
elseif($Request == "postbayi"){
    $nopermo = createNoPermohonan();
    $noaktak = createNoAkta();
    $namabayi = $_POST['namabayi'];
    $tempatlahir = $_POST['tempatlahir'];
    $kotalahir = $_POST['kotalahir'];
    $harilahir = $_POST['harilahir'];
    $jenislahir = $_POST['jenislahir'];
    $penolonglahir = $_POST['penolonglahir'];
    $pjgbayi = $_POST['pjgbayi'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $namatempat = $_POST['namatempat'];
    $tgllahir = $_POST['tgllahir'];
    $waktulahir = $_POST['waktulahir'];
    $kelahiranke = $_POST['kelahiranke'];
    $beratbayi = $_POST['beratbayi'];
    $data = [
        "no_permohonan" => $nopermo,
        "no_akta" => $noaktak,
        "nama" => $namabayi,
        "alamat" => $tempatlahir,
        "kota" => $kotalahir,
        "harilahir" => $harilahir,
        "jenis_lahir" => $jenislahir,
        "penolong_lahiran" => $penolonglahir,
        "panjang_bayi" => $pjgbayi,
        "jk" => $jeniskelamin,
        "namatempat" => $namatempat,
        "tanggal" => $tgllahir,
        "waktulahir" => $waktulahir,
        "kelahiran_ke" => $kelahiranke,
        "berat_bayi" => $beratbayi,
        "NIK_ayah" => $_SESSION['$NIKayah'],
        "NIK_ibu" => $_SESSION['$NIKibu']
    ];
    $db->insert("akta_kelahiran",$data);
    header("location: ../form_saksi.php");
}

elseif($Request == "postsaksi"){
    $NIKsaksi1 = $_POST['NIKsaksi1'];
    $namalengkapsaksi1 = $_POST['namalengkapsaksi1'];
    $agamasaksi1 = $_POST['agamasaksi1'];
    $tempatsaksi1 = $_POST['tempatsaksi1'];
    $tgllhrsaksi1 = $_POST['tgllhrsaksi1'];
    $pekerjaansaksi1 = $_POST['pekerjaansaksi1'];
    $alamatsaksi1 = $_POST['alamatsaksi1'];
    /// data saksi2
    $NIKsaksi2 = $_POST['NIKsaksi2'];
    $namalengkapsaksi2 = $_POST['namalengkapsaksi2'];
    $agamasaksi2 = $_POST['agamasaksi2'];
    $tempatsaksi2 = $_POST['tempatsaksi2'];
    $tgllhrsaksi2 = $_POST['tgllhrsaksi2'];
    $pekerjaansaksi2 = $_POST['pekerjaansaksi2'];
    $alamatsaksi2 = $_POST['alamatsaksi2'];
    $datasaksi1 = [
        "NIK" => $NIKsaksi1,
        "nama" => $namalengkapsaksi1,
        "alamat" => $alamatsaksi1,
        "agama"=> $agamasaksi1,
        "pekerjaan" => $pekerjaansaksi1,
        "tgl_lahir" => $tgllhrsaksi1,
        "tempat_saksi" => $tempatsaksi1
    ];
    $datasaksi2 = [
        "NIK" => $NIKsaksi2,
        "nama" => $namalengkapsaksi2,
        "alamat" => $alamatsaksi2,
        "agama"=> $agamasaksi2,
        "pekerjaan" => $pekerjaansaksi2,
        "tgl_lahir" => $tgllhrsaksi2,
        "tempat_saksi" => $tempatsaksi2
    ];
    $db->insert("data_saksi",$datasaksi1);
    $db->insert("data_saksi",$datasaksi2);
    header("location: ../uploadfile.php");
}elseif($Request == "postupload"){
    $berkas1 = $_POST['berkas1'];
    $berkas2 = $_POST['berkas2'];
    $berkas3 = $_POST['berkas3'];
    $datasaksi1 = [
        "jenis_permohonan" => 'AKTAKELAHIRAN',
        "NIK_pemohon" => $_SESSION['$NIK'],
        "berkas1" => $alamatsaksi1,
        "berkas2"=> $agamasaksi1,
        "berkas3" => $pekerjaansaksi1,
        "berkas_hasil" => $tgllhrsaksi1,
        "no_permohonan" => $tempatsaksi1
    ];
    $db->insert("data_permohonan",$datasaksi1);
    header("location: ../verifikasi.php");
}elseif($Request == "persetujuan"){
    $p = $_POST;
    $data = [
        'no_permohonan'=>$p['noPermohonan'],
        'status'=>$p['addPersetujuan'],
        'id_user'=>$_SESSION['idUser'],
        'keterangan'=>$p['addKeterangan']
    ];
    $db->insert("persetujuan",$data);
    header("location: ../admin.php");
}elseif($Request == "faceVerif"){
    $getImage = $db->select("SELECT * FROM user");
        if (!empty($_FILES['faceVerif'])) {
        $curl = curl_init();
        $file = $_FILES['faceVerif'];
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://face-verification2.p.rapidapi.com/FaceVerification",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "
            -----011000010111000001101001\r\nContent-Disposition: form-data; 
            name=\"".$file."\"\r\n\r\n\r\n
            -----011000010111000001101001\r\nContent-Disposition: form-data; 
            name=\"".$getImage[0]['nama']."\"\r\n\r\n\r\n
            -----011000010111000001101001--\r\n\r\n",
            CURLOPT_HTTPHEADER => [
                "content-type: multipart/form-data; boundary=---011000010111000001101001",
                "x-rapidapi-host: face-verification2.p.rapidapi.com",
                "x-rapidapi-key: 917f3c8964msh3571db277197c93p16b1cdjsn68a8c8ca234c"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
        $_SESSION['info'] = "Berhasil";
        header("location: ../daftar_permohonan.php");
    }
        
}elseif($Request == "uploadFile"){
    if (!empty($_POST)) {
        $_SESSION['msg'] = "Berhasil";
        header("location: ../daftar_permohonan.php");
    }
}
elseif($Request == "verifikasiKTP"){
    $data = [
        'verif' => 1
    ];
    $id = [
        'id_user' => $_POST['idUser']
    ];
    $db->update("user",$data,$id);
    header("location: ../dashboard.php");
}

elseif($Request == "logout"){
    session_destroy();
    header("location:../index.php");
}
