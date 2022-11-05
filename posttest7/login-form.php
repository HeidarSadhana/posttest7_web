<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <title>HS Art Gallery | Login</title>
    </head>
    <div id="login_form" class="modal" style="display: flex;">
        <form class="modal-content" action="login.php" method="post">
            <h1 style="text-align: center;margin: 20px;border-bottom: 2px solid maroon;">LOGIN</h1>
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
        
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                
                <button style="margin-top:30px;"class="loginbutton" type="submit">Login</button>
            </div>
            <div style="margin:auto; text-align:center; padding: 20px;">
                <p>Belum Punya Akun?</p>  
                <a href="register-form.php" style="text-decoration: none;">Register</a> 
            </div>
        </form>
    </div>
</html>