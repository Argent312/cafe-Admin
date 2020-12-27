@extends('layouts.app')
@section('title', 'Crear Producto')

@section('content')

<form action="{{route ('products.store') }}" method="POST" enctype="multipart/form-data">

    @csrf
    <div class="form-group">
        <label for="nombre">Nombre del Producto</label>
        <input type="text" class="form-control" value="{{ old('nombre') }}" id="nombre" placeholder="Nombre del Producto" name="nombre">
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
        <input type="text" class="form-control" value="{{ old('descripcion') }}" id="descripcion" name="descripcion" placeholder="Descrpcion del Producto">
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
        <input type="number" class="form-control" value="{{ old('precio') }}" id="precio" name="precio" placeholder="Precio del Producto">
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
      <select id="categoria" value="{{ old('categoria') }}" name="categoria" class="form-control">
        <option selected>Cafe</option>
        <option>Cafe</option>
        <option>Pastel</option>
        <option>Bocadillo</option>
      </select>
        @if ($errors->any())
            <div class="alert-danger">
              <ul>
                  @foreach ($errors->get('categoria') as $error)
                      <li>{{ $error }}</li>
                    @endforeach
              </ul>
            </div>
          @endif
      </div>

      <div class="form-group col-md-4">
      <label for="estado">Estado</label>
      <select id="estado" value="{{ old('estado') }}" name="estado" class="form-control">
        <option selected>Clasico</option>
        <option>Clasico</option>
        <option>Nuevo</option>
        <option>Temporada</option>
      </select>
        @if ($errors->any())
            <div class="alert-danger">
              <ul>
                  @foreach ($errors->get('estado') as $error)
                      <li>{{ $error }}</li>
                    @endforeach
              </ul>
            </div>
          @endif
      </div>

    <div class="mb-3">
      <label for="imagenProducto">Imagen del producto</label>
      <input type="file" class="form-control-file" id="imagenProducto" name="imagenProducto">
        @if ($errors->any())
            <div class="alert-danger">
              <ul>
                  @foreach ($errors->get('imagen') as $error)
                      <li>{{ $error }}</li>
                    @endforeach
              </ul>
            </div>
          @endif
    </div>
    
    <div class="boton-edit">
      <button type="submit" class="btn btn-primary">Guardar</button>
      <a href="{{ route('adminproductos') }}"><button type="button" class="btn btn-warning">Cancelar</button></a>
    </div>
</form>
@endsection