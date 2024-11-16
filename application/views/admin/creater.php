<h2>Tambah Notulen</h2>
<form action="<?= site_url('notulen/store') ?>" method="post">
    <label>Judul</label>
    <input type="text" name="judul" required>
    <label>Tanggal</label>
    <input type="date" name="tanggal" required>
    <label>Isi</label>
    <textarea name="isi" required></textarea>
    <button type="submit">Simpan</button>
</form>
