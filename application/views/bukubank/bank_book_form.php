<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container mt-5">
    <!-- FLASH MESSAGE -->
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>

    <h2 class="text-center">Form Buku Bank</h2>

    <!-- FORM START -->
    <?php echo form_open('bank_book/save', ['method' => 'post']); ?>
    <div class="row">
        <!-- Debet Section -->
        <div class="col-md-6">
            <h4 class="text-center">Debet (Penerimaan)</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Uraian</th>
                        <th>No Bukti</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="debet-rows">
                    <tr>
                        <td><input type="date" name="debet[tanggal][]" class="form-control" required></td>
                        <td><input type="text" name="debet[uraian][]" class="form-control" required></td>
                        <td><input type="text" name="debet[no_bukti][]" class="form-control" required></td>
                        <td><input type="number" name="debet[jumlah][]" class="form-control" required></td>
                        <td><button type="button" class="btn btn-danger btn-sm" onclick="removeRow(this)">Hapus</button></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-primary" onclick="addRow('debet')">Tambah Baris</button>
        </div>

        <!-- Kredit Section -->
        <div class="col-md-6">
            <h4 class="text-center">Kredit (Pengeluaran)</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Uraian</th>
                        <th>No Bukti</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="kredit-rows">
                    <tr>
                        <td><input type="date" name="kredit[tanggal][]" class="form-control" required></td>
                        <td><input type="text" name="kredit[uraian][]" class="form-control" required></td>
                        <td><input type="text" name="kredit[no_bukti][]" class="form-control" required></td>
                        <td><input type="number" name="kredit[jumlah][]" class="form-control" required></td>
                        <td><button type="button" class="btn btn-danger btn-sm" onclick="removeRow(this)">Hapus</button></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-primary" onclick="addRow('kredit')">Tambah Baris</button>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="text-center mt-4">
        <button type="submit" class="btn btn-success">Simpan</button>
    </div>
    <?php echo form_close(); ?>
</div>

<!-- Javascript -->
<script>
    // Fungsi untuk menambah baris baru
    function addRow(type) {
        const tableBody = document.getElementById(type + '-rows');
        const newRow = document.createElement('tr');
        newRow.innerHTML = `
            <td><input type="date" name="${type}[tanggal][]" class="form-control" required></td>
            <td><input type="text" name="${type}[uraian][]" class="form-control" required></td>
            <td><input type="text" name="${type}[no_bukti][]" class="form-control" required></td>
            <td><input type="number" name="${type}[jumlah][]" class="form-control" required></td>
            <td><button type="button" class="btn btn-danger btn-sm" onclick="removeRow(this)">Hapus</button></td>
        `;
        tableBody.appendChild(newRow);
    }

    // Fungsi untuk menghapus baris
    function removeRow(button) {
        const row = button.closest('tr');
        row.remove();
    }
</script>
