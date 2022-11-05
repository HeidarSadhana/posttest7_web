<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <title>HS Art Gallery | Login</title>
    </head>
    <div id="login_form" class="modal" style="display: flex;">
        <form class="modal-content" action="register.php" method="post">
            <h1 style="text-align: center;margin: 20px;border-bottom: 2px solid maroon;">REGISTER</h1>
            <div class="container">
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email" required>

                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
        
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
        
                <label for="psw"><b>Confirm Password</b></label>
                <input type="password" placeholder="Enter Password" name="cpsw" required>
                
                <button style="margin-top:30px;"class="loginbutton" type="submit">Register</button>
            </div>
            <div style="margin:auto; text-align:center; padding: 20px;">
                <p>Sudah Punya Akun?</p>  
                <a href="login-form.php" style="text-decoration: none;">Login</a> 
            </div>
        </form>
    </div>
</html>