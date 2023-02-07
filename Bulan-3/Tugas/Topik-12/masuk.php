<?php
session_start();
if(isset($_POST['submit'])){
    $nama = $_POST['username'];
    $pass = $_POST['password'];
    $_SESSION['username'] = $nama;
    $_SESSION['password'] = $pass;

}
if(!empty($_SESSION['username']) && !empty($_SESSION['password'])){
    echo "Selamat Datang Wahai ".$_SESSION['username'];
}
else {
    echo "REFRSH DULU GA SI!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="hapus.php" method="GET">
        <input type="submit" name="keluar" value="Keluar">
    </form>
</body>
</html>