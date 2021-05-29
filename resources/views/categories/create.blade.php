@extends('layout.layout')

@section('title', 'Agregar categoria')

@section('content')

<div class="row">
        <div class="col-sm-10"><h1>Agregar categoria</h1></div> 
        <div class="col-sm-2">
            <a href="{{ route('categories.index') }}">
                <button class="btn btn-secondary">Cancelar</button>
            </a>
        </div>    
    </div>

<div class="jumbotron">
    <form method="post" action="{{ route('categories.store') }}">
        @csrf

        <div>
            <label for="">Categoria</label>
            <input class="form-control" type="text" name="name" id="" required maxlength="100">
        </div>
        <div>
            <label for="">Descripción</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="5" required maxlength="100"></textarea>
        </div>
        <div>
            <label for="">Disponibilidad</label>
            <select class="form-control" name="available" id="" required >
                <option value="">Seleccione una opción</option>
                <option value="1">Disponible</option>
                <option value="0">No disponible</option>
            </select>
        </div>
    
        <input class="btn btn-primary" type="submit" value="Guardar">

    </form>
</div>

@endsection