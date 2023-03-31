<?php
// Untuk menampilkan halaman dashboard
if (@$_GET['page'] == '') {
    include "modules/dashboard/index.php";
}
// untuk menampilkan halaman home 
else if (@$_GET['page'] == 'home') {
    include "modules/home/form.php";
}

// About
else if (@$_GET['page'] == 'about') {
    include "modules/about/form.php";
}

// profile
else if (@$_GET['page'] == 'profile') {
    include "modules/profile/form.php";
}

// Proyek
else if (@$_GET['page'] == 'proyek') {
    include "modules/proyek/index.php";
} else if (@$_GET['page'] == 'form_proyek') {
    include "modules/proyek/form.php";
}

// Galeri
else if (@$_GET['page'] == 'galeri') {
    include "modules/galeri/index.php";
} else if (@$_GET['page'] == 'form_galeri') {
    include "modules/galeri/form.php";
} else {
    echo "<div class='col-xs-12'><div class='alert alert-danger'>[404] Halaman tidak ditemukan! Silahkan pilih menu yang ada!</div></div>";
}
