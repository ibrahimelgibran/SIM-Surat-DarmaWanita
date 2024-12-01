<form action="<?= site_url('UangMuka/update'); ?>" method="POST">
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
