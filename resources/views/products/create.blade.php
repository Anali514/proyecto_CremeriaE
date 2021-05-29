@extends('layout.layout')

@section('title', 'Agregar producto')

@section('content')


    <div class="row">
        <div class="col-sm-10"><h1>Agregar producto</h1></div> 
        <div class="col-sm-2">
            <a href="{{ route('products.index') }}">
                <button class="btn btn-secondary">Cancelar</button>
            </a>
        </div>    
    </div>

<div class="jumbotron">
<form method="post" action="{{ route('products.store') }}">
    @csrf

    <div>
        <label for="">Producto</label>
        <input class="form-control" type="text" name="name" id="" required maxlength="100">
    </div>
    <div>
        <label for="">Descripción</label>
        <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
    </div>
    <div>
        <label for="">Poveedor</label>
        <input class="form-control" type="text" name="proveedor" id="" required maxlength="100">
    </div>
    <div>
        <label for="">Categoría</label>
        <input class="form-control" type="text" name="categoria" id="" required maxlength="50">
    </div>
    <div>
        <label for="">Marca</label>
        <input class="form-control" type="text" name="marca" id="" required maxlength="50">
    </div>
    <div>
        <label for="">Código de barras</label>
        <input class="form-control" type="text" name="barcode" id="" required maxlength="50">
    </div>
    <div>
        <label for="">Precio</label>
        <input class="form-control" type="text" name="price" id="" required maxlength="50">
    </div>
  
    <input class="btn btn-primary" type="submit" value="Guardar">

</form>
</div>

@endsection