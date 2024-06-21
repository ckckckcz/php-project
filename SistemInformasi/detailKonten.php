<?php 
session_start();

include 'layout/header.php';
if (!isset($_SESSION["login"])){
    echo "<script>
        alert('Kamu harus login terlebih dahulu !');
        document.location.href = 'login.php';
    </script>";
    exit;
}

$title = "Halaman Detail Konten";
$id_konten = (int)$_GET["id_konten"];
$data_konten = query("SELECT * FROM tbl_konten WHERE id_konten = '$id_konten'");

?>
