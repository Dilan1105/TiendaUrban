@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="box max-w-md mx-auto">
        <h2 class="subtitle">Registro</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="field">
                <label class="label">Nombre</label>
                <div class="control">
                    <input class="input" type="text" name="name" value="{{ old('name') }}" required autofocus>
                </div>
                @error('name')<p class="help is-danger">{{ $message }}</p>@enderror
            </div>

            <div class="field">
                <label class="label">Email</label>
                <div class="control">
                    <input class="input" type="email" name="email" value="{{ old('email') }}" required>
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
                <label class="label">Confirmar contraseña</label>
                <div class="control">
                    <input class="input" type="password" name="password_confirmation" required>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button class="button is-link" type="submit">Registrarse</button>
                    <a class="button" href="{{ route('login') }}">Iniciar sesión</a>
                </div>
            </div>
        </form>
    </div>
@endsection
