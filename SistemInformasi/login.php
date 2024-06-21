<?php 
include 'config/config.php';

if(isset($_SESSION["login"])){
    header('Location: index.php');
    exit();
}

if(!isset($_SESSION['login'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    
    $hasil = mysqli_query($db, "SELECT * FROM tbl_admin WHERE useranme = '$username'");

    if(mysqli_num_rows($hasil) === 1){
        $row = mysqli_fetch_assoc($result);
        if(verifikasi_password($password, $row["password"])){
            $_SESSION["login"] = true;
            $_SESSION["id_admin"] = $row["id_admin"];
            $_SESSION["nama"] = $row["nama"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["level"] = $row["level"];

            header("Location index.php");
            exit;
        }
    }
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="assets/gambar/user-icon.png" type="image/x-icon" />
    <title>Login</title>
  </head>
  <body class="bg-gradient-success">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-10">
          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <div class="row">
                <div class="col-lg-12 d-none d-lg-block"></div>
                <div class="col-lg-12">
                  <div class="p-5">
                    <div class="text-center mv-4">
                      <img src="assets/gambar/user-icon.png" alt="logo" width="50%" />
                    </div>
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Login Admin</h1>
                    </div>

                    <?php if (isset($error)) : ?>
                    <div class="mb-2 alert alert-danger alert dismissible fade show align-items-center" role="alert">
                      <i><b>Username atau Password SALAH</b></i>
                    </div>
                    <?php endif; ?>
                    <form class="user" action="" method="POST">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="username" placeholder="username..." required />
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control form-control-user" name="password" placeholder="password..." required />
                      </div>
                      <button type="submit" name="login" class="btn btn-success btn-user btn-block">Login</button>
                    </form>
                    <hr />
                    <div class="text-center">
                      <a class="small text-dark" href="#"
                        >Copyright &copy; Riovaldo Alfiyan Fahmi Rahman 2024 -
                        <?= date('Y'); ?></a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
