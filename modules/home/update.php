<?php
@session_start();
include "../../koneksi.php";

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $judul = mysqli_real_escape_string($db, $_POST['judul']);
    $deskripsi = mysqli_real_escape_string($db, $_POST['deskripsi']);

    $sumber = $_FILES['gambar']['tmp_name'];
    $target = '../../img/home/';
    $nama_gambar = $_FILES['gambar']['name'];

    if ($nama_gambar == '') {
        mysqli_query($db, "UPDATE home SET judul = '$judul', deskripsi = '$deskripsi' WHERE id = '$id'") or die($db->error);
        header("location: ../../index.php?page=home&alert=1");
    } else {
        if (move_uploaded_file($sumber, $target . $nama_gambar)) {
            mysqli_query($db, "UPDATE home SET foto = '$nama_gambar', judul = '$judul', deskripsi = '$deskripsi' WHERE id = '$id'") or die($db->error);
            header("location: ../../index.php?page=home&alert=1");
        } else {
            echo '<script>alert("Gagal mengedit data , foto gagal diupload, coba lagi!"); window.location="?page=home";</script>';
        }
    }
}
