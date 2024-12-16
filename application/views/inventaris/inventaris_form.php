<!DOCTYPE html>
<html>
<head>
    <title>Form Inventaris</title>
    <style>
        /* Global Styles */
body {
    font-family: Arial, sans-serif;
    margin: 80px;
    margin-top: 20px;
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
    background-color: #007BFF;
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
    color: #007BFF;
    font-weight: bold;
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
    border-color: #007BFF;
    outline: none;
    box-shadow: 0 0 4px rgba(0, 123, 255, 0.2);
}

form button {
    background-color: #007BFF;
    color: white;
    border: none;
    cursor: pointer;
    font-weight: bold;
    text-transform: uppercase;
}

form button:hover {
    background-color: #0056b3;
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
    <h1><?= isset($inventaris) ? 'Edit' : 'Tambah' ?> Barang Inventaris</h1>
    <form action="<?= isset($inventaris) ? base_url('inventaris/update/'.$inventaris['id']) : base_url('inventaris/store') ?>" method="post">
        <label>Jenis/Nama Barang:</label>
        <input type="text" name="jenis_barang" value="<?= isset($inventaris) ? $inventaris['jenis_barang'] : '' ?>"><br>
        
        <label>Tahun Pembuatan:</label>
        <input type="text" name="tahun_pembuatan" value="<?= isset($inventaris) ? $inventaris['tahun_pembuatan'] : '' ?>"><br>
        
        <label>Bahan:</label>
        <input type="text" name="bahan" value="<?= isset($inventaris) ? $inventaris['bahan'] : '' ?>"><br>
        
        <label>Jumlah:</label>
        <input type="number" name="jumlah" value="<?= isset($inventaris) ? $inventaris['jumlah'] : '' ?>"><br>
        
        <label>Keterangan:</label>
        <textarea name="keterangan"><?= isset($inventaris) ? $inventaris['keterangan'] : '' ?></textarea><br>
        
        <button type="submit">Simpan</button>
    </form>
    <div class="back-link">
        <a href="<?= site_url('Inventaris'); ?>">&larr; Kembali ke Daftar Inventaris</a>
        </div>
</body>
</html>
