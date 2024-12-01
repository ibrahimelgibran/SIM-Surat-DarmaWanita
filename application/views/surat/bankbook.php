<?php
// File: application/views/bank_book_form.php
?>
<div class="container mt-5">
    <h2 class="text-center">Form Buku Bank</h2>
    <?php echo form_open(base_url('bank_book/save')); ?>
        <div class="row">
            <!-- Debet (Penerimaan) Section -->
            <div class="col-md-6">
                <h4 class="text-center">Debet (Penerimaan)</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Uraian</th>
                            <th>No Bukti</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody id="debet-rows">
                        <tr>
                            <td><?php echo form_input(['type' => 'date', 'name' => 'debet[tanggal][]', 'class' => 'form-control', 'required' => 'required']); ?></td>
                            <td><?php echo form_input(['type' => 'text', 'name' => 'debet[uraian][]', 'class' => 'form-control', 'required' => 'required']); ?></td>
                            <td><?php echo form_input(['type' => 'text', 'name' => 'debet[no_bukti][]', 'class' => 'form-control', 'required' => 'required']); ?></td>
                            <td><?php echo form_input(['type' => 'number', 'name' => 'debet[jumlah][]', 'class' => 'form-control', 'required' => 'required']); ?></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary" onclick="addRow('debet')">Tambah Baris</button>
            </div>

            <!-- Kredit (Pengeluaran) Section -->
            <div class="col-md-6">
                <h4 class="text-center">Kredit (Pengeluaran)</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Uraian</th>
                            <th>No Bukti</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody id="kredit-rows">
                        <tr>
                            <td><?php echo form_input(['type' => 'date', 'name' => 'kredit[tanggal][]', 'class' => 'form-control', 'required' => 'required']); ?></td>
                            <td><?php echo form_input(['type' => 'text', 'name' => 'kredit[uraian][]', 'class' => 'form-control', 'required' => 'required']); ?></td>
                            <td><?php echo form_input(['type' => 'text', 'name' => 'kredit[no_bukti][]', 'class' => 'form-control', 'required' => 'required']); ?></td>
                            <td><?php echo form_input(['type' => 'number', 'name' => 'kredit[jumlah][]', 'class' => 'form-control', 'required' => 'required']); ?></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary" onclick="addRow('kredit')">Tambah Baris</button>
            </div>
        </div>

        <div class="text-center mt-4">
            <?php echo form_submit('submit', 'Simpan', ['class' => 'btn btn-success']); ?>
        </div>
    <?php echo form_close(); ?>
</div>

<script>
    function addRow(type) {
        const tableBody = document.getElementById(type + '-rows');
        const newRow = document.createElement('tr');
        newRow.innerHTML = `
            <td><?php echo form_input(['type' => 'date', 'name' => '${type}[tanggal][]', 'class' => 'form-control', 'required' => 'required']); ?></td>
            <td><?php echo form_input(['type' => 'text', 'name' => '${type}[uraian][]', 'class' => 'form-control', 'required' => 'required']); ?></td>
            <td><?php echo form_input(['type' => 'text', 'name' => '${type}[no_bukti][]', 'class' => 'form-control', 'required' => 'required']); ?></td>
            <td><?php echo form_input(['type' => 'number', 'name' => '${type}[jumlah][]', 'class' => 'form-control', 'required' => 'required']); ?></td>
        `;
        tableBody.appendChild(newRow);
    }
</script>
