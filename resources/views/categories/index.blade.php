@extends('layouts.app')

@section('title', 'Categorías')

@section('content')
    <div class="box">
        <div class="level">
            <div class="level-left"><h2 class="subtitle">Categorías</h2></div>
            <div class="level-right">
                <a class="button is-primary" href="{{ route('categories.create') }}">Nueva categoría</a>
            </div>
        </div>

        @if($categories->isEmpty())
            <p>No hay categorías.</p>
        @else
            <table class="table is-fullwidth">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th># Productos</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->products_count }}</td>
                        <td>
                            <a class="button is-small is-warning" href="{{ route('categories.edit', $category) }}">Editar</a>
                            <form style="display:inline" method="POST" action="{{ route('categories.destroy', $category) }}">
                                @csrf
                                @method('DELETE')
                                <button class="button is-small is-danger" type="submit" onclick="return confirm('¿Eliminar esta categoría?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection