<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Materi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= site_url('dashboard') ?>">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('courses') ?>">Tambah Course</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('materials') ?>">Tambah Materi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1 class="mb-4">Daftar Materi</h1>
        <a href="<?= site_url('materials/create') ?>" class="btn btn-primary mb-3">Tambah Materi</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Embed Link</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($materials as $material) : ?>
                    <tr>
                        <td><?= esc($material['title']) ?></td>
                        <td><?= esc($material['description']) ?></td>
                        <td><?= esc($material['embed_link']) ?></td>
                        <td>
                            <a href="<?= site_url('materials/edit/' . $material['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="<?= site_url('materials/delete/' . $material['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus materi ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>