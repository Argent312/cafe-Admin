@extends('layouts.plantillaClient')
@extends('layouts.footer')
@section('title', 'Productos')
@section('content')
<h2 class="mt-3">Contacta con nosotros</h2>
<hr size="8px" color="black" />

<div class="datos-contacto">
    <div class="row">
        <div class="col centra">
            <i class="principal fas fa-phone-square-alt"></i>
            <h4>Telefonos</h4>
            <i class="fas fa-home">     22-88-17-90</i>
            <i class="fab fa-whatsapp-square">    22-73--90-90</i>
        </div>

        <div class="col centra">
            <i class="principal fas fa-envelope-square"></i>
            <h4>Correo</h4>
            <p>cafetal_mexico@gmail.com</p>
        </div>
    </div>
</div>

<div class="socios">
    <h3>Nuestros Provedores</h3>
    <hr size="8px" color="black" />

    <div class="row">
        
        <img class="mt-3 col-4 col-sm-4 col-md-3 col-lg-3" src="{{ asset('images/provedores/provedor.png') }}" width="100" alt="Provedor">
        <img class="mt-3 col-4 col-sm-4 col-md-3 col-lg-3" src="{{ asset('images/provedores/provedor_2.jpg') }}" width="100" alt="Provedor">
        <img class="mt-3 col-4 col-sm-4 col-md-3 col-lg-3" src="{{ asset('images/provedores/provedor_3.jpg') }}" width="100" alt="Provedor">
        <img class="mt-3 col-4 col-sm-4 col-md-3 col-lg-3" src="{{ asset('images/provedores/provedor_4.png') }}" width="100" alt="Provedor">
        <img class="mt-3 col-4 col-sm-4 col-md-3 col-lg-3" src="{{ asset('images/provedores/provedor_5.png') }}" width="100" alt="Provedor">  
        <img class="mt-3 col-4 col-sm-4 col-md-3 col-lg-3" src="{{ asset('images/provedores/provedor_6.jpg') }}" width="100" alt="Provedor">
    </div>
</div>
@endsection