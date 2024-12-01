<div class="container mt-5">
    <!-- Notifikasi Flash Data -->
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('success'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('error'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <h2 class="text-center">Form Uang Muka</h2>

    <!-- Form Input Data -->
    <?= form_open('uang_muka/save'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Uraian</th>
                            <th>Nomor Bukti</th>
                            <th>Jumlah Uang Muka</th>
                            <th>Tanggal Pajak</th>
                            <th>No Bukti Pajak</th>
                            <th>Jumlah Pajak</th>
                            <th>Disetor Tunai</th>
                            <th>Saldo Uang Muka</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="form-rows">
                        <tr>
                            <td><input type="number" name="nomor[]" class="form-control" required></td>
                            <td><input type="text" name="uraian[]" class="form-control" required></td>
                            <td><input type="text" name="nomor_bukti[]" class="form-control" required></td>
                            <td><input type="number" name="jumlah_uang_muka[]" class="form-control" required></td>
                            <td><input type="date" name="tanggal_pajak[]" class="form-control" required></td>
                            <td><input type="text" name="no_bukti_pajak[]" class="form-control" required></td>
                            <td><input type="number" name="jumlah_pajak[]" class="form-control" required></td>
                            <td><input type="number" name="disetor_tunai[]" class="form-control" required></td>
                            <td><input type="number" name="saldo_uang_muka[]" class="form-control" required></td>
                            <td><button type="button" class="btn btn-danger btn-sm" onclick="removeRow(this)">Hapus</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button type="button" class="btn btn-primary" onclick="addRow()">Tambah Baris</button>
        </div>
    </div>

    <div class="text-center mt-3">
        <button type="submit" class="btn btn-success">Simpan</button>
    </div>
    <?= form_close(); ?>

    <!-- Tabel Output Data -->
    <h3 class="mt-5 text-center">Data Uang Muka</h3>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Uraian</th>
                    <th>Nomor Bukti</th>
                    <th>Jumlah Uang Muka</th>
                    <th>Tanggal Pajak</th>
                    <th>No Bukti Pajak</th>
                    <th>Jumlah Pajak</th>
                    <th>Disetor Tunai</th>
                    <th>Saldo Uang Muka</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($uang_muka_data)): ?>
                    <?php foreach ($uang_muka_data as $row): ?>
    <tr>
        <td><?= $row->nomor; ?></td>
        <td><?= $row->uraian; ?></td>
        <td><?= $row->nomor_bukti; ?></td>
        <td><?= $row->jumlah_uang_muka; ?></td>
        <td><?= $row->tanggal_pajak; ?></td>
        <td><?= $row->no_bukti_pajak; ?></td>
        <td><?= $row->jumlah_pajak; ?></td>
        <td><?= $row->disetor_tunai; ?></td>
        <td><?= $row->saldo_uang_muka; ?></td>
        <td>

        </td>
        <td>
            <a href="<?= site_url('UangMuka/edit/'.$row->id); ?>" class="btn btn-warning">Edit</a>
            <a href="<?= site_url('UangMuka/delete/'.$row->id); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
        </td>
    </tr>
<?php endforeach; ?>

                <?php else: ?>
                    <tr>
                        <td colspan="9" class="text-center">Tidak ada data</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    // Fungsi untuk menambah baris baru
    function addRow() {
        const tableBody = document.getElementById('form-rows');
        const newRow = document.createElement('tr');
        newRow.innerHTML = `
            <td>#</td>
            <td><input type="number" name="nomor[]" class="form-control" required></td>
            <td><input type="text" name="uraian[]" class="form-control" required></td>
            <td><input type="text" name="nomor_bukti[]" class="form-control" required></td>
            <td><input type="number" name="jumlah_uang_muka[]" class="form-control" required></td>
            <td><input type="date" name="tanggal_pajak[]" class="form-control" required></td>
            <td><input type="text" name="no_bukti_pajak[]" class="form-control" required></td>
            <td><input type="number" name="jumlah_pajak[]" class="form-control" required></td>
            <td><input type="number" name="disetor_tunai[]" class="form-control" required></td>
            <td><input type="number" name="saldo_uang_muka[]" class="form-control" required></td>
            <td><button type="button" class="btn btn-danger btn-sm" onclick="removeRow(this)">Hapus</button></td>
        `;
        tableBody.appendChild(newRow);
    }

    // Fungsi untuk menghapus baris
    function removeRow(button) {
        const row = button.closest('tr');
        row.remove();
    }

    // Menghilangkan notifikasi setelah beberapa detik
    setTimeout(() => {
        const alert = document.querySelector('.alert');
        if (alert) {
            alert.style.transition = 'opacity 0.5s ease';
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 500);
        }
    }, 3000); // Menghilang setelah 3 detik
</script>
