@extends('layouts.plantillaClient')
@extends('layouts.footer')
@section('title', 'index')

@section('content')

<div id="carousel" class="carousel slide carrusel" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="{{ asset('images/carrusel/carrusel.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/carrusel/carrusel_2.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/carrusel/carrusel_3.jpg') }}" class="d-block w-100" alt="...">
    </div>
  </div>
</div>


<div class="info">
  <h2>Informacion sobre el cafe</h2>
  <img src="{{ asset('images/info_cafe.jpg') }}" class="mr-3" width="100%" alt="Imagen informacion">
  <div class="">
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum provident doloribus veniam iste nostrum et molestiae quisquam officiis itaque consequuntur dolorum, iure eos amet, quam temporibus porro asperiores, rem accusamus.
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quidem voluptates ipsa odio, sequi eius delectus voluptatum praesentium, tempora doloremque aliquam ut impedit repellat suscipit quisquam ducimus nemo nobis sunt!
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus obcaecati quos, at dignissimos est odio itaque eaque aspernatur doloribus velit cum laudantium quaerat, facere voluptatibus sapiente! Unde molestias aperiam quia.
    </p>
  </div>
</div>


<div class="horario">
  <h3>Horario</h3>
  <div class="mt-3">
    <ul class="">
        <li>Lunes <span>8:00-20:00</span></li>
        <li>Martes <span>8:00-20:00</span></li>
        <li>Miercoles <span>8:00-20:00</span></li>
        <li>Jueves <span>8:00-20:00</span></li>
        <li>Viernes <span>8:00-20:00</span></li>
        <li>Sabado <span>8:00-22:00</span></li>
        <li>Domingo <span>8:00-22:00</span></li>
    </ul>
  </div>
</div>

<div>
  <h3>Mejores Productos</h3>
  <div class="row best">
    <img class="col-sm-12 col-md-4 col-lg-4" src="{{ asset('images/b-product.jpg') }}" width="100" alt="Imagen horario">
    <img class="col-sm-12 col-md-4 col-lg-4" src="{{ asset('images/b-product2.jpg') }}" width="100" alt="Imagen horario">
    <img class="col-sm-12 col-md-4 col-lg-4" src="{{ asset('images/b-product3.jpg') }}" width="100" alt="Imagen horario">
  </div>
</div>


<h3>Mapa de Localizacion</h3>
<div id = 'map' class="map"></div>

@yield('layouts.footer')
@endsection