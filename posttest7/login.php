<?php 
    require('koneksi.php');
    $username = $_POST['uname'];
    $password = $_POST['psw'];
    $db = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");

    if(mysqli_num_rows($db) != 0){ 
        $akun = mysqli_fetch_assoc($db);
        
        if(password_verify($password, $akun["password"])){
            if($akun['admin'] == 1){
                session_start();
                $_SESSION["adminLogged"] = "1"; 
                header('Location: admin.php'); 
                exit();
            }else{
                session_start();
                $_SESSION["userLogged"] = "1"; 
                $_SESSION["user"] = $username; 
                header('Location: index.php'); 
                exit();
            } 
        }else{
            header('Location: ' . $_SERVER['HTTP_REFERER']); 
            exit(); 
        }
    } else {
        header('Location: ' . $_SERVER['HTTP_REFERER']); 
        exit(); 
    }
?>