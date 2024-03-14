<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Carrito de Compras</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url('imagenes/carrito.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        nav {
            background-color: transparent; /* Fondo transparente */
            margin-bottom: 20px; /* Espacio entre la barra de navegación y el contenido */
        }

        .container {
            padding-left: 0;
            padding-right: 0;
        }

        .nav-link {
            margin-right: 40px; /* Espacio entre cada enlace */
        }

        .cart-container {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin: 20px;
            padding: 20px;
            width: 80%;
            max-width: 600px;
        }

        .cart-item {
            border-bottom: 1px solid #dee2e6;
            padding: 15px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .item-details {
            display: flex;
            align-items: center;
        }

        .item-image {
            max-width: 100px;
            height: auto;
            border-radius: 5px;
            margin-right: 15px;
        }

        .item-name {
            font-size: 18px;
            font-weight: bold;
        }

        .item-quantity {
            margin-right: 15px;
        }

        .item-price {
            color: #e44d26;
            font-weight: bold;
        }

        .total-section {
            margin-top: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .total-label {
            font-size: 20px;
            font-weight: bold;
        }

        .total-amount {
            color: #e44d26;
            font-size: 20px;
            font-weight: bold;
        }

        .checkout-button {
            background-color: #e44d26;
            color: #ffffff;
            padding: 15px 25px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 30px;
        }

        /* Estilos para el formulario de tarjeta de crédito */
        #checkout-form {
            display: none;
            margin-top: 20px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }

        #checkout-form h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        #checkout-form label {
            display: block;
            margin-bottom: 10px;
            font-size: 16px;
            font-weight: bold;
        }

        #checkout-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        #checkout-form button {
            background-color: #e44d26;
            color: #ffffff;
            padding: 15px 25px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <!-- Barra de navegación -->
    <nav>
        <div class="container mt-3">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link text-dark font-weight-bold" href="principal">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark font-weight-bold" href="pasteles">productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark font-weight-bold" href="nosotros">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark font-weight-bold" href="perfilU">Perfil</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Contenido del carrito -->
    <div class="cart-container">
        <div class="cart-item">
            <div class="item-details">
                <img class="item-image" src="imagenes/carriito1.png" alt="Pastel 1">
                <div class="item-name">Pastel de Chocolate</div>
            </div>
            <div class="item-quantity">Cantidad: 2</div>
            <div class="item-price">$50.98</div>
            <button>Eliminar</button>
        </div>

        

        <!-- Botón de realizar pedido con identificador "checkout-button" -->
        <button id="checkout-button" class="checkout-button">Realizar Pedido</button>
    </div>

    <!-- Formulario para datos de tarjeta de crédito (básico) -->
    <div id="checkout-form">
        <h2>Ingresa tus datos de tarjeta de crédito</h2>
        <form onsubmit="return validateForm()">
            <label for="card-number">Número de tarjeta:</label>
            <input type="text" id="card-number" name="card-number" required pattern="[0-9]{16}" placeholder="Ej. 1234567812345678">

            <label for="expiry-date">Fecha de vencimiento:</label>
            <input type="text" id="expiry-date" name="expiry-date" required pattern="(0[1-9]|1[0-2])\/[0-9]{2}" placeholder="Ej. 12/22">

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" required pattern="[0-9]{3}" placeholder="Ej. 123">

            <button type="submit">Pagar</button>
        </form>
    </div>

    <!-- Script para manejar el clic en el botón de realizar pedido -->
    <script>
        function validateForm() {
            // Validaciones básicas, puedes agregar validaciones más robustas según tus necesidades
            var cardNumber = document.getElementById("card-number").value;
            var expiryDate = document.getElementById("expiry-date").value;
            var cvv = document.getElementById("cvv").value;

            if (!/^[0-9]{16}$/.test(cardNumber)) {
                alert("Por favor, ingresa un número de tarjeta válido.");
                return false;
            }

            if (!/^(0[1-9]|1[0-2])\/[0-9]{2}$/.test(expiryDate)) {
                alert("Por favor, ingresa una fecha de vencimiento válida (MM/YY).");
                return false;
            }

            if (!/^[0-9]{3}$/.test(cvv)) {
                alert("Por favor, ingresa un CVV válido.");
                return false;
            }

            return true;
        }

        document.getElementById("checkout-button").addEventListener("click", function () {
            // Muestra el formulario al hacer clic
            document.getElementById("checkout-form").style.display = "block";
        });
    </script>

</body>

</html>
