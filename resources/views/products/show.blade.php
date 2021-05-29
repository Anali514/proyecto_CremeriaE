@extends('layout.layout')

@section('title', 'Ver detalles de los productos')

@section('content')

<div class="row">
    <div class="card col-sm bg-light" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <h3 class="card-text">{{$product->categoria }}</h3>
            <p class="card-text"><{{ $product->description }}/p>
            <p class="card-text text-muted">{{ $product->price }}</p>
            <form action="{{route('products.destroy', $product->id) }}" method="post">
            <a class="btn btn-info" href="{{ route('products.index', $product->id) }}">Regresar</a>
            <a class="btn btn-secondary" href="{{ route('products.edit', $product->id) }}">Editar</a>
            @csrf
            @method('DELETE')
            <button type="submmit" class="btn btn-danger">Eliminar</button>
            </form>
            
        </div>
    </div>
</div>
    <br>

@endsection