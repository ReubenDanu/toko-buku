<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style//input_buku.css">
        <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />

    <title>Input Buku</title>
</head>
<body>
<?php
include './sidebar.php';
$id_buku = $_GET['id_buku'];
$id_buku += 1;
?>

<section class="home-section">
    <div class="container input">
        <div class="header">
            <span class="span">Tambah Buku</span>
        </div>
        <form action="../controller/simpan_buku.php" method="post">
            <label for="id_buku"><span>ID Buku</span><input type="text" maxlength="30" size="30" name="id_buku" placeholder="ID Buku" readonly value="<?php echo $id_buku?>"/></label>
            <label for="judul_buku"><span>judul buku</span><input type="text" maxlength="30" size="30" name="judul_buku" placeholder="Judul Buku" /></label>
            <label for="no_isbn"><span>no isbn</span><input type="text" maxlength="30" size="30" name="no_isbn" placeholder="NO ISBN" /></label>
            <label for="Penulis"><span>penulis</span><input type="text" maxlength="30" size="30" name="penulis" placeholder="Penulis" /></label>
            <label for="Penerbit"><span>penerbit</span><input type="text" maxlength="30" size="30" name="penerbit" placeholder="Penerbit" /></label>
            <label for="tahun_terbit"><span>tahun terbit</span><input type="date" maxlength="30" size="30" name="tahun_terbit" placeholder="Tahun Terbit" /></label>
            <label for="stok"><span>stok</span><input type="text" maxlength="30" size="30" name="stok" placeholder="Stok" /></label>
            <label for="harga_pokok"><span>harga pokok</span><input type="text" maxlength="30" size="30" name="harga_pokok" placeholder="Harga Pokok" /></label>
            <label for="harga_jual"><span>harga jual</span><input type="text" maxlength="30" size="30" name="harga_jual" placeholder="Harga Jual" /></label>
            <label for="diskon"><span>diskon</span><input type="text" maxlength="30" size="30" name="diskon" placeholder="Diskon" /></label>
            <input type="submit" value="SIMPAN" />
            </pre>
        </form>
    </div>
</section>    
</body>
</html>

