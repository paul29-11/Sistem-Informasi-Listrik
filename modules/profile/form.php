<?php
$query = mysqli_query($db, "SELECT * FROM profile WHERE id=1");
while ($data = mysqli_fetch_assoc($query)) {
?>
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-2 text-gray-800">Profile</h1>
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

                        <form action="modules/profile/update.php" method="POST" role="form" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $data['id']; ?>">
                            <div class="form-group">
                                <label>NO HP</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $data['no_hp']; ?>" placeholder="Masukan NO HP" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data['alamat']; ?>" placeholder="Masukan Alamat" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?= $data['email']; ?>" placeholder="Masukan Email" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>FAQ</label>
                                <input type="text" class="form-control" id="faq" name="faq" value="<?= $data['faq']; ?>" placeholder="Masukan FAQ" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>GMaps</label>
                                <input type="text" class="form-control" id="gmaps" name="gmaps" value="<?= $data['gmaps']; ?>" placeholder="Masukan GMaps" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>Visi Misi</label>
                                <input type="text" class="form-control" id="visimisi" name="visimisi" value="<?= $data['visimisi']; ?>" placeholder="Masukan Visi Misi" autocomplete="off" required>
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