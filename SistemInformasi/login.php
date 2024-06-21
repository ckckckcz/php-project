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

