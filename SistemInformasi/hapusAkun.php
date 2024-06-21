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

    $id_admin = (int)$_GET["id_admin"];
    if (delete_akun($id_admin) > 0){
        echo 
        "<script>
            alert('Akun berhasil dihapus');
            document.location.href = 'register.php';
        </script>";
    } else {
        echo 
        "<script>
            alert('Akun gagal dihapus');
            document.location.href = 'register.php';
        </script>";
    }
    
?>