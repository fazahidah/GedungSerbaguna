<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="css/boostrap.min.css">-->
    <script src="https://kit.fontawesome.com/70b94e884f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css_gedung.css">

    <title>Login</title>
</head>

<body>
    <div class="card" style="width:350px; margin-top: 8%; margin-left: 35%; border-radius:8px; ">
        <div class="card-body bg-dark" style="border-radius:8px;">
            <div class="container">
                <h1 style="margin-top: 3px; margin-left: 45%; color: white"><i class="fas fa-user-circle"></i>
                    <h1>
                        <h4 class="text-center text-white">Login</h4>
                        <form action="apiService.php" method="post">
                            <input type="hidden" name="req" value="login">
                            <div class="form-group text-white">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Username" required="required">
                            </div>

                            <div class="form-group text-white" style="margin-top: 10px">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                            </div>
                            <a class="navbar-brand" href="dashboard.php">
                                <button type="submit" class="btn btn-primary" style="width:100%; margin-top: 20px" value="login">LOGIN</button>
                            </a>
                        </form>
            </div>
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!--<script type="text/javascript" src="js/boostrap.min.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js_gedung.js"></script>
</body>

</html>