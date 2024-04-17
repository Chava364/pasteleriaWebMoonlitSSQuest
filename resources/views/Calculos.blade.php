<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Costo de Pastel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* Color de fondo pastel */
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff; /* Color de fondo del contenedor */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }
        h1 {
            text-align: center;
            color: #333; /* Color del texto principal */
        }
        form {
            margin-top: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50; /* Color de fondo del botón */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049; /* Cambio de color al pasar el mouse */
        }
        #total {
            margin-top: 20px;
            text-align: right;
            font-size: 1.2em;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Calculadora de Costo de Pastel</h1>
    <form id="calculator">
        <div class="form-group">
            <label for="distance">Distancia (en kilómetros):</label>
            <input type="number" id="distance" name="distance" min="0" step="0.1" required>
        </div>
        <div class="form-group">
            <label for="product">Selecciona el producto:</label>
            <select id="product" name="product" required>
                <option value="pastel_chocolate">Pastel de Chocolate - $25</option>
                <option value="pastel_vainilla">Pastel de Vainilla - $20</option>
                <option value="cupcakes">Cupcakes (Docena) - $15</option>
                <option value="galletas">Galletas (Docena) - $10</option>
            </select>
        </div>
        <button type="button" onclick="calculate()">Calcular</button>
    </form>
    <div id="total"></div>
</div>

<script>
    function calculate() {
        var distance = parseFloat(document.getElementById('distance').value);
        var product = document.getElementById('product').value;
        var price = 0;

        // Calcular el precio del producto seleccionado
        switch (product) {
            case 'pastel_chocolate':
                price = 25;
                break;
            case 'pastel_vainilla':
                price = 20;
                break;
            case 'cupcakes':
                price = 15;
                break;
            case 'galletas':
                price = 10;
                break;
        }

        // Calcular el costo total incluyendo la distancia
        var total = price + (distance * 0.5); // Suponiendo un costo de $0.50 por kilómetro

        document.getElementById('total').innerText = 'Costo Total: $' + total.toFixed(2);
    }
</script>

</body>
</html>
