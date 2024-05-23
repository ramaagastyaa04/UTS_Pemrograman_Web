<?php
require_once "app.php";
session_start();

$n = updatelistayam($conn, $_GET['id'], $_POST);

mysqli_close($conn);

if (is_null($n)) {
    $_SESSION['BERHASIL_TAMBAH_listayam'] = "Gagal Menambah Data";
} else {
    $_SESSION['BERHASIL_TAMBAH_listayam'] = "Berhasil menambah data gender: {$_POST['gender']}, jenis ayam: {$_POST['jenis ayam']}, umur: {$_POST['umur']}, harga: {$_POST['harga']}";
}

header("Location: /listayam.php");
die();
