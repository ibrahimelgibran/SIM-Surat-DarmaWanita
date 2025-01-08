<!DOCTYPE html>
<html>
<head>
    <title>Data Kegiatan</title>
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

    <h1>Data Kegiatan</h1>
    <a href="<?php echo site_url('kegiatan/add'); ?>">Tambah Kegiatan</a>
    <div style="overflow-x:auto;">
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
</div>
</body>
</html>
