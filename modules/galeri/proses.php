<?php
@session_start();
include "../../koneksi.php";

if ($_GET['act'] == 'insert') {
    if (isset($_POST['simpan'])) {
        $judul = mysqli_real_escape_string($db, $_POST['judul']);

        $sumber = $_FILES['gambar']['tmp_name'];
        $target = '../../img/galeri/';
        $nama_gambar = $_FILES['gambar']['name'];
        if ($nama_gambar != '') {
            if (move_uploaded_file($sumber, $target . $nama_gambar)) {
                mysqli_query($db, "INSERT INTO galeri VALUES('','$nama_gambar', '$judul')") or die($db->error);
                header("location: ../../index.php?page=galeri&alert=1");
            } else {
                echo '<script>alert("Gagal menambah data, foto gagal diupload, coba lagi!");</script>';
            }
        } else {
            mysqli_query($db, "INSERT INTO galeri VALUES('', 'default.png', '$judul')") or die($db->error);
            header("location: ../../index.php?page=galeri&alert=1");
        }
    }
} elseif ($_GET['act'] == 'update') {
    if (isset($_POST['simpan'])) {
        $id = $_POST['id'];
        $judul = mysqli_real_escape_string($db, $_POST['judul']);

        $sumber = $_FILES['gambar']['tmp_name'];
        $target = '../../img/galeri/';
        $nama_gambar = $_FILES['gambar']['name'];

        if ($nama_gambar == '') {
            mysqli_query($db, "UPDATE galeri SET judul = '$judul' WHERE id_guru = '$id'") or die($db->error);
            header("location: ../../index.php?page=galeri&alert=2");
        } else {
            if (move_uploaded_file($sumber, $target . $nama_gambar)) {
                mysqli_query($db, "UPDATE galeri SET foto = '$nama_gambar', judul = '$judul' WHERE id = '$id'") or die($db->error);
                header("location: ../../index.php?page=galeri&alert=2");
            } else {
                echo '<script>alert("Gagal mengedit data, foto gagal diupload, coba lagi!");</script>';
            }
        }
    }
} elseif ($_GET['act'] == 'delete') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = mysqli_query($db, "DELETE FROM galeri WHERE id = '$id'") or die($db->error);
        header("location: ../../index.php?page=galeri&alert=3");
    }
}
