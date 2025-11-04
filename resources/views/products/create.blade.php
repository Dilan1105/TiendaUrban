@extends('layouts.app')

@section('title', 'Crear camiseta')

@section('content')
    <div class="box">
        <h2 class="subtitle">Crear camiseta</h2>
        <form method="POST" action="{{ route('products.store') }}">
            @include('products._form')
        </form>
    </div>
@endsection
