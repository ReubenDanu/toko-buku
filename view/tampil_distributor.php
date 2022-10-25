
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="./style/distributor.css" />
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
          <span>Distributor</span>
        </div>
      </div>

      <div class="section">
        <div class="title">
          <span>Data Distributor</span>
        </div>
        <div class="search container">
          <form action="tampil_distributor.php" method="get" class="searching-form">
            <input
              class="search input"
              type="text"
              placeholder="Cari Distributor"
              name="cari"
            />
            <span class="search button"><button type="submit" value="cari"></button></span>
          </form>
        </div>
        <div class="data distributor">
             <?php
          include '../db/connection.php';
          $sql = "SELECT * FROM tbdistributor";
          $query = mysqli_query($con, $sql);
          $rows = mysqli_num_rows($query);
          if( $rows == 0 ){
            echo "<div class=\"no-data\">Tidak Ada Data</div>";
          } else {
            if(isset($_GET['cari'])){
              $cari = $_GET['cari'];
              $sql = "SELECT * FROM tbdistributor WHERE tbdistributor.nama_distributor LIKE '%$cari%'";
            }else{
              $sql = "SELECT * FROM tbdistributor";
            }
              $query = mysqli_query($con, $sql);
              if(mysqli_num_rows($query) == 0){
                echo "<div class=\"no-data\">Tidak Ada Data</div>";
              } else {


          ?>
          <table class="styled-table">
            <thead>
              <tr>
              <th>ID distributor</th>
      <th>nama distributor</th>
      <th>alamat</th>
      <th>telephone</th>
            <th colspan=2>operasi</th>
              </tr>
            </thead>

            <tbody>
            <?php
              $id_distributor = 0;
             while($d= mysqli_fetch_array($query)){
              $id_distributor = $d['id_distributor'];
            ?>
              <tr>
              <td><?php echo $d['id_distributor']; ?></td>
        <td><?php echo $d['nama_distributor']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['telephone']; ?></td>
                <td><a href="edit_distributor.php?id_distributor=<?php echo $d['id_distributor']; ?>&nama_distributor=<?php echo $d['nama_distributor'];?>&alamat=<?php echo $d['alamat']; ?>&telephone=<?php echo $d['telephone']; ?>">Edit</a></td>
                <td><a href="../controller/hapus_distributor.php?id_distributor=<?php echo $d['id_distributor']; ?>" onclick="return confirm('anda yakin untuk menghapus item ini?')">Hapus</a></td>
         </tr>  
           <?php    
        }
      }
    }
        ?>
            </tbody>
          </table>

          <div class="button">
            <button><a href="./input_distributor.php?id_distributor=<?php echo $id_distributor;?>">Tambah Distributor</a></button>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>

