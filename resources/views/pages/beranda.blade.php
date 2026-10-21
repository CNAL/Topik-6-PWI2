<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Belajar Laravel 12</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('beranda') }}">
                Belajar Laravel 12
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Buka navigasi"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('beranda') }}">
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">
                            Tentang Kami
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('latihan') }}">
                            Latihan
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('product') }}">
                            Produk Kami
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-3 mb-4 flex-grow-1">
        @section('konten')
            <h1>Selamat Datang di Halaman Beranda</h1>
            <p>Silakan pilih menu untuk membuka halaman lainnya.</p>
        @show
    </main>

    <footer
        class="text-center py-2"
        style="background-color: #00ffff;"
    >
        <small>© Chrysels Nicha Aime Laoh | 707082400010 | DSM-48-01</small>
    </footer>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    ></script>
</body>
</html>