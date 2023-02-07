<?php
if(isset($_POST['submit'])){
    $nama = $_POST['username'];
    $pass = $_POST['password'];
    setcookie("username",$nama,time()+ 86400,"/");
    setcookie("password",$pass,time()+ 86400,"/");
}
if(!empty($_COOKIE['username']) && !empty($_COOKIE['password'])){
    echo "Selamat Datang Wahai ".$_COOKIE['username'];
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
    <form action="" method="GET">
        <input type="submit" name="keluar" value="Keluar">
    </form>
    <?php
    if(isset($_GET['keluar'])){
        setcookie("username","",time()-86400,"/");
        setcookie("password","",time()-86400,"/");
        header("location:login.php");
    }
    ?>
</body>
</html>