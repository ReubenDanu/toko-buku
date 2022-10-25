<?php
include '../db/connection.php';
include '../controller/auth.php';
$user = $_SESSION['user'];
$result = mysqli_query($con, "SELECT hak_akses from tbuser WHERE username='$user'");
$row = mysqli_fetch_array($result, MYSQLI_NUM);
$roles = $row[0];
?>



  <div class="sidebar">
    <div class="logo-details">
      <i class="bx bxs-book-bookmark"></i>
      <span class="logo_name">Toko Buku</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="./overview.php">
          <i class="bx bx-grid-alt"></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="./overview.php">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="bx bx-collection"></i>
            <span class="link_name">Operation's</span>
          </a>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="./overview.php">Operation's</a></li>
          <li><a href="./tampil_buku.php">Buku</a></li>
          <li><a href="./tampil_distributor.php">Distributor</a></li>
          <li><a href="./tampil_pasok.php">Pasok</a></li>
          <li><a href="./tampil_penjualan.php">Penjualan</a></li>
          <li><a href="./tampil_user.php">User</a></li>
        </ul>
      </li>
      <li>
<div class="iocn-link">
          <a href="#">
            <i class='bx bxs-file'></i>
            <span class="link_name">Laporan</span>
          </a>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="./overview.php">Operation's</a></li>
          <li><a href="./tampil_laporan_pasok.php">Laporan Pasok</a></li>
          <li><a href="./tampil_laporan_penjualan.php">Laporan Penjualan</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-cog"></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li>
      <li>
        <div class="profile-details">
          <div class="profile-content">
            <!--<img src="image/profile.jpg" alt="profileImg">-->
          </div>
          <div class="name-job">
            <div class="profile_name"><?php echo $_SESSION['user']?></div>
            <div class="job"><?php echo $roles ?></div>
          </div>
			<a href="../controller/logout.php">
				<i class="bx bx-log-out"></i>
			</a>
          </div>
      </li>
    </ul>
  </div>
    <script type="module">
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e) => {
        let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
        arrowParent.classList.toggle("showMenu");
      });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    });
  </script>
