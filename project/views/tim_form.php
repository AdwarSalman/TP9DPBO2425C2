<?php
// Cek apakah ini mode edit (ada data) atau tambah (kosong)
$id_val = isset($val['id']) ? $val['id'] : '';
$nama_val = isset($val['nama_tim']) ? $val['nama_tim'] : '';
$negara_val = isset($val['negara']) ? $val['negara'] : '';
$tahun_val = isset($val['tahun_berdiri']) ? $val['tahun_berdiri'] : '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Tim</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3><?= ($id_val) ? "Edit Tim" : "Tambah Tim" ?></h3>
            </div>
            <div class="card-body">
                <form action="index.php?action=tim_save" method="POST">
                    <input type="hidden" name="id" value="<?= $id_val ?>">

                    <div class="form-group">
                        <label>Nama Tim</label>
                        <input type="text" name="nama_tim" class="form-control" value="<?= $nama_val ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Negara Asal</label>
                        <input type="text" name="negara" class="form-control" value="<?= $negara_val ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Tahun Berdiri</label>
                        <input type="number" name="tahun_berdiri" class="form-control" value="<?= $tahun_val ?>" required>
                    </div>

                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="index.php?action=tim" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>