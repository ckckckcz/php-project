<?php 

session_start();
if (!isset($_SESSION["login"])){
    echo 
    "<script>
        alert('Login terlebih dahulu');
        document.location.href = 'login.php';
    </script>";
}
?>