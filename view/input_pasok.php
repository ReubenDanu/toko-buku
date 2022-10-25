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

    <title>Input Pasok</title>
</head>
<body>
<?php
include './sidebar.php';
$id_pasok = $_GET['id_pasok'];
$id_pasok += 1;
?>

<section class="home-section">
    <div class="container input">
        <div class="header">
            <span class="span">Tambah Pasok</span>
        </div>
        <form action="../controller/simpan_pasok.php" method="post">
            <label for="id_pasok"><span>ID Pasok</span><input type="text" maxlength="30" size="30" name="id_pasok" placeholder="ID Pasok" readonly value="<?php echo $id_pasok?>"/></label>
            <label for="id_distributor"><span>ID Distributor</span><input type="text" maxlength="30" size="30" name="id_distributor" placeholder="ID Distributor" /></label>
            <label for="id_buku"><span>ID Buku</span><input type="text" maxlength="30" size="30" name="id_buku" placeholder="ID Buku" /></label>
            <label for="jumlah"><span>Jumlah</span><input type="text" maxlength="30" size="30" name="jumlah" placeholder="jumlah" /></label>
            <label for="tanggal"><span>Tanggal</span><input type="date" maxlength="30" size="30" name="tanggal" placeholder="tanggal" /></label>
            <input type="submit" value="SIMPAN" />
            </pre>
        </form>
    </div>
</section>    
</body>
</html>

