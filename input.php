<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Praktikum</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="form-container">
        <h2>Form Pendataan Praktikum</h2>
        <form action="tambah.php" method="post">
            <label for="jurusan">Jurusan:</label>
            <input type="text" id="jurusan" name="jurusan" maxlength="3" required>

            <label for="kelas">Kelas:</label>
            <input type="text" id="kelas" name="kelas" maxlength="10" required>

            <label for="hari">Hari:</label>
            <input type="text" id="hari" name="hari" maxlength="10" required>

            <label for="waktu">Waktu:</label>
            <input type="text" id="waktu" name="waktu" maxlength="20" required>

            <label for="materi">Materi:</label>
            <input type="text" id="materi" name="materi" maxlength="100" required>

            <label for="instruktur">Instruktur:</label>
            <input type="text" id="instruktur" name="instruktur" maxlength="100" required>

            <label for="lokasi">Lokasi:</label>
            <input type="text" id="lokasi" name="lokasi" maxlength="100" required>


            <button type="submit">Tambah Data</button>
        </form>
    </div>
</body>
</html>
