<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda - @yield('title', 'Camisetas')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
<section class="section">
    <div class="container">
        <nav class="level">
            <div class="level-left">
                <div class="level-item">
                    <h1 class="title">Tienda</h1>
                </div>
                <div class="level-item">
                    <a class="button is-link" href="{{ route('products.index') }}">Camisetas</a>
                </div>
            </div>
        </nav>

        @if(session('success'))
            <div class="notification is-primary">{{ session('success') }}</div>
        @endif

        @yield('content')
    </div>
</section>
</body>
</html>
