<!DOCTYPE html>
<html>
<head>
    <title>Permasalahan</title>
    <style>
        /* Reset Styles */
body {
    margin: 100px;
    margin-top: 30px;
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
    line-height: 1.6;
}

/* Container Styling */
.container {
    width: 80%;
    margin: 20px auto;
    background: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

/* Title Styling */
h1 {
    text-align: center;
    color: #4CAF50;
}

/* Form Styling */
form {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: space-between;
}

form input, form button {
    flex: 1 1 calc(25% - 20px);
    padding: 10px;
    font-size: 16px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

form input:focus {
    border-color: #4CAF50;
    outline: none;
}

form button {
    background: #4CAF50;
    color: #fff;
    cursor: pointer;
    transition: background 0.3s ease;
}

form button:hover {
    background: #45a049;
}

/* Table Styling */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table th, table td {
    padding: 10px;
    text-align: center;
    border: 1px solid #ddd;
}

table th {
    background: #4CAF50;
    color: #fff;
    font-weight: bold;
}

table tr:nth-child(even) {
    background: #f2f2f2;
}

table tr:hover {
    background: #e9f5e9;
}

table a {
    text-decoration: none;
    color: #4CAF50;
    font-weight: bold;
    transition: color 0.3s ease;
}

table a:hover {
    color: #388E3C;
}

    </style>
</head>
<body>
    <h1>Daftar Permasalahan</h1>
    <form action="<?= site_url('Permasalahan/create') ?>" method="post">
        <input type="date" name="tanggal_bulan" required>
        <input type="text" name="permasalahan" placeholder="Permasalahan" required>
        <input type="text" name="keputusan" placeholder="Keputusan" required>
        <input type="text" name="keterangan" placeholder="Keterangan" required>
        <button type="submit">Tambah</button>
    </form>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Tanggal/Bulan</th>
            <th>Permasalahan</th>
            <th>Keputusan</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($permasalahan as $index => $item): ?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= $item->tanggal_bulan ?></td>
            <td><?= $item->permasalahan ?></td>
            <td><?= $item->keputusan ?></td>
            <td><?= $item->keterangan ?></td>
            <td>
                <a href="<?= site_url('Permasalahan/edit/'.$item->id) ?>">Edit</a>
                <a href="<?= site_url('Permasalahan/delete/'.$item->id) ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
