<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/buku_harian_form.css') ?>">
    <title>Edit Data Buku Harian</title>
    <style> body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

.container {
    width: 80%;
    max-width: 800px;
    margin: 50px auto;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 8px;
    font-weight: bold;
    color: #555;
}

input[type="text"],
input[type="date"],
textarea {
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    width: 100%;
    box-sizing: border-box;
}

textarea {
    resize: vertical;
    min-height: 100px;
}

button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 12px;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #0056b3;
}

button:active {
    background-color: #004494;
}

</style>
</head>
<body>
    <div class="container">
        <h1>Edit Data Buku Harian</h1>
        <form action="<?= base_url('BukuHarian/update/' . $buku_harian['id']) ?>" method="post">
            <label for="hari_tanggal">Hari/Tanggal:</label>
            <input type="date" name="hari_tanggal" id="hari_tanggal" value="<?= $buku_harian['hari_tanggal'] ?>" required>

            <label for="nama_pengurus">Nama Pengurus:</label>
            <input type="text" name="nama_pengurus" id="nama_pengurus" value="<?= $buku_harian['nama_pengurus'] ?>" required>

            <label for="masalah_persoalan">Masalah/Persoalan:</label>
            <textarea name="masalah_persoalan" id="masalah_persoalan" required><?= $buku_harian['masalah_persoalan'] ?></textarea>

            <label for="tindakan">Tindakan:</label>
            <textarea name="tindakan" id="tindakan" required><?= $buku_harian['tindakan'] ?></textarea>

            <label for="keterangan">Keterangan:</label>
            <textarea name="keterangan" id="keterangan"><?= $buku_harian['keterangan'] ?></textarea>

            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
