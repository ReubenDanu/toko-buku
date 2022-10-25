<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style//input_user.css">
        <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />

    <title>Input User</title>
</head>
<body>
<?php
include './sidebar.php';
$id_user = $_GET['id_user'];
$id_user += 1;
?>

<section class="home-section">
    <div class="container input">
        <div class="header">
            <span class="span">Tambah User</span>
        </div>
        <form action="../controller/simpan_user.php" method="post">
            <label for="id_user"><span>ID Buku</span><input type="text" maxlength="30" size="30" name="id_user" placeholder="ID Buku" readonly value="<?php echo $id_user?>"/></label>
            <label for="nama_user"><span>Nama User</span><input type="text" maxlength="30" size="30" name="nama_user" placeholder="Nama User" /></label>
            <label for="alamat"><span>Alamat</span><input type="text" maxlength="30" size="30" name="alamat" placeholder="Alamat" /></label>
            <label for="telephone"><span>Telephone</span><input type="text" maxlength="30" size="30" name="telephone" placeholder="Telephone" /></label>
            <label for="username"><span>Username</span><input type="text" maxlength="30" size="30" name="username" placeholder="Username" /></label>
            <label for="password"><span>Password</span><input type="password" maxlength="30" size="30" name="password" placeholder="Password" /></label>
            <label for="hak_akses"><span>Hak Akses</span><select name="hak_akses" id="hak_akses"><option value="admin">Admin</option>
            <option value="kasir">Kasir</option>
            <option value="pembeli">Pembeli</option></select></label>
            <input type="submit" value="SIMPAN" />
            </pre>
        </form>
    </div>
</section>    
</body>
</html>

