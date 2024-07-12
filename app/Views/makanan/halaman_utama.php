<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Makanan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('/image/Screenshot%202024-07-02%20065019.png'); /* Ubah URL sesuai dengan gambar latar belakang Anda */
            background-size: cover;
            background-position: center;
        }
        .floating-action-button {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #38a169; /* Warna hijau */
            color: white;
            padding: 15px;
            border-radius: 50%;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .floating-action-button:hover {
            background-color: #2f855a; /* Hijau lebih gelap */
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="mx-auto p-5 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-5 text-center">Halaman Makanan</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php foreach ($cepatsajis as $cepat_saji): ?>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2"><?= esc($cepat_saji['nama_makanan']) ?></h2>
                <p class="text-gray-700 mb-2"><strong>Harga:</strong> <?= esc($cepat_saji['harga']) ?></p>
                <p class="text-gray-700 mb-2"><strong>Deskripsi:</strong> <?= esc($cepat_saji['deskripsi']) ?></p>
                <p class="text-gray-700 mb-2"><strong>Review:</strong> <?= esc($cepat_saji['review']) ?></p>
                <div class="flex justify-between mt-4">
                    <a href="/makanan/edit/<?= $cepat_saji['id'] ?>" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700">Edit</a>
                    <a href="/makanan/delete/<?= $cepat_saji['id'] ?>" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700" onclick="return confirm('Are you sure?')">Delete</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <a href="/makanan/create" class="floating-action-button">+</a>
    </div>
</body>
</html>
