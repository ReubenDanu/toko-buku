
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/buku.css">
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />

  <title>Buku</title>
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
          <span>buku</span>
        </div>
      </div>

      <div class="section">
        <div class="title">
          <span>Data buku</span>
        </div>
        <div class="search container">
          
          <form action="tampil_buku.php" method="get" class="searching-form">
            <input
              class="search input"
              type="text"
              placeholder="Cari buku"
              name="cari"
            />
            <span class="search button"><button type="submit" value="cari"></button></span>
          </form>
        </div>
        <div class="data buku">
          <?php
          include '../db/connection.php';
          $sql = "SELECT * FROM tbbuku";
          $query = mysqli_query($con, $sql);
          $rows = mysqli_num_rows($query);
          if( $rows == 0 ){
            echo "<div class=\"no-data\">Tidak Ada Data</div>";
          } else {
            if(isset($_GET['cari'])){
              $cari = $_GET['cari'];
              $sql = "SELECT * FROM tbbuku WHERE tbbuku.judul_buku LIKE '%$cari%'";
            }else{
              $sql = "SELECT * FROM tbbuku";
            }
              $query = mysqli_query($con, $sql);
              if(mysqli_num_rows($query) == 0){
                echo "<div class=\"no-data\">Tidak Ada Data</div>";
              } else {


          ?>
          <table class="styled-table">
            <thead>
              <tr>
                <th>ID Buku</th>
                <th>Judul Buku</th>
                <th>No ISBN</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Stok</th>
                <th>Harga Pokok</th>
                <th>Harga Jual</th>
                <th>Diskon</th>
                <th colspan="2">Operasi</th>
              </tr>
            </thead>

            <tbody>
            <?php  
              $id_buku = 0;
              while($d = mysqli_fetch_assoc($query)){
              $id_buku = $d['id_buku'];
            ?>
              
              <tr>
                <td><?php echo $d['id_buku']; ?></td>
                <td><?php echo $d['judul_buku']; ?></td>
                <td><?php echo $d['no_isbn']; ?></td>
                <td><?php echo $d['penulis']; ?></td>
                <td><?php echo $d['penerbit']; ?></td>
                <td><?php echo $d['tahun_terbit']; ?></td>
                <td><?php echo $d['stok']; ?></td>
                <td><?php echo $d['harga_pokok']; ?></td>
                <td><?php echo $d['harga_jual']; ?></td>
                <td><?php echo $d['diskon']; ?></td>
                <td><a href="edit_buku.php?id_buku=<?php echo $d['id_buku'];?>&judul_buku='<?php echo $d['judul_buku']?>'&no_isbn=<?php echo $d['no_isbn']?>&penulis=<?php echo $d['penulis']?>&penerbit=<?php echo $d['penerbit']?>&tahun_terbit=<?php echo $d['tahun_terbit']?>&stok=<?php echo $d['stok']?>&harga_pokok=<?php echo $d['harga_pokok']?>&harga_jual=<?php echo $d['harga_jual']?>&diskon=<?php echo $d['diskon']?>">Edit</a></td>
                <td><a href="../controller/hapus_buku.php?id_buku=<?php echo $d['id_buku']; ?>" onclick="return confirm('anda yakin untuk menghapus item ini?')">Hapus</a></td>
             </tr>  
           <?php    
              }
            }
          }
           ?>
            </tbody>
          </table>
          <?php 
          $row = mysqli_num_rows($query);
            if($row == 0){
              ?>
              <div class="button no-data">
                <button><a href="#tambah">Tambah Buku</a></button>
              </div>
              <?php
            }else{
          ?>
          <div class="button">
            <button><a href="./Input_buku.php?id_buku=<?php echo $id_buku  ?>">Tambah Buku</a></button>
          </div>
          <?php 
            }
          ?>
        </div>
      </div>
    </section>
</body>
</html>
