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

    <title>Edit Buku</title>
</head>
<body>
<?php
include './sidebar.php';
$id_buku = $_GET['id_buku'];
$judul_buku = $_GET['judul_buku'];
$no_isbn = $_GET['no_isbn'];
$penulis = $_GET['penulis'];
$penerbit = $_GET['penerbit'];
$tahun_terbit = $_GET['tahun_terbit'];
$stok = $_GET['stok'];
$harga_pokok = $_GET['harga_pokok'];
$harga_jual = $_GET['harga_jual'];
$harga_diskon = $_GET['diskon'];
?>

<section class="home-section">
    <div class="container input">
        <div class="header">
            <span class="span">Tambah Buku</span>
        </div>
        <form action="../controller/simpan_buku.php" method="post">
        <label for="id_buku"><span>ID Buku</span><input type="text" maxlength="30" size="30" name="id_buku" placeholder="ID Buku" value="<?php echo $id_buku?>"/></label>
            <label for="judul_buku"><span>judul buku</span><input type="text" maxlength="30" size="30" name="judul_buku" placeholder="Judul Buku"value="<?php echo $judul_buku?>" /></label>
            <label for="no_isbn"><span>no isbn</span><input type="text" maxlength="30" size="30" name="no_isbn" placeholder="NO ISBN"value="<?php echo $no_isbn?>" /></label>
            <label for="Penulis"><span>penulis</span><input type="text" maxlength="30" size="30" name="penulis" placeholder="Penulis" value="<?php echo $penulis?>"/></label>
            <label for="Penerbit"><span>penerbit</span><input type="text" maxlength="30" size="30" name="penerbit" placeholder="Penerbit" value="<?php echo $penerbit?>"/></label>
            <label for="tahun_terbit"><span>tahun terbit</span><input type="date" maxlength="30" size="30" name="tahun_terbit" placeholder="Tahun Terbit"value="<?php echo $tahun_terbit?>" /></label>
            <label for="stok"><span>stok</span><input type="text" maxlength="30" size="30" name="stok" placeholder="Stok" value="<?php echo $stok?>"/></label>
            <label for="harga_pokok"><span>harga pokok</span><input type="text" maxlength="30" size="30" name="harga_pokok" placeholder="Harga Pokok"value="<?php echo $harga_pokok?>" /></label>
            <label for="harga_jual"><span>harga jual</span><input type="text" maxlength="30" size="30" name="harga_jual" placeholder="Harga Jual"value="<?php echo $harga_jual?>" /></label>
            <label for="diskon"><span>diskon</span><input type="text" maxlength="30" size="30" name="diskon" placeholder="Diskon" value="<?php echo $harga_diskon?>"/></label>
            <input type="submit" value="SIMPAN" />
            </pre>
        </form>
    </div>
</section>    
</body>
</html>

