<h2>Edit Notulen</h2>
<form action="<?= site_url('notulen/update/' . $notulen->id) ?>" method="post">
    <label>Judul</label>
    <input type="text" name="judul" value="<?= $notulen->judul ?>" required>
    <label>Tanggal</label>
    <input type="date" name="tanggal" value="<?= $notulen->tanggal ?>" required>
    <label>Isi</label>
    <textarea name="isi" required><?= $notulen->isi ?></textarea>
    <button type="submit">Update</button>
</form>
