@extends('layouts.panel')

@section('content')
 <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">nueva tareea</h3>
            </div>
            <div class="col text-right">
              <a href="{{ url('/Notas')}}" class="btn btn-sm btn-success">
                <i class ="fas fa-chevron-left"></i></i>regresar</a>
            </div>
          </div>
        </div>
       <div class="card-body">

        @if($errors ->any())
          @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
              <i class="fas fa-exclamation-triangle"></i>  
              <strong>Por favor!</strong> {{$error}}
            </div>
          @endforeach
        @endif

         <form action ="{{ url('/Notas')}}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="name">Nombre de la tarea</label>
                <input type="text" name ="titulo" class ="form-control" value="{{old('titulo')}}" required>
            </div>

            <div class="form-group">
                <label for="description">Descripcion</label>
                <input type="text" name ="contenido" class ="form-control" value="{{old('contenido')}}">
            </div>

                <button type="submit" class="btn btn-sm btn-primary" >Crear tarea</button>

           

         </form>
       </div>
</div>
@endsection
