<?php
if(isset($_SESSION['login'])) {
    echo '<script>window.location.replace("./dashboard.php");</script>';
} else {
$username = "userlsp";
$password = "smkn2bjm";
if(isset($_POST['username']) && isset($_POST['password'])) {
    if($_POST['username'] == $username && $_POST['password'] == $password) {
        session_start();
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        echo '<meta http-equiv="refresh" content="2; url=./dashboard.php"/>';
        echo "<center><h1>Berhasil, dalam 2 detik kamu akan dialihkan ke halaman utama</h1></center>";
    } elseif($_POST['username'] != $username && $_POST['password'] == $password) {
        echo '<meta http-equiv="refresh" content="2; url=./index.html"/>';
        echo "<center><h1>Gagal!, username Salah</h1></center>";
    } elseif($_POST['username'] == $username && $_POST['password'] != $password) {
        echo '<meta http-equiv="refresh" content="2; url=./index.html"/>';
        echo "<center><h1>Gagal!, Password Salah</h1></center>";
    } elseif($_POST['username'] != $username && $_POST['password'] != $password) {
        echo "<center><h1>Gagal!, username & Password Salah</h1></center>";
    } 
}
}
?>