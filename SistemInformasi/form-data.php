<?php 

session_start();
if (!isset($_SESSION["login"])){
    echo 
    "<script>
        alert('Login terlebih dahulu');
        document.location.href = 'login.php';
    </script>";

    exit;
}

$title = 'Halaman Formulir Pendataan';
inlcude 'layout/header.php';

if(!isset($_POST['tambah'])){
    if(create_data($_POST) > 0){
        echo 
        "<script>
            alert('Data Konten Berhasil Ditambahkan');
            document.location.href = 'form-data.php';
        </script>";
    } else {
        echo
        "<script>
            alert('Data Konten Gagal Ditambahkan');
            document.location.href = 'form-data.php';
        </script>";
    }
}
?>