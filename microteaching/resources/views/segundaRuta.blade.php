<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nova+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/estilos.css">
    <title>¡Mi primera ruta parametrizada!</title>
</head>

<body>

    <div class="container-segunda">
        <header>
            <div class="top"></div>
            <nav>
                <ul class="nav-ul">
                    <li class="nav-li"><a class="nav-link" href="/miPrimeraRuta">VOLVER AL INICIO |</a></li>
                    <li class="nav-li"><a class="nav-link" href="#">PRODUCTOS |</a></li>
                    <li class="nav-li"><a class="nav-link" href="#">CONTACTO</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <article>
                <h1 class="welcome">¡BIENVENIDO/A NUEVAMENTE {{$miNombre}} {{$miApellido}}!</h1>
            </article>
            <article>
                <ul class="main-ul">
                    <li class="main-li"><a class="main-link" href="">LARAVEL</a></li>
                    <li class="main-li"><a class="main-link" href="">RUTAS</a></li>
                    <li class="main-li"><a class="main-link" href="">VIEWS</a></li>
                    <li class="main-li"><a class="main-link" href="">CONTROLLERS</a></li>
                </ul>
            </article>
        </section>
    </div>

</body>

</html>
