
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="./style/user.css" />
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
          <span>User</span>
        </div>
      </div>

      <div class="section">
        <div class="title">
          <span>Data User</span>
        </div>
        <div class="search container">
 <form action="tampil_user.php" method="get" class="searching-form">
            <input
              class="search input"
              type="text"
              placeholder="Cari User"
              name="cari"
            />
            <span class="search button"><button type="submit" value="cari"></button></span>
          </form>        </div>
        <div class="data user">
          <?php
     include '../db/connection.php';
          $sql = "SELECT * FROM tbuser";
          $query = mysqli_query($con, $sql);
          $rows = mysqli_num_rows($query);
          if( $rows == 0 ){
            echo "<div class=\"no-data\">Tidak Ada Data</div>";
          } else {
            if(isset($_GET['cari'])){
              $cari = $_GET['cari'];
              $sql = "SELECT * FROM tbuser WHERE tbuser.nama LIKE '%$cari%'";
            }else{
              $sql = "SELECT * FROM tbuser";
            }
              $query = mysqli_query($con, $sql);
              if(mysqli_num_rows($query) == 0){
                echo "<div class=\"no-data\">Tidak Ada Data</div>";
              } else {


          ?>
          <table class="styled-table">
            <thead>
              <tr>
              <th>ID user</th>
      <th>nama user</th>
      <th>alamat</th>
      <th>telephone</th>
            <th>username</th>
      <th>password</th>
      <th>hak akses</th>
            <th colspan=2>operasi</th>
              </tr>
            </thead>

            <tbody>
            <?php
            $id_user = 0;
             while($d= mysqli_fetch_array($query)){
              $id_user = $d['id_user'];
            ?>
              <tr>
              <td><?php echo $d['id_user']; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['telephone']; ?></td>
                <td><?php echo $d['username']; ?></td>
        <td><?php echo $d['password']; ?></td>
                <td><?php echo $d['hak_akses']; ?></td>
                <td><a href="edit_user.php?id_user=<?php echo $d['id_user'];?>&nama='<?php echo $d['nama']?>'&alamat='<?php echo $d['alamat']?>'&telephone=<?php echo $d['telephone']?>&username=<?php echo $d['username']?>&password=<?php echo $d['password']?>&hak_akses=<?php echo $d['hak_akses']?>">Edit</a></td>
                <td><a href="../controller/hapus_user.php?id_user=<?php echo $d['id_user']; ?>" onclick="return confirm('anda yakin untuk menghapus item ini?')">Hapus</a></td>

         </tr>  
           <?php    
        }
      }
    }
        ?>
            </tbody>
          </table>

          <div class="button">
            <button><a href="./input_user.php?id_user=<?php echo $id_user; ?>">Tambah User</a></button>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>


