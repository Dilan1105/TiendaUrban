@extends('layouts.app')

@section('title', isset($category) ? 'Editar categoría' : 'Nueva categoría')

@section('content')
    <div class="box max-w-md mx-auto">
        <h2 class="subtitle">{{ isset($category) ? 'Editar categoría' : 'Nueva categoría' }}</h2>

        <form method="POST" action="{{ isset($category) ? route('categories.update', $category) : route('categories.store') }}">
            @csrf
            @if(isset($category))
                @method('PUT')
            @endif

            <div class="field">
                <label class="label">Nombre</label>
                <div class="control">
                    <input class="input" type="text" name="name" value="{{ old('name', $category->name ?? '') }}" required autofocus>
                </div>
                @error('name')<p class="help is-danger">{{ $message }}</p>@enderror
            </div>

            <div class="field">
                <div class="control">
                    <button class="button is-link" type="submit">Guardar</button>
                    <a class="button" href="{{ route('categories.index') }}">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
@endsection