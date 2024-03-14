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
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-image: url('imagenes/wallhaven-r25roq_1280x720.png'); /* Reemplaza esto con la URL de tu imagen en el servidor web */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .container {
            width: 80%;
            margin-top: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco semi-transparente */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #007bff;
        }

        form {
            margin-bottom: 20px;
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        select {
            margin-bottom: 15px;
        }

        button {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #dee2e6;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        .total-cost {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            color: #28a745;
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
                        <a class="nav-link text-black font-weight-bold" href="solicitudes">Solicitudes</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container">
    <h2>Reporte de Ventas</h2>

    <form>
        <label for="month">Filtrar por Mes:</label>
        <select id="month" name="month">
            <!-- Opciones para cada mes -->
            <option value="1">Dia</option>
            <option value="2">Semana</option>
            <option value="3">Mes</option>
            <!-- ... Agrega las opciones para cada mes ... -->
        </select>
        <button type="submit" name="filterMonth" disabled>Filtrar</button>
    </form>
</div>


        <h2>Lista de Ventas</h2>
        <table>
            <thead>
                <tr>
                    <th>ID Venta</th>
                    <th>Fecha</th>
                    <th>Producto</th>
                    <th>Costo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ventas as $venta)
                <tr>
                    <td>{{ $venta->id }}</td>
                    <td>{{ $venta->created_at }}</td>
                    <td>{{ $venta->solicitud->nombre }}</td>
                    <td>{{ $venta->solicitud->costo }}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="total-cost">
            <!-- Nos falta la variable de suma -->
            Total de Costos de Ventas:
        </div>
    </div>

</body>

</html>
