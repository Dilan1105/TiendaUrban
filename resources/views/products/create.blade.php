@extends('layouts.app')

@section('title', 'Crear camiseta')

@section('content')
    <div class="box">
        <h2 class="subtitle">Crear camiseta</h2>
        <form method="POST" action="{{ route('products.store') }}">
            @php
    $categories = \App\Models\Category::orderBy('name')->pluck('name', 'id');
@endphp
@include('products._form', ['categories' => $categories])
        </form>
    </div>
@endsection
