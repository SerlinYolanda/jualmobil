<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style_trending.css') }}">
    <title>Trending Wisata Kuliner</title>
    <style>
        /* Global Styles */

        /* Media Queries for Responsiveness */
        @media (min-width: 768px) {
            .container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 1024px) {
            .container {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media (min-width: 1280px) {
            .container {
                grid-template-columns: repeat(5, 1fr);
            }
        }
    </style>
</head>
<body>

<header>
    <a href="dasboard.php" class="item-lainnya">MLAKURASO</a>
    <img src="{{ asset('images/makanan.jpg') }}" alt="makanan">
    <h1 class="title">Trending Wisata Kuliner</h1>
    <p class="sub-title">Temukan Destinasi Kuliner Populer</p>
</header>

<div class="container">
    <div class="card">
        <img src="{{ asset('images/richeese.jpg') }}" alt="Menu Item at Richeese Factory">
        ...
    </div>
    <div class="card">
        <img src="{{ asset('images/seblak.jpg') }}" alt="Menu Item at Seblak Teh Seny">
        ...
    </div>
    <div class="card">
        <img src="{{ asset('images/baksosolo.jpg') }}" alt="Menu Item at Bakso Solo">
        ...
    </div>
    <div class="card">
        <img src="{{ asset('images/piza.jpg') }}" alt="Menu Item at Pizza Hut">
        ...
    </div>
    <div class="card">
        <img src="{{ asset('images/seafood.jpg') }}" alt="Menu Item at Seafood Barelang">
        ...
    </div>
    <div class="card">
        <img src="{{ asset('images/ketoprak.jpg') }}" alt="Menu Item at Ketoprak Bu Desi">
        ...
    </div>
    <div class="card">
        <img src="{{ asset('images/nasi.jpg') }}" alt="Menu Item at Rumah Nasi Pa Toni">
        ...
    </div>
    <div class="card">
        <img src="{{ asset('images/cilor.jpg') }}" alt="Menu Item at Cilor Mang Jimin">
        ...
    </div>
    <div class="card">
        <img src="{{ asset('images/sego.jpg') }}" alt="Menu Item at Sego Pecel Bojonegoro">
        ...
    </div>
    <div class="card">
        <img src="{{ asset('images/katsu.jpg') }}" alt="Menu Item at Katsu Melayu">
        ...
    </div>
</div>

</body>
</html>
