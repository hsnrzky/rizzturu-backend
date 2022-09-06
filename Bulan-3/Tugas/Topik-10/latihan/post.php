<?php
require "sambung.php";
$barang = $pdo->GetData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD POST</title>
</head>
<body>
    
    <form action="sambung.php" method="POST">

    <label for="namaBarang">Nama Barang</label>
    <input type="text" name="namaBarang" placeholder="Nama Barang">
    <button type="submit" name="submit">Kirim!</button>
    <br><br>
    <label for="namaBarang">Hapus Barang</label>
    <input type="text" name="Id" placeholder="Masukan Id!">
    <button type="submit" name="delete">Hapus!</button>
    <br><br>
    <label for="namaBarang">Update Barang</label>
    <input type="text" name="namaBarang" placeholder="Ganti Barang!">
    <input type="text" name="Id" placeholder="Id?">
    <button type="submit" name="update">Update!</button>
    </form>
    <br><br>
    <table class="table-post" border="1" cellspacing="0" cellpadding="5">
        <thead class="post">
            <th>No</th>
            <th>Nama Barang</th>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            <?php foreach($barang as $item): ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $item['namaBarang']; ?></td>
            </tr>
            <?php $no++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>