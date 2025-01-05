<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku Bank</title>
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

        .back-link {
            text-align: center;
            margin-top: 10px;
        }

        .back-link a {
            text-decoration: none;
            color: #007BFF;
            font-size: 14px;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Edit Data Buku Bank</h1>
    <form action="<?= site_url('BukuBank/update/'.$transaksi->id); ?>" method="POST">
        <label for="jenis">Jenis:</label>
        <select name="jenis" id="jenis" required>
            <option value="debet" <?= $transaksi->jenis == 'debet' ? 'selected' : ''; ?>>Debet</option>
            <option value="kredit" <?= $transaksi->jenis == 'kredit' ? 'selected' : ''; ?>>Kredit</option>
        </select>

        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" id="tanggal" value="<?= $transaksi->tanggal; ?>" required>

        <label for="uraian">Uraian:</label>
        <input type="text" name="uraian" id="uraian" value="<?= $transaksi->uraian; ?>" placeholder="Masukkan uraian" required>

        <label for="no_bukti">No Bukti:</label>
        <input type="text" name="no_bukti" id="no_bukti" value="<?= $transaksi->no_bukti; ?>" placeholder="Masukkan nomor bukti">

        <label for="jumlah">Jumlah:</label>
        <input type="number" step="0.01" name="jumlah" id="jumlah" value="<?= $transaksi->jumlah; ?>" placeholder="Masukkan jumlah" required>

        <button type="submit">Simpan Perubahan</button>
    </form>

    <div class="back-link">
        <a href="<?= site_url('BukuBank'); ?>">&larr; Kembali ke Daftar Buku Bank</a>
    </div>
</body>
</html>
