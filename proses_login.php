<?php
@session_start();
include "koneksi.php";

$user = @mysqli_real_escape_string($db, $_POST['username']);
$pass = @mysqli_real_escape_string($db, $_POST['password']);

$sql = mysqli_query($db, "SELECT * FROM user WHERE username = '$user' AND password = md5('$pass')") or die($db->error);
$cek = mysqli_num_rows($sql);
$data = mysqli_fetch_array($sql);
if ($cek > 0) {
    echo "sukses";
    @$_SESSION['admin'] = $data['id'];
    header("location: index.php");
} else {
    header("location: login.php?alert=1");
}
