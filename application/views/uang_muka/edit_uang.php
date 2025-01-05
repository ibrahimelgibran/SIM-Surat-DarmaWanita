<div class="container mt-5">
    <style>
        /* Styling Form */
        form {
            border: 1px solid #ced4da;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        form h3 {
            font-weight: bold;
            color: #FFA500;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            color: #495057;
            margin-bottom: 5px;
            display: inline-block;
        }

        .form-control {
            border: 1px solid #ced4da;
            border-radius: 5px;
            height: 45px;
            padding: 10px;
            font-size: 14px;
            color: #495057;
        }

        .form-control:focus {
            border-color: #FFA500;
            box-shadow: 0 0 4px rgba(0, 123, 255, 0.5);
        }

        button {
            background-color: #FFA500;
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        button:hover {
            background-color: #FFA500;
            cursor: pointer;
        }

        /* Spasi antar elemen */
        .form-group {
            margin-bottom: 15px;
        }

        /* Container styling */
        .container {
            padding: 15px;
        }

        /* Responsive styling */
        @media (max-width: 768px) {
            form {
                padding: 15px;
            }

            .form-control {
                height: 40px;
                font-size: 13px;
            }

            button {
                font-size: 14px;
                padding: 8px 15px;
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
