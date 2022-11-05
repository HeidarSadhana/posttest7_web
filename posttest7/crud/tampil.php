<?php
    if(!isset($_SESSION["koleksi"])){
        $arr = [[]];
    }else{
        $arr = $_SESSION["koleksi"];
    }

    for($row = 0; $row < count($arr);$row++){
        echo '<div class="box">';
        for($a = 0; $a < count($arr[$row]); $a++){ 
?>

            <div class="poto">

<?php  
        if(isset($_SESSION['adminLogged'])){
?>

            <div class="tombol">
                <a href="crud/hapus.php?id='<?php echo $arr[$row][$a]['id']; ?>'"><i class="fa fa-trash"></i></a>
                <a href="crud/ubah.php?id='<?php echo $arr[$row][$a]['id']; ?>'"><i class="fa fa-pencil"></i></a>
            </div>

<?php
        }
?>    
                <img src=<?php echo 'image/'. $arr[$row][$a]['gambar']?>>
                <h2><?php echo $arr[$row][$a]['judul'] ?></h2>
                <h3 style = "margin-bottom:10px;color:aliceblue;"><?php echo $arr[$row][$a]['jenis'] ?></h3>
                    <div class="isi" style="margin-bottom: 5px;">
                        <p><?php echo $arr[$row][$a]['artis'] ?></p>
                        <p><?php echo $arr[$row][$a]['email'] ?></p>
                    </div>
                <h2><?php echo $arr[$row][$a]['harga'] ?> </h2>
                <h3 style = "margin-bottom:10px;color:aliceblue;">Tanggal Upload : <?php echo $arr[$row][$a]['pameran'] ?></h3>
            </div>

<?php  
        }
        if(isset($_SESSION['adminLogged']) && $row == count($arr)-1){
            echo '<button onclick="document.getElementById(\'form\').style.display=\'flex\'" class="tambah">+';
        } 
        echo '</div>';
    }
?>

