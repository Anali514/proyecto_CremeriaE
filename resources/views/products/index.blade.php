@extends('layout.layout')

@section('title', 'Productos')

@section('content')

<div class="row"> 
    <div class="col-sm-2">
        <a href="{{ route('products.create') }}">
            <button class="btn btn-primary">Agregar</button>
        </a>
    </div>
    <div class="col-sm-10"><h1>Productos registrados</h1></div>
    
</div>



@forelse($products as $product)

<div class="row">
    <div class="card col-sm bg-light" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <h3 class="card-text">{{$product->categoria }}</h3>
            <p class="card-text"><{{ $product->description }}</p>
            <p class="card-text text-muted">{{ $product->price }}</p>
            <form action="{{route('products.destroy', $product->id) }}" method="post">
            <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">Ver</a>
            <a class="btn btn-secondary" href="{{ route('products.edit', $product->id) }}">Editar</a>
            @csrf
            @method('DELETE')
            <button type="submmit" class="btn btn-danger">Eliminar</button>
            </form>
            
        </div>
    </div>
</div>
    <br>
@empty 
    <div><h3>NO HAY REGISTROS DE PRODUCTOS EN LA BASE DE DATOS</h3></div>
@endforelse


{{$products->links() }}

@endsection