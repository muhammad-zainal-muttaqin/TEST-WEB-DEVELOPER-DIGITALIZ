<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Material Form</title>

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
        <?php
        $material = $material ?? ['id' => '', 'course_id' => '', 'title' => '', 'description' => '', 'embed_link' => ''];
        ?>

        <form action="<?= $material['id'] ? site_url('materials/update/' . $material['id']) : site_url('materials/store') ?>" method="post">
            <input type="hidden" name="course_id" value="<?= esc($material['course_id']) ?>">

            <div class="mb-3">
                <label for="title" class="form-label">Judul:</label>
                <input type="text" class="form-control" name="title" value="<?= esc($material['title']) ?>" required>
                <div class="invalid-feedback">Judul harus diisi.</div>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi:</label>
                <textarea class="form-control" name="description" required><?= esc($material['description']) ?></textarea>
                <div class="invalid-feedback">Deskripsi harus diisi.</div>
            </div>

            <div class="mb-3">
                <label for="embed_link" class="form-label">Link Embed Materi:</label>
                <input type="text" class="form-control" name="embed_link" value="<?= esc($material['embed_link']) ?>" required>
                <div class="invalid-feedback">Link Embed Materi harus diisi.</div>
            </div>

            <div class="mb-3">
                <label for="course_id" class="form-label">Kursus:</label>
                <select class="form-select" name="course_id" id="course_id">
                    <?php foreach ($courses as $course) : ?>
                        <option value="<?= $course['id'] ?>" <?= $course['id'] == $material['course_id'] ? 'selected' : '' ?>>
                            <?= esc($course['title']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>

</body>

</html>