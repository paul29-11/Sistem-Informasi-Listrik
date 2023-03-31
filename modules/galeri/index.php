<div class="container-fluid">
    <?php
    if (@$_SESSION['admin']) { ?>
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Galeri</h1>
        <?php
        if (empty($_GET['alert'])) {
            echo "";
        } elseif ($_GET['alert'] == 1) {
            echo "<div class='alert alert-success alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='fa fa-check-circle'></i> Sukses</h6>
                Data Berhasil Ditambahakan.
            </div>";
        } elseif ($_GET['alert'] == 2) {
            echo "<div class='alert alert-success alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='fa fa-check-circle'></i> Sukses</h6>
                Data Berhasil Diubah.
            </div>";
        } elseif ($_GET['alert'] == 3) {
            echo "<div class='alert alert-success alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='fa fa-check-circle'></i> Sukses</h6>
                Data Berhasil Dihapus.
            </div>";
        }
        ?>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="?page=form_galeri&form=add" class=" btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Data</span>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Foto</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            $query = mysqli_query($db, "SELECT * FROM galeri WHERE id");

                            while ($data = mysqli_fetch_assoc($query)) {
                            ?>

                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $data['judul']; ?></td>
                                    <td>
                                        <div style="padding:0 0 5px 0;"><img width="200px" src="img/galeri/<?= $data['foto']; ?>" /></div>
                                    </td>
                                    <td align="center" width="150px">
                                        <a href="?page=form_galeri&form=edit&id=<?= $data['id']; ?>" class="badge" style="background-color:gold; color:white;">Edit</a>
                                        <a onclick="return confirm('Yakin akan menghapus data?');" href="modules/galeri/proses.php?act=delete&id=<?= $data['id']; ?>" class="badge" style="background-color:#f00;color:white;">Hapus</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
<?php
    }
?>