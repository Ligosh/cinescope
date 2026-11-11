<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineScope — Авторизація</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8f9fa; }
        .logo-text { font-family: 'Caveat', cursive; font-size: 2.5rem; color: #000; background: #f2f2f2; padding: 2px 15px; border-radius: 8px; text-decoration: none; border: 1px solid #ccc; }
        .btn-nav { background-color: #6750A4; color: #fff; font-weight: 600; border-radius: 20px; padding: 6px 18px; border: none; text-decoration: none; }
        .login-card { max-width: 420px; margin: 50px auto; background: #fff; border: 1px solid #e0e0e0; border-radius: 12px; padding: 30px; }
    </style>
</head>
<body>
    <header class="py-3 bg-white border-bottom shadow-sm">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="{{ route('movies.index') }}" class="logo-text">CineScope</a>
            <nav>
                <a href="{{ route('movies.index') }}" class="btn btn-nav">Головна</a>
                <a href="{{ route('movies.index') }}" class="btn btn-nav">Каталог</a>
                <a href="#" class="btn btn-nav">Трейлери</a>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="login-card shadow-sm text-center">
            <h4 class="fw-bold mb-4">Вхід у кабінет</h4>
            <form onsubmit="event.preventDefault(); alert('Вхід виконано успішно!');">
                <div class="mb-3 text-start">
                    <label class="form-label small font-weight-bold">Логін / Email</label>
                    <input type="text" class="form-control" placeholder="user@example.com" required>
                </div>
                <div class="mb-3 text-start">
                    <label class="form-label small font-weight-bold">Пароль</label>
                    <input type="password" class="form-control" placeholder="••••••••" required>
                </div>
                <div class="form-check text-start mb-3">
                    <input class="form-check-input" type="checkbox" id="remember">
                    <label class="form-check-label small" for="remember">Запам'ятати мене</label>
                </div>
                <button type="submit" class="btn btn-primary w-100 mb-3 fw-bold">Увійти</button>
                <div class="d-flex justify-content-between small border-top pt-3">
                    <a href="#" class="text-decoration-none text-muted">Забули пароль?</a>
                    <a href="#" class="text-decoration-none fw-bold">Реєстрація</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>