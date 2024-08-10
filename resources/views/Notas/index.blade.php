@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Notas</h3>
            </div>
            <div class="col text-right">
                <a href="{{ url('/Notas/create') }}" class="btn btn-sm btn-primary">Nueva tarea</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Nombre de la tarea</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Acciones</th> <!-- Añade columna para acciones -->
                </tr>
            </thead>
            <tbody>
                @forelse ($tasks as $task)
                    <tr>
                        <th scope="row">{{ $task->titulo }}</th>
                        <td>{{ $task->contenido }}</td>
                        <td>
                            <a href="{{ url('/Notas/'.$task->id.'/edit') }}" class="btn btn-sm btn-primary">Editar</a>
                            <form action="{{ url('/Notas/'.$task->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No hay tareas disponibles.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
