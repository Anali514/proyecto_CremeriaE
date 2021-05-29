@extends('layout.layout')

@section('title', 'Editar proveedores')

@section('content')

<div class="row">
        <div class="col-sm-10"><h1>Agregar proveedores</h1></div> 
        <div class="col-sm-2">
            <a href="{{ route('suppliers.index') }}">
                <button class="btn btn-secondary">Cancelar</button>
            </a>
        </div>    
    </div>

<div class="jumbotron">
    <form method="post" action="{{ route('suppliers.update', $supplier->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="">Nombre del negocio</label>
            <input class="form-control" type="text" value="{{$supplier->business }}" name="business" id="" >
        </div>
        <div>
            <label for="">RFC</label>
            <input class="form-control" type="text" value="{{$supplier->RFC}}" name="RFC" id="" required maxlength="50">
        </div>
        <div>
            <label for="">Nombre de los proveedores</label>
            <input class="form-control" type="text" value="{{$supplier->name}}" name="name" id="" required maxlength="100">
        </div>
        <div>
            <label for="">Articulo</label>
            <input class="form-control" type="text" value="{{$supplier->article }}" name="article" id="" required maxlength="50">
        </div>
        <div>
            <label for="">Código del articulo</label>
            <input class="form-control" type="text" value="{{$supplier->article_code}}" name="article_code" id="" required maxlength="50">
        </div>
    
        <input class="btn btn-primary" type="submit" value="Guardar cambios">

    </form>
</div>

@endsection