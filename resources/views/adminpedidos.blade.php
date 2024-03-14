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
            height: 100vh;
            background-image: url('imagenes/wallhaven-r2ex7j_1280x800.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .navbar-container {
            margin-bottom: 20px;
        }

        .nav {
            background-color: rgba(255, 192, 203, 0.0); /* Cambiado a transparente */
            border: none; /* Quitado el borde */
        }

        .nav-link {
            margin: 0 15px; /* Espacio entre los enlaces */
            color: black; /* Cambiado el color del texto */
        }

        .columns-container {
            display: flex;
            justify-content: space-between;
            width: 80%;
            margin-top: 50px;
        }

        .column {
            flex: 1;
            padding: 20px;
            margin: 20px 10px;
        }

        .orange-box {
            background-color: rgba(255, 165, 0, 0.5);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .blue-box {
            background-color: rgba(0, 191, 255, 0.5);
            border-radius: 10px;
            padding: 20px;
            height: 400px;
        }

        .title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .image-container {
            text-align: center;
        }

        .image {
            max-width: 100%;
            height: auto;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 5px;
            margin-right: 20px; /* Espaciado entre la imagen y el texto */
        }

        .text-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
    </style>

</head>

<body>

<div class="navbar-container">
        <nav class="nav">
            <div class="container mt-3">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link text-black font-weight-bold" href="pedidos">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black font-weight-bold" href="alta">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black font-weight-bold" href="ventas">Ventas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black font-weight-bold" href="solicitudes">Solicitudes</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="columns-container">
        <div class="column orange-box">
            <div class="title">Solicitudes de Pedidos</div>
            <!-- Contenido de la columna izquierda -->
            <div class="row">
                <div class="col-md-6">
                    <div class="image-container">
                        <img src="ruta-de-la-imagen.jpg" alt="Imagen del pedido" class="image">
                    </div>
                </div>
                <div class="col-md-6 text-container">
                    <p>Pedido: [Número de pedido]</p>
                    <p>Fecha: [Fecha del pedido]</p>
                </div>
            </div>
        </div>
        <div class="column blue-box">
            <div class="title">Ventas de Pedidos</div>
            <!-- Contenido de la columna derecha -->
            <div class="row">
                <div class="col-md-6">
                    <div class="image-container">
                        <img src="ruta-de-otra-imagenes.jpg" alt="Imagen de ventas" class="image">
                    </div>
                </div>
                <div class="col-md-6 text-container">
                    <!-- Agrega aquí el contenido que desees para la columna de ventas de pedidos -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>
