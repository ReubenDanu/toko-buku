<?php 
  include './sidebar.php';
?>

  <section class="home-section">
    <div class="home-content">
      <i class="bx bx-menu"></i>
      <span class="text">Drop Down Sidebar</span>
    </div>

    <div class="header">
      <span>overview</span>
    </div>
    <div class="testing">
      <?php
      $sql1 = "SELECT SUM(tbbuku.stok) from tbbuku ";
      $sql2 = "SELECT SUM(tbpasok.jumlah) from tbpasok ";
      $sql3 = "SELECT SUM(tbpenjualan.jumlah) from tbpenjualan ";
      $sql4 = "SELECT COUNT(*) from tbdistributor ";
      $sql5 = "SELECT COUNT(*) from tbuser ";
      $q1 = mysqli_query($con, $sql1);
      $q2 = mysqli_query($con, $sql2);
      $q3 = mysqli_query($con, $sql3);
      $q4 = mysqli_query($con, $sql4);
      $q5 = mysqli_query($con, $sql5);

      $result1 = mysqli_fetch_assoc($q1);
      $result2 = mysqli_fetch_assoc($q2);
      $result3 = mysqli_fetch_assoc($q3);
      $result4 = mysqli_fetch_assoc($q4);
      $result5 = mysqli_fetch_assoc($q5);
      ?>
    </div>
    <div class="section peek-data">
      <div class="group 1">
        <span class="data-name">buku</span><span class="data-value"><?php echo $result1['SUM(tbbuku.stok)'];?></span>
      </div>
      <div class="group 2">
        <span class="data-name">distributor</span><span class="data-value"><?php echo $result4['COUNT(*)']?></span>
      </div>
      <div class="group 3">
        <span class="data-name">penjualan</span><span class="data-value"><?php echo $result3['SUM(tbpenjualan.jumlah)']?></span>
      </div>
      <div class="group 4">
        <span class="data-name">pasok</span><span class="data-value"><?php echo $result2['SUM(tbpasok.jumlah)']?></span>
      </div>
      <div class="group 5">
        <span class="data-name">user</span><span class="data-value"><?php echo $result5['COUNT(*)']?></span>
      </div>
    </div>
    <div class="section target">
      <div class="group 1">
        <div class="header">
          <div>
            <span class="sub-menu">buku</span>
            <a href="#" class="detail">View Detail's</a>
          </div>
          <span class="date">Today</span>
        </div>
        <div class="content">
          <div><span>Top Buku</span><span>Death Note</span></div>
          <div><span>Top Requested</span><span>One Piece</span></div>
          <div><span>Top Catagory</span><span>Adventure</span></div>
          <div><span>Quantity</span><span>70</span></div>
        </div>
      </div>
      <div class="group 2">
        <div class="header">
          <div>
            <span class="sub-menu">penjualan</span>
            <a href="#" class="detail">View Detail's</a>
          </div>
          <span class="date">Today</span>
        </div>
        <div class="content">
          <div><span>Total Penjualan</span><span>30k</span></div>
          <div><span>Rata-Rata</span><span>5k</span></div>
          <div><span>Modal</span><span>1.2m</span></div>
          <div><span>Omset</span><span>400k</span></div>
        </div>
      </div>
    </div>
    <div class="section"></div>
  </section>