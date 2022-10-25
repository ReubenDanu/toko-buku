<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searching</title>
    <!-- <link rel="stylesheet" type="text/css" href="./styles.css" > -->
</head>
<body>
<form action="searching_result.php" method="post">
    <table border="0" align="center">
        <tr>
            <th colspan="3">Form Pencarian Data Buku
                <hr>
            </th>
        </tr>
        <tr>
            <th>Pilihan Pencarian :</th>
            <th>
                <input type="radio" id="judul buku" name="pilih" value="judul buku" checked="checked" />
                <label for="judul buku">Judul Buku</label>
            </th>

            <th>
                <input type="radio" id="penerbit" name="pilih" value="penerbit">
                <label for="penerbit">Penerbit</label>
            </th>
        </tr>
        <tr>
            <th colspan="3">
                <label for="cari">Cari</label>
                <input type="text" name="cari" id="cari">
            </th>
        </tr>
        <tr>
            <th colspan="3"><input type="submit" name="" id="" value="cari"></th>
        </tr>
    </table>
</form>

</body>
</html>