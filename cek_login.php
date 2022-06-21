<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "select * from login where username='$username' and password='$password'");
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
