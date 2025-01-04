<!DOCTYPE html>
<html>
<head>
    <title>Data Inventaris</title>
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
    <h1>Data Inventaris</h1>
    <a href="<?= base_url('inventaris/create') ?>">Tambah Barang</a>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis/Nama Barang</th>
                <th>Tahun Pembuatan</th>
                <th>Bahan</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inventaris as $index => $item): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $item['jenis_barang'] ?></td>
                    <td><?= $item['tahun_pembuatan'] ?></td>
                    <td><?= $item['bahan'] ?></td>
                    <td><?= $item['jumlah'] ?></td>
                    <td><?= $item['keterangan'] ?></td>
                    <td>
                        <a href="<?= base_url('inventaris/edit/'.$item['id']) ?>">Edit</a>
                        <a href="<?= base_url('inventaris/delete/'.$item['id']) ?>" onclick="return confirm('Yakin?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
