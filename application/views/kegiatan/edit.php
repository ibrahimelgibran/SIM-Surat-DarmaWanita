<!DOCTYPE html>
<html>
<head>
    <title>Edit Kegiatan</title>
    <style>
  /* Global Styles */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f6f9;
    margin: 200px;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 0;
}

.container {
    width: 50%;
    max-width: 1000px;
    margin: auto;
}

/* Header */
h1, h2 {
    text-align: center;
    font-size: 28px;
    color: #333;
}

/* Form Container */
.form-container {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 30px;
    margin: 0;
}

.form-group {
    margin-bottom: 5px;
}

label {
    display: block;
    font-weight: bold;
    color: #555;
   
}

input, select, textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    color: #333;
    background-color: #f9f9f9;
    box-sizing: border-box;
}

input[type="date"] {
    padding: 10px 14px;
}

textarea {
    height: 150px;
    resize: vertical;
}

/* Focused Inputs */
input:focus, select:focus, textarea:focus {
    border-color: #FFA500;
    background-color: #f1f1f1;
    outline: none;
}

/* Submit Button */
button {
    background-color: #FFA500;
    color: #fff;
    font-size: 18px;
    padding: 12px 20px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    width: 100%;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #FFA500;
}

/* Link Button */
a {
    color: #FFA500;
    text-decoration: none;
    font-size: 16px;
    display: inline-block;
    margin-top: 15px;
}

a:hover {
    text-decoration: underline;
}

/* Error and Success Messages */
.alert {
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 4px;
    color: #fff;
    font-weight: bold;
}

.alert-success {
    background-color: #FFA500;
}

.alert-danger {
    background-color: #f44336;
}

/* Responsive Design */
@media (max-width: 768px) {
    .form-container {
        padding: 20px;
    }

    .container {
        width: 90%;
    }

    button {
        font-size: 16px;
    }
}


    </style>
</head>
<body>
    <h1>Edit Kegiatan</h1>
    <form method="post">
        <label>Hari/Tanggal:</label><br>
        <input type="date" name="hari_tanggal" value="<?php echo $kegiatan['hari_tanggal']; ?>" required><br>
        <label>Nama Pengurus:</label><br>
        <input type="text" name="nama_pengurus" value="<?php echo $kegiatan['nama_pengurus']; ?>" required><br>
        <label>Tempat:</label><br>
        <input type="text" name="tempat" value="<?php echo $kegiatan['tempat']; ?>" required><br>
        <label>Kegiatan:</label><br>
        <textarea name="kegiatan" required><?php echo $kegiatan['kegiatan']; ?></textarea><br>
        <label>Keterangan:</label><br>
        <textarea name="keterangan"><?php echo $kegiatan['keterangan']; ?></textarea><br>
        <button type="submit">Simpan</button>
    </form>
    <div class="back-link">
        <a href="<?= site_url('Kegiatan'); ?>">&larr; Kembali ke Daftar Buku Kegiatan</a>
    </div>
</body>
</html>
