<?php
include 'koneksql.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $query = "SELECT * FROM tbpraktikum WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Praktikum</title>
</head>
<body>
    <h2>Edit Data Praktikum</h2>
    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

        <label>Jurusan:</label>
        <input type="text" name="jurusan" value="<?php echo $data['jurusan']; ?>" required>

        <label>Kelas:</label>
        <input type="text" name="kelas" value="<?php echo $data['kelas']; ?>" required>

        <label>Hari:</label>
        <input type="text" name="hari" value="<?php echo $data['hari']; ?>" required>

        <label>Waktu:</label>
        <input type="text" name="waktu" value="<?php echo $data['waktu']; ?>" required>

        <label>Materi:</label>
        <input type="text" name="materi" value="<?php echo $data['materi']; ?>" required>

        <label>Instruktur:</label>
        <input type="text" name="instruktur" value="<?php echo $data['instruktur']; ?>" required>

        <label>Lokasi:</label>
        <input type="text" name="lokasi" value="<?php echo $data['lokasi']; ?>" required>
    

        <button type="submit" name="update">Update Data</button>
    </form>
</body>
</html>

<?php
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];
    $hari = $_POST['hari'];
    $waktu = $_POST['waktu'];
    $materi = $_POST['materi'];
    $instruktur = $_POST['instruktur'];
    $lokasi = $_POST['lokasi'];

    $sql = "UPDATE tbpraktikum SET 
    jurusan = '$jurusan',
     kelas = '$kelas', 
    hari = '$hari', 
    waktu = '$waktu', 
    materi = '$materi',
    instruktur = '$instruktur', 
    lokasi = '$lokasi', 
     WHERE id = $id";

    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil diperbarui.";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }

    header("Location: index.php");
    exit();
}
?>

