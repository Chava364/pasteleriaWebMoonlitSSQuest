<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<style>
        body {
            /* Añadir la imagen de fondo */
            background-image: url('imagenes/fon2.jpg');
            
            background-size: cover;
            
            background-attachment: fixed;
        }
        
    </style>
<body>

<header class="bg-pink" style="background-color: rgba(255, 192, 203, 0.3);">
    <h3 class="text-center text-black font-weight-bold">PASTELERIA SANTA BARBARA</h3>

    <nav>
        <div class="container mt-3 bg-pink" style="background-color: rgba(255, 192, 203, 0.3);">
        
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link text-black font-weight-bold" href="principal">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black font-weight-bold" href="carrito">carrito</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black font-weight-bold" href="pasteles">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black font-weight-bold" href="perfilU">Perfil</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

    <section>
        <div class="container mt-5">

            <div class="row mb-4">

                <!-- Cuadro de texto con transparencia y centrado -->
                <div class="col-md-6">
                    <div class="bg-pink p-3 text-center" style="height: 300px; background-color: rgba(255, 192, 203, 0.5);">
                        <h3>Sobre nosotros</h3>
                        <p>Sólo utilizamos ingredientes frescos y naturales; cada pastel es hecho con cariño y uno a uno, de manera artesanal; así es como logramos que nuestro sabor permanezca intacto</p>
                    </div>
                </div>

                <!-- Cuadro de imagen -->
                <div class="col-md-6">
                    <img src="imagenes/past.png" alt="Imagen 1" class="img-fluid" style="height: 300px;">
                </div>

            </div>

            <!-- Segunda fila con dos cuadros (imagen y texto) -->
            <div class="row">

                <!-- Cuadro de imagen -->
                <div class="col-md-6">
                    <img src="imagenes/chey.png" alt="Imagen 2" class="img-fluid" style="height: 300px;">
                </div>

                <!-- Cuadro de texto con transparencia y centrado -->
                <div class="col-md-6">
                    <div class="bg-pink p-3 text-center" style="height: 300px; background-color: rgba(255, 192, 203, 0.5);">
                        <h3>Contacto</h3>
                        <h3>7712239234</h3>
                        <h3>pastelesparati@gmail.com</h3>
                    </div>
                </div>

            </div>

        </div>
    </section>


</body>
</html>
