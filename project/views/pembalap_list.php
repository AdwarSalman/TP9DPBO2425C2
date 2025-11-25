<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pembalap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Daftar Pembalap F1</h2>
        <div class="mb-3">
            <a href="index.php?action=add" class="btn btn-primary">Tambah Pembalap</a>
            <a href="index.php?action=tim" class="btn btn-info">Kelola Data Tim (Tugas 2)</a>
        </div>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Asal</th>
                    <th>Tim</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                foreach($data as $row): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['asal'] ?></td>
                    <td><?= $row['tim'] ?></td>
                    <td>
                        <a href="index.php?action=edit&id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="index.php?action=delete&id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>