<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineScope Admin — Панель управління</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: sans-serif; background-color: #f4f6f9; }
        .admin-logo { font-weight: bold; font-size: 1.4rem; color: #333; border: 1px solid #aaa; padding: 4px 12px; border-radius: 6px; background: #fff; }
    </style>
</head>
<body>
    <header class="py-3 bg-white border-bottom shadow-sm mb-4">
        <div class="container d-flex justify-content-between align-items-center">
            <span class="admin-logo">CineScope Admin</span>
            <nav class="d-flex gap-2">
                <a href="#" class="btn btn-outline-dark btn-sm">Фільми</a>
                <a href="#" class="btn btn-outline-dark btn-sm">Жанри</a>
                <a href="#" class="btn btn-outline-dark btn-sm">Модерація</a>
                <a href="{{ route('movies.index') }}" class="btn btn-danger btn-sm">Вихід</a>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <button class="btn btn-primary fw-bold">+ Додати новий фільм</button>
            <input type="text" class="form-control" placeholder="Пошук по таблиці..." style="width: 250px;">
        </div>

        <div class="card shadow-sm">
            <div class="card-header bg-white fw-bold">Таблиця керування фільмами</div>
            <div class="card-body p-0">
                <table class="table table-hover mb-0 align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Назва фільму</th>
                            <th>Рік</th>
                            <th>Рейтинг</th>
                            <th>Дії</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($movies as $movie)
                        <tr>
                            <td>{{ $movie->id }}</td>
                            <td class="fw-semibold">{{ $movie->title }}</td>
                            <td>{{ $movie->release_year }}</td>
                            <td><span class="badge bg-warning text-dark">★ {{ $movie->rating }}</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">Редагувати</button>
                                <button class="btn btn-sm btn-outline-danger">Видалити</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer bg-white d-flex justify-content-end">
                <ul class="pagination pagination-sm mb-0">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">&gt;</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>