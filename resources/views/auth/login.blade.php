@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="box max-w-md mx-auto">
        <h2 class="subtitle">Iniciar sesión</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="field">
                <label class="label">Email</label>
                <div class="control">
                    <input class="input" type="email" name="email" value="{{ old('email') }}" required autofocus>
                </div>
                @error('email')<p class="help is-danger">{{ $message }}</p>@enderror
            </div>

            <div class="field">
                <label class="label">Contraseña</label>
                <div class="control">
                    <input class="input" type="password" name="password" required>
                </div>
                @error('password')<p class="help is-danger">{{ $message }}</p>@enderror
            </div>

            <div class="field">
                <div class="control">
                    <button class="button is-link" type="submit">Entrar</button>
                    <a class="button" href="{{ route('register') }}">Registrarse</a>
                </div>
            </div>
        </form>
    </div>
@endsection
