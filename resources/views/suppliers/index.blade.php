@extends('layout.layout')

@section('title', 'Proveedores')

@section('content')

<div class="row"> 
    <div class="col-sm-2">
        <a href="{{ route('suppliers.create') }}">
            <button class="btn btn-primary">Agregar</button>
        </a>
    </div>

    <div class="col-sm-10"><h1>Proveedores registrados</h1></div>

@forelse($suppliers as $supplier)

<div class="row">
    <div class="card col-sm bg-light" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">{{ $supplier->name }}</h5>
            <h3 class="card-text">{{ $supplier->business }}</h3>
            <p class="card-text">{{ $supplier->RFC }}</p>
            <p class="card-text">{{ $supplier->article }}</p>
            <p class="card-text text-muted">{{ $supplier->article_code }}</p>
            <form action="{{route('suppliers.destroy', $supplier->id) }}" method="post">
            <a class="btn btn-info" href="{{ route('suppliers.show', $supplier->id) }}">Ver</a>
            <a class="btn btn-secondary" href="{{ route('suppliers.edit', $supplier->id) }}">Editar</a>
            @csrf
            @method('DELETE')
            <button type="submmit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
    <br>
@empty
<div><h3>NO HAY REGISTROS DE PROVEEDORES EN LA BASE DE DATOS</h3></div>
@endforelse 

{{$suppliers->links() }}


@endsection

