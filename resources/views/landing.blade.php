<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Peminjaman buku</title>
</head>

<body>
    <div class="hero min-h-screen" style="background-image: url(https://i.ibb.co/7tqJRpd/perpustakaan.jpg);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
          <div class="max-w-md">
            <h1 class="mb-5 text-5xl font-bold">Selamat Datang!</h1>
            <p class="mb-5">Di Perpustakaan UBSI Tegal, Temukan Dunia Ilmu Pengetahuan di Ujung Jari Anda. Jelajahi Koleksi Buku Terbaru, Nikmati Kemudahan Peminjaman Online, dan Temukan Ruang Belajar Yang Nyaman. Mari Bersama-Sama Menjelajahi Pengetahuan di Perpustakaan Online Kami.</p>
            <a href="{{ route('login')}}" class="btn btn-primary">Masuk</a>
          </div>
        </div>
      </div>    
</body>

</html>
