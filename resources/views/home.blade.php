<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUDICME</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" href="{{ asset('img/ICONLUC.png') }}">
    <!-- CSS only -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>


<body>

    <div class="container_global">

        <!-- MEMU -->
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#"><img src="{{ asset('img/favicon.ico') }}" alt="Logo_ludicme"
                        id="logo"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#about">¿PARA QUIÉN?</a>
                            <ul class="menu-vertical">
                                <li><a href="#">FORMADOR COACH</a></li>
                                <li><a href="#">LIDER DE BIENESTAR</a></li>
                                <li><a href="#">DESARROLLO HUMANO</a></li>
                                <li><a href="#">DOCENTE</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="#mascontenido">¿POR QUÉ LUDIC ME?</a></li>
                        <li class="nav-item"><a class="nav-link" href="#Contactanos">CONTÁCTANOS</a></li>
                        <li class="nav-item"><a class="nav-link" href="/demo/register "> VALORILAND </a></li>

                    </ul>

                </div>
            </div>
        </nav>
        <!--END MENU-->

        <!--CARRUSEL-->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>

            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active" id="fc1">
                    <img src="{{ asset('img/Ludicme.png') }}" alt="Ludicme" class="d-block w-100">
                </div>
                <div class="carousel-item" id="fc2">
                    <img src="{{ asset('img/divertida.png') }}" alt="Ludicme_2" class="d-block w-100">
                </div>

            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        <!--END-CARRUSEL-->


        <!--CUERPO DE LA PAGINA-->
        <!--MISION Y VISION-->
        <section class="fc3" id="vision">
            <img src="{{ asset('img/img_2/web3.png') }}" alt="vision" class="d-block w-100">
        </section>
        <section class="fc4" id="Mision">
            <img src="{{ asset('img/img_2/web4.png') }}" alt="mision" class="d-block w-100">
        </section>
        <!--END MISION Y VISION-->

        <!--INTERACCION, CREATIVIDAD, PERSONALIZACION-->

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" id="fc5">

                <div class="carousel-item active" id="fc5">
                    <div class="botones_carru">

                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                    <img src="{{ asset('img/img_2/creatividad.png') }}" alt="creatividad" class="d-block w-100"
                        id="mascontenido">

                </div>
                <div class="carousel-item" id="fc5">
                   
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    
                    <img src="{{ asset('img/img_2/personaliza.png') }}" id="creatividad" alt="valoriland_1"
                        class="d-block w-100">

                </div>
                <div class="carousel-item" id="fc5">
                    <img src="{{ asset('img/img_2/personaliza.png') }}" id="creatividad" alt="valoriland_1"
                        class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>


        </div>
        <section class="fc6" id="Contactanos">

            <img src="{{ asset('img/img_2/web5.png') }}" class="d-block w-100">
            {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis nihil exercitationem necessitatibus
                nisi mollitia deleniti adipisci minima earum quisquam quibusdam beatae fugit dolores suscipit sint alias
                animi, a repudiandae itaque!</p> --}}
        </section>





    </div>






    {{-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div> --}}








    {{-- <section class="fc5" id="Lomasfantastico">
            <img src="{{asset('img/img_2/creatividad.png')}}" alt="personlizacion" class="d-block w-100">
        </section>
        <section class="section_2">
            <img src="{{asset('img/creatividad.png')}}" id="creatividad" alt="valoriland_1" class="d-block w-100">

        </section>
        <section class="container_3" id="Contactanos" id="">

            <img src="{{asset('img/Contactanos.png')}}" class="d-block w-100"> --}}
    {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis nihil exercitationem necessitatibus
                nisi mollitia deleniti adipisci minima earum quisquam quibusdam beatae fugit dolores suscipit sint alias
                animi, a repudiandae itaque!</p> --}}
    {{-- </section> --}}




    {{-- <a href="/demo/register ">DEMO</a> --}}

    <!--end Image-->


    </div>

    <!--FINAL DEL CUERPO DE LA PAGINA-->



    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

{{-- <li><a href="#">¿PARA QUIÉN?</a></li>
<li><a href="#">¿POR QUÉ LUDIC ME?</a></li>
<li><a href="#">CONTÁCTANOS</a></li>
<li><a href="#">PLANES Y LANZAMIENTOS</a></li>
</ul> --}}
{{-- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; --}}
{{-- <i class='bx bx-align-middle'></i> --}}
