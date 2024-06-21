<?php 
include 'layout/header.php';

if(!isset($_SESSION["login"])){
    echo "<script>
        alert('Kamu harus login terlebih dahulu !');
        document.location.href = 'login.php';
    </script>";
    exit;
}

$title = 'Halaman Mengubah Data Formulir'
$id_konten = (int)$_GET["id_konten"];
$data_konten = query("SELECT * FROM tbl_konten WHERE id_konten = '$id_konten'");

if (isset($_POST['ubah'])){
    if (update_data($_POST) > 0){
        echo 
        "<script>
            alert('Data Konten Berhasil Diubah');
            document.location.href = 'form-ubah.php?id_konten=$id_konten';
        </script>";
    } else {
        echo 
        "<script>
            alert('Data Konten Gagal Diubah');
            document.location.href = 'form-ubah.php?id_konten=$id_konten';
        </script>";
    }
}
?>