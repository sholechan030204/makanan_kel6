<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Makanan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Tambah Makanan</h1>
    <form action="/makanan/store" method="post">
        <div class="form-group">
            <label for="nama makanan">nama makanan</label>
            <input type="text" name="nama makanan" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="harga">harga</label>
            <input type="number" name="harga" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="review">review</label>
            <input type="text" name="review" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Add</button>
        <a href="/makanan" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
