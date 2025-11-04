<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda - @yield('title', 'Camisetas')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
<nav class="navbar is-light" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ url('/') }}">
            <strong>TiendaUrban</strong>
        </a>
    </div>

    <div class="navbar-menu">
        <div class="navbar-start">
            @auth
                <a href="{{ route('products.index') }}" class="navbar-item">Productos</a>
                <a href="{{ route('categories.index') }}" class="navbar-item">Categorías</a>
            @endauth
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    @guest
                        <a class="button is-light" href="{{ route('login') }}">Login</a>
                        <a class="button is-primary" href="{{ route('register') }}">Registro</a>
                    @else
                        <form method="POST" action="{{ route('logout') }}" class="is-inline">
                            @csrf
                            <button class="button is-light" type="submit">Cerrar sesión</button>
                        </form>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</nav>

<section class="section">
    <div class="container">

        @if(session('success'))
            <div class="notification is-primary">{{ session('success') }}</div>
        @endif

        @yield('content')
    </div>
</section>
</body>
</html>
