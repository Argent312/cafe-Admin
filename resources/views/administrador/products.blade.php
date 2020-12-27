@extends('layouts.app')
@section('title', 'Productos Administrador')

@section('content')



<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Cafes</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pasteles</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Bocadillos</a>
  </li>
</ul>

<a href="{{ route('products.create') }}"><button type="button" class="btn btn-primary float-right mt-2 mb-2">Crear</button></a>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <table class="table">
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Categoria</th>
                <th>Imagen</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
            @foreach($products_cafe as $product)
                <tr>
                    <td>{{$product->nombre}}</td>
                    <td>{{$product->descripcion}}</td>
                    <td>{{$product->precio}}</td>
                    <td>{{$product->categoria}}</td>
                    <td><img src="{{ asset("storage/$product->imagen" )}}" alt="Imagen"  width="304"></td>
                    <td>{{$product->estado}}</td>  
                    <td>
                      <button class="btn">
                        <a href="{{ route('products.edit', $product->id) }}"><i class="fas fa-edit"></i></a>
                      </button>
                      <form action="{{ route('products.destroy', $product->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn" type="submit"><i class="fas fa-trash"></i></button>
                      </form>
                    </td>  
                </tr>
              
            @endforeach
        </table>
  </div>
  
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
         <table class="table">
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Categoria</th>
                <th>Imagen</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
            @foreach($products_pastel as $product)
                <tr>
                    <td>{{$product->nombre}}</td>
                    <td>{{$product->descripcion}}</td>
                    <td>{{$product->precio}}</td>
                    <td>{{$product->categoria}}</td>
                    <td><img src="{{ asset("storage/$product->imagen" )}}" alt="Imagen"  width="304"></td>
                    <td>{{$product->estado}}</td>  
                    <td>
                      <button class="btn">
                        <a href="{{ route('products.edit', $product->id) }}"><i class="fas fa-edit"></i></a>
                      </button>
                      <form action="{{ route('products.destroy', $product->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn" type="submit"><i class="fas fa-trash"></i></button>
                      </form>
                    </td>  
                </tr>
              
            @endforeach
        </table>
  </div>
  
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

          <table class="table">
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Categoria</th>
                <th>Imagen</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
            @foreach($products_bocadillo as $product)
                <tr>
                    <td>{{$product->nombre}}</td>
                    <td>{{$product->descripcion}}</td>
                    <td>{{$product->precio}}</td>
                    <td>{{$product->categoria}}</td>
                    <td><img src="{{ asset("storage/$product->imagen" )}}" alt="Imagen"  width="304"></td>
                    <td>{{$product->estado}}</td>  
                    <td>
                      <button class="btn">
                          <a href="{{ route('products.edit', $product->id) }}"><i class="fas fa-edit"></i></a>
                      </button>
                      <form action="{{ route('products.destroy', $product->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn" type="submit"><i class="fas fa-trash"></i></button>
                      </form>
                    </td>  
                </tr>
              
            @endforeach
        </table>
  </div>
</div>

@endsection