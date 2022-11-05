<?php
    require ("../koneksi.php");
    $id = $_GET['id'];
    $data = mysqli_query($conn, "SELECT * FROM galeri WHERE id=$id");
    $galeri = mysqli_fetch_assoc($data);
    if(isset($_POST['submit'])){
        $artis = $_POST['artis'];
        $judul = $_POST['judul'];
        $jenis = $_POST['jenis'];
        $harga = $_POST['harga'];
        $tanggal = $_POST['tgl_pameran'];
        $email = $_POST['email'];

        $tambah = "UPDATE galeri SET artis='$artis', judul='$judul', jenis='$jenis', harga='$harga', pameran= date'$tanggal' WHERE id=$id";

        if($_FILES['gambar']['size']!=0){

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
                    unlink('../image/'.$galeri['gambar']);
                    move_uploaded_file($tmp_name, '../image/' . $nama_file);
    
                    $tambah = "UPDATE galeri SET 
                                artis='$artis', 
                                judul='$judul', 
                                jenis='$jenis', 
                                harga='$harga', 
                                pameran= date'$tanggal', 
                                gambar='$nama_file' WHERE id=$id";
                }
            }
        }
        $upload = mysqli_query($conn, $tambah);
        if($upload){
            header('Location: ../admin.php');
            exit();
        }
    }
?>

<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=800" />
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>HS Art Gallery | Admin</title>
        <script src="js/script.js"></script>
    </head>
    
    <div id="ubah" class="modal" style="display: flex;">
        <form class="modal-content" action="" method="post" style="" enctype="multipart/form-data">
            <div class="container">
                <label for="artis"><b>Nama Pembuat / Artis</b></label>
                <input type="text" placeholder="Nama Lengkap" name="artis" value="<?php echo $galeri['artis']; ?>" required>
            
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Email" name="email" value="<?php echo $galeri['email']; ?>" required>
                
                <label for="judul"><b>Judul Karya</b></label>
                <input type="text" placeholder="Judul Karya" name="judul" value="<?php echo $galeri['judul']; ?>" required>
                
                <label for="harga"><b>Harga Karya</b></label>
                <input type="number" placeholder="Harga Karya" name="harga" value="<?php echo $galeri['harga']; ?>" required>
                
                <label for="gambar"><b>Jenis Karya</b></label>
                <div class="dimensi">
                    <div>
                        <label for="radio1">2 Dimensi</label>
                        <input type="radio" name="jenis" id="radio1" value="2 Dimensi" <?php if($galeri['jenis'] == "2 Dimensi"){ echo 'checked';}?> required>
                    </div>
                    <div>
                        <label for="radio2">3 Dimensi</label>
                        <input type="radio" name="jenis" id="radio2" value="3 Dimensi" <?php if($galeri['jenis'] == "3 Dimensi"){ echo 'checked';}?> required>
                    </div>
                </div>
                
                <input type="hidden" name="tgl_pameran" value="<?php echo date("Y-m-d",strtotime("today"));?>">
                <label for="file"><b>Gambar</b></label>
                <input type="file" name="gambar">
                
                <div class="btn">
                    <button class="loginbutton" type="submit" name="submit">Perbarui</button>
                    <a href="../admin.php" class="cancelbtn" style="text-decoration:none;">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</html>