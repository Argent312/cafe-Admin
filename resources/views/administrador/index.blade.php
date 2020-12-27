@extends('layouts.app')
@section('title', 'Index Administrador')

@section('content')
    <div class="opciones row">
        <div class="col-6">
            <a href="{{ route('adminproductos') }}">
                <img src="{{ asset('images/icono_productos.jpg') }}" width="300" alt="Imagen Productos">
                Productos
            </a>
        </div>
        <div class="col-6">
            <a href="{{ route('users.index') }}">
                <img src="{{ asset('images/icono_usuarios.jpg') }}" width="300" alt="Imagen Usuarios">
                Usuarios
            </a>
        </div>
    </div>
    
@endsection