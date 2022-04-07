<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-book-open"></i>
    </div>
    <div class="sidebar-brand-text mx-1">Perpustakaan</div>
</a>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Halaman Utama
    </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Beranda'); ?>">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Beranda</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Daftar Tabel
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Home/index'); ?>">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Daftar Anggota</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Home2/index2'); ?>">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Daftar Buku</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Home3/index3'); ?>">
                    <i class="fas fa-fw fa-user-friends"></i>
                    <span>Data Admin</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Home4/index4'); ?>">
                    <i class="fas fa-fw fa-credit-card"></i>
                    <span>Data Pinjaman</span></a>
            </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    </ul>
<!-- End of Sidebar -->