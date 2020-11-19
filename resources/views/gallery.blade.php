<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    <link rel="stylesheet" href="{{asset('css/galeria.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Galería</title>
</head>
<body> 
    <header class="align-self-center my-5">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <img src="img/Inicio_mesa_de_trabajo.png" alt="" id="logo">
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
                    <a href="{{route('test')}}" class="nav-link text-white bold" style="font-size: 18pt">Test</a>       
                </li>
                <li class="nav-item mx-2 text-center boton">
                    <a href="{{route('galeria')}}" class="nav-link text-white bold" style="font-size: 18pt">Galería</a>             
                </li>
                <li class="nav-item mx-2 text-center boton">
                    <a href="{{route('contacto')}}" class="nav-link text-white bold" style="font-size: 18pt">Contacto</a>      
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
    
    <div class="container text-center">
        <div class="container text-center my-5">
            <div class="row">
                <div class="col-md-4 mr-2"></div>
                <div class="col-md-4 ml-5">
                    <p class="nav-link botoncito text-white bold" style="font-size: 18pt">Talleres</p>
                </div>
                
            </div> 
        </div>
        <div class="container ml-5">
            <div class="fotorama ml-5" data-nav="thumbs" data-width="800" data-height="600" data-transition="dissolve" data-allowfullscreen="true" data-autoplay="true" data-loop="true" data-swipe="true">
                <img src="img/galeria/1.jpg">
                <img src="img/galeria/2.jpg">
                <img src="img/galeria/3.jpg">
                <img src="img/galeria/4.jpg">
                <img src="img/galeria/5.jpg">
                <img src="img/galeria/6.jpg">
                <img src="img/galeria/7.jpg">
                <img src="img/galeria/9.jpg">
                <img src="img/galeria/10.jpg">
                <img src="img/galeria/11.jpg">
                <img src="img/galeria/12.jpg">
                <img src="img/galeria/13.jpg">
                <img src="img/galeria/14.jpg">
                <img src="img/galeria/15.jpg">
                <img src="img/galeria/16.jpg">
                <img src="img/galeria/17.jpg">
                <img src="img/galeria/18.jpg">
                <img src="img/galeria/19.jpg">
                <img src="img/galeria/20.jpg">
                <img src="img/galeria/21.jpg">
                <img src="img/galeria/22.jpg">
                <img src="img/galeria/23.jpg">
                <img src="img/galeria/24.jpg">
                <img src="img/galeria/25.jpg">
                <img src="img/galeria/26.jpg">
                <img src="img/galeria/27.jpg">
                <img src="img/galeria/28.jpg">
                <img src="img/galeria/29.jpg">
            </div>
        </div>
    </div>

    <div class="row my-5">
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        <div class="col-md-3">
            <img src="img/proyecto/Proyecto-11.png" alt="proyecto" id="imagen-proyecto">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
