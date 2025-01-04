<!DOCTYPE html>
<html>
<head>
    <title>Edit Permasalahan</title>
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
    width: 50%;
    margin: 50px auto;
    background: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

/* Title Styling */
h1 {
    text-align: center;
    color: #FFA500;
}

/* Form Styling */
form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

form input {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

form input:focus {
    border-color: #FFA500;
    outline: none;
}

form button {
    padding: 10px 20px;
    font-size: 16px;
    color: white;
    background-color: #FFA500;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease;
}

form button:hover {
    background-color: #FFA500;
}

    </style>
</head>
<body>
    <h1>Edit Permasalahan</h1>
    <form action="<?= site_url('Permasalahan/update/'.$permasalahan->id) ?>" method="post">
        <input type="date" name="tanggal_bulan" value="<?= $permasalahan->tanggal_bulan ?>" required>
        <input type="text" name="permasalahan" value="<?= $permasalahan->permasalahan ?>" required>
        <input type="text" name="keputusan" value="<?= $permasalahan->keputusan ?>" required>
        <input type="text" name="keterangan" value="<?= $permasalahan->keterangan ?>" required>
        <button type="submit">Update</button>
    </form>
    <div class="back-link">
        <a href="<?= site_url('Permasalahan'); ?>">&larr; Kembali ke Daftar Buku Permasalahan</a>
    </div>
</body>
</html>
