<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style//input_pasok.css">
        <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />

    <title>Edit Pasok</title>
</head>
<body>
<?php
include './sidebar.php';
$id_pemasok = $_GET['id_pemasok'];
$id_distributor = $_GET['id_distributor'];
$id_buku = $_GET['id_buku'];
$jumlah = $_GET['jumlah'];
$tanggal = $_GET['tanggal'];
?>

<section class="home-section">
    <div class="container input">
        <div class="header">
            <span class="span">Edit Pasok</span>
        </div>
        <form action="../controller/simpan_pasok.php" method="post">
            <label for="id_pasok"><span>ID Pasok</span><input type="text" maxlength="30" size="30" name="id_pasok" placeholder="ID Pasok" readonly value="<?php echo $id_pemasok?>"/></label>
            <label for="id_distributor"><span>ID Distributor</span><input type="text" maxlength="30" size="30" name="id_distributor" placeholder="ID Distributor" value="<?php echo $id_distributor?>" /></label>
            <label for="id_buku"><span>ID Buku</span><input type="text" maxlength="30" size="30" name="id_buku" placeholder="ID Buku" value="<?php echo $id_buku?>" /></label>
            <label for="jumlah"><span>Jumlah</span><input type="text" maxlength="30" size="30" name="jumlah" placeholder="jumlah" value="<?php echo $jumlah?>" /></label>
            <label for="tanggal"><span>Tanggal</span><input type="date" maxlength="30" size="30" name="tanggal" placeholder="tanggal" value="<?php echo $tanggal?>" /></label>
            <input type="submit" value="SIMPAN" />
            </pre>
        </form>
    </div>
</section>    
</body>
</html>

