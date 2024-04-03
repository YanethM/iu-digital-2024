@extends('layouts.app')

@section('content')
    <h3>Lista de categorías</h3>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Categoría</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->category_name }}</td>
                    <td>
                        @if ($category->active)
                            Activa
                        @else
                            Inactiva
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('categories.edit', $category->id) }}">Editar</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                            style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    @endsection
