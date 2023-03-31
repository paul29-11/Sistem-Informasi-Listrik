<?php
@session_start();

if (@$_GET['sesi'] == 'admin') {
    @$_SESSION['admin'] = null;
    echo "<script>window.location='./';</script>";
}
