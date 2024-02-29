<?php
        if(session()->get('level')== 1){
          ?>
<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/Home/dashboard" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">MENU</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/Contrans/transaksi" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Daftar Transaksi</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/Home/mpg/isi/" aria-expanded="false">
                <span>
                  <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Kasir Pengeluaran</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/ConBarang/barang" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Daftar Barang</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/ConStok/stok" aria-expanded="false">
                <span>
                  <i class="ti ti-mood-happy"></i>
                </span>
                <span class="hide-menu">Barang Masuk</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/ConUser/user" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">User</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/ConPelanggan/pelanggan" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Customer</span>
              </a>
            </li>
<!--                         <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">LAPORAN</span>
            </li> -->
<!--             <li class="sidebar-item">
              <a class="sidebar-link" href="/menu_laporan/" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Laporan</span>
              </a>
            </li> -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">LOG-OUT</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/Home/log_out" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Log-Out</span>
              </a>
            </li>
           
          </ul>
    
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <?php
}else if (session()->get('level')== '2' ) {
?>
            <!-- Layout wrapper -->
             <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/Home/dashboard" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">MENU</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/Contrans/transaksi" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Daftar Transaksi</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/Home/mpg/" aria-expanded="false">
                <span>
                  <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Kasir Pengeluaran</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/ConBarang/barang" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Daftar Barang</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/ConStok/stok" aria-expanded="false">
                <span>
                  <i class="ti ti-mood-happy"></i>
                </span>
                <span class="hide-menu">Barang Masuk</span>
              </a>
            </li>
<!--             <li class="sidebar-item">
              <a class="sidebar-link" href="/ConUser/user" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">User</span>
              </a>
            </li> -->
            <li class="sidebar-item">
              <a class="sidebar-link" href="/ConPelanggan/pelanggan" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Customer</span>
              </a>
            </li>
<!--                         <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">LAPORAN</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/Home/l_brg" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Laporan</span>
              </a>
            </li> -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">LOG-OUT</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/Home/log_out" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Log-Out</span>
              </a>
            </li>
           
          </ul>
    
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
                                    <?php } ?>