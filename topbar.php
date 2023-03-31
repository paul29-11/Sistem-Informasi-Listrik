<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php
                if (@$_SESSION['admin']) {
                    $sesi_id = @$_SESSION['admin'];
                    $level = "admin";
                }

                if ($level == 'admin') {
                    $sql_terlogin = mysqli_query($db, "SELECT * FROM user WHERE id = '$sesi_id'") or die($db->error);
                }
                $data_terlogin = mysqli_fetch_array($sql_terlogin);
                ?>
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= ucfirst($data_terlogin['username']); ?></span>
                <img class="img-profile rounded-circle" src="assets/img/undraw_profile.svg">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php cek_session('logout.php?sesi=admin'); ?>" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>