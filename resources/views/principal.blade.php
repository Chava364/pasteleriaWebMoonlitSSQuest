<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('imagenes/wallhaven-456231_1280x1024.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: 'Arial', sans-serif;
        }

        /* Agrega estilos para la barra de navegación */
        nav {
            background-color: transparent; /* Fondo transparente */
            position: fixed; /* Barra de navegación fija en la parte superior */
            width: 100%; /* Ancho completo */
            z-index: 1000; /* Z-index alto para superponer sobre otros elementos */
        }

        /* Estilo para los enlaces de la barra de navegación */
        .navbar-nav a {
            color: white; /* Color del texto blanco */
            margin-right: 300px; /* Espaciado grande entre enlaces */
        }

        /* Estilo para ajustar el contenido debajo de la barra de navegación */
        .content {
            margin-top: 56px; /* Ajusta el margen superior para evitar que el contenido se superponga con la barra de navegación */
        }

        .white-text {
        color: white;
    }
    </style>
</head>
<body>

    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pasteles">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="carrito">Carrito</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="perfilU">Perfil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido de la página -->
<section>
  <!-- Contenido de la página -->
<div class="content">
    <!-- Primera fila para la imagen -->
    <div class="row mt-4">
        <div class="col-md-12 text-center">
            <img src="imagenes/wallhaven-vgl3pm_1280x1024.png" alt="Imagen de buen tamaño" class="img-fluid mx-auto d-block">
        </div>
    </div>

    <!-- Espacio entre las filas -->
    <div class="row mt-4"></div>

    <!-- Segunda fila para los cuadrados -->
   <!-- Segunda fila para los cuadrados -->
   <div class="row mt-4">
    <div class="col-md-4 text-center">
        <!-- Enlace a la vista de pasteles -->
        <a href="pasteles">
            <img src="imagenes/wallhaven-dg2vvg_1280x720.png" alt="Imagen 1" class="img-fluid">
            <h3 class="white-text">Pasteles</h3>
        </a>
    </div>
    <div class="col-md-4 text-center">
        <!-- Enlace a la vista de gelatinas -->
        <a href="pasteles">
            <img src="imagenes/d2e8eacb710c75cdaf686ad4605e92c6.webp" alt="Imagen 2" class="img-fluid">
            <h3 class="white-text">Gelatinas</h3>
        </a>
    </div>
    <div class="col-md-4 text-center">
        <!-- Enlace a la vista de muffins -->
        <a href="pasteles">
            <img src="imagenes/wallhaven-4yvyo7_1280x720.png" alt="Imagen 3" class="img-fluid">
            <h3 class="white-text">Muffin</h3>
        </a>
    </div>
</div>
</section>

</body>
</html>
