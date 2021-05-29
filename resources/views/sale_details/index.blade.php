@extends('layout.layout')

@section('title', 'Detalles de la venta')

@section('content')

<div class="row"> 
    <div class="col-sm-2">
        <a href="{{ route('sale_details.create') }}">
            <button class="btn btn-primary">Agregar</button>
        </a>
    </div>

    <div class="col-sm-10"><h1>Detalle de ventas registradas</h1></div>

@forelse($sale_details as $sale_detail)

<div class="row">
    <div class="card col-sm bg-light" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text text-muted">Cantidad de ventas realizadas: {{ $sale_detail-> amount }}</p>
            <p class="card-text text-muted">Total de las ventas: {{ $sale_detail-> price }}</p>
            <form action="{{route('sale_details.destroy', $sale_detail->id) }}" method="post">
            <a class="btn btn-info" href="{{ route('sale_details.show', $sale_detail->id) }}">Ver</a>
            <a class="btn btn-secondary" href="{{ route('sale_details.edit', $sale_detail->id) }}">Editar</a>
            @csrf
            @method('DELETE')
            <button type="submmit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
    <br>

@empty
<div><h3>NO HAY REGISTROS DE DETALLES DE VENTA EN LA BASE DE DATOS</h3></div>
@endforelse 

{{$sale_details->links() }}


@endsection