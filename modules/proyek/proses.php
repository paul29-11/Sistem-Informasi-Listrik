<?php
@session_start();
include "../../koneksi.php";

if ($_GET['act'] == 'insert') {
    if (isset($_POST['simpan'])) {
        $judul = mysqli_real_escape_string($db, $_POST['judul']);
        $deskripsi = mysqli_real_escape_string($db, $_POST['deskripsi']);
        $tanggal = mysqli_real_escape_string($db, $_POST['tanggal']);
        $tahun_ke = mysqli_real_escape_string($db, $_POST['tahun_ke']);
        mysqli_query($db, "INSERT INTO proyek(judul,deskripsi,tanggal,tahun_ke) VALUES ('$judul','$deskripsi','$tanggal','$tahun_ke')") or die($db->error);
        header("location: ../../index.php?page=proyek&alert=1");
    }
} elseif ($_GET['act'] == 'update') {
    if (isset($_POST['simpan'])) {
        $id = $_POST['id'];
        $judul = mysqli_real_escape_string($db, $_POST['judul']);
        $deskripsi = mysqli_real_escape_string($db, $_POST['deskripsi']);
        $tanggal = mysqli_real_escape_string($db, $_POST['tanggal']);
        $tahun_ke = mysqli_real_escape_string($db, $_POST['tahun_ke']);
        mysqli_query($db, "UPDATE proyek SET judul = '$judul', deskripsi = '$deskripsi', tanggal = '$tanggal', tahun_ke = '$tahun_ke' WHERE id = '$id'") or die($db->error);
        header("location: ../../index.php?page=proyek&alert=2");
    }
} elseif ($_GET['act'] == 'delete') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = mysqli_query($db, "DELETE FROM proyek WHERE id = '$id'") or die($db->error);
        header("location: ../../index.php?page=proyek&alert=3");
    }
}
