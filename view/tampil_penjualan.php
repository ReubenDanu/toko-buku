
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="./style/penjualan.css" />
    <!-- Boxiocns CDN Link -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <?php 
      include 'sidebar.php';
    ?>
        <section class="home-section">
      <div class="home-content">
        <i class="bx bx-menu"></i>
        <span class="text">Drop Down Sidebar</span>
      </div>

      <div class="section header">
        <div class="header">
          <span>Penjualan</span>
        </div>
      </div>

      <div class="section">
        <div class="title">
          <span>Data Penjualan</span>
        </div>
        <div class="search container">
        <form action="tampil_penjualan.php" method="get" class="searching-form">
          <input
            class="search input"
            type="date"
            placeholder="Cari Penjualan"
            name="cari"
          />
          <span class="search button"><button type="submit"></button></span>
        </form>
        </div>
        <div class="data penjualan">
          <table class="styled-table">
            <?php
             include '../db/connection.php';
          $sql = "SELECT * FROM tbpenjualan";
          $query = mysqli_query($con, $sql);
          $rows = mysqli_num_rows($query);
          if( $rows == 0 ){
            echo "<div class=\"no-data\">Tidak Ada Data</div>";
          } else {
            if(isset($_GET['cari'])){
              $cari = $_GET['cari'];
              $sql = "SELECT * FROM tbpenjualan WHERE tbpenjualan.tanggal LIKE '%$cari%'";
            }else{
              $sql = "SELECT * FROM tbpenjualan";
            }
              $query = mysqli_query($con, $sql);
              if(mysqli_num_rows($query) == 0){
                echo "<div class=\"no-data\">Tidak Ada Data</div>";
              } else {


          ?>
            <thead>
              <tr>
              <th>ID penjualan</th>
      <th>ID user</th>
      <th>ID buku</th>
      <th>tanggal</th>
      <th>jumlah</th>
            <th colspan=2>operasi</th>
              </tr>
            </thead>

            <tbody>
            <?php
              $id_penjualan;
             while($d= mysqli_fetch_array($query)){
              $id_penjualan = $d['id_penjualan'];
            ?>
              <tr>
              <td><?php echo $d['id_penjualan']; ?></td>
        <td><?php echo $d['id_user']; ?></td>
        <td><?php echo $d['id_buku']; ?></td>
                <td><?php echo $d['tanggal']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
                <td><a href="edit_penjualan.php?id_penjualan=<?php echo $d['id_penjualan']; ?>&id_user=<?php echo $d['id_user']; ?>&id_buku=<?php echo $d['id_buku']; ?>&tanggal=<?php echo $d['tanggal']; ?>&jumlah=<?php echo $d['jumlah']; ?>&">Edit</a></td>
                <td><a href="../controller/hapus_penjualan.php?id_penjualan=<?php echo $d['id_penjualan']; ?>" onclick="return confirm('anda yakin untuk menghapus item ini?')">Hapus</a></td>
         </tr>  
           <?php    
        }
      }
    }
        ?>
            </tbody>
          </table>

          <div class="button">
            <button><a href="./input_penjualan.php?id_penjualan=<?php echo $id_penjualan; ?>">Tambah Buku</a></button>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
