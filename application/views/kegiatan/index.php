<!DOCTYPE html>
<html>
<head>
    <title>Data Kegiatan</title>
    <style>

body {
    margin: 70px;
    margin-top: 20px;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
}

.container {
    width: 50%;
    max-width: 1200px;
    margin: 50px auto;
    background: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    padding: 20px;
}

h1 {
    text-align: center;
    color: #28a745;
    margin-bottom: 20px;
    font-size: 28px;
}

.table-container {
    overflow-x: auto;
    margin-top: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 0 auto;
    font-size: 16px;
    text-align: left;
}

table th, table td {
    padding: 15px;
    border: 1px solid #ddd;
}

table th {
    background-color: #28a745;
    color: #ffffff;
    text-transform: uppercase;
    font-weight: bold;
}

table tr:nth-child(even) {
    background-color: #f9f9f9;
}

table tr:hover {
    background-color: #f1f1f1;
}

button {
    padding: 10px 15px;
    font-size: 14px;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-transform: uppercase;
    margin-right: 5px;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
    text-decoration: none;
}

button.delete {
    background-color: #dc3545;
}

button.delete:hover {
    background-color: #c82333;
}

.actions {
    display: flex;
    justify-content: center;
}

a {
    display: inline-block;
    color: #28a745;
    text-decoration: none;
    font-size: 14px;
    margin-top: 20px;
}

a:hover {
    text-decoration: none;
}

    </style>
</head>
<body>
    <h1>Data Kegiatan</h1>
    <a href="<?php echo site_url('kegiatan/add'); ?>">Tambah Kegiatan</a>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Hari/Tanggal</th>
                <th>Nama Pengurus</th>
                <th>Tempat</th>
                <th>Kegiatan</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kegiatan as $i => $k): ?>
                <tr>
                    <td><?php echo $i + 1; ?></td>
                    <td><?php echo $k['hari_tanggal']; ?></td>
                    <td><?php echo $k['nama_pengurus']; ?></td>
                    <td><?php echo $k['tempat']; ?></td>
                    <td><?php echo $k['kegiatan']; ?></td>
                    <td><?php echo $k['keterangan']; ?></td>
                    <td>
                        <a href="<?php echo site_url('kegiatan/edit/' . $k['id']); ?>">Edit</a>
                        <a href="<?php echo site_url('kegiatan/delete/' . $k['id']); ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
