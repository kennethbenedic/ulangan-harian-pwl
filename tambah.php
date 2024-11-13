<?php
include 'koneksql.php';


$jurusan = $_POST['jurusan'];
$kelas = $_POST['kelas'];
$hari = $_POST['hari'];
$waktu = $_POST['waktu'];
$materi = $_POST['materi'];
$instruktur = $_POST['instruktur'];
$lokasi = $_POST['lokasi'];



$sql = "INSERT INTO tbpraktikum (id,jurusan, kelas, hari, waktu, materi, instruktur, lokasi)
        VALUES (NULL,'$jurusan', '$kelas', '$hari', '$waktu', '$materi', '$instruktur', '$lokasi')";

if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil ditambahkan.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>

