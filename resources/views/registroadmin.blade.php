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
            background-image: url('imagenes/cubiRA.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Arial', sans-serif;
        }

        .cuadro-transparente {
            background-color: rgba(255, 255, 255, 0.5); /* Blanco con 50% de opacidad */
            padding: 150px; /* Aumenta el tamaño del cuadro */
            border-radius: 10px; /* Bordes redondeados */
            width: 90%; /* Ancho del cuadro al 80% de la ventana */
            max-width: 800px; /* Máximo ancho para evitar que el cuadro sea demasiado grande en pantallas anchas */
            margin-top: 50px; /* Margen superior para ajustar la posición */
        }

        .texto-central h1 {
            color: black; /* Cambia el color del texto "Registro" a negro */
        }

        .texto-central {
            text-align: center;
            color: white; /* Color del texto dentro del cuadro */
        }

        .campo-input {
            width: 100%;
            padding: 15px; /* Aumenta el tamaño del campo de entrada */
            margin: 15px 0; /* Aumenta el espacio alrededor del campo de entrada */
            box-sizing: border-box;
        }

        .boton-listo {
            background-color: black; /* Color de fondo del botón (negro) */
            color: white; /* Color del texto del botón (blanco) */
            padding: 15px; /* Aumenta el tamaño del botón */
            border: none; /* Sin borde */
            border-radius: 5px; /* Bordes redondeados */
            cursor: pointer;
            width: 100%;
            box-sizing: border-box;
        }

        /* Estilos para el enlace blanco debajo del botón */
        .enlace-iniciar-sesion {
            color: white;
            text-decoration: none;
            display: block; /* Hace que el enlace ocupe todo el ancho disponible */
            text-align: center; /* Centra el enlace */
            margin-top: 10px; /* Añade un margen superior para separar el botón del enlace */
            transition: color 0.3s; /* Agrega una transición suave al cambio de color */
        }

        .enlace-iniciar-sesion:hover {
            color: blue; /* Cambia el color del enlace a azul cuando se coloca el cursor sobre él */
        }
    </style>
</head>

<body>

<form action="{{ route('registrarAdmin') }}" method="POST" onsubmit="return validarFormulario()">
        @csrf
        <div class="texto-central cuadro-transparente">
            <h1>Crear cuenta</h1>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="campo-input">

            <label for="apellidos">Apellidos</label>
            <input type="text" id="apellidos" name="apellidos" class="campo-input">

            <label for="correo">Correo Electrónico</label>
            <input type="email" id="correo" name="correo" class="campo-input">

            <label for="contrasena">Contraseña</label>
            <input type="password" id="contrasena" name="contrasena" class="campo-input">

            <button type="submit" class="boton-listo">Registrarse</button>

            <!-- Enlace blanco debajo del botón -->
            <a href="inicioSesionA">Iniciar Sesión</a>

        </div>
    </form>


    <script>
        function validarFormulario() {
            var nombre = document.getElementById("nombre").value;
            var apellidos = document.getElementById("apellidos").value;
            var correo = document.getElementById("correo").value;
            var contrasena = document.getElementById("contrasena").value;

            if (nombre === "") {
                alert("Falta el nombre");
                return false;
            } else if (nombre.length > 30 || nombre.length < 2 || !/^[a-zA-Z]+$/.test(nombre)) {
                alert("El nombre debe tener entre 2 y 30 caracteres y solo contener letras.");
                return false;
            }

            if (apellidos === "") {
                alert("Falta el apellido");
                return false;
            } else if (apellidos.length > 30 || apellidos.length < 2 || !/^[a-zA-Z]+$/.test(apellidos)) {
                alert("El apellido debe tener entre 2 y 30 caracteres y solo contener letras.");
                return false;
            }

            var expresionR = /^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;
            if (!expresionR.test(correo)) {
                alert("Ingrese una dirección de correo electrónico válida");
                return false;
            }

            if (contrasena === "") {
                alert("Falta la contraseña");
                return false;
            } else if (contrasena.length < 8 || contrasena.length > 12) {
                alert("La contraseña debe tener entre 8 y 12 caracteres");
                return false;
            } else if (!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]+$/.test(contrasena)) {
                alert("La contraseña debe contener al menos una letra mayúscula, una letra minúscula, un número y un carácter especial(!@#$%^&*).");
                return false;
            }

            // Si todas las validaciones pasan, redirigir a otra vista
            window.location.href = "iniciosesionadmin";
        }
    </script>
</body>

</html>
