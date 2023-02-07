<?php
session_start();
if(!empty($_SESSION['username']) && !empty($_SESSION['password'])){
    header("location:masuk.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSION</title>
</head>
<body>
    <h1>Login</h1>
    <form action="masuk.php" method="POST">
        <label for="">Username</label><br>
        <input type="text" placeholder="Masukan Username" name="username"><br><br>
        <label for="">Password</label><br>
        <input type="password" placeholder="Masukan Password" name="password"><br><br>
        <input type="submit" name="submit" value="Masuk">
    </form>
</body>
</html>