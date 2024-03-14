<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlaces a Bootstrap y Popper.js desde CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background-image: url('imagenes/wallhaven-6qr7rq_1280x1024.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            font-family: 'Arial', sans-serif;
        }

        .columna {
            flex: 1;
            padding: 20px;
            color: white;
        }

        .perfil-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .perfil-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin-bottom: 10px;
        }

        .perfil-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .cuadro-transparente {
            background-color: rgba(255, 255, 255, 0.5);
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }

        #input-imagen {
            display: none;
        }

        /* Barra de navegación transparente */
        .navbar {
            background-color: transparent !important;
            box-shadow: none !important;
            margin-bottom: 20px; /* Separación de la barra de navegación */
        }

        .navbar-nav .nav-item {
            margin-right: 20px; /* Separación entre enlaces */
        }

        .navbar-nav .nav-link {
            color: white !important; /* Color blanco para los enlaces */
        }
    </style>
</head>

<body>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-sm bg-light justify-content-center fixed-top"> <!-- Agregado 'fixed-top' para fijar la barra en la parte superior -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="principal">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="nosotros">Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pasteles">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="carrito">Carrito</a>
            </li>
        </ul>
    </nav>

    <div class="columna">
    <div class="perfil-container">
            <label for="input-imagen" class="perfil-image" id="imagen-perfil">
                <!-- Imagen predeterminada -->
                <img src="imagenes\photo-1492681290082-e932832941e6.webp" alt="Imagen de perfil">
            </label>
            
            <input type="file" id="input-imagen" accept="image/*" onchange="cargarImagen(event)">
            <div class="perfil-text">
                <h3 id="nombre-perfil">PERFIL</h3>
            </div>
        </div>
        </div>

        <div class="columna">
    <div class="cuadro-transparente">
        <h2 id="nombre-usuario">Nombre: Juan Pérez</h2>
       
    </div>

    <div class="cuadro-transparente">
        <h2>Datos de la cuenta</h2>
        <!-- Puedes agregar más contenido relacionado con los datos de la cuenta aquí -->
        <a href="vista_datos_cuenta.html" class="btn btn-primary">Ir</a>
    </div>

    <div class="cuadro-transparente">
        <h2>Tarjetas</h2>
        <!-- Puedes agregar más contenido relacionado con las tarjetas aquí -->
        <a href="vista_tarjetas.html" class="btn btn-primary">Ir</a>
    </div>

    <div class="cuadro-transparente">
        <h2>Direcciones</h2>
        <!-- Puedes agregar más contenido relacionado con las direcciones aquí -->
        <a href="vista_direcciones.html" class="btn btn-primary">Ir</a>
    </div>
</div>


    <script>
        // Obtener el nombre almacenado en el localStorage
        var nombreAlmacenado = localStorage.getItem('nombre');

        function cargarImagen(event) {
            const input = event.target;
            const reader = new FileReader();

            reader.onload = function () {
                const imagenPerfil = document.getElementById('imagen-perfil');
                imagenPerfil.innerHTML = `<img src="${reader.result}" alt="Imagen de perfil">`;
            };

            reader.readAsDataURL(input.files[0]);
        }
    </script>
</body>

</html>
