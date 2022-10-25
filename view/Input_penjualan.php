<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style//input_penjualan.css">
        <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />

    <title>Input Penjualan</title>
</head>
<body>
<?php
include './sidebar.php';
$id_penjualan = $_GET['id_penjualan'];
$id_penjualan += 1;
?>

<section class="home-section">
    <div class="container input">
        <div class="header">
            <span class="span">Tambah Penjualan</span>
        </div>
        <form action="../controller/simpan_penjualan.php" method="post">
            <label for="id_penjualan"><span>ID Penjualan</span><input type="text" maxlength="30" size="30" name="id_penjualan" placeholder="ID Penjualan" readonly value="<?php echo $id_penjualan?>"/></label>
            <label for="id_user"><span>ID User</span><input type="text" maxlength="30" size="30" name="id_user" placeholder="ID User" /></label>
            <label for="id_buku"><span>ID Buku</span><input type="text" maxlength="30" size="30" name="id_buku" placeholder="ID Buku" /></label>
            <label for="tanggal"><span>Tanggal</span><input type="date" maxlength="30" size="30" name="tanggal" placeholder="Tanggal" /></label>
            <label for="jumlah"><span>Jumlah</span><input type="text" maxlength="30" size="30" name="jumlah" placeholder="Jumlah" /></label>
            <input type="submit" value="SIMPAN" />
            </pre>
        </form>
    </div>
</section>    
</body>
</html>

