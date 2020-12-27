@extends('layouts.plantillaClient')
@extends('layouts.footer')
@section('title', 'Productos')
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
<div class="tab-content productos" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        
      <ul>
        <div class="row">
          @foreach($products_cafe as $product)
            <div class="col-lg-6 col-sm-6 col-md-4 col-6 col-xl-4">
              <li>
                <img class="desvanecer" src="{{ asset("storage/$product->imagen" )}}" alt="Imagen"  width="300">
                <p>{{$product->nombre}}</p>
                <p class="descripcion">{{$product->descripcion}}</p>
                <p><span>Precio: $</span>{{$product->precio}}</p>
                <p>{{$product->estado}}</p>
              </li>
            </div>
          @endforeach
        </div>
      </ul>
  </div>
  
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <ul>
        <div class="row">
          @foreach($products_pastel as $product)
            <div class="col-lg-6 col-sm-6 col-md-4 col-6 col-xl-4">
              <li>
                <img class="desvanecer" src="{{ asset("storage/$product->imagen" )}}" alt="Imagen"  width="304">
                <p>{{$product->nombre}}</p>
                <p class="descripcion">{{$product->descripcion}}</p>
                <p><span>Precio: $</span>{{$product->precio}}</p>
                <p>{{$product->estado}}</p>
              </li>
            </div>
          @endforeach
        </div>
      </ul>
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
      
      <ul>
        <div class="row">
          @foreach($products_bocadillo as $product)
            <div class="col-lg-6 col-sm-6 col-md-4 col-6 col-xl-4">
              <li>
                <img class="desvanecer" src="{{ asset("storage/$product->imagen" )}}" alt="Imagen"  width="304">
                <p>{{$product->nombre}}</p>
                <p class="descripcion">{{$product->descripcion}}</p>
                <p><span>Precio: $</span>{{$product->precio}}</p>
                <p>{{$product->estado}}</p>
              </li>
            </div>
          @endforeach
        </div>
      </ul>
      
  </div>
</div>




@endsection