@extends('layouts.plantillaClient')
@extends('layouts.footer')
@section('title', 'Productos')
@section('content')
<h1>Inicia tu dia con Energia!</h1>

<div class="row container mt-3">
    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
        <h4>Mision</h4>
        <p>Servir el mejor cafe para que comiences tu dia con mucha energia, disfrutes del sabor de una taza 
            en tus reuniones o finalices con un buen sabor de la mejor calidad.
        </p>
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
        <h4>Vision</h4>
        <p>Estar presente en los lugares donde todos puedan disfrutar del sabor de nuestros productos,
            sobresaliendo por nuestra atencion y calidad.
        </p>
    </div>
</div>

<h3>Porque elegirnos?</h3>
<div class="elegirnos mt-3">
    <div class="row">
        <div class="col-6 col-sm-7 col-md-7 col-lg-7 col-xl-7">
            <h4>Calidad</h4>
            <p>Seleccionamos cada grano y cada ingrediente de nuestra cocina, para ofrecerte lo mejor en cada visita,
            completamente saludables sin perder su delicioso sabor.</p>
        </div>
        <div class="col">
            <img src="{{ asset('images/nosotros/calidad.jpg') }}" width="100%  " alt="Imagen calidad">
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <img src="{{ asset('images/nosotros/precio.jpg') }}" width="100%  " alt="Imagen precio">
        </div>
        <div class="col-6 col-sm-7 col-md-7 col-lg-7 col-xl-7">
            <h4>Precio</h4>
            <p>Los precios mas bajos del mundo, gran variedad de productos que se adaptan a tu economia,
                disfrutar del mejor cafe es ahora posible sin gastar una fortuna.
            </p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-6 col-sm-7 col-md-7 col-lg-7 col-xl-7">
            <h4>Saludable</h4>
            <p>Mejora tu salud y al mismo tiempo protege el medio ambiente, consumiendo nuestra variedad
                de productos 100% organicos. Del campo a tu mesa.
            </p>
        </div>
        <div class="col">
            <img src="{{ asset('images/nosotros/organico.jpg') }}" width="100%  " alt="Imagen organico">
        </div>
    </div>
</div>

<div class="equipo">
    <h3>El mejor equipo de trabajo a tus ordenes</h3>
    <img src="{{ asset('images/nosotros/team.jpg') }}" width="100%  " alt="Imagen horario">

    <div class="integrantes row mt-5">

        <div class="caja col-4">
            <img src="{{ asset('images/nosotros/integrantes/ann.jpg') }}" width="100%  " alt="Imagen ann">
            <div class="info">
                <p>Ann Casir</p>
                <p>Experta en Gastronimia Francesa</p>
                <p>10 años de experiencia</p>
            </div>
        </div>

        <div class="caja col-4">
            <img src="{{ asset('images/nosotros/integrantes/hermanos.jpeg') }}" width="100%  " alt="Imagen hermanos">
            <div class="info">
                <p>Hermanos Babel</p>
                <p>Expertos Mundiales</p>
                <p>15 años de experiencia</p>
            </div>
        </div>

        <div class="caja col-4">
            <img src="{{ asset('images/nosotros/integrantes/sergio.jpg') }}" width="100%  " alt="Imagen sergio">
            <div class="info">
                <p>Sergio Barista</p>
                <p>Cafetalero Inernacional</p>
                <p>35 años de experiencia</p>
            </div>
        </div>
    </div>
</div>


@endsection