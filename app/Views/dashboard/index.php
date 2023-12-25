<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

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
        <h1 class="mb-4">Daftar Kursus</h1>

        <ul class="list-group">
            <?php foreach ($courses as $course) : ?>
                <li class="list-group-item">
                    <a href="<?= site_url('dashboard/showMaterials/' . $course['id']) ?>">
                        <?= esc($course['title']) ?>
                    </a>

                    <!-- Daftar Materi untuk Kursus -->
                    <?php if (isset($course['materials']) && count($course['materials']) > 0) : ?>
                        <ul>
                            <?php foreach ($course['materials'] as $material) : ?>
                                <li><?= esc($material['title']) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>

</html>