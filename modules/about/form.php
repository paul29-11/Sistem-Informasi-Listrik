<?php
$query = mysqli_query($db, "SELECT * FROM about WHERE id=1");
while ($data = mysqli_fetch_assoc($query)) {
?>
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-2 text-gray-800">About</h1>
        </div>
        <?php
        if (empty($_GET['alert'])) {
            echo "";
        } elseif ($_GET['alert'] == 1) {
            echo "<div class='alert alert-success alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='fa fa-check-circle'></i> Sukses</h6>
                Data Berhasil Diubah.
            </div>";
        }
        ?>
        <!-- Content Row -->
        <div class="row">
            <!-- Content Column -->
            <div class="col-lg">
                <div class="card shadow mb-4">
                    <div class="card-body">

                        <form action="modules/about/update.php" method="POST" role="form" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $data['id']; ?>">
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <td><textarea class="ckeditor" id="deskripsi" name="deskripsi" <?= $data['deskripsi']; ?>></textarea></td>
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <div style="padding:0 0 5px 0;"><img width="200px" src="img/about/<?= $data['foto']; ?>" /></div>
                                <input type="file" name="gambar" class="form-control" />
                            </div>
                            <div class="form-group">
                                <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>
                                <button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>