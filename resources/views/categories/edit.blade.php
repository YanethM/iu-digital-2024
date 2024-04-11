@extends('layouts.app')
@section('content')
<div class="container">
        <h3>Editar categoría</h3>
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-3
            @error('category_name')
                has-error
            @enderror">
                <label for="category_name">Nombre de la categoría</label>
                <input type="text" name="category_name" id="category_name" class="form-control"
                    value="{{ $category->category_name }}">
                @error('category_name')
                    <span class="help-block">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="active">Estado</label>
                <select name="active" id="active" class="form-control">
                    <option value="1" {{ $category->active ? 'selected' : '' }}>Activa</option>
                    <option value="0" {{ !$category->active ? 'selected' : '' }}>Inactiva</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Guardar</button>
        </form>
    </div>
@endsection
