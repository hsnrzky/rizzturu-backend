<?php
require "connect.php";
$logout = $pdo->LogoutAccount();
if(!empty($_SESSION)){
    $logout;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:italwght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="all">
        <div class="wellcome">
            <a href="inde.php" class="turu">Turu<span>Dx</span></a>
            <div class="login">
                <div class="divwell">
                    <p class="fwell">Sign In</p>
                </div>
                <form action="connect.php" method="POST">
                    <div class="divuser">
                        <p class="fuser">Username </p>
                        <input type="text" name="username" class="inputuser" placeholder="masukan username" required>
                    </div>
                    <div class="divpass">
                        <p class="fpass">Password </p>
                        <input type="password" name="password" class="inputpass" placeholder="masukan password" required>
                    </div>
                    <p><?php if(isset($_GET["error"])){echo "password salah";}; ?></p>
                    <div class="ingat">
                        <input type="checkbox" id="ingat" name="ingat">
                        <label for="ingat" class="fingat">remember me!</label> 
                        <input type="submit" value="Login" class="sbutton" name="login">
                    </div>
                </form>
                <div class="divregis">
                    <a href="signup.php" class="rebutt">don't have account?</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>