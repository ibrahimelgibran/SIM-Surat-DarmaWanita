<div id="notulen-container">
    <h2>Daftar Notulen</h2>
    <table id="notulen-table">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Isi</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data akan di-load menggunakan AJAX -->
        </tbody>
    </table>
    
    <h3>Tambah Notulen Baru</h3>
    <form id="form-tambah-notulen">
        <input type="text" name="judul" placeholder="Judul Notulen" required>
        <textarea name="isi" placeholder="Isi Notulen" required></textarea>
        <button type="submit">Simpan</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Load semua notulen
        function loadNotulen() {
            $.ajax({
                url: '<?= site_url('notulen/get_all') ?>',
                method: 'GET',
                success: function(data) {
                    var notulen = JSON.parse(data);
                    var html = '';
                    for (var i in notulen) {
                        html += `<tr>
                            <td>${notulen[i].judul}</td>
                            <td>${notulen[i].isi}</td>
                            <td>${notulen[i].tanggal}</td>
                            <td>
                                <button class="edit" data-id="${notulen[i].id}">Edit</button>
                                <button class="delete" data-id="${notulen[i].id}">Hapus</button>
                            </td>
                        </tr>`;
                    }
                    $('#notulen-table tbody').html(html);
                }
            });
        }

        loadNotulen();

        // Tambah notulen
        $('#form-tambah-notulen').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?= site_url('notulen/add') ?>',
                method: 'POST',
                data: $(this).serialize(),
                success: function() {
                    loadNotulen();
                    $('#form-tambah-notulen')[0].reset();
                }
            });
        });

        // Hapus notulen
        $(document).on('click', '.delete', function() {
            var id = $(this).data('id');
            $.ajax({
                url: '<?= site_url('notulen/delete/') ?>' + id,
                method: 'POST',
                success: function() {
                    loadNotulen();
                }
            });
        });

        // Edit notulen (implementasi lebih lanjut bisa ditambahkan di sini)
    });
</script>
