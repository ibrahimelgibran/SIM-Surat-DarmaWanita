<!DOCTYPE html>
<html>
<head>
    <title>Form Data Anggota DWP</title>
    <style>
        /* Global Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    color: #333;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: 20px auto;
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
    text-decoration: underline;
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
    border-color:#FFA500;
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

    form input, form textarea, form button {
        font-size: 14px;
        padding: 8px;
    }
}

    </style>
</head>
<body>
<h1><?= isset($data_dwp) ? 'Edit' : 'Tambah' ?> Data</h1>
    <form method="post" action="<?= isset($data_dwp) ? base_url('DataDwp/update/'.$data_dwp['id']) : base_url('DataDwp/store') ?>">
        <label>Nama Suami:</label>
        <input type="text" name="nama_suami" value="<?= isset($data_dwp) ? $data_dwp['nama_suami'] : '' ?>" required><br>

        <label>Golongan:</label>
        <input type="text" name="golongan" value="<?= isset($data_dwp) ? $data_dwp['golongan'] : '' ?>"><br>

        <label>Nama Ibu:</label>
        <input type="text" name="nama_ibu" value="<?= isset($data_dwp) ? $data_dwp['nama_ibu'] : '' ?>" required><br>

        <label>Status:</label>
        <select name="status" required>
            <option value="DWP" <?= isset($data_dwp) && $data_dwp['status'] == 'DWP' ? 'selected' : '' ?>>DWP</option>
            <option value="MURNI" <?= isset($data_dwp) && $data_dwp['status'] == 'MURNI' ? 'selected' : '' ?>>MURNI</option>
        </select><br>

        <!-- Tambahan kolom input Karyawati -->
        <label>Karyawati:</label>
        <input type="text" name="karyawati" value="<?= isset($data_dwp) ? $data_dwp['karyawati'] : '' ?>"><br>

        <label>Jenis KB:</label>
        <input type="text" name="jenis_kb" value="<?= isset($data_dwp) ? $data_dwp['jenis_kb'] : '' ?>"><br>

        <label>Nama Anak:</label>
        <input type="text" name="nama_anak" value="<?= isset($data_dwp) ? $data_dwp['nama_anak'] : '' ?>"><br>

        <label>Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" value="<?= isset($data_dwp) ? $data_dwp['tanggal_lahir'] : '' ?>"><br>

        <label>Nama Sekolah:</label>
        <input type="text" name="nama_sekolah" value="<?= isset($data_dwp) ? $data_dwp['nama_sekolah'] : '' ?>"><br>

        <label>Alamat:</label>
        <textarea name="alamat"><?= isset($data_dwp) ? $data_dwp['alamat'] : '' ?></textarea><br>

        <label>Keterangan:</label>
        <textarea name="keterangan"><?= isset($data_dwp) ? $data_dwp['keterangan'] : '' ?></textarea><br>

        <button type="submit">Simpan</button>
    </form>
    <div class="back-link">
        <a href="<?= site_url('DataDwp'); ?>">&larr; Kembali ke Daftar DWP</a>
        </div>
</body>
</html>
