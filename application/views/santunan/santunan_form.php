<!DOCTYPE html>
<html>
<head>
    <title>Form Santunan Pendidikan</title>
    <style>
        /* Global Styles */
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
    <h1><?= isset($santunan) ? 'Edit' : 'Tambah' ?> Data Santunan</h1>
    <form action="<?= isset($santunan) ? base_url('santunan/update/'.$santunan['id']) : base_url('santunan/store') ?>" method="post">
        <label>Tanggal:</label>
        <input type="date" name="tanggal" value="<?= isset($santunan) ? $santunan['tanggal'] : '' ?>" required>
        
        <label>Nama Anak:</label>
        <input type="text" name="nama_anak" value="<?= isset($santunan) ? $santunan['nama_anak'] : '' ?>" required>
        
        <label>Nama Ortu:</label>
        <input type="text" name="nama_ortu" value="<?= isset($santunan) ? $santunan['nama_ortu'] : '' ?>" required>
        
        <label>Alamat Sekolah:</label>
        <input type="text" name="alamat_sekolah" value="<?= isset($santunan) ? $santunan['alamat_sekolah'] : '' ?>" required>
        
        <label>Golongan:</label>
        <input type="text" name="golongan" value="<?= isset($santunan) ? $santunan['golongan'] : '' ?>">

        <label>Keterangan:</label>
        <textarea name="keterangan"><?= isset($santunan) ? $santunan['keterangan'] : '' ?></textarea>
        
        <button type="submit">Simpan</button>
    </form>
</div>
<div class="back-link">
        <a href="<?= site_url('Santunan'); ?>">&larr; Kembali ke Daftar Santunan Pendidikan</a>
        </div>
</body>
</html>
