<?php
session_start();
if(empty($_SESSION["username"])){
    header("location:login.php");
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
    <form action="connect.php" method="POST">
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="judul"><br>
        <label for="kategori">Kategori</label>
        <select name="kategori" id="kategori">
            <option>Gaya Hidup</option>
            <option>Kesehatan</option>
            <option>Olahraga</option>
            <option>Mitos Fakta</option>
            <option>Anak-anak</option>
            <option>Dunia Fauna</option>
            <option>Tentang Flora</option>
        </select><br>
        <p>Isi</p>
        <textarea name="isi" cols="30" rows="10"></textarea>
        <button name="buat">Buat</button>
    </form>
</body>
</html>