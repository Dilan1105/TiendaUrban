@extends('layouts.app')

@section('title', 'Listado de camisetas')

@section('content')
    <div class="box">
        <div class="level">
            <div class="level-left"><h2 class="subtitle">Listado de camisetas</h2></div>
            <div class="level-right"><a class="button is-primary" href="{{ route('products.create') }}">Nueva camiseta</a></div>
        </div>

        @if($products->isEmpty())
            <p>No hay camisetas.</p>
        @else
            <table class="table is-fullwidth">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>
                            <a class="button is-small is-info" href="{{ route('products.show', $product) }}">Ver</a>
                            <a class="button is-small is-warning" href="{{ route('products.edit', $product) }}">Editar</a>
                            <form style="display:inline" method="POST" action="{{ route('products.destroy', $product) }}">
                                @csrf
                                @method('DELETE')
                                <button class="button is-small is-danger" type="submit" onclick="return confirm('Eliminar camiseta?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
