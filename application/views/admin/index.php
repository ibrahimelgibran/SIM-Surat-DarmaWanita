<h2>Daftar Notulen</h2>
<a href="<?= site_url('notulen/create') ?>">Tambah Notulen</a>
<table>
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Tanggal</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($notulen as $i => $n): ?>
    <tr>
        <td><?= $i + 1 ?></td>
        <td><?= $n->judul ?></td>
        <td><?= $n->tanggal ?></td>
        <td>
            <a href="<?= site_url('notulen/edit/' . $n->id) ?>">Edit</a> |
            <a href="<?= site_url('notulen/delete/' . $n->id) ?>" onclick="return confirm('Hapus notulen ini?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
