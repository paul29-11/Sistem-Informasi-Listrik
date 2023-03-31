<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?php cek_session("Administrator"); ?></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">


    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if (@$_GET['page'] == '') {
                            echo 'active';
                        } ?>">
        <a class="nav-link" href="./">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Management
    </div>

    <!-- Nav Item - Pages Managent Menu -->
    <?php
    if (@$_SESSION['admin']) {
    ?>

        <!-- Nav Item - Data Siswa -->
        <li class="nav-item <?php if (@$_GET['page'] == 'home') {
                                echo 'active';
                            } ?>">
            <a class="nav-link" href="?page=home">
                <i class="fas fa-home"></i>
                <span>Home</span></a>
        </li>
    <?php
    }
    ?>
    <!-- Nav Item - Data Mapel -->
    <li class="nav-item  <?php if (@$_GET['page'] == 'about') {
                                echo 'active';
                            } ?>">
        <a class="nav-link" href=" ?page=about">
            <i class="fas fa-chalkboard"></i>
            <span>About</span></a>
    </li>

    <!-- Nav Item - Data Kelas -->
    <li class="nav-item <?php if (@$_GET['page'] == 'profile') {
                            echo 'active';
                        } ?>">
        <a class="nav-link" href="?page=profile">
            <i class="fas fa-portrait"></i>
            <span>Profile</span></a>
    </li>

    <!-- Nav Item - Ujian -->
    <li class="nav-item <?php if (@$_GET['page'] == 'proyek') {
                            echo 'active';
                        } ?>">
        <a class="nav-link" href="?page=proyek">
            <i class="fas fa-pen"></i>
            <span>Proyek</span></a>
    </li>

    <!-- Nav Item - Ujian -->
    <li class="nav-item <?php if (@$_GET['page'] == 'galeri') {
                            echo 'active';
                        } ?>">
        <a class="nav-link" href=" ?page=galeri">
            <i class="fas fa-image"></i>
            <span>Galeri</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>