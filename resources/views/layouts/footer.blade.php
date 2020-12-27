@section('footer')
<div class="row ml-3">
    <a class="navbar-brand col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 logo" href="{{ route('index') }}">
        <img src="{{ asset('images/logo.jpg') }}" width="40" height="40" alt="Logo">
        Cafetal Cafeteria
    </a>
    

    <div class="logos-footer col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
        <p>Siguenos en nuestras redes sociales!</p>
        <a href="#">
            <i class="fab fa-facebook"></i>
        </a>
        <a href="#">
            <i class="fab fa-twitter-square"></i>
        </a>
        <a href="#">
            <i class="fab fa-instagram-square"></i>
        </a>
        <a href="#">
            <i class="fab fa-youtube"></i>
        </a>
    </div>
</div>

<div class="row ml-5 mt-3 datos-footer">
    <ul class="navbar-nav col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('index') }}">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('productos') }}">Productos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
        </li>
        <li>
            <a class="nav-link" href="{{ route('products.index') }}">Administrador</a>
        </li>

    </ul>

    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 mt-2 mr-1 logos-datos">
        <a class="d-block" href="#">
            <i class="fas fa-map-marker-alt"><span>  Adolfo Lopez Mateos Veracruz, Mexico</span></i>
        </a>
        <a class="d-block" href="#">
            <i class="fas fa-phone-square-alt"><span>  22-88-90-17-90</span></i>
        </a>
        <a class="d-block" href="#">
            <i class="fab fa-whatsapp-square"><span>  +57 22-73-90-90</span></i>
        </a>
        <a class="d-block" href="#">
            <i class="fas fa-envelope"><span>  cafetal_mexico@gmail.com</span></i>
        </a>
    </div>
</div>
@endsection