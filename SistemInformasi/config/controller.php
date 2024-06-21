<?php 

function create_data($data){
    global $db;
    $judul = $data['judul'];
    $isi_konten = $data['isi_konten'];
    $tanggal = $data['tanggal'];
    $kategori = $data['kategori'];
    $gambar = upload_gambar_konten();
    if (!$gambar){
        return false;
    }
        
    $query = "INSERT INTO tbl_konten VALUES(null,'$judul','$isi_konten','$tanggal','$kategori','$gambar)";
    mysqli_query($db, $query);
            
    return mysqli_affected_rows($db);
}

function upload_gambar_konten(){
    $namaFile = $_FILES['gambar']['nama'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    $extensiGambarValid = ['jpg', 'jpeg', 'png'];
    $extensiGambar = explode('.', $namaFile);
    $extensiGambar = strtolower(end($extensiGambarValid)){
        if (!in_array($extensiGambar, $extensiGambarValid)){
            echo 
            "<script>
                alert('Format Gambar Tidak Valid');
                document.location.href = 'form-data.php';
            </script>";
            die();
        }

        move_uploaded_file($tmpName, 'assets/gambar/' . $namaFile);
        return $namaFile;
    }
}

?>