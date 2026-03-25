<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Массивы</title>
    @Vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="/home">Главная</a></li>
                <li><a href="/array">Массивы</a></li>
            </ul>
        </nav>
        </header>

        <div class="links">
        <a href="{{ route('array.shuffle') }}">Перемешать массив</a>
        <a href="{{ route('array.sort') }}">Сортировать массив (по цене)</a>
        <a href="{{ route('array.filter') }}">Отфильтровать массив (цена > 1000)</a>
    </div>
    
    <div class="products-grid">
        @foreach ( $array as $item )
        <div class="product-card">
    <img src="{{ asset('img/' . $item['path']) }}" alt="{{ $item['title'] }}">
    <p>{{ $item['title'] }} - {{ $item['price'] }} руб.</p>
         </div>
        @endforeach
    </div>
    
</body>
</html>