@extends('layout.layout')

@section('title', 'Editar ventas')

@section('content')

<div class="row">
        <div class="col-sm-10"><h1>Agregar ventas</h1></div> 
        <div class="col-sm-2">
            <a href="{{ route('sales.index') }}">
                <button class="btn btn-secondary">Cancelar</button>
            </a>
        </div>    
    </div>

<div class="jumbotron">
    <form method="post" action="{{ route('sales.update', $sale->id ) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="">Nombre de la venta</label>
            <input class="form-control" type="text" value="{{$sale->name}}" name="name" id="" required maxlength="100">
        </div>
        <div>
            <label for="">Total de la venta</label>
            <input class="form-control" type="text" value="{{$sale->total}}" name="total" id="" required maxlength="100" >
        </div>
    
        <input class="btn btn-primary" type="submit" value="Guardar cambios">

    </form>
</div>

@endsection