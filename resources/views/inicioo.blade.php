<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Agrega el enlace a Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-image: url('https://media.giphy.com/media/l0K4mRoeUC5LnDjl6/giphy.gif');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            justify-content: flex-start;
            align-items: center;
            color: white;
        }

        .title {
            font-size: 50px;
            margin-top: 10px;
            color: purple;
            font-family: 'Pacifico', cursive;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            animation: changeColorTitle 5s infinite alternate;
        }

        .header {
            font-size: 50px;
            font-weight: bold;
            margin-top: 20px;
            color: purple;
            font-family: 'Pacifico', cursive;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            animation: changeColorHeader 5s infinite alternate;
        }

        @keyframes changeColorTitle {
            from {
                color: purple;
            }
            to {
                color: orange;
            }
        }

        @keyframes changeColorHeader {
            from {
                color: purple;
            }
            to {
                color: orange;
            }
        }

        .logo {
            margin-top: 100px;
            width: 200px;
            height: auto;
            margin-bottom: 20px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .button {
            margin-top: 100px;
            margin-right: 400px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            color: white;
            background-color: purple;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            animation: changeColorButton 5s infinite alternate;
        }

        .button:last-child {
            margin-right: 0;
        }

        .button:hover {
            background-color: #FFA07A;
        }

        @keyframes changeColorButton {
            from {
                background-color: purple;
            }
            to {
                background-color: orange;
            }
        }

        /* Nuevos estilos para el botón de la esquina superior derecha */
        .corner-button-container {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .corner-button {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            color: white;
            background-color: purple;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            animation: changeColorCornerButton 5s infinite alternate;
        }

        .corner-button:hover {
            background-color: #7e6ebf;
        }

        @keyframes changeColorCornerButton {
            from {
                background-color: purple;
            }
            to {
                background-color: orange;
            }
        }
    </style>
</head>

<body>

    <div class="title">PASTELERIA</div>

    <div class="header">SANTA BARBARA</div>

    <img src="imagenes/inicioPas.jpg" alt="Logo de la pastelería"
        class="logo">

    <div class="button-container">
        <a href="inicioSesion" class="button">Iniciar Sesión</a>
        <a href="registro" class="button">Registro</a>
    </div>

    <!-- Nuevo botón en la esquina superior derecha -->
    <div class="corner-button-container">
        <a href="registroA" class="corner-button">Administrador</a>
    </div>

</body>

</html>
