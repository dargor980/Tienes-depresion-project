<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/proyecto.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Proyecto</title>
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

    <div class="container my-5">
        <div class="row my-5">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <img src="img/proyecto/Sin-título-2-05.png" alt="depresin" id="depresin-proyecto">
                    </div>
                    <div class="col-md-8" id="dialogo-depresin-proyecto">
                        <div class="container ml-2 mt-2 mb-0">
                            <p class="bold text-center mb-0" style="font-size:20pt"> ¡Hola!</p>
                            <p class="regular ml-2" style="font-size: 10pt">Soy Depresin, un estudiante de <br> Enseñanza Media como tu, tal vez a diferencia tuya, tengo Depresión. <br>
                                En este lugar me dedicaré a explicarte a ti y a otros jóvenes más lo que es la Depresión y qué hacer contra ella.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 ">
                <div class="row ml-0">
                    <div class="col-md-4 ">
                        <img src="img/proyecto/Sin-título-2-06.png" alt="depresin-2" id="depresin-proyecto">
                    </div>
                    <div class="col-md-8 " id="fundacion-salud-mental">
                        <div class="container">
                            <p class="bold text-center mb-0 mt-3" style="font-size: 20pt;">Fundación Salud Mental Chile</p>
                            <p class="regular ml-3" style="font-size: 10pt;">
                                Aquí también podrás encontrar ayuda de La Fundación
                                Salud Mental Chile, ya sea para ti o ayudar a un ser
                                querido.
                                La Fundación ayuda por medio de la ArteTerapia, las cuales
                                son actividades más artísticas para una terapia.
                                Ellos nos ayudarán a entender qué es la Depresión, sus
                                causas y cómo combatirlas para prevenirlas.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>

        <div class="row">
            <div class="col-md-3 text-center">
                <img src="img/proyecto/Sin-título-2-10.png" alt="mujer" id="mujer1">
            </div>
            <div class="col-md-6" id="tienes-depresion">
                <div class="container">
                    <p class="bold text-center mb-0 mt-3" style="font-size: 20pt;">¿Tienes Depresión?</p>
                    <p class="regular ml-3">
                        Descubre que cada decisión que tomes tiene una gran importancia para tu
                        propio futuro, el más mínimo detalle puede llevarte a un gran final o un
                        horrible desastre.
                    </p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <img src="img/proyecto/Sin-título-2-09.png" alt="mujer" id="mujer2">
            </div>
        </div>

        <div class="row my-5">
            <div class="col-md-4">
                <img src="img/proyecto/Sin-título-2-11.png" alt="juego1" id="captura-juego">
            </div>
            <div class="col-md-4">
                <img src="img/proyecto/Sin-título-2-12.png" alt="juego2" id="captura-juego">
            </div>
            <div class="col-md-4">
                <img src="img/proyecto/Sin-título-2-13.png" alt="juego3" id="captura-juego">
            </div>
        </div>

        <div class="row my-5">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="game-download">
                <div class="container">
                    <p class="bold text-center mb-0 mt-3" style="font-size: 20pt;">Instrucciones de descarga</p>
                    <p class="regular">
                        Después de la descarga del videojuego, tiene que extraer la carpeta .zip
                        Se creará una carpeta con el nombre del archivo .zip.
                        Dentro de esta carpeta se encontrarán varios archivos
                        El archivo del juego es "TienesDepresion2.exe"
                        Vive la experiencia del juego y escoge tus decisiones!
                    </p>
                    <div class="container text-center my-5">
                        <a href="https://drive.google.com/file/d/1JtcNsUHCJ8l8iGhALQRe52OfTCXOhAOi/view"><button class="boton text-white"><span><img src="img/proyecto/windows_logo.png" alt="windows" style="width: 30px; heigth:30px;"></span>&nbsp;&nbsp;Descargar para Windows</button></a>
                        <a href="https://drive.google.com/file/d/1G_A7Med79y7zWN2ipWqr5JQekMbgi2Ry/view"><button class="boton text-white"><span><img src="img/proyecto/mac_logo.png" alt="Mac" style="width: 30px; heigth:30px;"></span>&nbsp;&nbsp; Descargar para Mac</button></a>
                    </div>
                </div> 
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row my-5">
            <div class="col-md-3 text-center">
                <img src="img/proyecto/Sin-título-2-07.png" alt="mujer" id="mujer3">
            </div>
            <div class="col-md-6" id="charlas-y-talleres">
                <div class="container">
                    <p class="bold text-center mb-0 mt-3" style="font-size: 20pt;">Charlas y Talleres</p>
                    <p class="regular ml-3">
                        Hola, soy una de los muchos compañeros de Depresin.
                        La Fundación suele hacer charlas y conversatorios donde explican muchos
                        temas sobre la Depresión, además de responder las dudas que puedan
                        tener al momento.
                        La Fundación también hace talleres para poder aplicar lo que se habla en
                        sus charlas y conversatorios, y poder experimentar otras clases de
                        actividades a las comunes.
                    </p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <img src="img/proyecto/Sin-título-2-08.png" alt="mujer4" id="mujer4">
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-4"><img src="img/proyecto/imagen1.jpg" alt="" id="imagen-galeria"></div>
            <div class="col-md-4"><img src="img/proyecto/imagen2.jpg" alt="" id="imagen-galeria"></div>
            <div class="col-md-4"><img src="img/proyecto/imagen3.jpg" alt="" id="imagen-galeria"></div>
        </div>

        <div class="row my-5">
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <img src="img/proyecto/Proyecto-11.png" alt="proyecto" id="imagen-proyecto">
            </div>
        </div>
    </div>

    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>