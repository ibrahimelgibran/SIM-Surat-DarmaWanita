<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Aktivitas</title>
    <style>
        /* Global Styles */
body {
    font-family: Arial, sans-serif;
    margin: 30px;
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
    border-color: #FFA500;
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
    background-color:rgb(252, 175, 32);
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
    <h1>Data Aktivitas Tahunan</h1>

    <!-- Form Tambah Data -->
    <form action="<?php echo site_url('aktivitas/tambah'); ?>" method="POST">
        <label for="kegiatan">Kegiatan:</label>
        <input type="text" name="kegiatan" required><br>

        <label for="tgl_dilaksanakan">Tgl/Bln/Thn Dilaksanakan:</label>
        <input type="date" name="tgl_dilaksanakan" required><br>

        <label for="keterangan">Keterangan:</label>
        <textarea name="keterangan"></textarea><br>

        <button type="submit">Tambah Data</button>
    </form>

    <!-- Tabel Data -->
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Kegiatan</th>
            <th>Tgl/Bln/Thn Dilaksanakan</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; foreach ($aktivitas as $row): ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row->kegiatan; ?></td>
            <td><?php echo $row->tgl_dilaksanakan; ?></td>
            <td><?php echo $row->keterangan; ?></td>
            <td>
            <a href="<?php echo site_url('aktivitas/edit/'.$row->id); ?>">Edit</a> |
                <a href="<?php echo site_url('aktivitas/hapus/'.$row->id); ?>" onclick="return confirm('Yakin hapus?');">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
