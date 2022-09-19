<?php
session_start();
require "connect.php";
$artikel = $pdo->GetData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TuruDx</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:italwght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav>
        <a href="mine.php" class="mine">Mine</a>
        <a href="create.php" class="create">Create</a>
        <a href="login.php" class="login"><?php if(empty($_SESSION)){
            echo "Login";}else{echo"Logout";} ?></a>
    </nav>
    
    <div class="allin">
        <div class="knama">
            <?php if(!empty($_SESSION)){
                echo "<h3>hi,<span>".$_SESSION['username']."</span></h3><br>
            <p>Welcome</p><br>
            <p>".$_SESSION['email']."</p>";
            }
            else{
                echo "<h3>Login Dulu!</h3>";
            } ?>
        </div>        
        <div class="art">
            <?php $tabel = 1 ?>
            <?php foreach($artikel as $art): ?>
        <div class="kart">
            <div><h3><?= $art['judul']; ?></h3></div>
            <p><?= $art['isi']; ?></p><br>
            <h6><?= $art['username'] ?></h6>
            <h6><?= $art['kategori']; ?></h6><br>
            <?php if($_SESSION['username'] == $art['username']): ?>
            <a href="edit.php?id=<?= $art['id'] ?>">edit</a>
            <a href="hapus.php?id=<?= $art['id']?>">delete</a>
            <?php endif ?>
        </div>
        <?php $tabel++; ?>
        <?php endforeach; ?>
        </div>
    </div>
</body>
</html>