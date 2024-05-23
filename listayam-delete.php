<?php
require_once "app.php";
session_start();

$id = $_GET['id']; // Get the ID of the record to delete

if (deleteData($conn, $id)) { // Call the delete function
    $_SESSION['BERHASIL_DELETE_AYAM'] = "Data berhasil dihapus"; // Set success message
} else {
    $_SESSION['BERHASIL_DELETE_AYAM'] = "Gagal menghapus data"; // Set error message
}

header("Location: /listayam.php"); // Redirect back to the AYAM list page
exit();
?>