<!DOCTYPE html>
<html>
<head>
    <title>Data Induk Anggota DWP</title>
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
    <h1>Data Induk Anggota DWP</h1>
    <a href="<?= base_url('DataDwp/create') ?>">Tambah Data</a>
    <div style="overflow-x:auto;">
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Suami</th>
            <th>Golongan</th>
            <th>Nama Ibu</th>
            <th>Status</th>
            <th>Karyawati</th>
            <th>Jenis KB</th>
            <th>Nama Anak</th>
            <th>Tanggal Lahir</th>
            <th>Nama Sekolah</th>
            <th>Alamat</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; foreach ($data_dwp as $row): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['nama_suami'] ?></td>
                <td><?= $row['golongan'] ?></td>
                <td><?= $row['nama_ibu'] ?></td>
                <td><?= $row['status'] ?></td>
                <td><?= $row['karyawati'] ?></td>
                <td><?= $row['jenis_kb'] ?></td>
                <td><?= $row['nama_anak'] ?></td>
                <td><?= $row['tanggal_lahir'] ?></td>
                <td><?= $row['nama_sekolah'] ?></td>
                <td><?= $row['alamat'] ?></td>
                <td><?= $row['keterangan'] ?></td>
                <td>
                    <a href="<?= base_url('DataDwp/edit/'.$row['id']) ?>">Edit</a> | 
                    <a href="<?= base_url('DataDwp/delete/'.$row['id']) ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    </div>
</body>
</html>
