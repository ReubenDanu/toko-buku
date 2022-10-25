
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="./style/pasok.css" />
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
          <span>pasok</span>
        </div>
      </div>

      <div class="section">
        <div class="title">
          <span>Data pasok</span>
        </div>
        <div class="search container">
          <form action="tampil_pasok.php" method="get" class="searching-form">
          <input
            class="search input"
            type="date"
            placeholder="Cari pasok"
            name="cari"
          />
          <span class="search button"><button type="submit" value="cari"></button></span>
          </form>
        </div>
        <div class="data pasok">
           <?php
          include '../db/connection.php';
          $sql = "SELECT * FROM tbpasok";
          $query = mysqli_query($con, $sql);
          $rows = mysqli_num_rows($query);
          if( $rows == 0 ){
            echo "<div class=\"no-data\">Tidak Ada Data</div>";
          } else {
            if(isset($_GET['cari'])){
              $cari = $_GET['cari'];
              $sql = "SELECT * FROM tbpasok WHERE tbpasok.tanggal LIKE '%$cari%'";
            }else{
              $sql = "SELECT * FROM tbpasok";
            }
              $query = mysqli_query($con, $sql);
              if(mysqli_num_rows($query) == 0){
                echo "<div class=\"no-data\">Tidak Ada Data</div>";
              } else {


          ?>
          <table class="styled-table">
            <thead>
              <tr>
              <th>ID pasok</th>
      <th>ID distributor</th>
      <th>ID buku</th>
      <th>jumlah</th>
      <th>tanggal</th>
            <th colspan=2>operasi</th>
              </tr>
            </thead>

            <tbody>
            <?php
              $id_pasok = 0;
                while($d= mysqli_fetch_array($query)){
                  $id_pasok = $d['id_pemasok'];
            ?>
              <tr>
              <td><?php echo $d['id_pemasok']; ?></td>
        <td><?php echo $d['id_distributor']; ?></td>
        <td><?php echo $d['id_buku']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
                <td><?php echo $d['tanggal']; ?></td>
                <td><a href="edit_pemasok.php?id_pemasok=<?php echo $d['id_pemasok']; ?>&id_distributor=<?php echo $d['id_distributor']?>&id_buku=<?php echo $d['id_buku']?>&jumlah=<?php echo $d['jumlah']?>&tanggal=<?php echo $d['tanggal']?>">Edit</a></td>
                <td><a href="../controller/hapus_pemasok.php?id_pemasok=<?php echo $d['id_pemasok']; ?>" onclick="return confirm('anda yakin untuk menghapus item ini?')">Hapus</a></td>
         </tr>  
           <?php    
        }
      }
    }
        ?>
            </tbody>
          </table>

          <div class="button">
            <button><a href="./input_pasok.php?id_pasok=<?php echo $id_pasok?>">Tambah Pasok</a></button>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>



