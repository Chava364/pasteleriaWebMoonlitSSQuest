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
            background-image: url('imagenes/wallhaven-g8kddl_1280x1024.png');
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
            width: 100%; /* Ancho del cuadro al 80% de la ventana */
            max-width: 800px; /* Máximo ancho para evitar que el cuadro sea demasiado grande en pantallas anchas */
        }

        .texto-central h1 {
            color: black; /* Cambia el color del texto "Inicio de sesión" a negro */
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
    </style>
</head>
<body>
        <div class="cuadro-transparente">
            <form action="{{ route('verificarInicioSesion') }}" method="POST" onsubmit="return validarFormulario()">
                @csrf 
                <div class="texto-central">
                    <h1>Inicio de sesión</h1>
                    <label for="correo">Correo Electrónico</label>
                    <input type="email" id="correo" name="correo" class="campo-input" required>

                    <label for="contrasena">Contraseña</label>
                    <input type="password" id="contrasena" name="contrasena" class="campo-input" required>

                    <button type="submit" class="boton-listo">Listo</button>
                </div>
            </form>
        </div>

    <script>
        function validarFormulario() {
            var correo = document.getElementById("correo").value;
            var contrasena = document.getElementById("contrasena").value;

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
            window.location.href = "principal";
        }
    </script>
</body>
</html>
