<?php
$koneksi = mysqli_connect("localhost", "root", "", "dbujian");


if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil!";
?>

