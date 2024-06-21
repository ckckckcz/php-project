<?php 

    require 'config/config.php';
    if (!isset($_SESSION["login"])){
        echo 
    "<script>
        alert('Login terlebih dahulu');
        document.location.href = 'login.php';
    </script>";
    exit;
    }

    $id_konten = (int)$_GET["id_konten"];
    if (delete_konten($id_konten) > 0){
        echo 
        "<script>
            alert('Konten berhasil dihapus');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo 
        "<script>
            alert('Konten gagal dihapus');
            document.location.href = 'index.php';
        </script>";
    }
?>