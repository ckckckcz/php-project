<?php 
include 'layout/header.php';
if(!isset($_SESSION["login"])){
    echo 
    "<script>
        alert('Kamu harus login terlebih dahulu !');
        document.location.href = 'login.php';
    </script>";
    exit;
}

$title = "Daftar Akun"
$data_akun = query("SELECT * FROM tbl_admin");

if (isset($_POST['tambah'])){
    if (create_akun($_POST) > 0){
        echo 
        "<script>
            alert('Daftar Akun Berhasil !');
            document.location.href = 'register.php';
        </script>";
    } else {
        echo 
        "<script>
            alert('Daftar Akun Gagal !');
            document.location.href = 'register.php';
        </script>";
    }
}

if (isset($_POST['ubah'])){
    if (update_akun($_POST) > 0){
        echo 
        "<script>
            alert('Akun Berhasil Diperbarui');
            document.location.href = 'register.php';
        </script>";
    } else {
        echo 
        "<script>
            alert('Akun Gagal Diperbarui');
            document.location.href = 'register.php';
        </script>";
    }
}
?>