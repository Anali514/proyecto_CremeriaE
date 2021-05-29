@extends('layout.layout')

@section('title', 'Editar marca de productos ')

@section('content')

<div class="row">
        <div class="col-sm-10"><h1>Agregar marca de productos</h1></div> 
        <div class="col-sm-2">
            <a href="{{ route('brands.index') }}">
                <button class="btn btn-secondary">Cancelar</button>
            </a>
        </div>    
    </div>

<div class="jumbotron">
    <form method="post" action="{{ route('brands.update', $brand->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="">Marca</label>
            <input class="form-control" type="text" value="{{$brand->name}}" name="name" id="" required maxlength="100">
        </div>
        <div>
            <label for="">Descripción</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="5" required maxlength="100">{{$brand->description}}</textarea>
        </div>
        <div>
            <label for="">Contenido neto</label>
            <input class="form-control" type="text" value="{{$brand->net_content}}" name="net_content" id="" >
        </div>
    
        <input class="btn btn-primary" type="submit" value="Guardar cambios">

    </form>
</div>

@endsection