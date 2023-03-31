<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    <p>Selamat Datang di Aplikasi Admin</p>


    <!-- Content Row -->
    <div class="row">

        <!-- Halaman Dashboard Untuk Admin -->
        <?php if (@$_SESSION['admin']) { ?>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Proyek</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                                    $proyek = mysqli_query($db, "SELECT * FROM proyek") or die($db->error);
                                    echo mysqli_num_rows($proyek);
                                    ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-pen fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Galeri</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                                    $galeri = mysqli_query($db, "SELECT * FROM galeri") or die($db->error);
                                    echo mysqli_num_rows($galeri);
                                    ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-image fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>