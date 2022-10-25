
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/laporan_pasok.css">
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />

  <title>Laporan - Penjualan</title>
</head>
<body>
  <?php 
  include './sidebar.php';
?>

  
 <section class="home-section">
      <div class="home-content">
        <i class="bx bx-menu"></i>
        <span class="text">Drop Down Sidebar</span>
      </div>

      <div class="section header">
        <div class="header">
          <span>Laporan</span>
        </div>
      </div>

      <div class="section">
        <div class="title">
          <span>Laporan Pasok</span>
        </div>
        <div class="data buku">
          <?php
            include '../db/connection.php';
            $query = mysqli_query($con, "
            SELECT judul_buku, penerbit, stok, harga_pokok, harga_jual, diskon, tanggal, jumlah, nama
            FROM tbbuku, tbpenjualan, tbuser
            WHERE tbbuku.id_buku = tbpenjualan.id_buku AND tbuser.id_user = tbpenjualan.id_user;
            ");


          ?>
           <table class="styled-table">
            <thead>
                
            <tr>
                  <th>JUDUL BUKU</th>
                <th>PENERBIT</th>
                <th>STOK</th>
                <th>HARGA POKOK</th>
                <th>HARGA JUAL</th>
                <th>DISKON</th>
                <th>TANGGAL</th>
                <th>JUMLAH</th>
                <th>NAMA</th>
            </tr>
            </thead>
           <tbody>
                <?php
                    while($d = mysqli_fetch_assoc($query)){
                ?>
                    <tr>
                        <td><?php echo $d['judul_buku']; ?></td>
                        <td><?php echo $d['penerbit']; ?></td>
                        <td><?php echo $d['stok']; ?></td>
                        <td><?php echo $d['harga_pokok']; ?></td>
                        <td><?php echo $d['harga_jual']; ?></td>
                        <td><?php echo $d['diskon']; ?></td>
                        <td><?php echo $d['tanggal']; ?></td>
                        <td><?php echo $d['jumlah']; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                    </tr>
                    <?php
                }
                ?>
            
                    </tbody>
        </table>
       
      </div>
    </section>

</body>
</html>
