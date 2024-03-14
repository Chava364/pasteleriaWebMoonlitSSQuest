<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Selección de Pastel</title>
    <style>
         body {
            font-family: 'Arial', sans-serif;
            background: url('imagenes/fonAzu.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .cake-container {
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin: 20px;
            padding: 20px;
            width: 80%;
            max-width: 600px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .cake-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .cake-details {
            text-align: center;
        }

        .cake-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .cake-price {
            color: green;
            font-size: 18px;
            margin-bottom: 15px;
        }

        .cake-description {
            margin-bottom: 20px;
        }

        .quantity-input {
            margin-bottom: 20px;
        }

        .color-selector {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        .color-option {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
        }

        .order-button {
            background-color: #e44d26;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .additional-section {
            background-color: white; /* Fondo blanco */
            padding: 20px; /* Ajusta el espaciado interno según necesites */
            border-radius: 5px; /* Opcional: para esquinas redondeadas */
            /* Otros estilos que desees aplicar */
        }
    </style>
</head>

<body>

    <nav>
        <div class="container mt-3">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link text-dark font-weight-bold" href="principal">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark font-weight-bold" href="pasteles">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark font-weight-bold" href="nosotros">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark font-weight-bold" href="perfil">Perfil</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="cake-container" style="background-color: white; padding: 20px;">
    <div>
        <img class="cake-image" src="imagenes/{{ $producto->imagen }}" alt="Pastel de ejemplo">
        <div class="cake-details">
            <div class="cake-name">{{ $producto->nombre }}</div>
            <div class="cake-price">$ {{ $producto->precio }}</div>
            <div class="cake-description">{{ $producto->descripcion }}</div>
            <!-- ...otros detalles del producto por si agregamos -->
        </div>
    </div>

    <form action="{{ route('agregar.al.carrito', ['id' => $producto->id]) }}" method="POST">
        @csrf
        <div class="quantity-input">
            <label for="quantity">Cantidad:</label>
            <input type="number" id="quantity" name="quantity" min="1" value="1">
        </div>

        <div class="delivery-date-input">
            <label for="deliveryDate">Fecha de entrega:</label>
            <input type="date" id="deliveryDate" name="deliveryDate">
        </div>

        <div class="description-input">
            <label for="description">Descripción:</label>
            <textarea id="description" name="description" rows="4" cols="50" placeholder="Ingrese la descripción del producto"></textarea>
        </div>

        <button type="submit" class="order-button">Agregar al Carrito</button>
    </form>    

    </div>
    </div>

</body>


</html>
