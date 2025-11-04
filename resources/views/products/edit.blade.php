@extends('layouts.app')

@section('title', 'Editar camiseta')

@section('content')
    <div class="box">
        <h2 class="subtitle">Editar camiseta</h2>
        <form method="POST" action="{{ route('products.update', $product) }}">
            @method('PUT')
            @include('products._form')
        </form>
    </div>
@endsection
