<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineScope — {{ $movie->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8f9fa; }
        .logo-text { font-family: 'Caveat', cursive; font-size: 2.5rem; color: #000; background: #f2f2f2; padding: 2px 15px; border-radius: 8px; text-decoration: none; border: 1px solid #ccc; }
        .poster-box { height: 260px; background-color: #e9ecef; border: 1px solid #ddd; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: bold; color: #6c757d; font-size: 1.2rem; }
        .content-box { background: #ffffff; border: 1px solid #e0e0e0; border-radius: 10px; padding: 20px; }
    </style>
</head>
<body>

    <header class="py-3 bg-white border-bottom shadow-sm mb-4">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="{{ route('movies.index') }}" class="logo-text">CineScope</a>
            <div class="d-flex align-items-center gap-3">
                <a href="{{ route('movies.index') }}" class="btn btn-outline-secondary rounded-pill">← Назад до каталогу</a>
                <input type="text" class="form-control rounded-pill" placeholder="Пошук..." style="width: 180px;">
                <a href="{{ route('login') }}" class="btn btn-primary rounded-pill px-3">Профіль</a>
            </div>
        </div>
    </header>

    <div class="container mb-5">
        <!-- Верхній блок: Постер та Опис -->
        <div class="row g-4 mb-4">
            <div class="col-md-4">
                <div class="poster-box shadow-sm">
                    Постер фільму
                </div>
            </div>
            <div class="col-md-8">
                <div class="content-box shadow-sm h-100">
                    <h2 class="fw-bold">{{ $movie->title }}</h2>
                    <p class="text-muted mb-2">Рік випуску: {{ $movie->release_year }} | Середня оцінка: <span class="text-warning fw-bold">★ {{ $movie->rating }} / 10</span></p>
                    <hr>
                    <h5 class="fw-semibold">Опис фільму:</h5>
                    <p class="text-secondary leading-relaxed">{{ $movie->description }}</p>
                </div>
            </div>
        </div>

        <!-- Нижній блок: Форма відгуку та Відеоплеєр -->
        <div class="row g-4">
            <!-- Ліворуч: Форма відгуку -->
            <div class="col-md-5">
                <div class="content-box shadow-sm h-100">
                    <h5 class="fw-bold mb-3">Форма для написання відгуку та оцінення</h5>
                    <form onsubmit="event.preventDefault(); alert('Дякуємо! Ваш відгук збережено.');">
                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Ваша оцінка (1–10):</label>
                            <input type="number" class="form-control" min="1" max="10" value="9" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Ваш коментар / відгук:</label>
                            <textarea class="form-control" rows="4" placeholder="Напишіть ваші враження від фільму..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success w-100 fw-semibold">Надіслати відгук</button>
                    </form>
                </div>
            </div>

            <!-- Праворуч: Вбудований відеоплеєр -->
            <div class="col-md-7">
                <div class="content-box shadow-sm h-100 d-flex flex-column">
                    <h5 class="fw-bold mb-3">Вбудований відеоплеєр (Трейлер)</h5>
                    <div class="ratio ratio-16x9 rounded overflow-hidden flex-grow-1">
                        <iframe src="https://www.youtube.com/embed/YoHD9XEInc0" title="Trailer" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>