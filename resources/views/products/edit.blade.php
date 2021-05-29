@extends('layout.layout')

@section('title', 'Editar producto')

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
<form method="post" action="{{ route('products.update', $product->id) }}">
    @csrf
    @method('PUT')

    <div>
        <label for="">Producto</label>
        <input class="form-control" type="text" value="{{ $product->name }}" name="name" id="" required maxlength="100">
    </div>
    <div>
        <label for="">Descripción</label>
        <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $product->description }}</textarea>
    </div>
    <div>
        <label for="">Poveedor</label>
        <input class="form-control" type="text" value="{{ $product->proveedor }}" name="proveedor" id="" required maxlength="100">
    </div>
    <div>
        <label for="">Categoría</label>
        <input class="form-control" type="text" value="{{ $product->categoria }}" name="categoria" id="" required maxlength="50">
    </div>
    <div>
        <label for="">Marca</label>
        <input class="form-control" type="text" value="{{ $product->marca }}" name="marca" id="" required maxlength="50">
    </div>
    <div>
        <label for="">Código de barras</label>
        <input class="form-control" type="text" value="{{ $product->barcode }}" name="barcode" id="" required maxlength="50">
    </div>
    <div>
        <label for="">Precio</label>
        <input class="form-control" type="text" value="{{ $product->price }}" name="price" id="" required maxlength="50">
    </div>
  
    <input class="btn btn-primary" type="submit" value="Actualizar cambios">

</form>
</div>

@endsection