<!DOCTYPE html>
<html>
<head>
    <title>Buku Bank</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #FFA500;
            margin-top: 20px;
        }

        form {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            max-width: 600px;
            margin: 20px auto;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        form input, form select, form button {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        form button {
            background-color: #FFA500;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        form button:hover {
            background-color: #FFA500;
        }

        table {
            border-collapse: collapse;
            width: 90%;
            margin: 20px auto;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        table th {
            background-color: #FFA500;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }

        a:hover {
            text-decoration: underline;
        }

        .actions a {
            margin: 0 5px;
            padding: 5px 10px;
            border: 1px solid #007BFF;
            border-radius: 4px;
            color: white;
        }

        .actions a.edit {
            background-color: #FFA500;
        }

        .actions a.delete {
            background-color: #dc3545;
        }

        .actions a.edit:hover {
            background-color: #FFA500;
        }

        .actions a.delete:hover {
            background-color: #c82333;
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
</body>
</html>
