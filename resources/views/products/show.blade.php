@extends('layouts.app')

@section('title', 'Ver camiseta')

@section('content')
    <div class="box">
        <h2 class="subtitle">{{ $product->name }}</h2>
        <p><strong>Precio:</strong> {{ $product->price }}</p>
        <p><strong>Stock:</strong> {{ $product->stock }}</p>
        <p><strong>Descripción:</strong></p>
        <div class="content">{{ $product->description }}</div>

        <a class="button" href="{{ route('products.index') }}">Volver</a>
        <a class="button is-warning" href="{{ route('products.edit', $product) }}">Editar</a>
    </div>
@endsection
