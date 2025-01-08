<!DOCTYPE html>
<html>
<head>
    <title>Buku Bank</title>
    <style>
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
    <h1>Form Buku Bank</h1>
    <form action="<?= site_url('BukuBank/save'); ?>" method="POST">
        <label for="jenis">Jenis:</label>
        <select name="jenis" id="jenis" required>
            <option value="debet">Debet</option>
            <option value="kredit">Kredit</option>
        </select>

        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" id="tanggal" required>

        <label for="uraian">Uraian:</label>
        <input type="text" name="uraian" id="uraian" placeholder="Masukkan uraian" required>

        <label for="no_bukti">No Bukti:</label>
        <input type="text" name="no_bukti" id="no_bukti" placeholder="Masukkan nomor bukti">

        <label for="jumlah">Jumlah:</label>
        <input type="number" step="0.01" name="jumlah" id="jumlah" placeholder="Masukkan jumlah" required>

        <button type="submit">Simpan</button>
    </form>

    <h2 style="text-align: center; color: #FFA500;">Data Buku Bank</h2>
    <div style="overflow-x:auto;">
    <table>
        <tr>
            <th>Jenis</th>
            <th>Tanggal</th>
            <th>Uraian</th>
            <th>No Bukti</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($transaksi as $row): ?>
        <tr>
            <td><?= ucfirst($row->jenis); ?></td>
            <td><?= date('d-m-Y', strtotime($row->tanggal)); ?></td>
            <td><?= $row->uraian; ?></td>
            <td><?= $row->no_bukti; ?></td>
            <td>Rp <?= number_format($row->jumlah, 2, ',', '.'); ?></td>
            <td class="actions">
                <a href="<?= site_url('BukuBank/edit/'.$row->id); ?>" class="edit">Edit</a>
                <a href="<?= site_url('BukuBank/delete/'.$row->id); ?>" class="delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
</body>
</html>
