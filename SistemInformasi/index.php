<?php 

session_start();
if(!isset($_SESSION["login"])){
    echo
    "<script>
        alert('Anda harus login terlabih dauhulu');
        document.location.href = 'login.php';
    </script>";
    exit;
} 
$title = 'Dashboard';
include "layout/header.php";

?>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pendapatan Setiap Bulan</div>
                            <div class="h5 mb-0 font-weight bold text-gray-800">$40,000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


