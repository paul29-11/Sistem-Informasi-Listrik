<?php
@session_start();
include "../../koneksi.php";

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $no_hp = mysqli_real_escape_string($db, $_POST['no_hp']);
    $alamat = mysqli_real_escape_string($db, $_POST['alamat']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $faq = mysqli_real_escape_string($db, $_POST['faq']);
    $gmaps = mysqli_real_escape_string($db, $_POST['gmaps']);
    $visimisi = mysqli_real_escape_string($db, $_POST['visimisi']);
    mysqli_query($db, "UPDATE profile SET no_hp = '$no_hp', alamat = '$alamat', email = '$email', faq = '$faq', gmaps = '$gmaps', visimisi = '$visimisi' WHERE id = '$id'") or die($db->error);
    header("location: ../../index.php?page=profile&alert=1");
}
