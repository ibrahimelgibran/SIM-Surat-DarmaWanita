<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/buku_harian_view.css') ?>">
    <title>Data Buku Harian</title>
    <style>

       body {
    font-family: 'Poppins', sans-serif;
    background-color: #f4f7fc;
    margin: 0;
    margin-top: 30px;
    padding: 0;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: 60px auto;
    margin-top: 30px;
    background: #ffffff;
    padding: 30px;
    border-radius: 12px;
    /* box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); */
}

h1 {
    text-align: center;
    color: #2c3e50;
    font-size: 24px;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 8px;
    font-weight: 600;
    color: #34495e;
    font-size: 14px;
}

input[type="text"],
input[type="date"],
textarea {
    padding: 12px;
    margin-bottom: 20px;
    border: 1px solid #dcdde1;
    border-radius: 6px;
    font-size: 16px;
    width: 100%;
    box-sizing: border-box;
    background-color: #ecf0f1;
    color: #2c3e50;
    transition: border-color 0.3s;
}

input[type="text"]:focus,
input[type="date"]:focus,
textarea:focus {
    border-color: #FFA500;
    outline: none;
    background-color: #ffffff;
}

textarea {
    resize: vertical;
    min-height: 120px;
}

button {
    background-color: #FFA500;
    color: white;
    border: none;
    padding: 14px;
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s;
    font-weight: 600;
}

button:hover {
    background-color: #FFA500;
}

button:active {
    background-color: #FFA500;
}

/* Table for displaying data */
.table-container {
    margin-top: 30px;
    overflow-x: auto;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #ffffff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

table th, table td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #dcdde1;
    color: #2c3e50;
}

table th {
    background-color: #FFA500;
    color: white;
    font-weight: 600;
}

table tr:hover {
    background-color: #ecf0f1;
}

table tr:nth-child(even) {
    background-color: #f8f9fa;
}


    </style>
</head>
<body>
    <div class="container">
        <h1>Data Buku Harian</h1>
        <a href="<?= base_url('BukuHarian/create') ?>" class="btn-add">Tambah Data</a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Hari/Tanggal</th>
                    <th>Nama Pengurus</th>
                    <th>Masalah/Persoalan</th>
                    <th>Tindakan</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($buku_harian as $index => $data): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $data['hari_tanggal'] ?></td>
                    <td><?= $data['nama_pengurus'] ?></td>
                    <td><?= $data['masalah_persoalan'] ?></td>
                    <td><?= $data['tindakan'] ?></td>
                    <td><?= $data['keterangan'] ?></td>
                    <td>
                        <a href="<?= base_url('BukuHarian/edit/' . $data['id']) ?>">Edit</a> |
                        <a href="<?= base_url('BukuHarian/delete/' . $data['id']) ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
