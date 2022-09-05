<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST & GET</title>
</head>
<body>
    <h1>PAI Express</h1>
    <form method="GET" action="">
        <p>Nama Kurir : <input type="text" name="kurir"></p>
        <p>Nama Pengirim : <input type="text" name="nama"></p>
        <p>Asal Barang : 
            <select name="asal">
                <option>Aceh</option>
                <option>Bali</option>
                <option>Bangka Belitung</option>
                <option>Banten</option>
                <option>Bengkulu</option>
                <option>Jawa Tengah</option>
                <option>Kalimantan Tengah</option>
                <option>Sulawesi Tengah</option>
                <option>Jawa Timur</option>
                <option>Kalimantan Timur</option>
                <option>Nusa Tenggara Timur</option>
                <option>Gorontalo</option>
                <option>DKI Jakarta</option>
                <option>Jambi</option>
                <option>Lampung</option>
                <option>Maluku</option>
                <option>Sulawesi Tengah</option>
                <option>Sumatera Utara</option>
                <option>Papua</option>
                <option>Riau</option>
                <option>Kepulauan Riau</option>
                <option>Sulawesi Tenggara</option>
                <option>Kalimantan Selatan</option>
                <option>Sulawesi Selatan</option>
                <option>Sumatera Selatan</option>
                <option>Jawa Barat</option>
                <option>Kalimantan Barat</option>
                <option>Nusa Tenggara Barat</option>
                <option>Papua Barat</option>
                <option>Sulawesi Barat</option>
                <option>Sumatera Barat</option>
                <option>DI Yogyakarta</option>
                <option>Kalimantan Utara</option>
                <option>Maluku Utara</option>
            </select>
        </p>
        <p>Tujuan Barang : 
            <select name="tujuan">
                <option>Aceh</option>
                <option>Bali</option>
                <option>Bangka Belitung</option>
                <option>Banten</option>
                <option>Bengkulu</option>
                <option>Jawa Tengah</option>
                <option>Kalimantan Tengah</option>
                <option>Sulawesi Tengah</option>
                <option>Jawa Timur</option>
                <option>Kalimantan Timur</option>
                <option>Nusa Tenggara Timur</option>
                <option>Gorontalo</option>
                <option>DKI Jakarta</option>
                <option>Jambi</option>
                <option>Lampung</option>
                <option>Maluku</option>
                <option>Sulawesi Tengah</option>
                <option>Sumatera Utara</option>
                <option>Papua</option>
                <option>Riau</option>
                <option>Kepulauan Riau</option>
                <option>Sulawesi Tenggara</option>
                <option>Kalimantan Selatan</option>
                <option>Sulawesi Selatan</option>
                <option>Sumatera Selatan</option>
                <option>Jawa Barat</option>
                <option>Kalimantan Barat</option>
                <option>Nusa Tenggara Barat</option>
                <option>Papua Barat</option>
                <option>Sulawesi Barat</option>
                <option>Sumatera Barat</option>
                <option>DI Yogyakarta</option>
                <option>Kalimantan Utara</option>
                <option>Maluku Utara</option>
            </select>
        </p>
        <input type="submit" value="Kirim">
    </form><br>
    <h3>Harga ongkir</h3>
    <form method="POST" action="">
        <p>
            Jenis barang : <select name="jenis">
                <option>Makanan</option>
                <option>Elektronik</option>
                <option>Barang Antik</option>
                <option>Lainnya</option>
            </select>
        </p>
        <p>Harga : <input type="text" name="harga"></p>
    <input type="submit" value="Kirim">
</form><br><br>

    <p><?php echo "Nama Kurir : ". $_GET["kurir"] ?></p>
    <p><?php echo "Nama Pengirim : ". $_GET["nama"] ?></p>
    <p><?php echo "Asal Barang : ". $_GET["asal"] ?></p>
    <p><?php echo "Tujuan Barang : ". $_GET["tujuan"] ?></p>
    <p><?php echo "Jenis Barang : ". $_POST["jenis"] ?></p>
    <p><?php echo "Total Harga Ongkir : ". $_POST["harga"] ?></p>
</body>
</html>