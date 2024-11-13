<?php
include 'koneksql.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM tbpraktikum WHERE id = $id";

    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}

header("Location: index.php");
exit();
?>
