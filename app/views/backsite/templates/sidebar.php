<style>
  /* Sidebar Styling */
  .main-sidebar {
    background-color: green; /* Background color for the main sidebar */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Optional: Add shadow to the sidebar */
  }

  .brand-link {
    border-bottom: 2px solid #2980b9; /* Border color below the brand logo */
  }

  .brand-text {
    color: white; /* Brand text color - changed to white */
  }

  .user-panel {
    border-bottom: 2px solid #2980b9; /* Border color below the user panel */
  }

  .user-panel .info a {
    color: #ffc800; /* User panel text color */
  }

  /* Sidebar Menu Styling */
  .nav-sidebar .nav-link i {
    color: white; /* Icon color */
  }

  .nav-sidebar .nav-link {
    color: white; /* Text color */
  }

  .nav-sidebar .nav-link:hover {
    background-color: #2980b9; /* Background color on hover */
  }

  /* Active menu item styling */
  .nav-sidebar .nav-item.active a {
    background-color: #2980b9; /* Background color for active item */
  }

  .nav-sidebar .nav-item.active a i {
    color: white; /* Icon color for active item */
  }

  .nav-sidebar .nav-item.active a {
    color: white; /* Text color for active item */
  }

  /* Optional: Adjust elevation of the active sidebar item */
  .nav-sidebar .nav-item.active {
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  }
</style>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= BASEURL; ?>/assets/backsite/index3.html" class="brand-link">
    <img src="<?= BASEURL; ?>/assets/backsite/dist/img/pelalawan_logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"><h4><b>FKUB-Pelalawan</b></h4></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= BASEURL; ?>/assets/backsite/dist/img/tugasfkub.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="<?= BASEURL; ?>/assets/backsite/index3.html" class="d-block"><marquee><h5>Forum Kerukunan Umat Beragama - Kabupaten Pelalawan</h5></marquee></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?= BASEURL; ?>/backsite/dashboard" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p><font color="#ffc800"> Dashboard </font></p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= BASEURL; ?>/backsite/profiltugas" class="nav-link">
            <i class="nav-icon fas fa-laptop"></i>
            <p><font color="#ffc800">Profil Tugas FKUB </font></p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= BASEURL; ?>/backsite/profilfungsi" class="nav-link">
            <i class="nav-icon fas fa-thumbs-up"></i>
            <p><font color="#ffc800">Profil Fungsi FKUB </font></p>
          </a>
        </li>
        <li class="nav-item">
        <a href="<?= BASEURL; ?>/backsite/profilvisi" class="nav-link">
          <i class="nav-icon fas fa-file-alt"></i>
          <p><font color="#ffc800">Profil Visi FKUB </font></p>
        </a>
      </li>
        <li class="nav-item">
          <a href="<?= BASEURL; ?>/backsite/profilmisi" class="nav-link">
          <i class="nav-icon fas fa-flag"></i>
          <p><font color="#ffc800">Profil Misi FKUB </font></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?= BASEURL; ?>/backsite/programkerja" class="nav-link">
            <i class="nav-icon fas fa-address-card"></i>
            <p><font color="#ffc800"> Program Kerja </font></p>
          </a>
        </li>     
        <li class="nav-item">
        <a href="<?= BASEURL; ?>/backsite/berita" class="nav-link">
            <i class="nav-icon fas fa-newspaper"></i>
            <p><font color="#ffc800"> Berita </font></p>
          </a>
        </li>
        <li class="nav-item">
        <a href="<?= BASEURL; ?>/backsite/galery" class="nav-link">
            <i class="nav-icon fas fa-image"></i>
            <p><font color="#ffc800"> Gallery </font></p>
          </a>
        </li>
        <li class="nav-item">
        <a href="<?= BASEURL; ?>/backsite/sejarah" class="nav-link">
            <i class="nav-icon fas fa-globe"></i>
            <p><font color="#ffc800"> Sejarah </font></p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= BASEURL; ?>/backsite/user" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p><font color="#ffc800"> User</font></p>
          </a>
        </li>
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>