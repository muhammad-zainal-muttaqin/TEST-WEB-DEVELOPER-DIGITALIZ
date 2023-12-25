<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Course</title>

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
        <h1 class="mb-4">Buat Kursus Baru</h1>

        <form action="<?= site_url('courses/store') ?>" method="post" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="title" class="form-label">Judul Kursus:</label>
                <input type="text" name="title" id="title" class="form-control" required>
                <div class="invalid-feedback">Judul kursus harus diisi.</div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi Kursus:</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
                <div class="invalid-feedback">Deskripsi kursus harus diisi.</div>
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Durasi Kursus (jam):</label>
                <input type="number" name="duration" id="duration" class="form-control" required>
                <div class="invalid-feedback">Durasi kursus harus diisi.</div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        <a href="<?= site_url('courses') ?>" class="btn btn-secondary mt-3">Batal</a>
    </div>

</body>

</html>