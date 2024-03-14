<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
        body {
            background-image: url('imagenes/cake.png');
            background-size: cover;
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

        .form-group {
            margin-bottom: 1.5rem;
        }
        .btn {
            background-color: blue;
            color: white;
        }
        .btn:not(:last-child) {
            margin-right: 0.75rem;
        }
        .scroll-container {
            overflow-y: auto;
            height: 500px; /* Ajusta la altura según tus necesidades */
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

<header class="bg-purple text-dark" style="background-color: rgba(128, 0, 128, 0.3);">
    <h3>
        <i class="fas fa-bars"></i> Administrar
    </h3>
</header>

<section>
    <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <div class="container mt-5">
                        <div class="scroll-container" style="overflow-x: auto;">
                            <div class="row">
                            <div class="col-md-12">
                                    @foreach($solicitudes as $solicitud)
                                    <div class="card mb-3 solicitud-card" data-solicitud-id="{{ $solicitud->id }}">
                                        <div class="row no-gutters">
                                            <div class="col-md-3">
                                                <img src="imagenes/choco.jpeg" class="card-img" alt="Imagen del pedido">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $solicitud->nombre }}</h5>
                                                    <h5 class="card-text">{{ $solicitud->fecha }}</h5>
                                                    <h5 class="card-text">{{ $solicitud->pedido }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button class="btn btn-primary">Vendido</button>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5" style="background-color: rgba(128, 0, 128, 0.6);">
                    <h2>Pedido</h2>
                    <form>
                        <div class="form-group">
                            <label for="nombre">Nombre de pedido</label>
                            <input type="text" class="form-control" id="nombre">
                        </div>
                        <div class="form-group">
                            <label for="fecha">Fecha de entrega</label>
                            <input type="date" class="form-control" id="fecha">
                        </div>
                        <div class="form-group">
                            <label for="cantidad">Cantidad</label>
                            <input type="text" class="form-control" id="cantidad">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea class="form-control" id="descripcion"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn" id="agregar">Agregar Nueva</button>
                            <button type="button" class="btn" id="modificar">Modificar</button>
                        </div>
                        <div class="form-group text-center">
                            <button type="button" class="btn" id="cancelar">Cancelar (Eliminar)</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.solicitud-card').click(function() {
            var solicitudId = $(this).data('solicitud-id');
            
            // Realizar una solicitud AJAX para obtener los detalles de la solicitud por su ID
            $.ajax({
                type: 'GET',
                url: '/solicitudes/' + solicitudId, // Ruta para obtener detalles de la solicitud
                success: function(response) {
                    // Llenar el formulario con los datos de la solicitud obtenidos
                    $('#nombre').val(response.nombre);
                    $('#fecha').val(response.fecha);
                    $('#pedido').val(response.pedido);
                    $('#descripcion').val(response.descripcion);
                },
                error: function() {
                    alert('Error al cargar los detalles de la solicitud.');
                }
            });
        });
    });
</script>


</body>
</html>