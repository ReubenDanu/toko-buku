<?php
include "../db/connection.php";
$pilih = $_POST['pilih'];
$cari = $_POST['cari'];

switch($pilih){
    case "judul buku" :
        $kriteria = "judul_buku like '%$cari%'";
        break;
    case "penerbit" :
        $kriteria = "penerbit like '%$cari%'";
        break;
}

$sql = "
    SELECT *
    FROM tbbuku
    WHERE {$kriteria}
"
;

$hasil = mysqli_query($con, $sql);   
if (!$hasil){
    die ("hahal query data karena {mysqli.error($con)}");
}

$jum=mysqli_num_rows($hasil);

echo "<center>";
echo "Jumlah Data Ditemukan : <b>$jum</b><br><hr>";
echo "<h2> Hasil pencarian berdasarkan $pilih $cari</h2>
<table border=1>
    <tr>
        <th>Judul Buku</th>
        <th>NO ISBN</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Stok</th>
        <th>Harga Jual</th>
        <th>Diskon</th>
    </tr>";
while($data = mysqli_fetch_array($hasil)){
echo "<tr>";
echo "<td>".$data[0]."</td>";
echo "<td>".$data[1]."</td>";
echo "<td>".$data[2]."</td>";
echo "<td>".$data[3]."</td>";
echo "<td>".$data[4]."</td>";
echo "<td>".$data[5]."</td>";
echo "<td>".$data[6]."</td>";
echo "<td>".$data[7]."</td>";
echo "</tr>";
}
echo "</table>";
echo '<a href="searching.php">'."Cari Lagi".'</a>';
echo "</center>";
?>

