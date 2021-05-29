@extends('layout.layout')

@section('title', 'Agregar detalles de ventas')

@section('content')

<div class="row">
        <div class="col-sm-10"><h1>Agregar detalle de la venta</h1></div> 
        <div class="col-sm-2">
            <a href="{{ route('sale_details.index') }}">
                <button class="btn btn-secondary">Cancelar</button>
            </a>
        </div>    
    </div>

<div class="jumbotron">
    <form method="post" action="{{ route('sale_details.store') }}">
        @csrf

        <div>
            <label for="">Monto</label>
            <input class="form-control" type="text" name="name" id="" required maxlength="100">
        </div>
        <div>
            <label for="">Detalle de la venta</label>
            <textarea class="form-control" name="saledetail" id="" cols="30" rows="5" ></textarea>
        </div>
        <div>
            <label for="">Precio</label>
            <input class="form-control" type="text" name="price" id="" required maxlength="100" >
        </div>
    
        <input class="btn btn-primary" type="submit" value="Guardar">

    </form>
</div>
@endsection