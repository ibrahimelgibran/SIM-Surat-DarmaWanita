<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Pelayanan KB</title>
    <style>
        /* Global Styles */
body {
    font-family: Arial, sans-serif;
    margin: 20px;
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
    <h1>Edit Data Pelayanan KB</h1>
    <form action="<?php echo site_url('PelayananKB/update/'.$kb->id); ?>" method="POST">
        <label>Nama Peserta:</label>
        <input type="text" name="nama_peserta" value="<?php echo $kb->nama_peserta; ?>" required><br>
        
        <label>Nama Suami:</label>
        <input type="text" name="nama_suami" value="<?php echo $kb->nama_suami; ?>" required><br>
        
        <label>Usia:</label>
        <input type="number" name="usia" value="<?php echo $kb->usia; ?>" required><br>
        
        <label>Jenis Kontrasepsi:</label>
        <input type="text" name="jenis_kontrasepsi" value="<?php echo $kb->jenis_kontrasepsi; ?>" required><br>
        
        <label>Tanggal Pelayanan:</label>
        <input type="date" name="tanggal_pelayanan" value="<?php echo $kb->tanggal_pelayanan; ?>" required><br>
        
        <label>Efek Samping:</label>
        <input type="text" name="efek_samping" value="<?php echo $kb->efek_samping; ?>"><br>
        
        <label>Keterangan:</label>
        <textarea name="keterangan"><?php echo $kb->keterangan; ?></textarea><br>
        
        <button type="submit">Update</button>
        <a href="<?php echo site_url('PelayananKB'); ?>">Kembali</a>
    </form>
</body>
</html>
