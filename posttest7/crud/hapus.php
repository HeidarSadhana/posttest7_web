<?php
    session_start();
    require "../koneksi.php";

    $id = $_GET['id'];
    
    $data = mysqli_query($conn, "SELECT * FROM galeri WHERE id=$id");
    $galeri = mysqli_fetch_assoc($data);
    unlink('../image/'.$galeri['gambar']);

    $berhasil = mysqli_query($conn, "DELETE FROM galeri WHERE id=$id");

    if($berhasil){
        header('Location: ../admin.php');
    }
?>