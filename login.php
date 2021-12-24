<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="icon" type="image/x-icon" href="Icon.png" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <title>Login Form</title>
</head>
<body>
    <div class="container">
        <div class="leftside">
            <div class="signIn">
                <div class="logo">
                    <a href="index.php"><img src="Logo.png" alt="Logo" height="90"></a>
                </div>
                <form action="handlelogin.php" method="post">
                    <div>
                        <label for="email">Email </label>
                        <input type="text" name="email" class="form__input" id="email">
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="pass" class="form__input" id="password">
                    </div>
                    <button type="submit" class="submit__button">Sign In</button>
                </form>
                <div class="signIn__link">
                    <a href="">Forget Password</a>
                    <a href="admin.html">Admin Login</a>
                </div>
                <div class="or">
                    <hr class="bar" />
                    <span>OR</span>
                    <hr class="bar"/>
                </div>
                <a href="create.php" class="create__button">Create an account</a>
            </div>

            <footer class="footer">
                <p>Copyright &copy; 2021, City Palace All Rights Reserved</p>
            </footer>
        </div>
    </div>
</body>
</html>
<?php
if (stripos($_SERVER['REQUEST_URI'], 'signup' )!==false){
    $fp=$_GET['signup'];
    if($fp=="true"){ echo '<script>swal("SUCCESS", "Your account have been successfully created.Login to continue", "success");</script>';}
    else echo '<script>swal("ERROR", "Unable to create account! Try again.", "error");</script>';
    }
    ?>