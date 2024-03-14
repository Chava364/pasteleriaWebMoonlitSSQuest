<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="estilos.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            /* Añadir la imagen de fondo */
            background-image: url("imagenes/papasteles.jpg");
            /* Asegurarse de que la imagen cubra todo el fondo */
            background-size: cover;
            /* Fijar la imagen de fondo para que no se desplace con el contenido */
            background-attachment: fixed;
        }
        /* Estilo para el texto rojo */
        .texto-verde {
            color: green;
        }
        .subtitulo {
            font-size: 1.2em; /* Tamaño de fuente más grande */
            font-weight: bold; /* Texto en negritas */
        }
    </style>

</head>
<body>
<header class="bg-dark">
    <h2 class="text-center text-white font-weight-bold">Productos</h2>

<nav>
<div class="container mt-3 navbar-blue bg-blue">
  
  <ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link text-white font-weight-bold" href="principal">Inicio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white font-weight-bold" href="carrito">Carrito</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white font-weight-bold" href="nosotros">Nosotros</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white font-weight-bold" href="perfilU">Perfil</a>
    </li>
  </ul>
</nav>
</header>

<section>
    <div class="container">
        <div class="row justify-content-center">

            @foreach($productos->chunk(5) as $chunk)
                @foreach($chunk as $producto)
                    <div class="col-md-2 mb-3">
                        <div class="card h-100">
                            <img class="card-img-top" src="imagenes/{{ $producto->imagen }}" alt="Card image" style="width:100%">
                            <div class="card-body text-center">
                                <h4 class="card-title">{{ $producto->nombre }}</h4>
                                <p class="card-text">{{ $producto->precio }}</p>
                                <a href="plantillaprod?id={{ $producto->id }}" class="btn btn-primary">Compralo</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach

        </div>
    </div>
</section>

</body>
</html>