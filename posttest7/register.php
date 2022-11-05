<?php 
    require('koneksi.php');
    $email = $_POST['email'];
    $username = $_POST['uname'];
    $password = $_POST['psw'];
    $cpsw = $_POST['cpsw'];

    $db = mysqli_query($conn, "SELECT * FROM user WHERE email='$email' OR username='$username'");
    if($password === $cpsw){
        if(!mysqli_fetch_assoc($db)){ 
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $tambah = mysqli_query($conn, "INSERT INTO user VALUES('','$email','$username','$hash', 0)");
            if(mysqli_affected_rows($conn) > 0){
                echo "<script>
                    alert('Registrasi Berhasil, Silahkan Login');
                    document.location.href = 'login-form.php';
                </script>";
                exit();
            }
        } else {
            echo "<script>
                    alert('Username/Email Telah Digunakan');
                    document.location.href = 'register-form.php';
                </script>";
            exit(); 
        }
    }else{
        echo "<script>
            alert('Konfirmasi Password Salah');
            document.location.href = 'register-form.php';
        </script>";
        exit();
    }
?>