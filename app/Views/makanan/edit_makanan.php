<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Makanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Edit Makanan</h1>
    <form action="/makanan/update/<?= $cepat_saji['id'] ?>" method="post">
        <div class="form-group">
            <label for="nama_makanan">nama_makanan</label>
            <input type="text" name="nama_makanan" class="form-control" value="<?= esc($cepat_saji['nama_makanan']) ?>" required>
        </div>
        <div class="form-group">
            <label for="harga">harga</label>
            <input type="number" name="harga" class="form-control" value="<?= esc($cepat_saji['harga']) ?>" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" value="<?= esc($cepat_saji['deskripsi']) ?>" required>
        </div>
        <div class="form-group">
            <label for="review">review</label>
            <input type="text" name="review" class="form-control" value="<?= esc($cepat_saji['review']) ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="/makanan" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
