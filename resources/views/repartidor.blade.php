<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>

    <style>
       body {
            font-family: 'Arial', sans-serif;
            background: url('imagenes/regalo.png') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .order-container {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 10px; /* Reducido el padding */
            width: 80%;
            max-width: 400px; /* Reducido el ancho máximo */
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .order-image {
            max-width: 100%;
            height: auto;
            border: 1px solid #ced4da;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .order-details {
            text-align: center;
            margin-bottom: 10px; /* Reducido el espacio entre detalles y acciones */
        }

        .order-actions {
            display: flex;
            justify-content: space-around; /* Cambiado a espacio alrededor */
            width: 100%;
        }

        .button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="order-container" id="order-container">
        <img src="imagenes/wallhaven-0q37gr_1280x960.png" alt="Imagen del pedido" class="order-image">
        <div class="order-details">
            <h2>Nombre del Producto</h2>
            <p>Descripción del Producto.</p>
            <p>Dirección de entrega: Calle Nombre, Ciudad.</p>
            <p>Teléfono de contacto: +123 456 789</p>
        </div>
        <div class="order-actions">
            <button class="button" onclick="marcarEnProceso()">En Proceso</button>
            <button class="button" onclick="marcarEntregado()">Entregado</button>
        </div>
    </div>

    <script>
        function marcarEnProceso() {
            // Aquí puedes agregar la lógica para cambiar el estado del pedido a "En Proceso"
            alert('Pedido en proceso');
        }

        function marcarEntregado() {
            // Aquí puedes agregar la lógica para cambiar el estado del pedido a "Entregado"
            alert('Pedido entregado');
        }
    </script>

</body>

</html>
