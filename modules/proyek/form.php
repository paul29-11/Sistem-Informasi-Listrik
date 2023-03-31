<?php
if ($_GET['form'] == 'add') {
?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-2 text-gray-800">Tambah Data Proyek</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Content Column -->
            <div class="col-lg">
                <div class="card shadow mb-4">
                    <div class="card-body">

                        <form action="modules/proyek/proses.php?act=insert" method="POST" role="form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control" id=judul" name="judul" placeholder="Masukan Judul" autofocus autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <td><textarea class="ckeditor" id="deskripsi" name="deskripsi"></textarea></td>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label>Tanggal</label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukan Tanggal" autocomplete="off" required>
                                </div>
                                <div class="col">
                                    <label>Tahun Ke</label>
                                    <input type="text" class="form-control" id="tahun_ke" name="tahun_ke" placeholder="Masukan Tahun Ke" autocomplete="off" required>
                                </div>
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
} elseif ($_GET['form'] == 'edit') {
    if (isset($_GET['id'])) {
        $query = mysqli_query($db, "SELECT * FROM proyek WHERE id='$_GET[id]'") or die('adakesalahan :' . mysqli_error($db));
        $data = mysqli_fetch_assoc($query);
    }
?>
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-2 text-gray-800">Edit Data Proyek</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Content Column -->
            <div class="col-lg">
                <div class="card shadow mb-4">
                    <div class="card-body">

                        <form action="modules/proyek/proses.php?act=update" method="POST" role="form" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $data['id']; ?>">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control" id=judul" name="judul" value="<?= $data['judul']; ?>" placeholder="Masukan Judul" autofocus autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <td><textarea class="ckeditor" id="deskripsi" name="deskripsi" <?= $data['deskripsi']; ?>></textarea></td>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label>Tanggal</label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $data['tanggal']; ?>" placeholder="Masukan Tanggal" autocomplete="off" required>
                                </div>
                                <div class="col">
                                    <label>Tahun Ke</label>
                                    <input type="text" class="form-control" id="tahun_ke" name="tahun_ke" value="<?= $data['tahun_ke']; ?>" placeholder="Masukan Tahun Ke" autocomplete="off" required>
                                </div>
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