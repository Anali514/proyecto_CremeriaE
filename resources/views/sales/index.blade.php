@extends('layout.layout')

@section('title', 'Ventas')

@section('content')

<div class="row"> 
    <div class="col-sm-2">
        <a href="{{ route('sales.create') }}">
            <button class="btn btn-primary">Agregar</button>
        </a>
    </div>

    <div class="col-sm-10"><h1>Ventas registradas</h1></div>

@forelse($sales as $sale)

<div class="row">
    <div class="card col-sm bg-light" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $sale->name }}</h5>
            <p class="card-text text-muted">Total de la venta:{{ $sale->total}}</p>
            <form action="{{route('sales.destroy', $sale->id) }}" method="post">
            <a class="btn btn-info" href="{{ route('sales.show', $sale->id) }}">Ver</a>
            <a class="btn btn-secondary" href="{{ route('sales.edit', $sale->id) }}">Editar</a>
            @csrf
            @method('DELETE')
            <button type="submmit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
    
    <br>

@empty
<div><h3>NO HAY REGISTROS DE VENTAS EN LA BASE DE DATOS</h3></div>
@endforelse 

{{$sales->links() }}


@endsection

