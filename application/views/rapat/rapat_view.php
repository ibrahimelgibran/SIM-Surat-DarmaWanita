<!DOCTYPE html>
<html>
<head>
    <title>Buku Bahan Rapat Pengurus Inti</title>
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
<div class="container">
    <h1>Data Buku Bahan Rapat Pengurus Inti</h1>
    <a href="<?= base_url('rapat/create') ?>">Tambah Data</a>
    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th>No</th>
                <th>Permasalahan</th>
                <th>Keputusan</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bahan_rapat as $index => $row): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $row['permasalahan'] ?></td>
                    <td><?= $row['keputusan'] ?></td>
                    <td><?= $row['keterangan'] ?></td>
                    <td>
                        <a href="<?= base_url('rapat/edit/'.$row['id']) ?>">Edit</a>
                        <a href="<?= base_url('rapat/delete/'.$row['id']) ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
