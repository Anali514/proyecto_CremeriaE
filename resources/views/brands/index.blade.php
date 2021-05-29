@extends('layout.layout')

@section('title', 'Marcas')

@section('content')

<div class="row"> 
    <div class="col-sm-2">
        <a href="{{ route('brands.create') }}">
            <button class="btn btn-primary">Agregar</button>
        </a>
    </div>

    <div class="col-sm-10"><h1>Marcas registradas</h1></div>

@forelse($brands as $brand)

<div class="row">
    <div class="card col-sm bg-light" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $brand->name }}</h5>
            <h3 class="card-text">{{$brand->description }}</h3>
            <p class="card-text text-muted">{{ $brand->net_content }}</p>
            <form action="{{route('brands.destroy', $brand->id) }}" method="post">
            <a class="btn btn-info" href="{{ route('brands.show', $brand->id) }}">Ver</a>
            <a class="btn btn-secondary" href="{{ route('brands.edit', $brand->id) }}">Editar</a>
            @csrf
            @method('DELETE')
            <button type="submmit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
    
    
    <br>
@empty 
    <div><h3>NO HAY REGISTROS DE MARCAS EN LA BASE DE DATOS</h3></div>
@endforelse

{{$brands->links() }}


@endsection

