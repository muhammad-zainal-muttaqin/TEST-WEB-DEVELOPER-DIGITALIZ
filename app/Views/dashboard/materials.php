<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi</title>

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
        <h1>Materi untuk Kursus <?= esc($materials[0]['course_title'] ?? '') ?></h1>
        <a href="<?= site_url('materials/create') ?>" class="btn btn-primary mb-3">Tambah Materi</a>
        <ul class="list-group">
            <!-- Existing materials -->
            <?php if (!empty($materials)) : ?>
                <?php foreach ($materials as $material) : ?>
                    <li class="list-group-item">
                        <strong><?= esc($material['title']) ?></strong>
                        <p class="mb-1">Deskripsi: <?= esc($material['description']) ?></p>
                        <p class="mb-1">Link Embed: <?= esc($material['embed_link']) ?></p>
                        <!-- Delete button -->
                        <a href="<?= site_url('materials/delete/' . $material['id']) ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this material?')">Delete</a>
                    </li>
                <?php endforeach; ?>
            <?php else : ?>
                <li class="list-group-item">Tidak ada materi untuk kursus ini.</li>
            <?php endif; ?>
        </ul>
        <a href="<?= site_url('dashboard') ?>" class="btn btn-secondary mt-3">Kembali ke Dashboard</a>
    </div>
</body>

</html>