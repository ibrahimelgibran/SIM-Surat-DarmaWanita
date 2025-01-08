<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/buku_harian_form.css') ?>">
    <title>Edit Data Buku Harian</title>
    <style>/* Global Styles */
body {
    font-family: Arial, sans-serif;
    margin: 33px;
    margin-top: 30px;
    padding: 0;
    background-color: #f9f9f9;
    color: #333;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: 20px auto;
}

h1 {
    text-align: center;
    color: #FFA500;
}
/* Table Styles */
table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    background: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

table th, table td {
    padding: 12px;
    text-align: left;
    border: 1px solid #ddd;
}

table th {
    background-color: #FFA500;
    color: white;
    text-transform: uppercase;
}

table tr:nth-child(even) {
    background-color: #f2f2f2;
}

table tr:hover {
    background-color: #e9f5ff;
}

a {
    text-decoration: none;
    color: #FFA500;
}

a:hover {
    text-decoration: none;
}

/* Form Styles */
form {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

form label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

form input, form textarea, form button {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

form input:focus, form textarea:focus {
    border-color: #007BFF;
    outline: none;
    box-shadow: 0 0 4px rgba(0, 123, 255, 0.2);
}

form button {
    background-color: #FFA500;
    color: white;
    border: none;
    cursor: pointer;
    font-weight: bold;
    text-transform: uppercase;
}

form button:hover {
    background-color: #FFA500;
}

/* Responsive Styles */
@media (max-width: 768px) {
    table th, table td {
        font-size: 14px;
        padding: 8px;
    }

    h1 {
    
    color: #FFA500;
    margin-top: 100px;
}

    form input, form textarea, form button {
        font-size: 14px;
        padding: 8px;
    }
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
    <div class="back-link">
        <a href="<?= site_url('BukuHarian'); ?>">&larr; Kembali ke Daftar Buku Harian</a>
    </div>
</body>
</html>
