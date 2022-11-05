<?php
    session_start();
    date_default_timezone_set("Asia/Makassar");
    require "../koneksi.php";
    
    $artis = $_POST['artis'];
    $judul = $_POST['judul'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];
    $tanggal = $_POST['tgl_pameran'];
    $email = $_POST['email'];

    $format_file = $_FILES['gambar']['name'];
    $tmp_name = $_FILES['gambar']['tmp_name'];
    $size = $_FILES['gambar']['size'];
    $file = urlencode($judul);
    $type = explode('.',$format_file);
    $nama_file = "$file.$type[1]";

    $format = array('jpg', 'png', 'jpeg');
    $max_size = 2000000;

    if(in_array($type[1], $format) === true) {
        if($size < $max_size){
            move_uploaded_file($tmp_name, '../image/' . $nama_file);
            $tambah = "INSERT INTO galeri VALUES('','$artis','$judul','$jenis','$email','$harga',date '$tanggal','$nama_file')";
            $upload = mysqli_query($conn, $tambah);

            header('Location: ../admin.php');
            exit();
        }
    }
?>