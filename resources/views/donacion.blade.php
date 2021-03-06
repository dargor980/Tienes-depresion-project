<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Inicio</title>
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
    
    <div class="container">
        <div class="row my-5">
            <div class="col-md-5">
                <img src="img/donacion-de-dinero.jpg" alt="donacion de dinero" id="donacionImagen">
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/Sintítulo-1-06.png" alt="bolsa de papel" id="donacionBolsa">
                    </div>
                    <div class="col-md-9" id="datosDonacion">
                        <div class="container my-4 ml-3">
                            <p class="bold" style="font-size: 10pt;">
                                COLABORA Y PARTICIPA CON NOSOTROS A TRAVÉS DE TU DONACIÓN
                                PODEMOS DESARROLLAR NUESTROS PROYECTOS DE PREVENCIÓN DE
                                LA SALUD MENTAL. <br><br>
                                Razón Social: FUNDACIÓN SALUD MENTAL CHILE <br><br>
                                RUT: 65.134.562-6 <br><br>
                                BANCO: BANCO DE CHILE <br><br>
                                CUENTA CORRIENTE: 169-41022-06 <br><br>
                                CORREO ELECTRÓNICO: fundacionsaludmental.cl@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            

            

            
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
