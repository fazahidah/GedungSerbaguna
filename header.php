<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pencatatan Penyewaan Gedung Serbaguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-xl-auto px-sm-auto px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-light min-vh-100">
                    <div class="card text-dark bg-light mb-2" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align:center">Selamat datang</h5>
                            <p class="card-text" style="text-align:center">Pencatatan Gedung Serbaguna</p>
                        </div>
                    </div>
                    <ul class="nav nav-pills flex-column d-md-block mb-sm-auto align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="dashboard1.php" class="nav-link active text-white bg-transparent">
                                <i class="far fa-home"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                                <hr class="bg-light">
                            </a>
                        </li>
                        <li>
                            <a href="daftar_pelanggan.php" class="nav-link active text-white bg-transparent">
                                <i class="far fa-table"></i> <span class="ms-1 d-none d-sm-inline">Daftar Pelanggan</span>
                                <hr class="bg-light">
                            </a>
                        </li>
                        <li>
                            <a href="penyewaan1.php" class="nav-link active text-white bg-transparent">
                                <i class="fas fa-clipboard-list"> </i> <span class="ms-1 d-none d-sm-inline">Penyewaan</span>
                                <hr class="bg-light">
                            </a>
                        </li>
                        <li>
                            <a href="daftar_transaksi1.php" class="nav-link active text-white bg-transparent">
                                <i class="far fa-table"></i> <span class="ms-1 d-none d-sm-inline">Daftar Transaksi</span>
                                <hr class="bg-light">
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://tinyimg.io/i/jhOUIt6.png" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">Admin</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="keluar.php">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>

</body>