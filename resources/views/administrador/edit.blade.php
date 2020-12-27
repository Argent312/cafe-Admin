@extends('layouts.app')
@section('title', 'Editar Producto')

@section('content')
    <form action="{{route ('products.update', $product->id) }}" method="POST"> 
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre del Producto</label>
            <input type="text" class="form-control" id="nombre" value="{{$product->nombre}}" name="nombre">
            @if ($errors->any())
                <div class="alert-danger">
                <ul>
                    @foreach ($errors->get('nombre') as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                </ul>
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="descripcion">Descripcion del Producto</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$product->descripcion}}">
            @if ($errors->any())
                <div class="alert-danger">
                <ul>
                    @foreach ($errors->get('descripcion') as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                </ul>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" class="form-control" id="precio" name="precio" value="{{$product->precio}}">
            @if ($errors->any())
                <div class="alert-danger">
                <ul>
                    @foreach ($errors->get('precio') as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                </ul>
                </div>
            @endif
        </div>
        <div class="form-group col-md-4">
        <label for="categoria">Categoria</label>
        <select id="categoria" name="categoria" class="form-control">
            <option selected>{{$product->categoria}}</option>
            <option>Cafe</option>
            <option>Pastel</option>
            <option>Bocadillo</option>
        </select>
        </div>

        <div class="form-group col-md-4">
        <label for="estado">Estado</label>
        <select id="estado" name="estado" class="form-control">
            <option selected>{{$product->estado}}</option>
            <option>Clasico</option>
            <option>Nuevo</option>
            <option>Temporada</option>
        </select>
        </div>
        <div class="boton-edit">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('adminproductos') }}"><button type="button" class="btn btn-warning">Cancelar</button></a>
        </div>
    </form>
@endsection