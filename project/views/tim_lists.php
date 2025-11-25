<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tim F1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Daftar Tim F1</h2>
        <div class="mb-3">
            <a href="index.php" class="btn btn-secondary">Home (Pembalap)</a>
            <a href="index.php?action=tim_add" class="btn btn-primary">Tambah Tim Baru</a>
        </div>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Tim</th>
                    <th>Negara</th>
                    <th>Tahun Berdiri</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                // $data dikirim dari Presenter
                foreach($data as $row): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nama_tim'] ?></td>
                    <td><?= $row['negara'] ?></td>
                    <td><?= $row['tahun_berdiri'] ?></td>
                    <td>
                        <a href="index.php?action=tim_edit&id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="index.php?action=tim_delete&id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>