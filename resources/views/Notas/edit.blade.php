@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Editar Tarea</h3>
            </div>
            <div class="col text-right">
                <a href="{{ url('/Notas') }}" class="btn btn-sm btn-success">
                    <i class="fas fa-chevron-left"></i> Regresar
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    <i class="fas fa-exclamation-triangle"></i>
                    <strong>Por favor!</strong> {{ $error }}
                </div>
            @endforeach
        @endif

        <form action="{{ url('/Notas/'.$task->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Asegúrate de que se esté usando el método PUT -->

            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" class="form-control" value="{{ old('titulo', $task->titulo) }}" required>
            </div>

            <div class="form-group">
                <label for="contenido">Contenido:</label>
                <textarea name="contenido" class="form-control" required>{{ old('contenido', $task->contenido) }}</textarea>
            </div>

            <button type="submit" class="btn btn-sm btn-primary">Actualizar Tarea</button>
        </form>
    </div>
</div>
@endsection
