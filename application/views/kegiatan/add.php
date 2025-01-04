<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kegiatan</title>
    <style>

body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
}

.container {
    width: 90%;
    max-width: 600px;
    margin: 50px auto;
    background: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    padding: 20px;
}

h1 {
    text-align: center;
    color: #FFA500;
    margin-bottom: 20px;
    font-size: 28px;
}

form {
    display: flex;
    flex-direction: column;
}

form label {
    font-size: 16px;
    color: #333;
    margin-bottom: 5px;
    font-weight: bold;
}

form input, form textarea, form select {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 15px;
    width: 100%;
    box-sizing: border-box;
}

form input:focus, form textarea:focus, form select:focus {
    border-color: #FFA500;
    outline: none;
    box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
}

button {
    padding: 12px 20px;
    font-size: 16px;
    color: #fff;
    background-color: #FFA500;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-transform: uppercase;
    transition: background-color 0.3s ease;
    font-weight: bold;
}

button:hover {
    background-color: #FFA500;
}

a {
    display: block;
    text-align: center;
    margin-top: 15px;
    color: #FFA500;
    text-decoration: none;
    font-size: 14px;
}

a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Kegiatan</h1>
        <form action="<?= site_url('kegiatan/add') ?>" method="post">
            <label for="tanggal">Tanggal</label>
            <input type="date" id="hari_tanggal" name="hari_tanggal" required>

            <label for="nama_pengurus">Nama Pengurus</label>
            <input type="text" id="nama_pengurus" name="nama_pengurus" required>

            <label for="tempat">Tempat</label>
            <input type="text" id="tempat" name="tempat" required>

            <label for="kegiatan">Kegiatan</label>
            <textarea id="kegiatan" name="kegiatan" rows="3" required></textarea>

            <label for="keterangan">Keterangan</label>
            <textarea id="keterangan" name="keterangan" rows="3"></textarea>

            <button type="submit">Simpan</button>
        </form>
    </div>
    <div class="back-link">
        <a href="<?= site_url('Kegiatan'); ?>">&larr; Kembali ke Daftar Buku Kegiatan</a>
    </div>
</body>
</html>
