<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style//input_distributor.css">
        <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />

    <title>Input Distributor</title>
</head>
<body>
<?php
include './sidebar.php';

$id_distributor = $_GET['id_distributor'];
$nama_distributor = $_GET['nama_distributor'];
$alamat = $_GET['alamat'];
$telephone = $_GET['telephone'];
?>

<section class="home-section">
    <div class="container input">
        <div class="header">
            <span class="span">Tambah Distributor</span>
        </div>
        <form action="../controller/simpan_distributor.php" method="post">
            <label for="id_distributor"><span>ID Distributor</span><input type="text" maxlength="30" size="30" name="id_distributor" placeholder="ID Distributor" readonly value="<?php echo $id_distributor?>"/></label>
            <label for="nama_distributor"><span>Nama Disiributor</span><input type="text" maxlength="30" size="30" name="nama_distributor" placeholder="Nama Disiributor" value="<?php echo $nama_distributor ?>"/></label>
            <label for="alamat"><span>alamat</span><input type="text" maxlength="30" size="30" name="alamat" placeholder="alamat" value="<?php echo $alamat ?>"/></label>
            <label for="telephone"><span>telephone</span><input type="text" maxlength="30" size="30" name="telephone" placeholder="telephone" value="<?php echo $telephone ?>"/></label>
            <input type="submit" value="SIMPAN" />
            </pre>
        </form>
    </div>
</section>    
</body>
</html>

