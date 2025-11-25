<?php
$id_val = isset($val['id']) ? $val['id'] : '';
$nama_val = isset($val['nama']) ? $val['nama'] : '';
$asal_val = isset($val['asal']) ? $val['asal'] : '';
$tim_val = isset($val['tim']) ? $val['tim'] : '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Pembalap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3><?= ($id_val) ? "Edit Pembalap" : "Tambah Pembalap" ?></h3>
            </div>
            <div class="card-body">
                <form action="index.php?action=save" method="POST">
                    <input type="hidden" name="id" value="<?= $id_val ?>">

                    <div class="form-group">
                        <label>Nama Pembalap</label>
                        <input type="text" name="nama" class="form-control" value="<?= $nama_val ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Negara Asal</label>
                        <input type="text" name="asal" class="form-control" value="<?= $asal_val ?>" required>
                    </div>
                <div class="form-group">
                    <label>Tim</label>
                    <select name="tim" class="form-control" required>
                        <option value="">-- Pilih Tim --</option>
                        <?php foreach($data_tim as $t): ?>
                            <option value="<?= $t['nama_tim'] ?>" <?= ($tim_val == $t['nama_tim']) ? 'selected' : '' ?>>
                                <?= $t['nama_tim'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="index.php" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>