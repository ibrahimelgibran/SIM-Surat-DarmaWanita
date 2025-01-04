<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Pelayanan KB</title>
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
    <h1>Register Pelayanan KB</h1>
    <a href="<?php echo site_url('PelayananKB/tambah'); ?>">Tambah Data</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Peserta</th>
                <th>Nama Suami</th>
                <th>Usia</th>
                <th>Jenis Kontrasepsi</th>
                <th>Tanggal Pelayanan</th>
                <th>Efek Samping</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($kb_data as $row): ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->nama_peserta; ?></td>
                <td><?php echo $row->nama_suami; ?></td>
                <td><?php echo $row->usia; ?></td>
                <td><?php echo $row->jenis_kontrasepsi; ?></td>
                <td><?php echo $row->tanggal_pelayanan; ?></td>
                <td><?php echo $row->efek_samping; ?></td>
                <td><?php echo $row->keterangan; ?></td>
                <td>
                    <a href="<?php echo site_url('PelayananKB/edit/'.$row->id); ?>">Edit</a> |
                    <a href="<?php echo site_url('PelayananKB/hapus/'.$row->id); ?>" onclick="return confirm('Yakin hapus data?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
