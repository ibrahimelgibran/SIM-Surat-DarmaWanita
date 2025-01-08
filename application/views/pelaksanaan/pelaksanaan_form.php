<!DOCTYPE html>
<html>
<head>
    <title>Form Pelaksanaan Program Kerja</title>
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
<div class="container">
    <h1><?= isset($program) ? 'Edit' : 'Tambah' ?> Pelaksanaan Program Kerja</h1>
    <form action="<?= isset($program) ? base_url('pelaksanaan/update/'.$program['id']) : base_url('pelaksanaan/store') ?>" method="post">
        <label>Program Kerja:</label>
        <input type="text" name="program_kerja" value="<?= isset($program) ? $program['program_kerja'] : '' ?>" required>
        
        <label>Kegiatan:</label>
        <input type="text" name="kegiatan" value="<?= isset($program) ? $program['kegiatan'] : '' ?>" required>
        
        <label>Jadwal:</label>
        <input type="date" name="jadwal" value="<?= isset($program) ? $program['jadwal'] : '' ?>" required>
        
        <label>Hambatan:</label>
        <textarea name="hambatan"><?= isset($program) ? $program['hambatan'] : '' ?></textarea>
        
        <label>Saran/Usul:</label>
        <textarea name="saran_usul"><?= isset($program) ? $program['saran_usul'] : '' ?></textarea>
        
        <label>Keterangan:</label>
        <textarea name="keterangan"><?= isset($program) ? $program['keterangan'] : '' ?></textarea>
        
        <button type="submit">Simpan</button>
    </form>
</div>
<div class="back-link">
        <a href="<?= site_url('Pelaksanaan'); ?>">&larr; Kembali ke Daftar Pelaksanaan</a>
        </div>
</body>
</html>
