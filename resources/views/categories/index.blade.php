@extends('layout.layout')

@section('title', 'Categorias')

@section('content')

<div class="row"> 
    <div class="col-sm-2">
        <a href="{{ route('categories.create') }}">
            <button class="btn btn-primary">Agregar</button>
        </a>
    </div>

    <div class="col-sm-10"><h1>Categorias registradas</h1></div>

@forelse($categories as $category)

<div class="row">
    <div class="card col-sm bg-light" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $category->name }}</h5>
            <h3 class="card-text">{{$category->description }}</h3>
            <p class="card-text"><{{ $category->description }}</p>
            <p class="card-text">{{ $category->available }}</p>
            <form action="{{route('categories.destroy', $category->id) }}" method="post">
            <a class="btn btn-info" href="{{ route('categories.show', $category->id) }}">Ver</a>
            <a class="btn btn-secondary" href="{{ route('categories.edit', $category->id) }}">Editar</a>
            @csrf
            @method('DELETE')
            <button type="submmit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
    
    <br>

@empty
<div><h3>NO HAY REGISTROS DE CATEGORIAS EN LA BASE DE DATOS</h3></div>
@endforelse 

{{$categories->links() }}


@endsection
