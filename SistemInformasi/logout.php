<?php 
session_start();

if(!isset($_SESSION["login"])){
    if(!isset($_SESSION["login"])){
        echo "<script>
            alert('Kamu harus login terlebih dahulu !');
            document.location.href = 'login.php';
        </script>";
        exit;
    }
}

$_SESSION = [];
session_unser();
session_destroy();
header("Location:login.php");
?>