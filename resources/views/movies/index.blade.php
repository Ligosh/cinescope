<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineScope — Головна сторінка</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8f9fa; color: #212529; }
        .logo-text { font-family: 'Caveat', cursive; font-size: 2.8rem; color: #000; background: #f2f2f2; padding: 2px 20px; border-radius: 8px; border: 1px solid #ccc; text-decoration: none; }
        .btn-nav { background-color: #6750A4; color: #fff; font-weight: 600; border-radius: 20px; padding: 8px 22px; border: none; margin-right: 8px; text-decoration: none; }
        .btn-nav:hover { background-color: #533f86; color: #fff; }
        .auth-link { color: #FF8D28; font-weight: 700; text-decoration: none; margin-left: 15px; font-size: 1.1rem; }
        .hero-banner {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), 
                        url('https://images.unsplash.com/photo-1536440136628-849c177e76a1?auto=format&fit=crop&w=1400&q=80') center/cover no-repeat;
            height: 260px; border-radius: 12px; display: flex; flex-direction: column; align-items: center; justify-content: center; color: #fff; text-shadow: 0 2px 4px rgba(0,0,0,0.6);
        }
        .filter-box { background-color: #F3F3F3; border: 1px solid #e0e0e0; border-radius: 12px; padding: 20px; }
        .movie-card { border: 1px solid #e0e0e0; border-radius: 10px; overflow: hidden; background-color: #fff; transition: transform 0.2s; }
        .movie-card:hover { transform: translateY(-4px); }
        .poster-placeholder { height: 180px; background-color: #e9ecef; display: flex; align-items: center; justify-content: center; color: #6c757d; font-weight: 600; }
        .rating-star { color: #ffc107; font-weight: bold; }
    </style>
</head>
<body>

    <header class="py-3 bg-white border-bottom shadow-sm mb-4">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="{{ route('movies.index') }}" class="logo-text">CineScope</a>
            <nav class="d-none d-md-flex align-items-center">
                <a href="{{ route('movies.index') }}" class="btn btn-nav">Головна</a>
                <a href="{{ route('movies.index') }}" class="btn btn-nav">Каталог</a>
                <a href="#" class="btn btn-nav">Трейлери</a>
                <a href="{{ route('admin.index') }}" class="btn btn-nav" style="background-color: #2b2b2b;">Адмін</a>
            </nav>
            <div>
                <a href="{{ route('login') }}" class="auth-link">Увійти</a>
            </div>
        </div>
    </header>

    <div class="container mb-5">
        <div class="hero-banner mb-4 text-center">
            <h1 class="display-5 fw-bold">Головні прем'єри кінематографа</h1>
            <p class="fs-5">Дивіться трейлери та обирайте найкращі фільми на CineScope</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3">
                <div class="filter-box shadow-sm">
                    <h5 class="fw-bold mb-3">Фільтри та Категорії</h5>
                    <div class="fw-semibold mb-2">Жанри:</div>
                    <ul class="list-unstyled ms-2 mb-3">
                        <li class="py-1"><a href="#" class="text-decoration-none text-secondary">• Драма</a></li>
                        <li class="py-1"><a href="#" class="text-decoration-none text-secondary">• Фантастика</a></li>
                        <li class="py-1"><a href="#" class="text-decoration-none text-secondary">• Комедія</a></li>
                        <li class="py-1"><a href="#" class="text-decoration-none text-secondary">• Екшн</a></li>
                    </ul>

                    <div class="fw-semibold mb-2">Рік випуску:</div>
                    <ul class="list-unstyled ms-2 mb-0">
                        <li class="py-1"><a href="#" class="text-decoration-none text-secondary">• 2024–2026</a></li>
                        <li class="py-1"><a href="#" class="text-decoration-none text-secondary">• 2010–2023</a></li>
                        <li class="py-1"><a href="#" class="text-decoration-none text-secondary">• Класика (до 2010)</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach($movies as $movie)
                        <div class="col">
                            <div class="movie-card h-100 shadow-sm d-flex flex-column">
                                <div class="poster-placeholder">Постер</div>
                                <div class="p-3 d-flex flex-column flex-grow-1">
                                    <h6 class="fw-bold mb-1">
                                        <a href="{{ route('movies.show', $movie->id) }}" class="text-decoration-none text-dark">
                                            {{ $movie->title }}
                                        </a>
                                    </h6>
                                    <p class="text-muted small mb-2">Рік: {{ $movie->release_year }}</p>
                                    <p class="small text-secondary flex-grow-1" style="font-size: 0.85rem;">
                                        {{ Str::limit($movie->description, 80) }}
                                    </p>
                                    <div class="mt-2 pt-2 border-top d-flex justify-content-between align-items-center">
                                        <span class="small">Рейтинг:</span>
                                        <span class="rating-star">★ {{ $movie->rating }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
</html>