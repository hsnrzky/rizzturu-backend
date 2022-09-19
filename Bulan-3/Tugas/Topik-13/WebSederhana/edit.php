<?php
require "connect.php";
$dapat = $pdo->GetMine();
// $id = $_GET['id'];

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
    <?php foreach($dapat as $entuk): ?>
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="judul" value="<?=$entuk['judul']?>"><br>
        <label for="kategori">Kategori</label>
        <select name="kategori" id="kategori" value="<?=$entuk['kategori']?>">
            <option>Gaya Hidup</option>
            <option>Kesehatan</option>
            <option>Olahraga</option>
            <option>Mitos Fakta</option>
            <option>Anak-anak</option>
            <option>Dunia Fauna</option>
            <option>Tentang Flora</option>
        </select><br>
        <p>Isi</p>
        <textarea name="isi" cols="30" rows="10" ><?=$entuk['isi']?></textarea>
        <input type="hidden" name="id" value="<?=$entuk['id']?>">
        <button name="edit">Edit</button>
        <?php endforeach ?>
    </form>

</body>
</html>