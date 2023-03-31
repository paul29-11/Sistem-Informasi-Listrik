<?php
@session_start();
include "../../koneksi.php";

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $judul = mysqli_real_escape_string($db, $_POST['judul']);
    $deskripsi = mysqli_real_escape_string($db, $_POST['deskripsi']);

    $sumber = $_FILES['gambar']['tmp_name'];
    $target = '../../img/about/';
    $nama_gambar = $_FILES['gambar']['name'];

    if ($nama_gambar == '') {
        mysqli_query($db, "UPDATE about SET deskripsi = '$deskripsi' WHERE id = '$id'") or die($db->error);
        header("location: ../../index.php?page=about&alert=1");
    } else {
        if (move_uploaded_file($sumber, $target . $nama_gambar)) {
            mysqli_query($db, "UPDATE about SET foto = '$nama_gambar', deskripsi = '$deskripsi' WHERE id = '$id'") or die($db->error);
            header("location: ../../index.php?page=about&alert=1");
        } else {
            echo '<script>alert("Gagal mengedit data , foto gagal diupload, coba lagi!"); window.location="?page=home";</script>';
        }
    }
}
