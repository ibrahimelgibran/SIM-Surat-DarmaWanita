<div class="container mt-5">
    <style>
       /* Tabel */
.table {
    border: 1px solid #dee2e6; /* Border tabel */
    border-collapse: collapse;
    background-color: #f9f9f9;
    width: 100%;
}

.table th {
    background-color: #FFA500; /* Warna oranye untuk header tabel */
    color: white; /* Teks putih pada header */
    text-align: center;
}

.table td, .table th {
    padding: 10px;
    text-align: center;
    border: 1px solid #dee2e6; /* Garis antar sel */
    word-wrap: break-word; /* Membungkus teks yang panjang */
}

.table tbody tr:nth-child(odd) {
    background-color: #e9ecef; /* Warna abu-abu terang untuk baris ganjil */
}

.table tbody tr:nth-child(even) {
    background-color: #ffffff; /* Warna putih untuk baris genap */
}

.table-hover tbody tr:hover {
    background-color: #d4edda; /* Warna hijau terang saat kursor hover */
    transition: background-color 0.3s ease;
}

/* Form */
form {
    border: 1px solid #ced4da; /* Border abu-abu */
    background-color: #ffffff; /* Latar putih */
    padding: 20px;
    border-radius: 10px; /* Sudut membulat */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan lembut */
}

form h4 {
    color: #FFA500; /* Warna teks oranye */
}

/* Tombol */
button {
    background-color: #FFA500;
    border: none;
    padding: 10px 15px;
    color: white;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #e69500;
}

.btn-danger:hover {
    background-color: #bd2130; /* Merah lebih gelap saat hover */
}

/* Notifikasi Flash */
.alert {
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 15px;
}

.alert-success {
    background-color: #d4edda;
    color: #155724;
    border-color: #c3e6cb;
}

.alert-danger {
    background-color: #f8d7da;
    color: #721c24;
    border-color: #f5c6cb;
}

/* Teks */
.text-center {
    font-size: 18px;
    font-weight: bold;
}

h2, h3 {
    font-weight: bold;
    color: #343a40; /* Warna teks hitam pekat */
}

/* Responsive */
.table-responsive {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}

@media (max-width: 768px) {
    .table th, .table td {
        font-size: 12px;
        padding: 5px;
    }
    form {
        padding: 10px;
    }
    button {
        padding: 8px 10px;
    }
    h2, h3 {
        font-size: 16px;
    }
    .alert {
        font-size: 12px;
    }
}

    </style>

    <form action="<?= site_url('UangMuka/update'); ?>" method="POST">
        <h3>Update Data Uang Muka</h3>
        <input type="hidden" name="id" value="<?= $uang_muka->id; ?>">
        
        <div class="form-group">
            <label for="nomor">No</label>
            <input type="number" name="nomor" id="nomor" class="form-control" value="<?= $uang_muka->nomor; ?>" required>
        </div>

        <div class="form-group">
            <label for="uraian">Uraian</label>
            <input type="text" name="uraian" id="uraian" class="form-control" value="<?= $uang_muka->uraian; ?>" required>
        </div>

        <div class="form-group">
            <label for="nomor_bukti">Nomor Bukti</label>
            <input type="text" name="nomor_bukti" id="nomor_bukti" class="form-control" value="<?= $uang_muka->nomor_bukti; ?>" required>
        </div>

        <div class="form-group">
            <label for="jumlah_uang_muka">Jumlah Uang Muka</label>
            <input type="number" name="jumlah_uang_muka" id="jumlah_uang_muka" class="form-control" value="<?= $uang_muka->jumlah_uang_muka; ?>" required>
        </div>

        <div class="form-group">
            <label for="tanggal_pajak">Tanggal Pajak</label>
            <input type="date" name="tanggal_pajak" id="tanggal_pajak" class="form-control" value="<?= $uang_muka->tanggal_pajak; ?>" required>
        </div>

        <div class="form-group">
            <label for="no_bukti_pajak">No Bukti Pajak</label>
            <input type="text" name="no_bukti_pajak" id="no_bukti_pajak" class="form-control" value="<?= $uang_muka->no_bukti_pajak; ?>" required>
        </div>

        <div class="form-group">
            <label for="jumlah_pajak">Jumlah Pajak</label>
            <input type="number" name="jumlah_pajak" id="jumlah_pajak" class="form-control" value="<?= $uang_muka->jumlah_pajak; ?>" required>
        </div>

        <div class="form-group">
            <label for="disetor_tunai">Disetor Tunai</label>
            <input type="number" name="disetor_tunai" id="disetor_tunai" class="form-control" value="<?= $uang_muka->disetor_tunai; ?>" required>
        </div>

        <div class="form-group">
            <label for="saldo_uang_muka">Saldo Uang Muka</label>
            <input type="number" name="saldo_uang_muka" id="saldo_uang_muka" class="form-control" value="<?= $uang_muka->saldo_uang_muka; ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
