<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header class="align-self-center my-5">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <img src="/img/Inicio_mesa_de_trabajo.png" alt="" id="logo">
            </div>
            <div class="col-md-4"></div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light nav justify-content-center">
        <div class="justify-content-start">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-center" id="lala">
            <ul class="navbar-nav">
                <li class="nav-item mx-2 text-center boton">
                    <a href="{{route('home')}}" class="nav-link text-white bold" style="font-size: 18pt">Inicio</a>
                </li>
                <li class="nav-item mx-2 text-center boton">
                    <a href="{{route('proyecto')}}" class="nav-link text-white bold" style="font-size: 18pt">Proyecto</a>
                    
                </li>
                <li class="nav-item mx-2 text-center boton">
                    <a href="" class="nav-link text-white bold" style="font-size: 18pt">Test</a>       
                </li>
                <li class="nav-item mx-2 text-center boton">
                    <a href="" class="nav-link text-white bold" style="font-size: 18pt">Galería</a>             
                </li>
                <li class="nav-item mx-2 text-center boton">
                    <a href="" class="nav-link text-white bold" style="font-size: 18pt">Contacto</a>      
                </li>
            </ul>
        </div> 

        <div class="auto" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="" class="nav-link">Inicio</a></li>
                <li class="nav-item"><a href="" class="nav-link">Proyecto</a></li>
                <li class="nav-item"><a href="" class="nav-link">Test</a></li>
                <li class="nav-item"><a href="" class="nav-link">Galería</a></li>
                <li class="nav-item"><a href="" class="nav-link">Contacto</a></li>
            </ul>
        </div>
    </nav>
    <div class="container text-center my-5">
        <img src="/img/Inicio-13.png" alt="" style="" id="banner">
    </div>
    <div class="container">
        <div class="row my-3">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4"><img src="/img/Sintítulo-1-06.png" alt="" id="depresin"></div>
                    <div class="col-md-8" id="mesatrabajo">
                        <div class="container ml-4 mt-3 mb-0">
                            <p class="bold text-center my-3" style="font-size:27pt"> ¡Hola, soy Depresin!</p>
                            <p class="regular my-0 ml-2" style="font-size: 12pt">¡Hola!</p>
                            <p class="regular ml-2" style="font-size: 12pt">Soy Depresin, un estudiante de <br> Enseñanza Media como tu, tal vez a diferencia tuya, tengo Depresión. <br>
                                En este lugar me dedicaré a explicarte a ti y a otros jóvenes más lo que es la Depresión y qué hacer contra ella
                            </p>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="/img/Inicio-03.png" alt="" style="width:570px; heigth:190px">
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
